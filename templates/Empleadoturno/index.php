<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $empleadoturno
 */
?>
<div class="empleadoturno index content">
    <?= $this->Html->link(__('New Empleadoturno'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleadoturno') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEmpleadoTurno') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idTurno') ?></th>
                    <th><?= $this->Paginator->sort('fechaInicio') ?></th>
                    <th><?= $this->Paginator->sort('fechaFinal') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleadoturno as $empleadoturno): ?>
                <tr>
                    <td><?= $this->Number->format($empleadoturno->idEmpleadoTurno) ?></td>
                    <td><?= $this->Number->format($empleadoturno->idEmpleado) ?></td>
                    <td><?= $this->Number->format($empleadoturno->idTurno) ?></td>
                    <td><?= h($empleadoturno->fechaInicio) ?></td>
                    <td><?= h($empleadoturno->fechaFinal) ?></td>
                    <td><?= h($empleadoturno->estatus) ?></td>
                    <td><?= $empleadoturno->idUsuarioCrea === null ? '' : $this->Number->format($empleadoturno->idUsuarioCrea) ?></td>
                    <td><?= h($empleadoturno->fechaCrea) ?></td>
                    <td><?= $empleadoturno->idUsuarioModifica === null ? '' : $this->Number->format($empleadoturno->idUsuarioModifica) ?></td>
                    <td><?= h($empleadoturno->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empleadoturno->idEmpleadoTurno]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empleadoturno->idEmpleadoTurno]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empleadoturno->idEmpleadoTurno], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoturno->idEmpleadoTurno)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
