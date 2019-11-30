<?php

namespace App\Http\Controllers\message;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class messageController extends Controller
{
    public function index(){
        return view('messages.index');
    }
}
