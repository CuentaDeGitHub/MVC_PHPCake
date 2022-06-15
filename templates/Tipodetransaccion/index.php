<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $tipodetransaccion
 */
?>
<div class="tipodetransaccion index content">
    <?= $this->Html->link(__('New Tipodetransaccion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipodetransaccion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoDeTransaccion') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipodetransaccion as $tipodetransaccion): ?>
                <tr>
                    <td><?= $this->Number->format($tipodetransaccion->idTipoDeTransaccion) ?></td>
                    <td><?= h($tipodetransaccion->tipo) ?></td>
                    <td><?= h($tipodetransaccion->estatus) ?></td>
                    <td><?= $tipodetransaccion->idUsuarioCrea === null ? '' : $this->Number->format($tipodetransaccion->idUsuarioCrea) ?></td>
                    <td><?= h($tipodetransaccion->fechaCrea) ?></td>
                    <td><?= $tipodetransaccion->idUsuarioModifica === null ? '' : $this->Number->format($tipodetransaccion->idUsuarioModifica) ?></td>
                    <td><?= h($tipodetransaccion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipodetransaccion->idTipoDeTransaccion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipodetransaccion->idTipoDeTransaccion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipodetransaccion->idTipoDeTransaccion], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodetransaccion->idTipoDeTransaccion)]) ?>
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
