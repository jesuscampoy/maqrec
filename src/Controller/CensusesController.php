<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Censuses Controller
 *
 * @property \App\Model\Table\CensusesTable $Censuses
 */
class CensusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Areas']
        ];
        $censuses = $this->paginate($this->Censuses);

        $this->set(compact('censuses'));
        $this->set('_serialize', ['censuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Census id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $census = $this->Censuses->get($id, [
            'contain' => ['Areas']
        ]);

        $this->set('census', $census);
        $this->set('_serialize', ['census']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $census = $this->Censuses->newEntity();
        if ($this->request->is('post')) {
            $census = $this->Censuses->patchEntity($census, $this->request->data);
            if ($this->Censuses->save($census)) {
                $this->Flash->success(__('The census has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The census could not be saved. Please, try again.'));
            }
        }
        $areas = $this->Censuses->Areas->find('list', ['limit' => 200]);
        $this->set(compact('census', 'areas'));
        $this->set('_serialize', ['census']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Census id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $census = $this->Censuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $census = $this->Censuses->patchEntity($census, $this->request->data);
            if ($this->Censuses->save($census)) {
                $this->Flash->success(__('The census has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The census could not be saved. Please, try again.'));
            }
        }
        $areas = $this->Censuses->Areas->find('list', ['limit' => 200]);
        $this->set(compact('census', 'areas'));
        $this->set('_serialize', ['census']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Census id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $census = $this->Censuses->get($id);
        if ($this->Censuses->delete($census)) {
            $this->Flash->success(__('The census has been deleted.'));
        } else {
            $this->Flash->error(__('The census could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
