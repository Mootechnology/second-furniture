<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use App\Models\ChildCategory;
use App\Models\ParentCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class DefaultController extends Controller
{

    public function index(){

        $products = Product::orderByDesc('created_at')->take(20)->get();
       
        $category = ParentCategory::all();
        $chilCategory = ChildCategory::all();
        return view('frontend.index')->with([
            'products' => $products,
            'parentCateogry' => $category,
            'childCategories' => $chilCategory

        ]);

    }
}
