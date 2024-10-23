<?php
namespace App\Models;

class Calculadora
{
    public function sumar(int $a, int $b): int
    {
        return $a + $b;
    }

    public function restar(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiplicar(int $a, int $b): int
    {
        return $a * $b;
    }

    public function dividir(int $a, int $b): float
    {
        return $a / $b;
    }
}