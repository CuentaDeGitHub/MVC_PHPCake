<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $tipodeasentamiento
 */
?>
<div class="tipodeasentamiento index content">
    <?= $this->Html->link(__('New Tipodeasentamiento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipodeasentamiento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoDeAsentamiento') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipodeasentamiento as $tipodeasentamiento): ?>
                <tr>
                    <td><?= $this->Number->format($tipodeasentamiento->idTipoDeAsentamiento) ?></td>
                    <td><?= h($tipodeasentamiento->tipo) ?></td>
                    <td><?= h($tipodeasentamiento->codigo) ?></td>
                    <td><?= h($tipodeasentamiento->estatus) ?></td>
                    <td><?= $tipodeasentamiento->idUsuarioCrea === null ? '' : $this->Number->format($tipodeasentamiento->idUsuarioCrea) ?></td>
                    <td><?= h($tipodeasentamiento->fechaCrea) ?></td>
                    <td><?= $tipodeasentamiento->idUsuarioModifica === null ? '' : $this->Number->format($tipodeasentamiento->idUsuarioModifica) ?></td>
                    <td><?= h($tipodeasentamiento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipodeasentamiento->idTipoDeAsentamiento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipodeasentamiento->idTipoDeAsentamiento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipodeasentamiento->idTipoDeAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodeasentamiento->idTipoDeAsentamiento)]) ?>
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
