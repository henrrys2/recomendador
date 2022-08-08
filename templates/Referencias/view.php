<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Referencia $referencia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Referencia'), ['action' => 'edit', $referencia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Referencia'), ['action' => 'delete', $referencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referencia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Referencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Referencia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="referencias view content">
            <h3><?= h($referencia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $referencia->has('producto') ? $this->Html->link($referencia->producto->id, ['controller' => 'Productos', 'action' => 'view', $referencia->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $referencia->has('usuario') ? $this->Html->link($referencia->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $referencia->usuario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $referencia->has('estado') ? $this->Html->link($referencia->estado->id, ['controller' => 'Estados', 'action' => 'view', $referencia->estado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Prospecto') ?></th>
                    <td><?= $referencia->has('prospecto') ? $this->Html->link($referencia->prospecto->id, ['controller' => 'Prospectos', 'action' => 'view', $referencia->prospecto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo Contacto') ?></th>
                    <td><?= h($referencia->cargo_contacto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Relacion Contacto') ?></th>
                    <td><?= h($referencia->relacion_contacto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($referencia->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
