
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

    public function exibirDados(): void
    {
        $cargo = static::class;
        echo "Funcionario: {$this->nome} ({$cargo})\n";
    }
}

class Gerente extends Funcionario
{
    public function calcularBonus(): float
    {
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario
{
    public function calcularBonus(): float
    {
        return $this->salario * 0.15;
    }
}

$gerente = new Gerente('João', 10000.00);
$desenvolvedor = new Desenvolvedor('Maria', 8000.00);

$gerente->exibirDados();
echo "Bônus: {$gerente->calcularBonus()}\n\n";

$desenvolvedor->exibirDados();
echo "Bônus: {$desenvolvedor->calcularBonus()}\n\n";

if ($gerente->calcularBonus() > $desenvolvedor->calcularBonus()) {
    echo "Gerente: bônus maior que Desenvolvedor\n";
}