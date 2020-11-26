<?php declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => 5000,
];

function ExibeSaldoCorrentista(string $nome, array $saldos)
{
    if (array_key_exists($nome, $saldos)) {
        ExibeSaldo($nome, $saldos);
    
    } else {
    
        ExibeErro();
    }
    
}

function ExibeSaldo(string $nome, array $saldos)
{
    echo "<p>O saldo do $nome é: {$saldos[$nome]}</p>";
}

function ExibeErro()
{
    echo "<p>Correntista não existente.</p>";
}

ExibeSaldoCorrentista('Giovanni',$saldos);

// <?php declare(strict_types=1);

// $saldos = [
//     'Giovanni' => 3000,
//     'Erika' => 5000,
// ];

// function ExibeSaldoCorrentista(string $nome, array $saldos)
// {
//     if (array_key_exists($saldo, $saldos)) {
//         ExibeSaldo($saldo, $saldos);
    
//     } else {
    
//         ExibeErro();
//     }
    
// }

// function ExibeSaldo(string $nome, array $saldos)
// {
//     echo "<p>O saldo do $nome é: {$saldos[$nome]}</p>";
// }

// function ExibeErro()
// {
//     echo "<p>Correntista não existente.</p>";
// }