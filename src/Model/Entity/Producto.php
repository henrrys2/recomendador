<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property int $empresa_id
 * @property int $tiposervicio_id
 * @property string $nombre
 * @property string $descripcion
 * @property int $precio_promedio
 * @property string $modelo_servicio
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Tiposervicio $tiposervicio
 * @property \App\Model\Entity\Referencia[] $referencias
 * @property \App\Model\Entity\Solicitude[] $solicitudes
 */
class Producto extends Entity
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
        'empresa_id' => true,
        'tiposervicio_id' => true,
        'nombre' => true,
        'descripcion' => true,
        'precio_promedio' => true,
        'modelo_servicio' => true,
        'created' => true,
        'modified' => true,
        'empresa' => true,
        'tiposervicio' => true,
        'referencias' => true,
        'solicitudes' => true,
    ];
}
