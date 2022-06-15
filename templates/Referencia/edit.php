<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $referencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $referencium->idReferencia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $referencium->idReferencia), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Referencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="referencia form content">
            <?= $this->Form->create($referencium) ?>
            <fieldset>
                <legend><?= __('Edit Referencium') ?></legend>
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
