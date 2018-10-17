<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vox\Treinamento\Exercicio1\Model;

use Vox\Treinamento\Exercicio1\Interfaces\AdicionalInterface;
use Vox\Treinamento\Exercicio1\Interfaces\ProdutoInterface;

/**
 * Description of Cafe
 *
 * @author Tony Morais<tony@voxtecnologia.com.br>
 */
class Cafe implements ProdutoInterface
{
    /**
    * @var string
    */

    protected $descricao;
    /**
    * @var float
    */

    protected $preco;
    /**
     * @var \ArrayObject
     */
    protected $adicionais;

    /**
    * @param AdicionalInterface $adicional
    * @return $this
    */
    public function addAdicional(AdicionalInterface $adicional)
    {
        $this->adicionais->append($adicional);

        return $this;
    }

    function __construct()
    {
        $this->descricao = "Café";
        $this->preco = 0.50;
        $this->adicionais = new \ArrayObject();
    }
    
    public function calcValor()
    {
        $preco = $this->preco;

        foreach ($this->adicionais as $adicional) {
            $preco += $adicional->getPreco();
        }
        
        return $preco;
    }
    
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

}
