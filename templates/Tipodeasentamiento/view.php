<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $tipodeasentamiento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipodeasentamiento'), ['action' => 'edit', $tipodeasentamiento->idTipoDeAsentamiento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipodeasentamiento'), ['action' => 'delete', $tipodeasentamiento->idTipoDeAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodeasentamiento->idTipoDeAsentamiento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipodeasentamiento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipodeasentamiento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipodeasentamiento view content">
            <h3><?= h($tipodeasentamiento->idTipoDeAsentamiento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($tipodeasentamiento->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($tipodeasentamiento->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipodeasentamiento->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDeAsentamiento') ?></th>
                    <td><?= $this->Number->format($tipodeasentamiento->idTipoDeAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipodeasentamiento->idUsuarioCrea === null ? '' : $this->Number->format($tipodeasentamiento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipodeasentamiento->idUsuarioModifica === null ? '' : $this->Number->format($tipodeasentamiento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipodeasentamiento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipodeasentamiento->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
