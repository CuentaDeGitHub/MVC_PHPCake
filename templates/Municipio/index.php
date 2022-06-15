<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $municipio
 */
?>
<div class="municipio index content">
    <?= $this->Html->link(__('New Municipio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Municipio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idMunicipio') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('idEstado') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($municipio as $municipio): ?>
                <tr>
                    <td><?= $this->Number->format($municipio->idMunicipio) ?></td>
                    <td><?= h($municipio->codigo) ?></td>
                    <td><?= h($municipio->descripcion) ?></td>
                    <td><?= $this->Number->format($municipio->idEstado) ?></td>
                    <td><?= h($municipio->estatus) ?></td>
                    <td><?= $municipio->idUsuarioCrea === null ? '' : $this->Number->format($municipio->idUsuarioCrea) ?></td>
                    <td><?= h($municipio->fechaCrea) ?></td>
                    <td><?= $municipio->idUsuarioModifica === null ? '' : $this->Number->format($municipio->idUsuarioModifica) ?></td>
                    <td><?= h($municipio->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $municipio->idMunicipio]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $municipio->idMunicipio]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $municipio->idMunicipio], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->idMunicipio)]) ?>
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
