<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $estudio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estudio'), ['action' => 'edit', $estudio->idEstudios], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estudio'), ['action' => 'delete', $estudio->idEstudios], ['confirm' => __('Are you sure you want to delete # {0}?', $estudio->idEstudios), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estudios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estudio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estudios view content">
            <h3><?= h($estudio->idEstudios) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($estudio->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($estudio->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEstudios') ?></th>
                    <td><?= $this->Number->format($estudio->idEstudios) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $estudio->idUsuarioCrea === null ? '' : $this->Number->format($estudio->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $estudio->idUsuarioModifica === null ? '' : $this->Number->format($estudio->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($estudio->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($estudio->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
