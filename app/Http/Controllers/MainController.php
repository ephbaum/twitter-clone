<?php

namespace App\Http\Controllers;

use App\Models\Twoot;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $twoots = Twoot::all()->sortByDesc('id');
        return view('dashboard', ['twoots' => $twoots]);
    }
}
