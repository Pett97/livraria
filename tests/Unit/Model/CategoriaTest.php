<?php

namespace Tests\Unit\Model;


use App\Models\Categoria;
use PHPUnit\Framework\TestCase;

class CategoriaTest extends TestCase
{

    private Categoria $novaCategoria;

    protected function setUp(): void
    {
        parent::setUp();
        $this->novaCategoria = new Categoria([
            'nome' => 'categoriaTeste'
        ]);
    }

    public function test_deve_ser_possivel_criar_uma_nova_categoria(): void
    {
        $this->assertEquals($this->novaCategoria->getNome(), 'categoriaTeste');
    }

    public function test_deve_ser_possivel_alterar_nome_categoria():void
    {
        $this->assertEquals($this->novaCategoria->getNome(), 'categoriaTeste');
        $this->novaCategoria->setNome("nomeAlterado");
        $this->assertEquals($this->novaCategoria->getNome(), 'nomeAlterado');
    }
}
