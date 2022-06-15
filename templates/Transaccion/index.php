<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $transaccion
 */
?>
<div class="transaccion index content">
    <?= $this->Html->link(__('New Transaccion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transaccion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTransaccion') ?></th>
                    <th><?= $this->Paginator->sort('monto') ?></th>
                    <th><?= $this->Paginator->sort('idMetodoDePago') ?></th>
                    <th><?= $this->Paginator->sort('idProducto') ?></th>
                    <th><?= $this->Paginator->sort('idServicio') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idTipoDeTransaccion') ?></th>
                    <th><?= $this->Paginator->sort('numeroReferencia') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaccion as $transaccion): ?>
                <tr>
                    <td><?= $this->Number->format($transaccion->idTransaccion) ?></td>
                    <td><?= $this->Number->format($transaccion->monto) ?></td>
                    <td><?= $this->Number->format($transaccion->idMetodoDePago) ?></td>
                    <td><?= $transaccion->idProducto === null ? '' : $this->Number->format($transaccion->idProducto) ?></td>
                    <td><?= $transaccion->idServicio === null ? '' : $this->Number->format($transaccion->idServicio) ?></td>
                    <td><?= $this->Number->format($transaccion->idEmpleado) ?></td>
                    <td><?= $this->Number->format($transaccion->idTipoDeTransaccion) ?></td>
                    <td><?= h($transaccion->numeroReferencia) ?></td>
                    <td><?= h($transaccion->estatus) ?></td>
                    <td><?= $transaccion->idUsuarioCrea === null ? '' : $this->Number->format($transaccion->idUsuarioCrea) ?></td>
                    <td><?= h($transaccion->fechaCrea) ?></td>
                    <td><?= $transaccion->idUsuarioModifica === null ? '' : $this->Number->format($transaccion->idUsuarioModifica) ?></td>
                    <td><?= h($transaccion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transaccion->idTransaccion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaccion->idTransaccion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaccion->idTransaccion], ['confirm' => __('Are you sure you want to delete # {0}?', $transaccion->idTransaccion)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
