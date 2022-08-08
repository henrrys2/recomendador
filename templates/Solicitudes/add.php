<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitude $solicitude
 * @var \Cake\Collection\CollectionInterface|string[] $productos
 * @var \Cake\Collection\CollectionInterface|string[] $prospectos
 * @var \Cake\Collection\CollectionInterface|string[] $estados
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Solicitudes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudes form content">
            <?= $this->Form->create($solicitude) ?>
            <fieldset>
                <legend><?= __('Add Solicitude') ?></legend>
                <?php
                    echo $this->Form->control('producto_id', ['options' => $productos]);
                    echo $this->Form->control('prospecto_id', ['options' => $prospectos]);
                    echo $this->Form->control('estado_id', ['options' => $estados]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
