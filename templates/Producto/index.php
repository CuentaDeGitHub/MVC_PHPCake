<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $producto
 */
?>
<div class="producto index content">
    <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Producto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idProducto') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('idMarca') ?></th>
                    <th><?= $this->Paginator->sort('idProveedor') ?></th>
                    <th><?= $this->Paginator->sort('idEstante') ?></th>
                    <th><?= $this->Paginator->sort('idTipoDeProducto') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($producto as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->idProducto) ?></td>
                    <td><?= h($producto->nombre) ?></td>
                    <td><?= $this->Number->format($producto->cantidad) ?></td>
                    <td><?= $this->Number->format($producto->precio) ?></td>
                    <td><?= $this->Number->format($producto->idMarca) ?></td>
                    <td><?= $this->Number->format($producto->idProveedor) ?></td>
                    <td><?= $this->Number->format($producto->idEstante) ?></td>
                    <td><?= $this->Number->format($producto->idTipoDeProducto) ?></td>
                    <td><?= h($producto->estatus) ?></td>
                    <td><?= $producto->idUsuarioCrea === null ? '' : $this->Number->format($producto->idUsuarioCrea) ?></td>
                    <td><?= h($producto->fechaCrea) ?></td>
                    <td><?= $producto->idUsuarioModifica === null ? '' : $this->Number->format($producto->idUsuarioModifica) ?></td>
                    <td><?= h($producto->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $producto->idProducto]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->idProducto]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->idProducto], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->idProducto)]) ?>
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
