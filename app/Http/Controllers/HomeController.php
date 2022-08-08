<?php

namespace App\Http\Controllers;

use App\Models\Twoot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @param Request $request the request object
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $twoots = Twoot::all()->sortByDesc('id');
        return view('welcome', ['twoots' => $twoots]);
    }
}
