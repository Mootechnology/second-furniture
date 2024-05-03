@extends('frontend.layout.app')
@section('customCss')
<style>
    .d-flex {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .bg-image a {
        font-size: large;


    }

    .bg-image a:hover {
        text-decoration: none;
        cursor: pointer;
        font-weight: bold;

    }
</style>
@endsection
@section('content')
<!-- START:: TOP Banner -->
<section class="top-banner">
    <div class="top-banner-img">
        <img src="{{asset('./frontend/assets/images/breadcrumb1.png')}}" alt="Banner" class="img-fluid">
        <div class="text-container">
            <h2>Cart</h2>
            <p><a href="index.html"> Home </a>> Cart</p>
        </div>
    </div>
</section>
<!-- END:: TOP Banner -->

<div class="section_tittle text-center">
    <h2 class="p-4">Categories</h2>
</div>

<div class="container-fluid d-flex row">
    @if($childCategories->isNotEmpty())
        <!-- Display child categories with images -->
        @foreach($childCategories as $category)
            @php
                $imageUrl = $category->getFirstMediaUrl('childCategory.image');
            @endphp
            <div class="col-md-2 col-5 p-2 bg-image text-center d-flex justify-content-center align-items-center" style="background-image: url('{{ $imageUrl }}'); height: 20vh; margin: 10px; background-size: cover;">
                <a class="text-black">{{ $category->name }}</a>
            </div>
        @endforeach
    @else
        <!-- Display parent categories with images from child categories -->
        @foreach($parentCategories as $category)
            @php
                $childCategoryWithImage = $category->childCategories()->whereHas('media')->first();
                $imageUrl = $childCategoryWithImage ? $childCategoryWithImage->getFirstMediaUrl('childCategory.image') : null;
            @endphp
            <div class="col-md-2 col-5 p-2 bg-image text-center d-flex justify-content-center align-items-center" style="background-image: url('{{ $imageUrl }}'); height: 20vh; margin: 10px; background-size: cover;">
                <a class="text-black">{{ $category->name }}</a>
            </div>
        @endforeach
    @endif
</div>

<!-- START:: Best Seller Product Slider -->
<section class="product_list best_seller">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4">
                <div class="section_tittle text-center">
                    <h2>Products</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">

                    @foreach ($products as $product)


                    <div class="single_product_item">
                        <a href="single-product.html"><img src="{{$product->getFirstMediaUrl('product.image')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>{{$product['name']}}</h4>
                            <h3>${{$product['price']}}</h3>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END:: Best Seller Product Slider -->




<!-- START:: News Letter -->
<section class="subscribe_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated with new offers</h2>
                    <div class="input-group newsletter-container">
                        <input type="text" class="form-control newsletter-input" placeholder="enter email address" aria-label="Recipient's username" aria-describedby="basic-addon2" style="color: black;">
                        <div class="input-group-append newsletter-btn">
                            <a href="#" id="basic-addon2">Subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END:: News Letter -->
@endsection
@section('customJs')
@endsection
