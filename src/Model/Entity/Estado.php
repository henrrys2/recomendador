<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estado Entity
 *
 * @property int $id
 * @property string $nombre
 * @property int $tipo
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Referencia[] $referencias
 * @property \App\Model\Entity\Solicitude[] $solicitudes
 */
class Estado extends Entity
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
        'nombre' => true,
        'tipo' => true,
        'created' => true,
        'referencias' => true,
        'solicitudes' => true,
    ];
}
