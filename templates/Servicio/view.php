<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $servicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Servicio'), ['action' => 'edit', $servicio->idServicio], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Servicio'), ['action' => 'delete', $servicio->idServicio], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->idServicio), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Servicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Servicio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servicio view content">
            <h3><?= h($servicio->idServicio) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($servicio->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($servicio->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdServicio') ?></th>
                    <td><?= $this->Number->format($servicio->idServicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdReferencia') ?></th>
                    <td><?= $this->Number->format($servicio->idReferencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comision') ?></th>
                    <td><?= $servicio->comision === null ? '' : $this->Number->format($servicio->comision) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $servicio->idUsuarioCrea === null ? '' : $this->Number->format($servicio->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $servicio->idUsuarioModifica === null ? '' : $this->Number->format($servicio->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($servicio->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($servicio->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
