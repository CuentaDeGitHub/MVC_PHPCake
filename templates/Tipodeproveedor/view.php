<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $tipodeproveedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipodeproveedor'), ['action' => 'edit', $tipodeproveedor->idTipoDeProveedor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipodeproveedor'), ['action' => 'delete', $tipodeproveedor->idTipoDeProveedor], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodeproveedor->idTipoDeProveedor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipodeproveedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipodeproveedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipodeproveedor view content">
            <h3><?= h($tipodeproveedor->idTipoDeProveedor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($tipodeproveedor->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipodeproveedor->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDeProveedor') ?></th>
                    <td><?= $this->Number->format($tipodeproveedor->idTipoDeProveedor) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipodeproveedor->idUsuarioCrea === null ? '' : $this->Number->format($tipodeproveedor->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipodeproveedor->idUsuarioModifica === null ? '' : $this->Number->format($tipodeproveedor->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipodeproveedor->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipodeproveedor->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
