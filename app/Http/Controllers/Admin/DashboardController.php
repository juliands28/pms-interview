<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Supplier;
use App\Unit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function index()
    {
        $suppliers = Supplier::count();
        $units = Unit::count();
        $products = Product::count();
        $categories = Category::count();
        return view('pages.admin.dashboard',[
            'suppliers' => $suppliers,
            'units' => $units,
            'products' => $products,
            'categories' => $categories
        ]);
    }
    
}