<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\Service;
use Illuminate\Http\Request;
use App\Models\Math;
class CalculateController extends Controller
{
    public function index(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');
        $a = is_numeric($a) ? (float) $a : 0;
        $b = is_numeric($b) ? (float) $b : 0;
        $c = is_numeric($c) ? (float) $c : 0;
        $results = Service::solve($a, $b, $c);
        $math = new Math();
        $math->a = $a;
        $math->b = $b;
        $math->c = $c;
        $math->D = $results['D'];
        $math->X1 = $results['X1'];
        $math->X2 = $results['X2'];
        $math->X1 = ($math->X1 == -0) ? 0 : $math->X1;
        $math->X2 = ($math->X2 == -0) ? 0 : $math->X2;
        if ($results['D'] !== null && $results['X1'] !== null && $results['X2'] !== null) {
            $math->save();
        }else{
            echo'Error';
        }

        return response()->json($results);
    }
}