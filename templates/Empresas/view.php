<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empresa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empresas view content">
            <h3><?= h($empresa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Razon Social') ?></th>
                    <td><?= h($empresa->razon_social) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cedula') ?></th>
                    <td><?= h($empresa->cedula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre Contacto') ?></th>
                    <td><?= h($empresa->nombre_contacto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Contacto') ?></th>
                    <td><?= h($empresa->email_contacto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono Contacto') ?></th>
                    <td><?= h($empresa->telefono_contacto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($empresa->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($empresa->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ciudad') ?></th>
                    <td><?= h($empresa->ciudad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($empresa->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Plan Id') ?></th>
                    <td><?= $this->Number->format($empresa->plan_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais Id') ?></th>
                    <td><?= $this->Number->format($empresa->pais_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $this->Number->format($empresa->activo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($empresa->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($empresa->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Productos') ?></h4>
                <?php if (!empty($empresa->productos)) : ?>
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
                        <?php foreach ($empresa->productos as $productos) : ?>
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
            <div class="related">
                <h4><?= __('Related Usuarios') ?></h4>
                <?php if (!empty($empresa->usuarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Perfil Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Nombres') ?></th>
                            <th><?= __('Apellidos') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Telefono') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifed') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->usuarios as $usuarios) : ?>
                        <tr>
                            <td><?= h($usuarios->id) ?></td>
                            <td><?= h($usuarios->perfil_id) ?></td>
                            <td><?= h($usuarios->empresa_id) ?></td>
                            <td><?= h($usuarios->nombres) ?></td>
                            <td><?= h($usuarios->apellidos) ?></td>
                            <td><?= h($usuarios->email) ?></td>
                            <td><?= h($usuarios->telefono) ?></td>
                            <td><?= h($usuarios->password) ?></td>
                            <td><?= h($usuarios->created) ?></td>
                            <td><?= h($usuarios->modifed) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
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
