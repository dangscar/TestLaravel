<?php

namespace App\Http\Controllers;

use App\Models\MyBlog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {


        return view('welcome');
    }

    function showAboutPage(): View
    {
        return view('app');
    }
}
