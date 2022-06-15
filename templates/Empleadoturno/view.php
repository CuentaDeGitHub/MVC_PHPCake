<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $empleadoturno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empleadoturno'), ['action' => 'edit', $empleadoturno->idEmpleadoTurno], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empleadoturno'), ['action' => 'delete', $empleadoturno->idEmpleadoTurno], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoturno->idEmpleadoTurno), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empleadoturno'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empleadoturno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadoturno view content">
            <h3><?= h($empleadoturno->idEmpleadoTurno) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($empleadoturno->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleadoTurno') ?></th>
                    <td><?= $this->Number->format($empleadoturno->idEmpleadoTurno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($empleadoturno->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTurno') ?></th>
                    <td><?= $this->Number->format($empleadoturno->idTurno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $empleadoturno->idUsuarioCrea === null ? '' : $this->Number->format($empleadoturno->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $empleadoturno->idUsuarioModifica === null ? '' : $this->Number->format($empleadoturno->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaInicio') ?></th>
                    <td><?= h($empleadoturno->fechaInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaFinal') ?></th>
                    <td><?= h($empleadoturno->fechaFinal) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($empleadoturno->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($empleadoturno->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
