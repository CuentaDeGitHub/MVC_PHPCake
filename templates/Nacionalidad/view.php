<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $nacionalidad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Nacionalidad'), ['action' => 'edit', $nacionalidad->idNacionalidad], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Nacionalidad'), ['action' => 'delete', $nacionalidad->idNacionalidad], ['confirm' => __('Are you sure you want to delete # {0}?', $nacionalidad->idNacionalidad), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Nacionalidad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Nacionalidad'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="nacionalidad view content">
            <h3><?= h($nacionalidad->idNacionalidad) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($nacionalidad->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($nacionalidad->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdNacionalidad') ?></th>
                    <td><?= $this->Number->format($nacionalidad->idNacionalidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $nacionalidad->idUsuarioCrea === null ? '' : $this->Number->format($nacionalidad->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $nacionalidad->idUsuarioModifica === null ? '' : $this->Number->format($nacionalidad->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($nacionalidad->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($nacionalidad->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
