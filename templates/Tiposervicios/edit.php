<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposervicio $tiposervicio
 * @var string[]|\Cake\Collection\CollectionInterface $industrias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposervicio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tiposervicios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposervicios form content">
            <?= $this->Form->create($tiposervicio) ?>
            <fieldset>
                <legend><?= __('Edit Tiposervicio') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('industrias._ids', ['options' => $industrias]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
