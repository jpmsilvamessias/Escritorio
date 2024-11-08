<?php
class Escritorio {
    private array $armarios;

    public function __construct() {
        $this->armarios = [];
    }

    public function adicionarArmario(Armario $armario): bool {
        if (empty($armario)) {
            return false;
        } else {
            $this->armarios[] = $armario;
            return true;
        }
    }

    public function removerArmario($indice): bool {
        if (isset($this->armarios[$indice])) {
            unset($this->armarios[$indice]);
            return true;
        } else {
            return false;
        }
    }

    public function listaArmarios(): void {
        foreach ($this->armarios as $indice => $armario) {
            echo "Armário {$indice}<br>"; 
        }
    }

    public function auditoria(): void {
        foreach ($this->armarios as $armarioIndex => $armario) {
            echo "Armário {$armarioIndex}<br>";

            $gavetas = $armario->listarGavetas();
            if (!empty($gavetas)) {
                foreach ($gavetas as $gavetaIndex => $gaveta) {
                    echo "  Gaveta {$gavetaIndex}<br>";

                    $itens = $gaveta->listarItens();
                    if (!empty($itens)) {
                        foreach ($itens as $itemIndex => $item) {
                            echo "    Item {$itemIndex} - {$item->getNome()} - {$item->getDescricao()}<br>";
                        }
                    } else {
                        echo "    Nenhum item nesta gaveta.<br>";
                    }
                }
            } else {
                echo "  Nenhuma gaveta neste armário.<br>";
            }
        }
    }
}
