<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vox\Treinamento\Exercicio1\Model;
use Vox\Treinamento\Exercicio1\Interfaces\AdicionalInterface;

/**
 * Description of Leite
 *
 * @author Tony Morais<tony@voxtecnologia.com.br>
 */
class Creme implements \Vox\Treinamento\Exercicio1\Interfaces\AdicionalInterface
{
    protected $descricao;
    protected $preco;
    
    public function __construct()
    {
        $this->descricao = 'Creme';
        $this->preco = 0.50;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

}
