<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitude[]|\Cake\Collection\CollectionInterface $solicitudes
 */
?>
<div class="solicitudes index content">
    <?= $this->Html->link(__('New Solicitude'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Solicitudes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('prospecto_id') ?></th>
                    <th><?= $this->Paginator->sort('estado_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solicitudes as $solicitude): ?>
                <tr>
                    <td><?= $this->Number->format($solicitude->id) ?></td>
                    <td><?= $solicitude->has('producto') ? $this->Html->link($solicitude->producto->id, ['controller' => 'Productos', 'action' => 'view', $solicitude->producto->id]) : '' ?></td>
                    <td><?= $solicitude->has('prospecto') ? $this->Html->link($solicitude->prospecto->id, ['controller' => 'Prospectos', 'action' => 'view', $solicitude->prospecto->id]) : '' ?></td>
                    <td><?= $solicitude->has('estado') ? $this->Html->link($solicitude->estado->id, ['controller' => 'Estados', 'action' => 'view', $solicitude->estado->id]) : '' ?></td>
                    <td><?= h($solicitude->created) ?></td>
                    <td><?= h($solicitude->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $solicitude->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitude->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitude->id)]) ?>
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
