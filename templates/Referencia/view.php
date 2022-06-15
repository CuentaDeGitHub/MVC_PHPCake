<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $referencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Referencium'), ['action' => 'edit', $referencium->idReferencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Referencium'), ['action' => 'delete', $referencium->idReferencia], ['confirm' => __('Are you sure you want to delete # {0}?', $referencium->idReferencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Referencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Referencium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="referencia view content">
            <h3><?= h($referencium->idReferencia) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($referencium->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($referencium->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdReferencia') ?></th>
                    <td><?= $this->Number->format($referencium->idReferencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $referencium->idUsuarioCrea === null ? '' : $this->Number->format($referencium->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $referencium->idUsuarioModifica === null ? '' : $this->Number->format($referencium->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($referencium->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($referencium->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
