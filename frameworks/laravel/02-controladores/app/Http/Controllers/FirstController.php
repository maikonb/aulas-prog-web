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

    public function productsViewParams() {
        $products = [
            ['id' => 1, 'name'=>'Notebook'],
            ['id' => 2, 'name'=>'Printer'],
            ['id' => 3, 'name'=>'Mouse'],
            ['id' => 4, 'name'=>'Keyboard']                
        ];
        $title = 'Report - All Products';
        
        return view('products_params', compact(['products', 'title']));

        /*
        return view('products_params', [
            'products' => [
                ['id' => 1, 'name'=>'Notebook'],
                ['id' => 2, 'name'=>'Printer'],
                ['id' => 3, 'name'=>'Mouse'],
                ['id' => 4, 'name'=>'Keyboard']                
            ],
            'title' => 'Report - All Products'
        ]);
        */
    }
}
