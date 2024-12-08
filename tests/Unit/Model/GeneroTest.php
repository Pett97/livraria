<?php

namespace Tests\Feature;

use App\Models\Genero;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GeneroTest extends TestCase
{
  private Genero $novoGenero;

  protected function setUp():void
  {
    parent::setUp();
    $this->novoGenero = new Genero([
        'nome'=>'generoTeste'
    ]);
  }

  public function test_deve_ser_possivel_criar_um_novo_genero():void
  {
    $this->assertEquals($this->novoGenero->getNome(),'generoTeste');
  }

  public function test_deve_ser_possivel_alterar_nome():void
  {
    $this->assertEquals($this->novoGenero->getNome(),'generoTeste');

    $this->novoGenero->setNome('nomeAlterado');

    $this->assertEquals($this->novoGenero->getNome(),'nomeAlterado');
  }
}
