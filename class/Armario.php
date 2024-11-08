<?php
class Armario {
    private array $gavetas;

    public function __construct() {
        $this->gavetas = [];
    }

    public function adicionarGaveta(Gaveta $gaveta): bool {
        if (empty($gaveta)) {
            return false;
        } else {
            $this->gavetas[] = $gaveta;
            return true;
        }
    }

    public function removerGaveta($indice): bool {
        if (isset($this->gavetas[$indice])) {
            unset($this->gavetas[$indice]);
            return true;
        } else {
            return false;
        }
    }

    public function listarGavetas(): array {
        return $this->gavetas; 
    }
}
