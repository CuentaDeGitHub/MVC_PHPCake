<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Estante Controller
 *
 * @method \App\Model\Entity\Estante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstanteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $estante = $this->paginate($this->Estante);

        $this->set(compact('estante'));
    }

    /**
     * View method
     *
     * @param string|null $id Estante id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estante = $this->Estante->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('estante'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estante = $this->Estante->newEmptyEntity();
        if ($this->request->is('post')) {
            $estante = $this->Estante->patchEntity($estante, $this->request->getData());
            if ($this->Estante->save($estante)) {
                $this->Flash->success(__('The estante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estante could not be saved. Please, try again.'));
        }
        $this->set(compact('estante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estante id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estante = $this->Estante->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estante = $this->Estante->patchEntity($estante, $this->request->getData());
            if ($this->Estante->save($estante)) {
                $this->Flash->success(__('The estante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estante could not be saved. Please, try again.'));
        }
        $this->set(compact('estante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estante id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estante = $this->Estante->get($id);
        if ($this->Estante->delete($estante)) {
            $this->Flash->success(__('The estante has been deleted.'));
        } else {
            $this->Flash->error(__('The estante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
