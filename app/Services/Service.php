<?php
declare(strict_types=1);
namespace App\Services;
class Service
{
    public static function solve(float $a, float $b, float $c): array
    {
        if ($a == null) {
            return [
                'D' => "Ошибка! Введите данные",
                'X1' => "Ошибка! Введите данные",
                'X2' => "Ошибка! Введите данные"
            ];
        }
        
        $D = $b ** 2 - 4 * $a * $c;
        $X1 = 0;
        $X2 = 0;

        if ($a !== 0) {
            if ($D > 0) {
                $X1 = (-$b + sqrt($D)) / (2 * $a);
                $X2 = (-$b - sqrt($D)) / (2 * $a);
            } elseif ($D == 0) {
                $X1 = (-$b + sqrt($D)) / (2 * $a);
            } else {
                $D = "Дискриминант меньше 0";
                $X1 = "Корня не существует";
                $X2 = "Корня не существует";
            }
        } elseif ($b !== 0) {
            $X1 = -$c / $b;
        } elseif ($c !== 0) {
            $D = "Неполное квадратное уравнение";
            if ($c < 0) {
                $X1 = sqrt(-$c);
                $X2 = -sqrt(-$c);
            } else {
                $X1 = sqrt(-$c) . 'i';
                $X2 = -sqrt(-$c) . 'i';
            }
        } else {
            $D = "Неполное квадратное уравнение";
        }

        return [
            'D' => $D,
            'X1' => $X1,
            'X2' => $X2
        ];
    }
}