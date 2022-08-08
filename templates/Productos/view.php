<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos view content">
            <h3><?= h($producto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Empresa') ?></th>
                    <td><?= $producto->has('empresa') ? $this->Html->link($producto->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $producto->empresa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tiposervicio') ?></th>
                    <td><?= $producto->has('tiposervicio') ? $this->Html->link($producto->tiposervicio->id, ['controller' => 'Tiposervicios', 'action' => 'view', $producto->tiposervicio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($producto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modelo Servicio') ?></th>
                    <td><?= h($producto->modelo_servicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($producto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio Promedio') ?></th>
                    <td><?= $this->Number->format($producto->precio_promedio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($producto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($producto->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($producto->descripcion)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Referencias') ?></h4>
                <?php if (!empty($producto->referencias)) : ?>
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
                        <?php foreach ($producto->referencias as $referencias) : ?>
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
                <?php if (!empty($producto->solicitudes)) : ?>
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
                        <?php foreach ($producto->solicitudes as $solicitudes) : ?>
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
