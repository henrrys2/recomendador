<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospecto $prospecto
 * @var \Cake\Collection\CollectionInterface|string[] $industrias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Prospectos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prospectos form content">
            <?= $this->Form->create($prospecto) ?>
            <fieldset>
                <legend><?= __('Add Prospecto') ?></legend>
                <?php
                    echo $this->Form->control('industria_id', ['options' => $industrias]);
                    echo $this->Form->control('pais_id');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripcion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
