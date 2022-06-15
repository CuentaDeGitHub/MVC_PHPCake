<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $tipodeproducto
 */
?>
<div class="tipodeproducto index content">
    <?= $this->Html->link(__('New Tipodeproducto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipodeproducto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoDeProducto') ?></th>
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
                <?php foreach ($tipodeproducto as $tipodeproducto): ?>
                <tr>
                    <td><?= $this->Number->format($tipodeproducto->idTipoDeProducto) ?></td>
                    <td><?= h($tipodeproducto->tipo) ?></td>
                    <td><?= h($tipodeproducto->estatus) ?></td>
                    <td><?= $tipodeproducto->idUsuarioCrea === null ? '' : $this->Number->format($tipodeproducto->idUsuarioCrea) ?></td>
                    <td><?= h($tipodeproducto->fechaCrea) ?></td>
                    <td><?= $tipodeproducto->idUsuarioModifica === null ? '' : $this->Number->format($tipodeproducto->idUsuarioModifica) ?></td>
                    <td><?= h($tipodeproducto->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipodeproducto->idTipoDeProducto]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipodeproducto->idTipoDeProducto]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipodeproducto->idTipoDeProducto], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodeproducto->idTipoDeProducto)]) ?>
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
