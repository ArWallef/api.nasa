<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApodsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApodsTable Test Case
 */
class ApodsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApodsTable
     */
    protected $Apods;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Apods',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Apods') ? [] : ['className' => ApodsTable::class];
        $this->Apods = $this->getTableLocator()->get('Apods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Apods);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
