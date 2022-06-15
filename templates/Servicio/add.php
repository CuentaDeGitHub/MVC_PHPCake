<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $servicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Servicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servicio form content">
            <?= $this->Form->create($servicio) ?>
            <fieldset>
                <legend><?= __('Add Servicio') ?></legend>
                <?php
                    echo $this->Form->control('idReferencia');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('comision');
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
