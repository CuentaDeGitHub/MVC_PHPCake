<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $tipodeproveedor
 */
?>
<div class="tipodeproveedor index content">
    <?= $this->Html->link(__('New Tipodeproveedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipodeproveedor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoDeProveedor') ?></th>
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
                <?php foreach ($tipodeproveedor as $tipodeproveedor): ?>
                <tr>
                    <td><?= $this->Number->format($tipodeproveedor->idTipoDeProveedor) ?></td>
                    <td><?= h($tipodeproveedor->descripcion) ?></td>
                    <td><?= h($tipodeproveedor->estatus) ?></td>
                    <td><?= $tipodeproveedor->idUsuarioCrea === null ? '' : $this->Number->format($tipodeproveedor->idUsuarioCrea) ?></td>
                    <td><?= h($tipodeproveedor->fechaCrea) ?></td>
                    <td><?= $tipodeproveedor->idUsuarioModifica === null ? '' : $this->Number->format($tipodeproveedor->idUsuarioModifica) ?></td>
                    <td><?= h($tipodeproveedor->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipodeproveedor->idTipoDeProveedor]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipodeproveedor->idTipoDeProveedor]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipodeproveedor->idTipoDeProveedor], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodeproveedor->idTipoDeProveedor)]) ?>
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
