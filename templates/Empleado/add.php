<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $empleado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Empleado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleado form content">
            <?= $this->Form->create($empleado) ?>
            <fieldset>
                <legend><?= __('Add Empleado') ?></legend>
                <?php
                    echo $this->Form->control('apellidoPaterno');
                    echo $this->Form->control('apellidoMaterno');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('RFC');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('idAsentamiento');
                    echo $this->Form->control('idEstadoCivil');
                    echo $this->Form->control('idEstudios');
                    echo $this->Form->control('idPuesto');
                    echo $this->Form->control('idNacionalidad');
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
