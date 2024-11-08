<?php
class Pasta extends Item {
    private string $categoria;

    public function __construct(string $nome, string $descricao, string $categoria) {
        $this->setCategoria($categoria);
        parent::__construct($nome, $descricao);
    }

    public function getCategoria(): string {
        return $this->categoria; 
    }

    public function setCategoria(string $categoria): void {
        if (empty($categoria)) {
            $this->categoria = "categoria inválida"; 
        } else {
            $this->categoria = $categoria;
        }
    }
}
