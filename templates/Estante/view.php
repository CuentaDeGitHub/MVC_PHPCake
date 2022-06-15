<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $estante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estante'), ['action' => 'edit', $estante->idEstante], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estante'), ['action' => 'delete', $estante->idEstante], ['confirm' => __('Are you sure you want to delete # {0}?', $estante->idEstante), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estante view content">
            <h3><?= h($estante->idEstante) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($estante->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEstante') ?></th>
                    <td><?= $this->Number->format($estante->idEstante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $this->Number->format($estante->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Columna') ?></th>
                    <td><?= $this->Number->format($estante->columna) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fila') ?></th>
                    <td><?= $this->Number->format($estante->fila) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $estante->idUsuarioCrea === null ? '' : $this->Number->format($estante->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $estante->idUsuarioModifica === null ? '' : $this->Number->format($estante->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($estante->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($estante->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
