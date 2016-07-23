<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Collections Controller
 *
 * @property \App\Model\Table\CollectionsTable $Collections
 */
class CollectionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Machines']
        ];
        $collections = $this->paginate($this->Collections);

        $this->set(compact('collections'));
        $this->set('_serialize', ['collections']);
    }

    /**
     * View method
     *
     * @param string|null $id Collection id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $collection = $this->Collections->get($id, [
            'contain' => ['Clients', 'Machines']
        ]);

        $this->set('collection', $collection);
        $this->set('_serialize', ['collection']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $collection = $this->Collections->newEntity();
        if ($this->request->is('post')) {
            $collection = $this->Collections->patchEntity($collection, $this->request->data);
            if ($this->Collections->save($collection)) {
                $this->Flash->success(__('The collection has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The collection could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Collections->Clients->find('list', ['limit' => 200]);
        $machines = $this->Collections->Machines->find('list', ['limit' => 200]);
        $this->set(compact('collection', 'clients', 'machines'));
        $this->set('_serialize', ['collection']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Collection id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $collection = $this->Collections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $collection = $this->Collections->patchEntity($collection, $this->request->data);
            if ($this->Collections->save($collection)) {
                $this->Flash->success(__('The collection has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The collection could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Collections->Clients->find('list', ['limit' => 200]);
        $machines = $this->Collections->Machines->find('list', ['limit' => 200]);
        $this->set(compact('collection', 'clients', 'machines'));
        $this->set('_serialize', ['collection']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Collection id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $collection = $this->Collections->get($id);
        if ($this->Collections->delete($collection)) {
            $this->Flash->success(__('The collection has been deleted.'));
        } else {
            $this->Flash->error(__('The collection could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
