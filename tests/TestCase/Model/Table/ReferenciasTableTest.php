<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReferenciasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReferenciasTable Test Case
 */
class ReferenciasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReferenciasTable
     */
    protected $Referencias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Referencias',
        'app.Productos',
        'app.Usuarios',
        'app.Estados',
        'app.Prospectos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Referencias') ? [] : ['className' => ReferenciasTable::class];
        $this->Referencias = $this->getTableLocator()->get('Referencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Referencias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReferenciasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ReferenciasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
