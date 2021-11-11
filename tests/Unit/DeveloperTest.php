<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\DeveloperController;

final class DeveloperTest extends TestCase
{
    public function test_create_developer()
    {
        $developer = [
            "nome"              => "Marcelo Pereira",
            "sexo"              => "M",
            "idade"             => 25,
            "hobby"             => "Programação e games",
            "datanascimento"    => "22-02-1996"
        ];

        $developer_obj = new DeveloperController();
        $store = $developer_obj->store($developer);
        
        $this->assertEquals(TRUE, $store);
    }
}