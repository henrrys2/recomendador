<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Referencia[]|\Cake\Collection\CollectionInterface $referencias
 */
?>
<div class="referencias index content">
    <?= $this->Html->link(__('New Referencia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Referencias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('estado_id') ?></th>
                    <th><?= $this->Paginator->sort('prospecto_id') ?></th>
                    <th><?= $this->Paginator->sort('cargo_contacto') ?></th>
                    <th><?= $this->Paginator->sort('relacion_contacto') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($referencias as $referencia): ?>
                <tr>
                    <td><?= $this->Number->format($referencia->id) ?></td>
                    <td><?= $referencia->has('producto') ? $this->Html->link($referencia->producto->id, ['controller' => 'Productos', 'action' => 'view', $referencia->producto->id]) : '' ?></td>
                    <td><?= $referencia->has('usuario') ? $this->Html->link($referencia->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $referencia->usuario->id]) : '' ?></td>
                    <td><?= $referencia->has('estado') ? $this->Html->link($referencia->estado->id, ['controller' => 'Estados', 'action' => 'view', $referencia->estado->id]) : '' ?></td>
                    <td><?= $referencia->has('prospecto') ? $this->Html->link($referencia->prospecto->id, ['controller' => 'Prospectos', 'action' => 'view', $referencia->prospecto->id]) : '' ?></td>
                    <td><?= h($referencia->cargo_contacto) ?></td>
                    <td><?= h($referencia->relacion_contacto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $referencia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $referencia->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $referencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referencia->id)]) ?>
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
