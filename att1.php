<?php

declare(strict_types=1);

class Funcionario
{
    public function __construct(
        public string $nome,
        public float $salario
    ) {}

    public function calcularBonus(): float
    {
        return $this->salario * 0.10;
    }
}

class Gerente extends Funcionario {}

class Desenvolvedor extends Funcionario {}

$gerente = new Gerente('João', 20000.00);
$desenvolvedor = new Desenvolvedor('Maria', 8000.00);

echo "Nome: {$gerente->nome}\n";
echo "Cargo: " . $gerente::class . "\n";
echo "Salário: {$gerente->salario}\n";
echo "Bônus: {$gerente->calcularBonus()}\n\n";

echo "Nome: {$desenvolvedor->nome}\n";
echo "Cargo: " . $desenvolvedor::class . "\n";
echo "Salário: {$desenvolvedor->salario}\n";
echo "Bônus: {$desenvolvedor->calcularBonus()}\n";