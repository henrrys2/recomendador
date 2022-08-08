<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Solicitude Entity
 *
 * @property int $id
 * @property int $producto_id
 * @property int $prospecto_id
 * @property int $estado_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\Prospecto $prospecto
 * @property \App\Model\Entity\Estado $estado
 */
class Solicitude extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'producto_id' => true,
        'prospecto_id' => true,
        'estado_id' => true,
        'created' => true,
        'modified' => true,
        'producto' => true,
        'prospecto' => true,
        'estado' => true,
    ];
}
