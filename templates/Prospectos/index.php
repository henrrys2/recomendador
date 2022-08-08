<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospecto[]|\Cake\Collection\CollectionInterface $prospectos
 */
?>
<div class="prospectos index content">
    <?= $this->Html->link(__('New Prospecto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Prospectos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('industria_id') ?></th>
                    <th><?= $this->Paginator->sort('pais_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prospectos as $prospecto): ?>
                <tr>
                    <td><?= $this->Number->format($prospecto->id) ?></td>
                    <td><?= $prospecto->has('industria') ? $this->Html->link($prospecto->industria->id, ['controller' => 'Industrias', 'action' => 'view', $prospecto->industria->id]) : '' ?></td>
                    <td><?= $this->Number->format($prospecto->pais_id) ?></td>
                    <td><?= h($prospecto->nombre) ?></td>
                    <td><?= h($prospecto->created) ?></td>
                    <td><?= h($prospecto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prospecto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prospecto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prospecto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospecto->id)]) ?>
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
