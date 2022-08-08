<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpresasFixture
 */
class EmpresasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'plan_id' => 1,
                'razon_social' => 'Lorem ipsum dolor sit amet',
                'cedula' => 'Lorem ipsum dolor sit amet',
                'nombre_contacto' => 'Lorem ipsum dolor sit amet',
                'email_contacto' => 'Lorem ipsum dolor sit amet',
                'telefono_contacto' => 'Lorem ipsum dolor sit amet',
                'usuario' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'pais_id' => 1,
                'direccion' => 'Lorem ipsum dolor sit amet',
                'ciudad' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsum dolor sit amet',
                'activo' => 1,
                'created' => '2022-07-28 21:35:32',
                'modified' => '2022-07-28 21:35:32',
            ],
        ];
        parent::init();
    }
}
