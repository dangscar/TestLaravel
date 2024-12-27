<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        //Insert Data
        // DB::table('users')->insert
        // (
        //     [
        //         [
        //             'name' => 'Artik',
        //             'email' => 'jartu@gmail.com',
        //             'password' => '1234'
        //         ],
        //         [
        //             'name' => 'Jhoan',
        //             'email' => 'jhoan@gmail.com',
        //             'password' => '1234'
        //         ]
        //     ]
        // );

        //Get Data From DB
        // $users = DB::table('users')->where('email', 'jaratu@gmail.com')->where('id', 6)->first();
        //$users = DB::table('users')->where('id','>', 1)->get();

        //Update Data From DB
        // DB::table('users')->where('id', 6)->update([
        //     'name' => 'Dang Kotlin Android',
        //     'email' => 'kotlin@gmail.com'
        // ]);

        // $blogs = DB::table('blogs')->select('title')->get();
        // $blogs = DB::table('blogs')->pluck('title', 'id');
        // return $blogs;


        //Delete Data From DB
        //DB::table('users')->where('id', '>', 1)->delete();

        $product = DB::table('products')->max('price');
        return $product;

        return view('welcome');
    }

    function showAboutPage(): View
    {
        return view('app');
    }
}
