<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $transaccion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transaccion'), ['action' => 'edit', $transaccion->idTransaccion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transaccion'), ['action' => 'delete', $transaccion->idTransaccion], ['confirm' => __('Are you sure you want to delete # {0}?', $transaccion->idTransaccion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transaccion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transaccion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transaccion view content">
            <h3><?= h($transaccion->idTransaccion) ?></h3>
            <table>
                <tr>
                    <th><?= __('NumeroReferencia') ?></th>
                    <td><?= h($transaccion->numeroReferencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($transaccion->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTransaccion') ?></th>
                    <td><?= $this->Number->format($transaccion->idTransaccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto') ?></th>
                    <td><?= $this->Number->format($transaccion->monto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdMetodoDePago') ?></th>
                    <td><?= $this->Number->format($transaccion->idMetodoDePago) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdProducto') ?></th>
                    <td><?= $transaccion->idProducto === null ? '' : $this->Number->format($transaccion->idProducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdServicio') ?></th>
                    <td><?= $transaccion->idServicio === null ? '' : $this->Number->format($transaccion->idServicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($transaccion->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDeTransaccion') ?></th>
                    <td><?= $this->Number->format($transaccion->idTipoDeTransaccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $transaccion->idUsuarioCrea === null ? '' : $this->Number->format($transaccion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $transaccion->idUsuarioModifica === null ? '' : $this->Number->format($transaccion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($transaccion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($transaccion->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
