<?php

declare(strict_types=1);

class Produto
{
    public function __construct(
        public string $nome,
        public float $preco,
        public int $quantidade = 0
    ) {}

    public function adicionarEstoque(int $qtd): void
    {
        if ($qtd <= 0) {
            throw new InvalidArgumentException('A quantidade a adicionar deve ser maior que zero.');
        }

        $this->quantidade += $qtd;
    }

    public function removerEstoque(int $qtd): bool
    {
        if ($qtd <= 0 || $qtd > $this->quantidade) {
            return false;
        }

        $this->quantidade -= $qtd;
        return true;
    }

    public function calcularValorTotal(): float
    {
        return $this->preco * $this->quantidade;
    }
}