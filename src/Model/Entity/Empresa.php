<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property int $plan_id
 * @property string $razon_social
 * @property string $cedula
 * @property string $nombre_contacto
 * @property string $email_contacto
 * @property string $telefono_contacto
 * @property string $usuario
 * @property string $password
 * @property int $pais_id
 * @property string $direccion
 * @property string $ciudad
 * @property string $telefono
 * @property int $activo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Producto[] $productos
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Empresa extends Entity
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
        'plan_id' => true,
        'razon_social' => true,
        'cedula' => true,
        'nombre_contacto' => true,
        'email_contacto' => true,
        'telefono_contacto' => true,
        'usuario' => true,
        'password' => true,
        'pais_id' => true,
        'direccion' => true,
        'ciudad' => true,
        'telefono' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'productos' => true,
        'usuarios' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
