<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\commodity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $commoditys = commodity::orderBy('created_at', 'desc')->get();
        return view('commoditys.index', ['commoditys' => $commoditys]);
        // return view('commoditys/index');
    }
}
