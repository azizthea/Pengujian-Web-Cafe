<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    private $script = __DIR__ . '/../login.php';

    public function testGetForm()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        ob_start();
        include $this->script;
        $html = ob_get_clean();

        $this->assertStringContainsString('<form method="POST">', $html);
    }

    public function testPostSuccess()
    {
        // Siapkan user dummy di DB dengan password hash
        // Asumsi fungsi helper insertTestUser sudah ada
        insertTestUser('u1', 'u1@example.com', 'pass123');

        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_POST = ['username'=>'u1','password'=>'pass123'];
        session_start(); $_SESSION=[];

        ob_start();
        include $this->script;
        ob_end_clean();

        $headers = xdebug_get_headers();
        $this->assertContains('Location: index.php', $headers);
        $this->assertEquals($_SESSION['username'], 'u1');
    }

    public function testPostFailure()
    {
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_POST = ['username'=>'wrong','password'=>'wrong'];
        ob_start();
        include $this->script;
        $html = ob_get_clean();

        $this->assertStringContainsString('Username atau password salah', $html);
    }
}
