<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $nacionalidad
 */
?>
<div class="nacionalidad index content">
    <?= $this->Html->link(__('New Nacionalidad'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nacionalidad') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idNacionalidad') ?></th>
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
                <?php foreach ($nacionalidad as $nacionalidad): ?>
                <tr>
                    <td><?= $this->Number->format($nacionalidad->idNacionalidad) ?></td>
                    <td><?= h($nacionalidad->descripcion) ?></td>
                    <td><?= h($nacionalidad->estatus) ?></td>
                    <td><?= $nacionalidad->idUsuarioCrea === null ? '' : $this->Number->format($nacionalidad->idUsuarioCrea) ?></td>
                    <td><?= h($nacionalidad->fechaCrea) ?></td>
                    <td><?= $nacionalidad->idUsuarioModifica === null ? '' : $this->Number->format($nacionalidad->idUsuarioModifica) ?></td>
                    <td><?= h($nacionalidad->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $nacionalidad->idNacionalidad]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nacionalidad->idNacionalidad]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nacionalidad->idNacionalidad], ['confirm' => __('Are you sure you want to delete # {0}?', $nacionalidad->idNacionalidad)]) ?>
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
