<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClubStatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClubStatesTable Test Case
 */
class ClubStatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClubStatesTable
     */
    public $ClubStates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.club_states'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ClubStates') ? [] : ['className' => ClubStatesTable::class];
        $this->ClubStates = TableRegistry::getTableLocator()->get('ClubStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClubStates);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
