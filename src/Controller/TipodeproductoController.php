<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipodeproducto Controller
 *
 * @method \App\Model\Entity\Tipodeproducto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipodeproductoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipodeproducto = $this->paginate($this->Tipodeproducto);

        $this->set(compact('tipodeproducto'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipodeproducto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipodeproducto = $this->Tipodeproducto->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipodeproducto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipodeproducto = $this->Tipodeproducto->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipodeproducto = $this->Tipodeproducto->patchEntity($tipodeproducto, $this->request->getData());
            if ($this->Tipodeproducto->save($tipodeproducto)) {
                $this->Flash->success(__('The tipodeproducto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodeproducto could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodeproducto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipodeproducto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipodeproducto = $this->Tipodeproducto->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipodeproducto = $this->Tipodeproducto->patchEntity($tipodeproducto, $this->request->getData());
            if ($this->Tipodeproducto->save($tipodeproducto)) {
                $this->Flash->success(__('The tipodeproducto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodeproducto could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodeproducto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipodeproducto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipodeproducto = $this->Tipodeproducto->get($id);
        if ($this->Tipodeproducto->delete($tipodeproducto)) {
            $this->Flash->success(__('The tipodeproducto has been deleted.'));
        } else {
            $this->Flash->error(__('The tipodeproducto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
