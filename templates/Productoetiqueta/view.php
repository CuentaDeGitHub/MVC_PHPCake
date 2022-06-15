<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $productoetiquetum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Productoetiquetum'), ['action' => 'edit', $productoetiquetum->idProductoEtiqueta], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Productoetiquetum'), ['action' => 'delete', $productoetiquetum->idProductoEtiqueta], ['confirm' => __('Are you sure you want to delete # {0}?', $productoetiquetum->idProductoEtiqueta), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productoetiqueta'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Productoetiquetum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productoetiqueta view content">
            <h3><?= h($productoetiquetum->idProductoEtiqueta) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($productoetiquetum->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdProductoEtiqueta') ?></th>
                    <td><?= $this->Number->format($productoetiquetum->idProductoEtiqueta) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdProducto') ?></th>
                    <td><?= $this->Number->format($productoetiquetum->idProducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEtiqueta') ?></th>
                    <td><?= $this->Number->format($productoetiquetum->idEtiqueta) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $productoetiquetum->idUsuarioCrea === null ? '' : $this->Number->format($productoetiquetum->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $productoetiquetum->idUsuarioModifica === null ? '' : $this->Number->format($productoetiquetum->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($productoetiquetum->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($productoetiquetum->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
