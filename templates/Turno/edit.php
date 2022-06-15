<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $turno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $turno->idTurno],
                ['confirm' => __('Are you sure you want to delete # {0}?', $turno->idTurno), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Turno'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="turno form content">
            <?= $this->Form->create($turno) ?>
            <fieldset>
                <legend><?= __('Edit Turno') ?></legend>
                <?php
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('estatus');
                    echo $this->Form->control('idUsuarioCrea');
                    echo $this->Form->control('fechaCrea', ['empty' => true]);
                    echo $this->Form->control('idUsuarioModifica');
                    echo $this->Form->control('fechaModifica', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
