<?php

namespace Vox\Treinamento\Exercicio1\Model;

use Vox\Treinamento\Exercicio1\Interfaces\{AdicionalInterface, ProdutoInterface};

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
    /**
     * @return float
     */
    public function calcValor()
    {
        $preco = $this->preco;
        
        foreach ($this->adicionais as $adicional) {
            $preco += $adicional->getPreco();
        }
        
        return $preco;
    }
    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
    /**
     * @return float
     */
    public function getPreco()
    {
        return $this->preco;
    }
    /**
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        
        return $this;
    }
    /**
     * @return $this
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
        
        return $this;
    }
}
