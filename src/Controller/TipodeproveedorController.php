<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipodeproveedor Controller
 *
 * @method \App\Model\Entity\Tipodeproveedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipodeproveedorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipodeproveedor = $this->paginate($this->Tipodeproveedor);

        $this->set(compact('tipodeproveedor'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipodeproveedor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipodeproveedor = $this->Tipodeproveedor->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipodeproveedor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipodeproveedor = $this->Tipodeproveedor->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipodeproveedor = $this->Tipodeproveedor->patchEntity($tipodeproveedor, $this->request->getData());
            if ($this->Tipodeproveedor->save($tipodeproveedor)) {
                $this->Flash->success(__('The tipodeproveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodeproveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodeproveedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipodeproveedor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipodeproveedor = $this->Tipodeproveedor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipodeproveedor = $this->Tipodeproveedor->patchEntity($tipodeproveedor, $this->request->getData());
            if ($this->Tipodeproveedor->save($tipodeproveedor)) {
                $this->Flash->success(__('The tipodeproveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodeproveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodeproveedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipodeproveedor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipodeproveedor = $this->Tipodeproveedor->get($id);
        if ($this->Tipodeproveedor->delete($tipodeproveedor)) {
            $this->Flash->success(__('The tipodeproveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The tipodeproveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
