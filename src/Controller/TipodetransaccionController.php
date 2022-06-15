<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipodetransaccion Controller
 *
 * @method \App\Model\Entity\Tipodetransaccion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipodetransaccionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipodetransaccion = $this->paginate($this->Tipodetransaccion);

        $this->set(compact('tipodetransaccion'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipodetransaccion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipodetransaccion = $this->Tipodetransaccion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipodetransaccion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipodetransaccion = $this->Tipodetransaccion->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipodetransaccion = $this->Tipodetransaccion->patchEntity($tipodetransaccion, $this->request->getData());
            if ($this->Tipodetransaccion->save($tipodetransaccion)) {
                $this->Flash->success(__('The tipodetransaccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodetransaccion could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodetransaccion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipodetransaccion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipodetransaccion = $this->Tipodetransaccion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipodetransaccion = $this->Tipodetransaccion->patchEntity($tipodetransaccion, $this->request->getData());
            if ($this->Tipodetransaccion->save($tipodetransaccion)) {
                $this->Flash->success(__('The tipodetransaccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodetransaccion could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodetransaccion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipodetransaccion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipodetransaccion = $this->Tipodetransaccion->get($id);
        if ($this->Tipodetransaccion->delete($tipodetransaccion)) {
            $this->Flash->success(__('The tipodetransaccion has been deleted.'));
        } else {
            $this->Flash->error(__('The tipodetransaccion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
