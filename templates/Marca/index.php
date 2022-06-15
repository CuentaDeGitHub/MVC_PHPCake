<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $marca
 */
?>
<div class="marca index content">
    <?= $this->Html->link(__('New Marca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marca') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idMarca') ?></th>
                    <th><?= $this->Paginator->sort('marca') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marca as $marca): ?>
                <tr>
                    <td><?= $this->Number->format($marca->idMarca) ?></td>
                    <td><?= h($marca->marca) ?></td>
                    <td><?= h($marca->estatus) ?></td>
                    <td><?= $marca->idUsuarioCrea === null ? '' : $this->Number->format($marca->idUsuarioCrea) ?></td>
                    <td><?= h($marca->fechaCrea) ?></td>
                    <td><?= $marca->idUsuarioModifica === null ? '' : $this->Number->format($marca->idUsuarioModifica) ?></td>
                    <td><?= h($marca->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $marca->idMarca]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marca->idMarca]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marca->idMarca], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->idMarca)]) ?>
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
