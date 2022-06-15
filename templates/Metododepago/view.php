<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $metododepago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Metododepago'), ['action' => 'edit', $metododepago->idMetodoDePago], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Metododepago'), ['action' => 'delete', $metododepago->idMetodoDePago], ['confirm' => __('Are you sure you want to delete # {0}?', $metododepago->idMetodoDePago), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Metododepago'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Metododepago'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="metododepago view content">
            <h3><?= h($metododepago->idMetodoDePago) ?></h3>
            <table>
                <tr>
                    <th><?= __('Metodo') ?></th>
                    <td><?= h($metododepago->metodo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($metododepago->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdMetodoDePago') ?></th>
                    <td><?= $this->Number->format($metododepago->idMetodoDePago) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $metododepago->idUsuarioCrea === null ? '' : $this->Number->format($metododepago->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $metododepago->idUsuarioModifica === null ? '' : $this->Number->format($metododepago->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($metododepago->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($metododepago->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
