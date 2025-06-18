<?php
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    private $script = __DIR__ . '/../index.php';

    public function testNoSessionRedirects()
    {
        if (session_status()==PHP_SESSION_ACTIVE) session_destroy();
        $_SESSION = [];

        ob_start();
        include $this->script;
        ob_end_clean();

        $headers = xdebug_get_headers();
        $this->assertContains('Location: login.php', $headers);
    }

    public function testWithSessionRenders()
    {
        session_start(); $_SESSION['user_id']=1; $_SESSION['username']='u1';
        ob_start();
        include $this->script;
        $html = ob_get_clean();

        $this->assertStringContainsString('Selamat Datang di Cafe Kami', $html);
        $this->assertStringContainsString('Mode Gelap', $html);
    }
}
