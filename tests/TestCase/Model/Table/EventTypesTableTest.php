<?php
namespace FullCalendar\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FullCalendar\Model\Table\EventTypesTable;

/**
 * FullCalendar\Model\Table\EventTypesTable Test Case
 */
class EventTypesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.full_calendar.event_types',
        'plugin.full_calendar.events',
        'plugin.full_calendar.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EventTypes') ? [] : ['className' => 'FullCalendar\Model\Table\EventTypesTable'];
        $this->EventTypes = TableRegistry::get('EventTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EventTypes);

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
