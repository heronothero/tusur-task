<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Math;

class HistoryController extends Controller
{
    public function index()
    {
        $results = Math::all();
        return view('history', compact('results'));
    }
}
