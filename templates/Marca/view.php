<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $marca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Marca'), ['action' => 'edit', $marca->idMarca], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Marca'), ['action' => 'delete', $marca->idMarca], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->idMarca), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Marca'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Marca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marca view content">
            <h3><?= h($marca->idMarca) ?></h3>
            <table>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($marca->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($marca->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdMarca') ?></th>
                    <td><?= $this->Number->format($marca->idMarca) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $marca->idUsuarioCrea === null ? '' : $this->Number->format($marca->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $marca->idUsuarioModifica === null ? '' : $this->Number->format($marca->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($marca->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($marca->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
