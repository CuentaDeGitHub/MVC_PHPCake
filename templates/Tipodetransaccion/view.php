<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $tipodetransaccion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipodetransaccion'), ['action' => 'edit', $tipodetransaccion->idTipoDeTransaccion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipodetransaccion'), ['action' => 'delete', $tipodetransaccion->idTipoDeTransaccion], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodetransaccion->idTipoDeTransaccion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipodetransaccion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipodetransaccion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipodetransaccion view content">
            <h3><?= h($tipodetransaccion->idTipoDeTransaccion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($tipodetransaccion->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipodetransaccion->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDeTransaccion') ?></th>
                    <td><?= $this->Number->format($tipodetransaccion->idTipoDeTransaccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipodetransaccion->idUsuarioCrea === null ? '' : $this->Number->format($tipodetransaccion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipodetransaccion->idUsuarioModifica === null ? '' : $this->Number->format($tipodetransaccion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipodetransaccion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipodetransaccion->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
