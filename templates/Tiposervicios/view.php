<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposervicio $tiposervicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tiposervicio'), ['action' => 'edit', $tiposervicio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tiposervicio'), ['action' => 'delete', $tiposervicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tiposervicios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tiposervicio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposervicios view content">
            <h3><?= h($tiposervicio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tiposervicio->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tiposervicio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tiposervicio->created) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Industrias') ?></h4>
                <?php if (!empty($tiposervicio->industrias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tiposervicio->industrias as $industrias) : ?>
                        <tr>
                            <td><?= h($industrias->id) ?></td>
                            <td><?= h($industrias->nombre) ?></td>
                            <td><?= h($industrias->created) ?></td>
                            <td><?= h($industrias->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Industrias', 'action' => 'view', $industrias->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Industrias', 'action' => 'edit', $industrias->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Industrias', 'action' => 'delete', $industrias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $industrias->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Productos') ?></h4>
                <?php if (!empty($tiposervicio->productos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Tiposervicio Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Precio Promedio') ?></th>
                            <th><?= __('Modelo Servicio') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tiposervicio->productos as $productos) : ?>
                        <tr>
                            <td><?= h($productos->id) ?></td>
                            <td><?= h($productos->empresa_id) ?></td>
                            <td><?= h($productos->tiposervicio_id) ?></td>
                            <td><?= h($productos->nombre) ?></td>
                            <td><?= h($productos->descripcion) ?></td>
                            <td><?= h($productos->precio_promedio) ?></td>
                            <td><?= h($productos->modelo_servicio) ?></td>
                            <td><?= h($productos->created) ?></td>
                            <td><?= h($productos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $productos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $productos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $productos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productos->id)]) ?>
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
