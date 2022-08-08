<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospecto $prospecto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Prospecto'), ['action' => 'edit', $prospecto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Prospecto'), ['action' => 'delete', $prospecto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospecto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Prospectos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Prospecto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prospectos view content">
            <h3><?= h($prospecto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Industria') ?></th>
                    <td><?= $prospecto->has('industria') ? $this->Html->link($prospecto->industria->id, ['controller' => 'Industrias', 'action' => 'view', $prospecto->industria->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($prospecto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($prospecto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais Id') ?></th>
                    <td><?= $this->Number->format($prospecto->pais_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($prospecto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($prospecto->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($prospecto->descripcion)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Referencias') ?></h4>
                <?php if (!empty($prospecto->referencias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Estado Id') ?></th>
                            <th><?= __('Prospecto Id') ?></th>
                            <th><?= __('Cargo Contacto') ?></th>
                            <th><?= __('Relacion Contacto') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($prospecto->referencias as $referencias) : ?>
                        <tr>
                            <td><?= h($referencias->id) ?></td>
                            <td><?= h($referencias->producto_id) ?></td>
                            <td><?= h($referencias->usuario_id) ?></td>
                            <td><?= h($referencias->estado_id) ?></td>
                            <td><?= h($referencias->prospecto_id) ?></td>
                            <td><?= h($referencias->cargo_contacto) ?></td>
                            <td><?= h($referencias->relacion_contacto) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Referencias', 'action' => 'view', $referencias->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Referencias', 'action' => 'edit', $referencias->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Referencias', 'action' => 'delete', $referencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referencias->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Solicitudes') ?></h4>
                <?php if (!empty($prospecto->solicitudes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Prospecto Id') ?></th>
                            <th><?= __('Estado Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($prospecto->solicitudes as $solicitudes) : ?>
                        <tr>
                            <td><?= h($solicitudes->id) ?></td>
                            <td><?= h($solicitudes->producto_id) ?></td>
                            <td><?= h($solicitudes->prospecto_id) ?></td>
                            <td><?= h($solicitudes->estado_id) ?></td>
                            <td><?= h($solicitudes->created) ?></td>
                            <td><?= h($solicitudes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Solicitudes', 'action' => 'view', $solicitudes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Solicitudes', 'action' => 'edit', $solicitudes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Solicitudes', 'action' => 'delete', $solicitudes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudes->id)]) ?>
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
