<?php
require_once('Item.php');
class Documento extends Item{
  private string $dataCriacao;
  
  public function __construct(string $nome , string $descricao, string $data){
    $this->setDataCriacao($data);
    parent::__construct($nome,$descricao);
  }

  public function getDataCriacao(): string{
    return $this->data;
  }

  public function  setDataCriacao(  string $data): void{
    if(empty($data)){
      $this->data="data invalida";
    } else{
     $this->data=$data;
    }
  }

}