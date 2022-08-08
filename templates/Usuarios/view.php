<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $Usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $Usuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $Usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $Usuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="Usuarios view content">
            <h3><?= h($Usuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombres') ?></th>
                    <td><?= h($Usuario->nombres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($Usuario->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($Usuario->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($Usuario->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($Usuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Perfil Id') ?></th>
                    <td><?= $this->Number->format($Usuario->perfil_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresa Id') ?></th>
                    <td><?= $this->Number->format($Usuario->empresa_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($Usuario->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifed') ?></th>
                    <td><?= h($Usuario->modifed) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
