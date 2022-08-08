<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Industria $industria
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Industria'), ['action' => 'edit', $industria->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Industria'), ['action' => 'delete', $industria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $industria->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Industrias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Industria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="industrias view content">
            <h3><?= h($industria->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($industria->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($industria->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($industria->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($industria->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Tiposervicios') ?></h4>
                <?php if (!empty($industria->tiposervicios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($industria->tiposervicios as $tiposervicios) : ?>
                        <tr>
                            <td><?= h($tiposervicios->id) ?></td>
                            <td><?= h($tiposervicios->nombre) ?></td>
                            <td><?= h($tiposervicios->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tiposervicios', 'action' => 'view', $tiposervicios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tiposervicios', 'action' => 'edit', $tiposervicios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tiposervicios', 'action' => 'delete', $tiposervicios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicios->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Prospectos') ?></h4>
                <?php if (!empty($industria->prospectos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Industria Id') ?></th>
                            <th><?= __('Pais Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($industria->prospectos as $prospectos) : ?>
                        <tr>
                            <td><?= h($prospectos->id) ?></td>
                            <td><?= h($prospectos->industria_id) ?></td>
                            <td><?= h($prospectos->pais_id) ?></td>
                            <td><?= h($prospectos->nombre) ?></td>
                            <td><?= h($prospectos->descripcion) ?></td>
                            <td><?= h($prospectos->created) ?></td>
                            <td><?= h($prospectos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Prospectos', 'action' => 'view', $prospectos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Prospectos', 'action' => 'edit', $prospectos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prospectos', 'action' => 'delete', $prospectos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospectos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
