<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Math;

class CalculateController extends Controller
{
    public function index(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');
        $D = 0;
        $X1 = 0;
        $X2 = 0;

        if ($a !== null && $b !== null && $c !== null) {
            $D = $b**2 - 4 * $a * $c;
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
        } elseif ($a !== null && $b !== null) {
            $D = "Неполное квадратное уравнение";
            $X1 = 0;
            $X2 = -$b / $a;
        } elseif ($a !== null && $c !== null) {
            $D = "Неполное квадратное уравнение";
            if ((-$c / $a) > 0) {
                $X1 = sqrt(-$c / $a);
                $X2 = -sqrt(-$c / $a);
            } else {
                $X1 = sqrt(-$c / $a) * 'i';
                $X2 = -sqrt(-$c / $a) * 'i';
            }
        } elseif ($a !== null) {
            $D = "Неполное квадратное уравнение";
            $X1 = 0;
            $X2 = 0;
        }

        $math = new Math();
        $math->a = $a;
        $math->b = $b;
        $math->c = $c;
        $math->D = $D;
        $math->X1 = $X1;
        $math->X2 = $X2;
        $math->save();

        return response()->json([
            'D' => $D,
            'X1' => $X1,
            'X2' => $X2
        ]);
    }
}