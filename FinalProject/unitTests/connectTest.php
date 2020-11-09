<?
 
require_once('Remote.php');
 
use PHPUnit\Framework\TestCase;

class RemoteTest extends TestCase
{
  public function setUp(){}
  public function tearDown(){}
 
  public function testConnectIsValid()
  {
    // проверка коннекта к с серванту
    $connObj = new Remote();
    $serverName = '127.0.0.1';
    $this->assertTrue($connObj->connectToServer($serverName));
  }
}