<?php

require_once('Item.php');
class Objeto extends Item{
    private float $pesoObjeto;

    public function __construct( string $nome, string $descricao, float $peso){
    $this->setPesoObjeto($peso);
    parent::__construct($nome, $descricao);
    }

    public function getPesoObjeto(): string{
        return $this->peso;
    }

    public function setPesoObjeto( float $peso){
        if($peso<=0){
            $this->peso="invalido";
        } else{
            $this->peso=$peso;
        }
    }
}