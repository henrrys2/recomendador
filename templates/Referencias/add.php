<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Referencia $referencia
 * @var \Cake\Collection\CollectionInterface|string[] $productos
 * @var \Cake\Collection\CollectionInterface|string[] $usuarios
 * @var \Cake\Collection\CollectionInterface|string[] $estados
 * @var \Cake\Collection\CollectionInterface|string[] $prospectos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Referencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="referencias form content">
            <?= $this->Form->create($referencia) ?>
            <fieldset>
                <legend><?= __('Add Referencia') ?></legend>
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
