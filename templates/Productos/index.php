<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $productos
 */
?>
<div class="productos index content">
    <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id') ?></th>
                    <th><?= $this->Paginator->sort('tiposervicio_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('precio_promedio') ?></th>
                    <th><?= $this->Paginator->sort('modelo_servicio') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id) ?></td>
                    <td><?= $producto->has('empresa') ? $this->Html->link($producto->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $producto->empresa->id]) : '' ?></td>
                    <td><?= $producto->has('tiposervicio') ? $this->Html->link($producto->tiposervicio->id, ['controller' => 'Tiposervicios', 'action' => 'view', $producto->tiposervicio->id]) : '' ?></td>
                    <td><?= h($producto->nombre) ?></td>
                    <td><?= $this->Number->format($producto->precio_promedio) ?></td>
                    <td><?= h($producto->modelo_servicio) ?></td>
                    <td><?= h($producto->created) ?></td>
                    <td><?= h($producto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
