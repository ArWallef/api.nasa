<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApodTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApodTable Test Case
 */
class ApodTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApodTable
     */
    protected $Apod;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Apod',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Apod') ? [] : ['className' => ApodTable::class];
        $this->Apod = $this->getTableLocator()->get('Apod', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Apod);

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
