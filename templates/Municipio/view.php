<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $municipio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Municipio'), ['action' => 'edit', $municipio->idMunicipio], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Municipio'), ['action' => 'delete', $municipio->idMunicipio], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->idMunicipio), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Municipio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Municipio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="municipio view content">
            <h3><?= h($municipio->idMunicipio) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($municipio->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($municipio->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($municipio->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdMunicipio') ?></th>
                    <td><?= $this->Number->format($municipio->idMunicipio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEstado') ?></th>
                    <td><?= $this->Number->format($municipio->idEstado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $municipio->idUsuarioCrea === null ? '' : $this->Number->format($municipio->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $municipio->idUsuarioModifica === null ? '' : $this->Number->format($municipio->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($municipio->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($municipio->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
