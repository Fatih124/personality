<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $count = DB:: table('duties')->get();
$drt = count($count);
        return view('layouts.index', ['count'=>$count, 'drt'=>$drt]);
    }

    public function logout()
    {
        return view(('auth.login'));
        Auth::logout();


    }
}
