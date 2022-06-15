<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $estado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->idEstado], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->idEstado], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->idEstado), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estado view content">
            <h3><?= h($estado->idEstado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($estado->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($estado->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($estado->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEstado') ?></th>
                    <td><?= $this->Number->format($estado->idEstado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $estado->idUsuarioCrea === null ? '' : $this->Number->format($estado->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $estado->idUsuarioModifica === null ? '' : $this->Number->format($estado->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($estado->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($estado->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
