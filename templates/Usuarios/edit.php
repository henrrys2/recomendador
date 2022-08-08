<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SitioUsuario $sitioUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $Usuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $Usuario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sitio Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sitioUsuarios form content">
            <?= $this->Form->create($Usuario) ?>
            <fieldset>
                <legend><?= __('Edit Sitio Usuario') ?></legend>
                <?php
                    echo $this->Form->control('perfil_id');
                    echo $this->Form->control('empresa_id');
                    echo $this->Form->control('nombres');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('email');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('password');
                    echo $this->Form->control('modifed');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
