<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $productoetiquetum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productoetiquetum->idProductoEtiqueta],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productoetiquetum->idProductoEtiqueta), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Productoetiqueta'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productoetiqueta form content">
            <?= $this->Form->create($productoetiquetum) ?>
            <fieldset>
                <legend><?= __('Edit Productoetiquetum') ?></legend>
                <?php
                    echo $this->Form->control('idProducto');
                    echo $this->Form->control('idEtiqueta');
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
