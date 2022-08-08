<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposervicio[]|\Cake\Collection\CollectionInterface $tiposervicios
 */
?>
<div class="tiposervicios index content">
    <?= $this->Html->link(__('New Tiposervicio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tiposervicios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tiposervicios as $tiposervicio): ?>
                <tr>
                    <td><?= $this->Number->format($tiposervicio->id) ?></td>
                    <td><?= h($tiposervicio->nombre) ?></td>
                    <td><?= h($tiposervicio->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tiposervicio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposervicio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposervicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->id)]) ?>
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
