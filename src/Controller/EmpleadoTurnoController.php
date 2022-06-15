<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EmpleadoTurno Controller
 *
 * @method \App\Model\Entity\EmpleadoTurno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpleadoTurnoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $empleadoTurno = $this->paginate($this->EmpleadoTurno);

        $this->set(compact('empleadoTurno'));
    }

    /**
     * View method
     *
     * @param string|null $id Empleado Turno id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleadoTurno = $this->EmpleadoTurno->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('empleadoTurno'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleadoTurno = $this->EmpleadoTurno->newEmptyEntity();
        if ($this->request->is('post')) {
            $empleadoTurno = $this->EmpleadoTurno->patchEntity($empleadoTurno, $this->request->getData());
            if ($this->EmpleadoTurno->save($empleadoTurno)) {
                $this->Flash->success(__('The empleado turno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleado turno could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadoTurno'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empleado Turno id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleadoTurno = $this->EmpleadoTurno->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleadoTurno = $this->EmpleadoTurno->patchEntity($empleadoTurno, $this->request->getData());
            if ($this->EmpleadoTurno->save($empleadoTurno)) {
                $this->Flash->success(__('The empleado turno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleado turno could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadoTurno'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empleado Turno id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleadoTurno = $this->EmpleadoTurno->get($id);
        if ($this->EmpleadoTurno->delete($empleadoTurno)) {
            $this->Flash->success(__('The empleado turno has been deleted.'));
        } else {
            $this->Flash->error(__('The empleado turno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
