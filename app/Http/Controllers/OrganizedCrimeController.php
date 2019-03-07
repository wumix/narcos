<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizedCrimeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // We could add middleware specific for this controller like so:
        // $this->middleware('auth');
    }

    /**
     * Show the organized crime view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        return view('menu.organized-crime.index');
    }
}