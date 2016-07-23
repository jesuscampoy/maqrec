<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Refunds Controller
 *
 * @property \App\Model\Table\RefundsTable $Refunds
 */
class RefundsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $refunds = $this->paginate($this->Refunds);

        $this->set(compact('refunds'));
        $this->set('_serialize', ['refunds']);
    }

    /**
     * View method
     *
     * @param string|null $id Refund id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $refund = $this->Refunds->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('refund', $refund);
        $this->set('_serialize', ['refund']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $refund = $this->Refunds->newEntity();
        if ($this->request->is('post')) {
            $refund = $this->Refunds->patchEntity($refund, $this->request->data);
            if ($this->Refunds->save($refund)) {
                $this->Flash->success(__('The refund has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The refund could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Refunds->Clients->find('list', ['limit' => 200]);
        $this->set(compact('refund', 'clients'));
        $this->set('_serialize', ['refund']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Refund id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $refund = $this->Refunds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $refund = $this->Refunds->patchEntity($refund, $this->request->data);
            if ($this->Refunds->save($refund)) {
                $this->Flash->success(__('The refund has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The refund could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Refunds->Clients->find('list', ['limit' => 200]);
        $this->set(compact('refund', 'clients'));
        $this->set('_serialize', ['refund']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Refund id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $refund = $this->Refunds->get($id);
        if ($this->Refunds->delete($refund)) {
            $this->Flash->success(__('The refund has been deleted.'));
        } else {
            $this->Flash->error(__('The refund could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
