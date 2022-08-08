<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitude $solicitude
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Solicitude'), ['action' => 'edit', $solicitude->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Solicitude'), ['action' => 'delete', $solicitude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitude->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Solicitudes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Solicitude'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudes view content">
            <h3><?= h($solicitude->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $solicitude->has('producto') ? $this->Html->link($solicitude->producto->id, ['controller' => 'Productos', 'action' => 'view', $solicitude->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Prospecto') ?></th>
                    <td><?= $solicitude->has('prospecto') ? $this->Html->link($solicitude->prospecto->id, ['controller' => 'Prospectos', 'action' => 'view', $solicitude->prospecto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $solicitude->has('estado') ? $this->Html->link($solicitude->estado->id, ['controller' => 'Estados', 'action' => 'view', $solicitude->estado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($solicitude->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($solicitude->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($solicitude->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
