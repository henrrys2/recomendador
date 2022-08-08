<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * SitioUsuario Entity
 *
 * @property int $id
 * @property int $perfil_id
 * @property int $empresa_id
 * @property string $nombres
 * @property string $apellidos
 * @property string $email
 * @property string $telefono
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modifed
 */
class Usuario extends Entity
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
        'perfil_id' => true,
        'empresa_id' => true,
        'nombres' => true,
        'apellidos' => true,
        'email' => true,
        'telefono' => true,
        'password' => true,
        'created' => true,
        'modifed' => true,
    ];

    protected function _setPassword($value){
        if(!empty($value)){
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        }else{
            $id_usuarios = $this->_properties['id'];
            $user = TableRegistry::get('Usuarios')->recoverPassword($id_usuarios);
            return $user;
        }
        

    }
    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
