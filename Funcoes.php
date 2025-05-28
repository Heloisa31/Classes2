<?php

class Funcoes
{
    public $produto;
    public $preco;
    public $quantidade;
    public $estoque;
    public $descricao;

    public function definirProduto($produto)
    {
        $this -> produto = $produto;
    }
    
    public function definirPreco($preco)
    {
        $this -> preco = $preco;
    }

    public function definirQuantidade($quantidade)
    {
        $this -> quantidade = $quantidade;
    }

    public function definirEstoque($estoque)
    {
        $this -> estoque = $estoque;
    }

    public function definirDescricao($descricao)
    {
        $this -> descricao = $descricao;
    }

}