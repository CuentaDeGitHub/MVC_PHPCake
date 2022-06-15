<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $tipodeproducto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipodeproducto'), ['action' => 'edit', $tipodeproducto->idTipoDeProducto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipodeproducto'), ['action' => 'delete', $tipodeproducto->idTipoDeProducto], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodeproducto->idTipoDeProducto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipodeproducto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipodeproducto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipodeproducto view content">
            <h3><?= h($tipodeproducto->idTipoDeProducto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($tipodeproducto->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipodeproducto->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDeProducto') ?></th>
                    <td><?= $this->Number->format($tipodeproducto->idTipoDeProducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipodeproducto->idUsuarioCrea === null ? '' : $this->Number->format($tipodeproducto->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipodeproducto->idUsuarioModifica === null ? '' : $this->Number->format($tipodeproducto->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipodeproducto->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipodeproducto->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
