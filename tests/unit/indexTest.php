<?php
// framework/test.php
class IndexTest extends \PHPUnit_Framework_TestCase
{

	public function testHello()
    {
        $_GET['name'] = 'Fabien';

        ob_start();
        include_once "app/index.php";
        $content = ob_get_clean();

        $this->assertSame('Hello Fabien', $content);
    }

}