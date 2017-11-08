<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NoticiaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NoticiaTable Test Case
 */
class NoticiaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NoticiaTable
     */
    public $Noticia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.noticia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Noticia') ? [] : ['className' => 'App\Model\Table\NoticiaTable'];
        $this->Noticia = TableRegistry::get('Noticia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Noticia);

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
