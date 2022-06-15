<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Transaccion Controller
 *
 * @method \App\Model\Entity\Transaccion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransaccionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $transaccion = $this->paginate($this->Transaccion);

        $this->set(compact('transaccion'));
    }

    /**
     * View method
     *
     * @param string|null $id Transaccion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transaccion = $this->Transaccion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('transaccion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transaccion = $this->Transaccion->newEmptyEntity();
        if ($this->request->is('post')) {
            $transaccion = $this->Transaccion->patchEntity($transaccion, $this->request->getData());
            if ($this->Transaccion->save($transaccion)) {
                $this->Flash->success(__('The transaccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transaccion could not be saved. Please, try again.'));
        }
        $this->set(compact('transaccion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transaccion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transaccion = $this->Transaccion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transaccion = $this->Transaccion->patchEntity($transaccion, $this->request->getData());
            if ($this->Transaccion->save($transaccion)) {
                $this->Flash->success(__('The transaccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transaccion could not be saved. Please, try again.'));
        }
        $this->set(compact('transaccion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaccion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transaccion = $this->Transaccion->get($id);
        if ($this->Transaccion->delete($transaccion)) {
            $this->Flash->success(__('The transaccion has been deleted.'));
        } else {
            $this->Flash->error(__('The transaccion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
