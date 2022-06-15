<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Referencia Controller
 *
 * @method \App\Model\Entity\Referencium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReferenciaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $referencia = $this->paginate($this->Referencia);

        $this->set(compact('referencia'));
    }

    /**
     * View method
     *
     * @param string|null $id Referencium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $referencium = $this->Referencia->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('referencium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $referencium = $this->Referencia->newEmptyEntity();
        if ($this->request->is('post')) {
            $referencium = $this->Referencia->patchEntity($referencium, $this->request->getData());
            if ($this->Referencia->save($referencium)) {
                $this->Flash->success(__('The referencium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The referencium could not be saved. Please, try again.'));
        }
        $this->set(compact('referencium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Referencium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $referencium = $this->Referencia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $referencium = $this->Referencia->patchEntity($referencium, $this->request->getData());
            if ($this->Referencia->save($referencium)) {
                $this->Flash->success(__('The referencium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The referencium could not be saved. Please, try again.'));
        }
        $this->set(compact('referencium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Referencium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $referencium = $this->Referencia->get($id);
        if ($this->Referencia->delete($referencium)) {
            $this->Flash->success(__('The referencium has been deleted.'));
        } else {
            $this->Flash->error(__('The referencium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
