<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $tipodetransaccion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipodetransaccion->idTipoDeTransaccion],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipodetransaccion->idTipoDeTransaccion), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipodetransaccion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipodetransaccion form content">
            <?= $this->Form->create($tipodetransaccion) ?>
            <fieldset>
                <legend><?= __('Edit Tipodetransaccion') ?></legend>
                <?php
                    echo $this->Form->control('tipo');
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
