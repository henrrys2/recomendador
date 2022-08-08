<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposerviciosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposerviciosTable Test Case
 */
class TiposerviciosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposerviciosTable
     */
    protected $Tiposervicios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tiposervicios',
        'app.Productos',
        'app.Industrias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tiposervicios') ? [] : ['className' => TiposerviciosTable::class];
        $this->Tiposervicios = $this->getTableLocator()->get('Tiposervicios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tiposervicios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TiposerviciosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
