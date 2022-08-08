<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Referencia $referencia
 * @var string[]|\Cake\Collection\CollectionInterface $productos
 * @var string[]|\Cake\Collection\CollectionInterface $usuarios
 * @var string[]|\Cake\Collection\CollectionInterface $estados
 * @var string[]|\Cake\Collection\CollectionInterface $prospectos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $referencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $referencia->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Referencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="referencias form content">
            <?= $this->Form->create($referencia) ?>
            <fieldset>
                <legend><?= __('Edit Referencia') ?></legend>
                <?php
                    echo $this->Form->control('producto_id', ['options' => $productos]);
                    echo $this->Form->control('usuario_id', ['options' => $usuarios]);
                    echo $this->Form->control('estado_id', ['options' => $estados]);
                    echo $this->Form->control('prospecto_id', ['options' => $prospectos]);
                    echo $this->Form->control('cargo_contacto');
                    echo $this->Form->control('relacion_contacto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
