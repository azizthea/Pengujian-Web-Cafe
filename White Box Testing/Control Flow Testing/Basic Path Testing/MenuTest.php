<?php
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{
    private $script = __DIR__ . '/../menu.php';

    public function testRedirectIfNotLoggedIn()
    {
        session_start(); session_destroy(); $_SESSION=[];
        ob_start(); include $this->script; ob_end_clean();
        $headers = xdebug_get_headers();
        $this->assertContains('Location: ../login.php', $headers);
    }

    public function testGridAndTableViews()
    {
        session_start(); $_SESSION['user_id']=1;
        // Setup dummy menu items in DB
        insertTestMenuItem(1,'Espresso','Desc',25000);
        insertTestMenuItem(2,'Latte','Desc',30000);

        ob_start(); include $this->script; $html = ob_get_clean();
        $this->assertStringContainsString('menu-grid', $html);
        $this->assertStringContainsString('<table', $html);
    }
}
