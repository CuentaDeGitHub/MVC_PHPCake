<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Etiqueta Controller
 *
 * @method \App\Model\Entity\Etiquetum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EtiquetaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $etiqueta = $this->paginate($this->Etiqueta);

        $this->set(compact('etiqueta'));
    }

    /**
     * View method
     *
     * @param string|null $id Etiquetum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etiquetum = $this->Etiqueta->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('etiquetum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etiquetum = $this->Etiqueta->newEmptyEntity();
        if ($this->request->is('post')) {
            $etiquetum = $this->Etiqueta->patchEntity($etiquetum, $this->request->getData());
            if ($this->Etiqueta->save($etiquetum)) {
                $this->Flash->success(__('The etiquetum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etiquetum could not be saved. Please, try again.'));
        }
        $this->set(compact('etiquetum'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Etiquetum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etiquetum = $this->Etiqueta->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etiquetum = $this->Etiqueta->patchEntity($etiquetum, $this->request->getData());
            if ($this->Etiqueta->save($etiquetum)) {
                $this->Flash->success(__('The etiquetum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etiquetum could not be saved. Please, try again.'));
        }
        $this->set(compact('etiquetum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Etiquetum id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etiquetum = $this->Etiqueta->get($id);
        if ($this->Etiqueta->delete($etiquetum)) {
            $this->Flash->success(__('The etiquetum has been deleted.'));
        } else {
            $this->Flash->error(__('The etiquetum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
