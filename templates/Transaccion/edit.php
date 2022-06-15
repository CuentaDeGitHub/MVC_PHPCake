<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $transaccion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transaccion->idTransaccion],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transaccion->idTransaccion), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Transaccion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transaccion form content">
            <?= $this->Form->create($transaccion) ?>
            <fieldset>
                <legend><?= __('Edit Transaccion') ?></legend>
                <?php
                    echo $this->Form->control('monto');
                    echo $this->Form->control('idMetodoDePago');
                    echo $this->Form->control('idProducto');
                    echo $this->Form->control('idServicio');
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('idTipoDeTransaccion');
                    echo $this->Form->control('numeroReferencia');
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
