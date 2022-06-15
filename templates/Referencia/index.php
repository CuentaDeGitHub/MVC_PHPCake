<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $referencia
 */
?>
<div class="referencia index content">
    <?= $this->Html->link(__('New Referencium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Referencia') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idReferencia') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($referencia as $referencium): ?>
                <tr>
                    <td><?= $this->Number->format($referencium->idReferencia) ?></td>
                    <td><?= h($referencium->descripcion) ?></td>
                    <td><?= h($referencium->estatus) ?></td>
                    <td><?= $referencium->idUsuarioCrea === null ? '' : $this->Number->format($referencium->idUsuarioCrea) ?></td>
                    <td><?= h($referencium->fechaCrea) ?></td>
                    <td><?= $referencium->idUsuarioModifica === null ? '' : $this->Number->format($referencium->idUsuarioModifica) ?></td>
                    <td><?= h($referencium->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $referencium->idReferencia]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $referencium->idReferencia]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $referencium->idReferencia], ['confirm' => __('Are you sure you want to delete # {0}?', $referencium->idReferencia)]) ?>
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
