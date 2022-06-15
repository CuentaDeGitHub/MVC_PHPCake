<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $estante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estante->idEstante],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estante->idEstante), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estante form content">
            <?= $this->Form->create($estante) ?>
            <fieldset>
                <legend><?= __('Edit Estante') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('columna');
                    echo $this->Form->control('fila');
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
