<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\ChildCategory;
use App\Models\Color;

use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\productSize;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductDatatable $productDataTable)
    {

        return $productDataTable->render('admin.product.index',[$productDataTable]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();
        $color = Color::all();

        return view('admin.product.create')->with(['parentCategories' => $parentCategories,
    'childCategories'=>$childCategories,
    'color'=>$color ]
    );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StoreProductRequest $storerequest):RedirectResponse
    {




        try {
               $validatedData =  $storerequest->validated();
               $product = Product::create($validatedData);

             // Convert color array to JSON before storing
             $validatedData['color'] = $request->input('color_id', []);
          if(!empty($request->size))
          {



            foreach($request->size as $size)
            {

                if(!empty($size['name']))
                {

                $saveSize = new productSize;
                 $saveSize->name = $size['name'];
                 $saveSize->price = !empty($size['price']) ? $size['price'] : 0;
                 $saveSize->product_id = $product->id;
                $saveSize->save();
                }


            }
          }





            //  dd($p);
            if (isset($request->image)) {
                $product->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('product.image');
            }
            if ($product) {
                return redirect()->route('product.index')->withSuccess('Product successfully created');
            } else {
                return back()->withError($product->getMessage());
            }
        } catch (Exception $ex) {
            // dd($ex->getMessage());
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product):View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();
        $color = Color::all();
        $size =productSize::all();
        return view('admin.product.edit')->with(
            [
                 'product' => $product,
                 'childCategories' =>$childCategories,
                 'parentCategories' => $parentCategories,
                 'color' => $color,
                 'size' => $size,
            ]
            );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UpdateProductRequest $updateProductRequest, Product $product):RedirectResponse
    {


          try{
              $product->update($updateProductRequest->validated());

              foreach ($request['size'] as $sizeId => $sizeData) {
                // /  dd($request['size']);
                $name = $sizeData['name'];
                $price = $sizeData['price'];

                // Check if a ProductSize instance with this ID exists
                $productSize = ProductSize::find($sizeId);

                if ($productSize) {
                    // Update existing ProductSize instance
                    $productSize->name = $name;
                    $productSize->price = $price;
                    $productSize->save();
                } else {
                    // Create new ProductSize instance
                    $productSize = new ProductSize();
                    $productSize->product_id = $product->id; // Associate with the product
                    $productSize->name = $name;
                    $productSize->price = $price;
                    $productSize->save();
                }
            }
            if(isset($request['image']) ==null) {

                $product->clearMediaCollection('product.image');
                // dd($product);
            } else{
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('product.index')->withSuccess('Product Updated Successfully');
                }
                $product->media()->delete();
                $product->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('product.image');
            }
            if($product) {
                return redirect()->route('product.index')->withSuccess('Product successfully Updated');
            }
          }
          catch(Exception $ex) {
            return back()->withError($ex->getMessage());
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product):RedirectResponse
    {
        try {
            $product->media()->delete();
            $product->delete();
            return redirect()->back()->withSuccess('Product deleted Successfully');
        } catch (Exception $ex) {
            return back()->withError("something went wrong !");
        }
    }
}
