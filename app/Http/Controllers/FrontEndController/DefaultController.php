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

        $categories = ParentCategory::with('childCategories')->get();
        $chilCategory = ChildCategory::get();
        return view('frontend.index')->with([
            'products' => $products,
            'parentCategories' => $categories,
            'childCategories' => $chilCategory

        ]);

    }

    // All Parent CAtegories
    public function parentCategory()
    {
        $parentCategories = ParentCategory::orderBy('created_at', 'desc')->get();
        $product = Product::get()->random(4);
        $childCategories = '';

        return view('frontend.Categories')->with([
            'products' => $product,
            'parentCategories' => $parentCategories,
            'childCategories' => $childCategories
        ]);


    }

    // Child Cate by Parent Category

    public function category(Request $request){

        $childCategory = ChildCategory::where('parent_category_id', $request->id)->get();

        $product = Product::where('parent_category_id', $request->id)->get()->random(4);

        return view('frontend.Categories')->with([
            'products' => $product,
            'childCategories' => $childCategory,

        ]);

    }

}
