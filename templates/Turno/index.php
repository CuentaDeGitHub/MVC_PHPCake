<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $turno
 */
?>
<div class="turno index content">
    <?= $this->Html->link(__('New Turno'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Turno') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTurno') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($turno as $turno): ?>
                <tr>
                    <td><?= $this->Number->format($turno->idTurno) ?></td>
                    <td><?= h($turno->descripcion) ?></td>
                    <td><?= h($turno->estatus) ?></td>
                    <td><?= $turno->idUsuarioCrea === null ? '' : $this->Number->format($turno->idUsuarioCrea) ?></td>
                    <td><?= h($turno->fechaCrea) ?></td>
                    <td><?= $turno->idUsuarioModifica === null ? '' : $this->Number->format($turno->idUsuarioModifica) ?></td>
                    <td><?= h($turno->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $turno->idTurno]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $turno->idTurno]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turno->idTurno], ['confirm' => __('Are you sure you want to delete # {0}?', $turno->idTurno)]) ?>
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
