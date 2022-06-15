<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $empleadoturno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Empleadoturno'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadoturno form content">
            <?= $this->Form->create($empleadoturno) ?>
            <fieldset>
                <legend><?= __('Add Empleadoturno') ?></legend>
                <?php
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('idTurno');
                    echo $this->Form->control('fechaInicio');
                    echo $this->Form->control('fechaFinal');
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
