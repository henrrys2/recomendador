<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudesFixture
 */
class SolicitudesFixture extends TestFixture
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
                'prospecto_id' => 1,
                'estado_id' => 1,
                'created' => '2022-08-04 21:02:51',
                'modified' => '2022-08-04 21:02:51',
            ],
        ];
        parent::init();
    }
}
