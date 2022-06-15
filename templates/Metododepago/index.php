<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $metododepago
 */
?>
<div class="metododepago index content">
    <?= $this->Html->link(__('New Metododepago'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Metododepago') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idMetodoDePago') ?></th>
                    <th><?= $this->Paginator->sort('metodo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($metododepago as $metododepago): ?>
                <tr>
                    <td><?= $this->Number->format($metododepago->idMetodoDePago) ?></td>
                    <td><?= h($metododepago->metodo) ?></td>
                    <td><?= h($metododepago->estatus) ?></td>
                    <td><?= $metododepago->idUsuarioCrea === null ? '' : $this->Number->format($metododepago->idUsuarioCrea) ?></td>
                    <td><?= h($metododepago->fechaCrea) ?></td>
                    <td><?= $metododepago->idUsuarioModifica === null ? '' : $this->Number->format($metododepago->idUsuarioModifica) ?></td>
                    <td><?= h($metododepago->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $metododepago->idMetodoDePago]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $metododepago->idMetodoDePago]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $metododepago->idMetodoDePago], ['confirm' => __('Are you sure you want to delete # {0}?', $metododepago->idMetodoDePago)]) ?>
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
