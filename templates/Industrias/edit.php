<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Industria $industria
 * @var string[]|\Cake\Collection\CollectionInterface $tiposervicios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $industria->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $industria->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Industrias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="industrias form content">
            <?= $this->Form->create($industria) ?>
            <fieldset>
                <legend><?= __('Edit Industria') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('tiposervicios._ids', ['options' => $tiposervicios]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
