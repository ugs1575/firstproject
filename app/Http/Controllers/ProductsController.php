<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Welcome to my Laravel 8 course";
        $description = "Created by Gyeongseo";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        print_r(route('products'));

        //compact method
        //return view('products.index', compact('title', 'description'));
    
        //with method
        //return view('products.index')->with('data', $data);

        //directly in the view
        /* return view('products.index', [
            'data' => $data
        ]); */

        return view('products.index');
    }

    public function about(){
        return 'About Us Page';
    }

    public function show($name){
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exit'
        ]);
    }
}
