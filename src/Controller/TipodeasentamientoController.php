<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipodeasentamiento Controller
 *
 * @method \App\Model\Entity\Tipodeasentamiento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipodeasentamientoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipodeasentamiento = $this->paginate($this->Tipodeasentamiento);

        $this->set(compact('tipodeasentamiento'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipodeasentamiento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipodeasentamiento = $this->Tipodeasentamiento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipodeasentamiento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipodeasentamiento = $this->Tipodeasentamiento->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipodeasentamiento = $this->Tipodeasentamiento->patchEntity($tipodeasentamiento, $this->request->getData());
            if ($this->Tipodeasentamiento->save($tipodeasentamiento)) {
                $this->Flash->success(__('The tipodeasentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodeasentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodeasentamiento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipodeasentamiento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipodeasentamiento = $this->Tipodeasentamiento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipodeasentamiento = $this->Tipodeasentamiento->patchEntity($tipodeasentamiento, $this->request->getData());
            if ($this->Tipodeasentamiento->save($tipodeasentamiento)) {
                $this->Flash->success(__('The tipodeasentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodeasentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodeasentamiento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipodeasentamiento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipodeasentamiento = $this->Tipodeasentamiento->get($id);
        if ($this->Tipodeasentamiento->delete($tipodeasentamiento)) {
            $this->Flash->success(__('The tipodeasentamiento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipodeasentamiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
