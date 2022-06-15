<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $etiqueta
 */
?>
<div class="etiqueta index content">
    <?= $this->Html->link(__('New Etiquetum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Etiqueta') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEtiqueta') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
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
                <?php foreach ($etiqueta as $etiquetum): ?>
                <tr>
                    <td><?= $this->Number->format($etiquetum->idEtiqueta) ?></td>
                    <td><?= h($etiquetum->codigo) ?></td>
                    <td><?= h($etiquetum->descripcion) ?></td>
                    <td><?= h($etiquetum->estatus) ?></td>
                    <td><?= $etiquetum->idUsuarioCrea === null ? '' : $this->Number->format($etiquetum->idUsuarioCrea) ?></td>
                    <td><?= h($etiquetum->fechaCrea) ?></td>
                    <td><?= $etiquetum->idUsuarioModifica === null ? '' : $this->Number->format($etiquetum->idUsuarioModifica) ?></td>
                    <td><?= h($etiquetum->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $etiquetum->idEtiqueta]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etiquetum->idEtiqueta]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etiquetum->idEtiqueta], ['confirm' => __('Are you sure you want to delete # {0}?', $etiquetum->idEtiqueta)]) ?>
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
