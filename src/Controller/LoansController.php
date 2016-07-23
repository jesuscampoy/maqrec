<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Loans Controller
 *
 * @property \App\Model\Table\LoansTable $Loans
 */
class LoansController extends AppController
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
        $loans = $this->paginate($this->Loans);

        $this->set(compact('loans'));
        $this->set('_serialize', ['loans']);
    }

    /**
     * View method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $loan = $this->Loans->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('loan', $loan);
        $this->set('_serialize', ['loan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loan = $this->Loans->newEntity();
        if ($this->request->is('post')) {
            $loan = $this->Loans->patchEntity($loan, $this->request->data);
            if ($this->Loans->save($loan)) {
                $this->Flash->success(__('The loan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The loan could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Loans->Clients->find('list', ['limit' => 200]);
        $this->set(compact('loan', 'clients'));
        $this->set('_serialize', ['loan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $loan = $this->Loans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loan = $this->Loans->patchEntity($loan, $this->request->data);
            if ($this->Loans->save($loan)) {
                $this->Flash->success(__('The loan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The loan could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Loans->Clients->find('list', ['limit' => 200]);
        $this->set(compact('loan', 'clients'));
        $this->set('_serialize', ['loan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loan = $this->Loans->get($id);
        if ($this->Loans->delete($loan)) {
            $this->Flash->success(__('The loan has been deleted.'));
        } else {
            $this->Flash->error(__('The loan could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
