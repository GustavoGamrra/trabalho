PHP
<?php

declare(strict_types=1);



/** @var Funcionario[] $funcionarios */
$funcionarios = [
    new Gerente('João', 10000.00),
    new Desenvolvedor('Maria', 8000.00),
    new Desenvolvedor('Carlos', 6000.00),
    new Gerente('Ana', 12000.00),
];

foreach ($funcionarios as $funcionario) {
    $funcionario->exibirDados();
    echo "Bônus: {$funcionario->calcularBonus()}\n\n";
}