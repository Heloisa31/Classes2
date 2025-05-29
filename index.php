<?php

require_once "src/Classes2/Funcoes.php";

//Instancia da classe
$prod1 = new Funcoes;
$prod1 -> definirProduto("Suco de uva");
$prod1 -> definirPreco(18.50);
$prod1 -> definirQuantidade(5);
$prod1 -> definirEstoque(20);
$prod1 -> definirDescricao("Uma caixinha de suco de uva natural");
var_dump($prod1);





