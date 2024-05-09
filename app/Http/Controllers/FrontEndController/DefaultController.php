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
        $products = Product::inRandomOrder()->limit(4)->get(); // Use inRandomOrder() instead of get()->random(4)

        return view('frontend.Categories')->with([
            'products' => $products,
            'parentCategories' => $parentCategories,
            'childCategories' => null, // Set childCategories to null or an empty array initially
        ]);
    }

    public function category(Request $request)
    {
        $parentCategory = parentCategory::where('id', $request->id)->get();
        $childCategory = ChildCategory::where('parent_category_id', $request->id)->get();
        $products = Product::where('parent_category_id', $request->id)->inRandomOrder()->limit(4)->get(); // Use inRandomOrder() instead of get()->random(4)

        return view('frontend.Categories')->with([
            'parentCategory' => $parentCategory,
            'products' => $products,
            'childCategories' => $childCategory,
            'parentCategories' => null, // Set parentCategories to null here
        ]);
    }

    //   Product By ParentCategory

  public function productByParent(Request $request)
{
    $categoryId = $request->id;

        // Fetch the parent category
        $category = ParentCategory::findOrFail($categoryId);

        // Fetch products associated with the parent category using pagination
        $products = Product::where('parent_category_id', $categoryId)
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Paginate with 10 products per page
    // Fetch related products (example: fetching 10 latest products)
    $relatedProducts = Product::orderBy('created_at', 'desc')
                              ->limit(10)
                              ->get();

    return view('frontend.productByCategory')->with([
        'products' => $products,
        'relatedProduct' => $relatedProducts,
        'category' => $category,
    ]);
}


}
