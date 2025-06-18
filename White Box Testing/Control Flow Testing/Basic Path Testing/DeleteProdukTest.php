<?php
use PHPUnit\Framework\TestCase;

class DeleteProdukTest extends TestCase
{
    private $script = __DIR__ . '/../delete_produk.php';

    public function testInvalidId()
    {
        $_GET['id']='abc';
        session_start(); $_SESSION['user_id']=1;
        ob_start(); include $this->script; $html = ob_get_clean();
        $this->assertStringContainsString('Invalid', $html);
    }

    public function testValidDeletion()
    {
        // Insert dummy produk with id=5
        insertTestProduk(5,'Test',1000);
        $_GET['id']=5; session_start(); $_SESSION['user_id']=1;
        ob_start(); include $this->script; ob_end_clean();
        $headers = xdebug_get_headers();
        $this->assertContains('Location: menu.php', $headers);
    }
}
