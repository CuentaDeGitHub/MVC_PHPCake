<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->idProducto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->idProducto], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->idProducto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Producto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto view content">
            <h3><?= h($producto->idProducto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($producto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($producto->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdProducto') ?></th>
                    <td><?= $this->Number->format($producto->idProducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($producto->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($producto->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdMarca') ?></th>
                    <td><?= $this->Number->format($producto->idMarca) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdProveedor') ?></th>
                    <td><?= $this->Number->format($producto->idProveedor) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEstante') ?></th>
                    <td><?= $this->Number->format($producto->idEstante) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDeProducto') ?></th>
                    <td><?= $this->Number->format($producto->idTipoDeProducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $producto->idUsuarioCrea === null ? '' : $this->Number->format($producto->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $producto->idUsuarioModifica === null ? '' : $this->Number->format($producto->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($producto->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($producto->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
