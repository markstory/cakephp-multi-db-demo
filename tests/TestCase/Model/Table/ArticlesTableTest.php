<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticlesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticlesTable Test Case
 */
class ArticlesTableTest extends TestCase
{
    public $fixtures = [
        'app.Articles',
        'app.Comments',
    ];

    public function testReadingData()
    {
        $articles = TableRegistry::get('Articles');
        $comments = TableRegistry::get('Comments');

        $result = $articles->find()->toArray();
        $this->assertCount(1, $result);
        $this->assertEquals('First post from app db!', $result[0]->title);

        $result = $comments->find()->toArray();
        $this->assertCount(1, $result);
        $this->assertEquals('comment in the other db', $result[0]->body);
    }
}
