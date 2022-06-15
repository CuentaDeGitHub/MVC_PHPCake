<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $metododepago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $metododepago->idMetodoDePago],
                ['confirm' => __('Are you sure you want to delete # {0}?', $metododepago->idMetodoDePago), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Metododepago'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="metododepago form content">
            <?= $this->Form->create($metododepago) ?>
            <fieldset>
                <legend><?= __('Edit Metododepago') ?></legend>
                <?php
                    echo $this->Form->control('metodo');
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
