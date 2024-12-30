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
        //Create data in db
        // $user = new User();
        // $user->name = 'DangAndroid';
        // $user->email = 'dangAdnroAdnro@gmail.com';
        // $user->password = 'dang';
        // $user->save();

        // $product = new Product();
        // $product->name = 'Car';
        // $product->description = 'This is a des';
        // $product->price = 200;
        // $product->save();

        //Read
        // $users = User::all();
        // foreach($users as $user) {
        //     echo $user->name . '---' . $user->email;
        //     echo "<br>";
        // }

        //Update
        // $user = User::where('id', 1)->first();
        // $user->email = 'Dangrtx@gmail.com';
        // $user->password = 'kotlin';
        // $user->save();

        //Delete
        // $user = User::findOrFail(1);
        // $user->delete();

        // User::create([
        //     'name' => 'test user 123',
        //     'email' => 'test123@gmail.com',
        //     'password' => '1234',
        //     'remember_token' => 'test1234'
        // ]);

        // User::insert([
        //     [
        //         'name' => 'test user 2',
        //         'email' => 'testuser2@gmail.com',
        //         'password' => '1234'
        //     ],
        //     [
        //         'name' => 'test user 3',
        //         'email' => 'testuser3@gmail.com',
        //         'password' => '1234'
        //     ]
        // ]);

        // $product = Product::where(['id' => 1, 'price' => 305])->get();
        // $product = Product::where('name', 'NOT LIKE', '%Car%')->orWhere('description', 'LIKE', '%ab%')->get();
        // $product = Product::whereIn('id', [1, 2, 3])->get();
        // $product = Product::whereBetween('price', [100, 400])->get();
        // return $product;

        // $blogs = MyBlog::Active()->get();
        // return $blogs;

        //$product = Product::withTrashed()->get();
        // $product = Product::onlyTrashed()->get();
        // return $product;

        // $product = Product::withTrashed()->find(4)->restore();
        // $product = Product::withTrashed()->find(4);
        // $product->forceDelete();

        return view('welcome');
    }

    function showAboutPage(): View
    {
        return view('app');
    }
}
