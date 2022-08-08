<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndustriasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndustriasTable Test Case
 */
class IndustriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IndustriasTable
     */
    protected $Industrias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Industrias',
        'app.Prospectos',
        'app.Tiposervicios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Industrias') ? [] : ['className' => IndustriasTable::class];
        $this->Industrias = $this->getTableLocator()->get('Industrias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Industrias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IndustriasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
