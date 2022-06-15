<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $turno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Turno'), ['action' => 'edit', $turno->idTurno], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Turno'), ['action' => 'delete', $turno->idTurno], ['confirm' => __('Are you sure you want to delete # {0}?', $turno->idTurno), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Turno'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Turno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="turno view content">
            <h3><?= h($turno->idTurno) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($turno->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($turno->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTurno') ?></th>
                    <td><?= $this->Number->format($turno->idTurno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $turno->idUsuarioCrea === null ? '' : $this->Number->format($turno->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $turno->idUsuarioModifica === null ? '' : $this->Number->format($turno->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($turno->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($turno->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
