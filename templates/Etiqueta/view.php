<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $etiquetum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Etiquetum'), ['action' => 'edit', $etiquetum->idEtiqueta], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Etiquetum'), ['action' => 'delete', $etiquetum->idEtiqueta], ['confirm' => __('Are you sure you want to delete # {0}?', $etiquetum->idEtiqueta), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Etiqueta'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Etiquetum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="etiqueta view content">
            <h3><?= h($etiquetum->idEtiqueta) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($etiquetum->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($etiquetum->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($etiquetum->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEtiqueta') ?></th>
                    <td><?= $this->Number->format($etiquetum->idEtiqueta) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $etiquetum->idUsuarioCrea === null ? '' : $this->Number->format($etiquetum->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $etiquetum->idUsuarioModifica === null ? '' : $this->Number->format($etiquetum->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($etiquetum->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($etiquetum->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
