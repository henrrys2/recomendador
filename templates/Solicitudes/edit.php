<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitude $solicitude
 * @var string[]|\Cake\Collection\CollectionInterface $productos
 * @var string[]|\Cake\Collection\CollectionInterface $prospectos
 * @var string[]|\Cake\Collection\CollectionInterface $estados
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solicitude->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solicitude->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Solicitudes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudes form content">
            <?= $this->Form->create($solicitude) ?>
            <fieldset>
                <legend><?= __('Edit Solicitude') ?></legend>
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
