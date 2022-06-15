<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Nacionalidad Controller
 *
 * @method \App\Model\Entity\Nacionalidad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NacionalidadController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $nacionalidad = $this->paginate($this->Nacionalidad);

        $this->set(compact('nacionalidad'));
    }

    /**
     * View method
     *
     * @param string|null $id Nacionalidad id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nacionalidad = $this->Nacionalidad->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('nacionalidad'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nacionalidad = $this->Nacionalidad->newEmptyEntity();
        if ($this->request->is('post')) {
            $nacionalidad = $this->Nacionalidad->patchEntity($nacionalidad, $this->request->getData());
            if ($this->Nacionalidad->save($nacionalidad)) {
                $this->Flash->success(__('The nacionalidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nacionalidad could not be saved. Please, try again.'));
        }
        $this->set(compact('nacionalidad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nacionalidad id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nacionalidad = $this->Nacionalidad->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nacionalidad = $this->Nacionalidad->patchEntity($nacionalidad, $this->request->getData());
            if ($this->Nacionalidad->save($nacionalidad)) {
                $this->Flash->success(__('The nacionalidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nacionalidad could not be saved. Please, try again.'));
        }
        $this->set(compact('nacionalidad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nacionalidad id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nacionalidad = $this->Nacionalidad->get($id);
        if ($this->Nacionalidad->delete($nacionalidad)) {
            $this->Flash->success(__('The nacionalidad has been deleted.'));
        } else {
            $this->Flash->error(__('The nacionalidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
