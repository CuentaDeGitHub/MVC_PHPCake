<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Metododepago Controller
 *
 * @method \App\Model\Entity\Metododepago[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MetododepagoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $metododepago = $this->paginate($this->Metododepago);

        $this->set(compact('metododepago'));
    }

    /**
     * View method
     *
     * @param string|null $id Metododepago id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $metododepago = $this->Metododepago->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('metododepago'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $metododepago = $this->Metododepago->newEmptyEntity();
        if ($this->request->is('post')) {
            $metododepago = $this->Metododepago->patchEntity($metododepago, $this->request->getData());
            if ($this->Metododepago->save($metododepago)) {
                $this->Flash->success(__('The metododepago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The metododepago could not be saved. Please, try again.'));
        }
        $this->set(compact('metododepago'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Metododepago id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $metododepago = $this->Metododepago->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $metododepago = $this->Metododepago->patchEntity($metododepago, $this->request->getData());
            if ($this->Metododepago->save($metododepago)) {
                $this->Flash->success(__('The metododepago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The metododepago could not be saved. Please, try again.'));
        }
        $this->set(compact('metododepago'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Metododepago id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $metododepago = $this->Metododepago->get($id);
        if ($this->Metododepago->delete($metododepago)) {
            $this->Flash->success(__('The metododepago has been deleted.'));
        } else {
            $this->Flash->error(__('The metododepago could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
