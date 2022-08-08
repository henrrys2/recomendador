<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProspectosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProspectosTable Test Case
 */
class ProspectosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProspectosTable
     */
    protected $Prospectos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Prospectos',
        'app.Industrias',
        'app.Referencias',
        'app.Solicitudes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Prospectos') ? [] : ['className' => ProspectosTable::class];
        $this->Prospectos = $this->getTableLocator()->get('Prospectos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Prospectos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProspectosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProspectosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
