<?php
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    private $script = __DIR__ . '/../order.php';

    public function testGetForm()
    {
        $_SERVER['REQUEST_METHOD']='GET';
        session_start(); $_SESSION['user_id']=1;
        ob_start(); include $this->script; $html = ob_get_clean();
        $this->assertStringContainsString('<form', $html);
    }

    public function testPostComplete()
    {
        $_SERVER['REQUEST_METHOD']='POST';
        session_start(); $_SESSION['user_id']=1;
        $_POST = ['item_id'=>1,'quantity'=>2];
        ob_start(); include $this->script; ob_end_clean();
        $headers = xdebug_get_headers();
        $this->assertContains('Location: index.php', $headers);
    }

    public function testPostIncomplete()
    {
        $_SERVER['REQUEST_METHOD']='POST';
        $_POST = []; session_start(); $_SESSION['user_id']=1;
        ob_start(); include $this->script; $html = ob_get_clean();
        $this->assertStringContainsString('Error', $html);
    }
}
