<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $proveedor
 */
?>
<div class="proveedor index content">
    <?= $this->Html->link(__('New Proveedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proveedor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idProveedor') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('idTipoDeProveedor') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proveedor as $proveedor): ?>
                <tr>
                    <td><?= $this->Number->format($proveedor->idProveedor) ?></td>
                    <td><?= h($proveedor->nombre) ?></td>
                    <td><?= $this->Number->format($proveedor->idTipoDeProveedor) ?></td>
                    <td><?= h($proveedor->estatus) ?></td>
                    <td><?= $proveedor->idUsuarioCrea === null ? '' : $this->Number->format($proveedor->idUsuarioCrea) ?></td>
                    <td><?= h($proveedor->fechaCrea) ?></td>
                    <td><?= $proveedor->idUsuarioModifica === null ? '' : $this->Number->format($proveedor->idUsuarioModifica) ?></td>
                    <td><?= h($proveedor->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proveedor->idProveedor]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedor->idProveedor]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedor->idProveedor], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->idProveedor)]) ?>
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
