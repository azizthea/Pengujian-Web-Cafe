<?php
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    private $script = __DIR__ . '/../register.php';

    public function testGetForm()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        ob_start();
        include $this->script;
        $output = ob_get_clean();

        // Pastikan form register muncul
        $this->assertStringContainsString('<form', $output);
        $this->assertStringContainsString('name="username"', $output);
    }

    public function testPostValid()
    {
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_POST = [
            'username'         => 'testuser',
            'email'            => 'test@example.com',
            'password'         => 'secret123',
            'confirm_password' => 'secret123'
        ];
        // Reset session
        session_start();
        $_SESSION = [];

        ob_start();
        include $this->script;
        ob_end_clean();

        // Setelah registrasi valid, harus ada redirect ke login.php
        $headers = xdebug_get_headers();
        $this->assertContains('Location: login.php', $headers);
    }

    public function testPostInvalid()
    {
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_POST = [
            'username'         => 'x', // too short
            'email'            => 'invalid-email',
            'password'         => '123',
            'confirm_password' => '456'
        ];
        ob_start();
        include $this->script;
        $output = ob_get_clean();

        // Harus tampil error di masing-masing field
        $this->assertStringContainsString('Username minimal 4 karakter', $output);
        $this->assertStringContainsString('Email tidak valid', $output);
        $this->assertStringContainsString('Password minimal 6 karakter', $output);
        $this->assertStringContainsString('Password tidak cocok', $output);
    }
}
