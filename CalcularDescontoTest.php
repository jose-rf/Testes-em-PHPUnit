<?php
use PHPUnit\Framework\TestCase;
require_once 'funcoes.php';

class CalcularDescontoTest extends TestCase
{
    public function testValorInvalido()
    {
        $this->assertEquals("Valor inválido", calcularDesconto(-50, 'regular'));
    }

    public function testCategoriaPremium()
    {
        $this->assertEquals(80.0, calcularDesconto(100, 'premium'));
    }

    public function testCategoriaRegular()
    {
        $this->assertEquals(180.0, calcularDesconto(200, 'regular'));
    }

    public function testCategoriaNovo()
    {
        $this->assertEquals(285.0, calcularDesconto(300, 'novo'));
    }

    public function testCategoriaInvalida()
    {
        $this->assertEquals(400.0, calcularDesconto(400, 'vip'));
    }
}
