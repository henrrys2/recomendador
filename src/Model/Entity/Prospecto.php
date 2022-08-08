<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prospecto Entity
 *
 * @property int $id
 * @property int $industria_id
 * @property int $pais_id
 * @property string $nombre
 * @property string $descripcion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Industria $industria
 * @property \App\Model\Entity\Referencia[] $referencias
 * @property \App\Model\Entity\Solicitude[] $solicitudes
 */
class Prospecto extends Entity
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
        'industria_id' => true,
        'pais_id' => true,
        'nombre' => true,
        'descripcion' => true,
        'created' => true,
        'modified' => true,
        'industria' => true,
        'referencias' => true,
        'solicitudes' => true,
    ];
}
