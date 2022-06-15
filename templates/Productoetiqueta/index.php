<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $productoetiqueta
 */
?>
<div class="productoetiqueta index content">
    <?= $this->Html->link(__('New Productoetiquetum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productoetiqueta') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idProductoEtiqueta') ?></th>
                    <th><?= $this->Paginator->sort('idProducto') ?></th>
                    <th><?= $this->Paginator->sort('idEtiqueta') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productoetiqueta as $productoetiquetum): ?>
                <tr>
                    <td><?= $this->Number->format($productoetiquetum->idProductoEtiqueta) ?></td>
                    <td><?= $this->Number->format($productoetiquetum->idProducto) ?></td>
                    <td><?= $this->Number->format($productoetiquetum->idEtiqueta) ?></td>
                    <td><?= h($productoetiquetum->estatus) ?></td>
                    <td><?= $productoetiquetum->idUsuarioCrea === null ? '' : $this->Number->format($productoetiquetum->idUsuarioCrea) ?></td>
                    <td><?= h($productoetiquetum->fechaCrea) ?></td>
                    <td><?= $productoetiquetum->idUsuarioModifica === null ? '' : $this->Number->format($productoetiquetum->idUsuarioModifica) ?></td>
                    <td><?= h($productoetiquetum->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productoetiquetum->idProductoEtiqueta]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productoetiquetum->idProductoEtiqueta]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productoetiquetum->idProductoEtiqueta], ['confirm' => __('Are you sure you want to delete # {0}?', $productoetiquetum->idProductoEtiqueta)]) ?>
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
