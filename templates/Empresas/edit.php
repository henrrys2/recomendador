<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empresas form content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Edit Empresa') ?></legend>
                <?php
                    echo $this->Form->control('plan_id');
                    echo $this->Form->control('razon_social');
                    echo $this->Form->control('cedula');
                    echo $this->Form->control('nombre_contacto');
                    echo $this->Form->control('email_contacto');
                    echo $this->Form->control('telefono_contacto');
                    echo $this->Form->control('usuario');
                    echo $this->Form->control('password');
                    echo $this->Form->control('pais_id');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('ciudad');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('activo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
