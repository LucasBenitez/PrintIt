<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //$sql = 'SELECT * FROM products';
        //$products = [DB::select($sql)];

        $products = DB::select('SELECT * FROM products');
        return view('products' , compact('products'));
        
    }
}
