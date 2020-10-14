<?php

namespace Vox\Treinamento\Exercicio1\Model;

use Vox\Treinamento\Exercicio1\Interfaces\AdicionalInterface;

/**
 * Description of Leite
 *
 * @author Tony Morais<tony@voxtecnologia.com.br>
 */
class Chocolate implements \Vox\Treinamento\Exercicio1\Interfaces\AdicionalInterface
{
    /**
     * @var string
     */
    protected $descricao;
    /**
     * @var float
     */
    protected $preco;
    
    public function __construct()
    {
        $this->descricao = 'Chocolate';
        $this->preco = 1.00;
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

}
