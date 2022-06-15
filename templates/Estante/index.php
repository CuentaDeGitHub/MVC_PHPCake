<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $estante
 */
?>
<div class="estante index content">
    <?= $this->Html->link(__('New Estante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estante') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEstante') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('columna') ?></th>
                    <th><?= $this->Paginator->sort('fila') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estante as $estante): ?>
                <tr>
                    <td><?= $this->Number->format($estante->idEstante) ?></td>
                    <td><?= $this->Number->format($estante->numero) ?></td>
                    <td><?= $this->Number->format($estante->columna) ?></td>
                    <td><?= $this->Number->format($estante->fila) ?></td>
                    <td><?= h($estante->estatus) ?></td>
                    <td><?= $estante->idUsuarioCrea === null ? '' : $this->Number->format($estante->idUsuarioCrea) ?></td>
                    <td><?= h($estante->fechaCrea) ?></td>
                    <td><?= $estante->idUsuarioModifica === null ? '' : $this->Number->format($estante->idUsuarioModifica) ?></td>
                    <td><?= h($estante->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estante->idEstante]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estante->idEstante]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estante->idEstante], ['confirm' => __('Are you sure you want to delete # {0}?', $estante->idEstante)]) ?>
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
