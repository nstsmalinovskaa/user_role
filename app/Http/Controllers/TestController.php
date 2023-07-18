<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function test(Request $r)
    {
        $r->session()->start();
        Session::put('qwe', 1);
    }
}
