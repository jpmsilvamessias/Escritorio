<?php

class Item{
   private string $nome;
   private string $descricao;

   public function __construct($nome, $descricao){
    $this->setNome($nome);
    $this->setDescricao($descricao);
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome( string $nome): void{
        if(empty($nome)){
            $this->nome="invalido";
        } else{
            $this->nome=$nome;
        }
    }

    public function getDescricao(): string{
        return $this->descricao;
    }

    public function setDescricao( string $descricao): void{
        if(empty($descricao)){
            $this->descricao="invalido";
        } else{
            $this->descricao=$descricao;
        }
    }


}