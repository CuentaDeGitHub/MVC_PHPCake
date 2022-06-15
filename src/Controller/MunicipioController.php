<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Municipio Controller
 *
 * @method \App\Model\Entity\Municipio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MunicipioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $municipio = $this->paginate($this->Municipio);

        $this->set(compact('municipio'));
    }

    /**
     * View method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $municipio = $this->Municipio->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('municipio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipio = $this->Municipio->newEmptyEntity();
        if ($this->request->is('post')) {
            $municipio = $this->Municipio->patchEntity($municipio, $this->request->getData());
            if ($this->Municipio->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
        }
        $this->set(compact('municipio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $municipio = $this->Municipio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $municipio = $this->Municipio->patchEntity($municipio, $this->request->getData());
            if ($this->Municipio->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
        }
        $this->set(compact('municipio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $municipio = $this->Municipio->get($id);
        if ($this->Municipio->delete($municipio)) {
            $this->Flash->success(__('The municipio has been deleted.'));
        } else {
            $this->Flash->error(__('The municipio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
