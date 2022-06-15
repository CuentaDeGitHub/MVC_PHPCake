<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Productoetiqueta Controller
 *
 * @method \App\Model\Entity\Productoetiquetum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoetiquetaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productoetiqueta = $this->paginate($this->Productoetiqueta);

        $this->set(compact('productoetiqueta'));
    }

    /**
     * View method
     *
     * @param string|null $id Productoetiquetum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productoetiquetum = $this->Productoetiqueta->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productoetiquetum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productoetiquetum = $this->Productoetiqueta->newEmptyEntity();
        if ($this->request->is('post')) {
            $productoetiquetum = $this->Productoetiqueta->patchEntity($productoetiquetum, $this->request->getData());
            if ($this->Productoetiqueta->save($productoetiquetum)) {
                $this->Flash->success(__('The productoetiquetum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productoetiquetum could not be saved. Please, try again.'));
        }
        $this->set(compact('productoetiquetum'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Productoetiquetum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productoetiquetum = $this->Productoetiqueta->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productoetiquetum = $this->Productoetiqueta->patchEntity($productoetiquetum, $this->request->getData());
            if ($this->Productoetiqueta->save($productoetiquetum)) {
                $this->Flash->success(__('The productoetiquetum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productoetiquetum could not be saved. Please, try again.'));
        }
        $this->set(compact('productoetiquetum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Productoetiquetum id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productoetiquetum = $this->Productoetiqueta->get($id);
        if ($this->Productoetiqueta->delete($productoetiquetum)) {
            $this->Flash->success(__('The productoetiquetum has been deleted.'));
        } else {
            $this->Flash->error(__('The productoetiquetum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
