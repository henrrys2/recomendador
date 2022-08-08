

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Paises</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('nombre') ?></th>
                        <th><?= $this->Paginator->sort('bandera') ?></th>
                        <th class="actions">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($paises as $paise): ?>
                    <tr>
                        <td><?= $this->Number->format($paise->id) ?></td>
                        <td><?= h($paise->nombre) ?></td>
                        <td><?= h($paise->bandera) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $paise->id],['class' => 'btn btn-info btn-sm']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $paise->id],['class' => 'btn btn-primary btn-sm']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $paise->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Pais?', $paise->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('Anterior'),['class' => 'page-item']) ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>