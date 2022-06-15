<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Estudios Controller
 *
 * @method \App\Model\Entity\Estudio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstudiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $estudios = $this->paginate($this->Estudios);

        $this->set(compact('estudios'));
    }

    /**
     * View method
     *
     * @param string|null $id Estudio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estudio = $this->Estudios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('estudio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estudio = $this->Estudios->newEmptyEntity();
        if ($this->request->is('post')) {
            $estudio = $this->Estudios->patchEntity($estudio, $this->request->getData());
            if ($this->Estudios->save($estudio)) {
                $this->Flash->success(__('The estudio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estudio could not be saved. Please, try again.'));
        }
        $this->set(compact('estudio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estudio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estudio = $this->Estudios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estudio = $this->Estudios->patchEntity($estudio, $this->request->getData());
            if ($this->Estudios->save($estudio)) {
                $this->Flash->success(__('The estudio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estudio could not be saved. Please, try again.'));
        }
        $this->set(compact('estudio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estudio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estudio = $this->Estudios->get($id);
        if ($this->Estudios->delete($estudio)) {
            $this->Flash->success(__('The estudio has been deleted.'));
        } else {
            $this->Flash->error(__('The estudio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
