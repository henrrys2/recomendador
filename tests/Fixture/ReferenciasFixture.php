<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReferenciasFixture
 */
class ReferenciasFixture extends TestFixture
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
                'producto_id' => 1,
                'usuario_id' => 1,
                'estado_id' => 1,
                'prospecto_id' => 1,
                'cargo_contacto' => 'Lorem ipsum dolor sit amet',
                'relacion_contacto' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
