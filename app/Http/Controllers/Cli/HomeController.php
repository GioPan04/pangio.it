<?php

namespace App\Http\Controllers\Cli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('cli.home');
    }
}
