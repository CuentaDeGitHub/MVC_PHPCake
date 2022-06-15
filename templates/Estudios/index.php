<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $estudios
 */
?>
<div class="estudios index content">
    <?= $this->Html->link(__('New Estudio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estudios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEstudios') ?></th>
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
                <?php foreach ($estudios as $estudio): ?>
                <tr>
                    <td><?= $this->Number->format($estudio->idEstudios) ?></td>
                    <td><?= h($estudio->descripcion) ?></td>
                    <td><?= h($estudio->estatus) ?></td>
                    <td><?= $estudio->idUsuarioCrea === null ? '' : $this->Number->format($estudio->idUsuarioCrea) ?></td>
                    <td><?= h($estudio->fechaCrea) ?></td>
                    <td><?= $estudio->idUsuarioModifica === null ? '' : $this->Number->format($estudio->idUsuarioModifica) ?></td>
                    <td><?= h($estudio->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estudio->idEstudios]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estudio->idEstudios]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estudio->idEstudios], ['confirm' => __('Are you sure you want to delete # {0}?', $estudio->idEstudios)]) ?>
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
