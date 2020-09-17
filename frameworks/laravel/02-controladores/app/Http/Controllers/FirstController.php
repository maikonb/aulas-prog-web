<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function products() 
    {
        echo "<h1>Products list:</h1>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Printer</li>";
        echo "<li>Mouse </li>";
        echo "<li>Keyboard </li>";
        echo "</ol>";        
    }    

    public function productsView() {
        return view('products');
    }
}
