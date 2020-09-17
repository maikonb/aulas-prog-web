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

    public function productsInfo($index=null) {
        $products = [
            ['id' => 110, 'name'=>'Notebook', 'description' => "Descripton about Notebook"] ,
            ['id' => 120, 'name'=>'Printer',  'description' => "Descripton about Printer"] ,
            ['id' => 130, 'name'=>'Mouse',    'description' => "Descripton about Mouse"] ,
            ['id' => 140, 'name'=>'Keyboard', 'description' => "Descripton about Keyboard"] 
        ];
        $title = 'Report - All Products';
        $selected = (($index!=null) && ($index < count($products))) ?  
            $products[ $index ] : null;
        return view('products_info', 
            compact(['products', 'title', 'selected']));
    }
}
