<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('welcome');
    }

    function showAboutPage(): View {
        return view('app');
    }
}
