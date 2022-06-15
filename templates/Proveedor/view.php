<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $proveedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->idProveedor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->idProveedor], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->idProveedor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Proveedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Proveedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedor view content">
            <h3><?= h($proveedor->idProveedor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($proveedor->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($proveedor->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdProveedor') ?></th>
                    <td><?= $this->Number->format($proveedor->idProveedor) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDeProveedor') ?></th>
                    <td><?= $this->Number->format($proveedor->idTipoDeProveedor) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $proveedor->idUsuarioCrea === null ? '' : $this->Number->format($proveedor->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $proveedor->idUsuarioModifica === null ? '' : $this->Number->format($proveedor->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($proveedor->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($proveedor->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
