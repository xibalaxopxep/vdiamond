@extends('frontend.layouts.master')
@section('content') 
<style type="text/css">
    .btn-filter{
        background: #FFE1CE;
        border-radius: 5px;
        font-family: Open Sans;
        font-style: normal;
        font-weight: normal;
        font-size: 15px;
        line-height: 20px;
        text-transform: capitalize;
        color: #000000;
        height: 38px;
    }
</style>
    <!-- Ec catalog page -->
    <section class="ec-page-content section-space-p">
        <input type="hidden" class="product-key" value="{{$search_key}}" name="">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex sort-price">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="row col-md-4 ml-1 mr-1">
                                <button data-type="ban_chay" type="button" class="btn btn-filter ">Bán chạy</button>
                                </div>
                                <div class="row col-md-4  mr-1">
                                <button data-type="tra_gop" type="button" class="btn btn-filter" >Trả góp</button>
                                </div>
                            
                                <button data-type="khuyen_mai" type="button" class="btn btn-filter col-md-4  ">Khuyến mãi</button>
                            
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4 ec-sort-select">
                            <span style="color: black !important; font-style: normal; font-weight: normal; font-size: 14px;" class="sort-by">Lọc</span>
                            <select style="color: black;" name="ec-select" class="sort-by-price" id="ec-select">
                                    <option value="0" selected disabled>--Xếp theo--</option>
                                    <option value="1">Giá thấp đến cao</option>
                                    <option value="2">Giá cao đến thấp</option>
                                </select>  
                        </div>

                    </div>
                    <div style="display: none;" class="row col-md-0">
                        <div class="col-md-6 col-6">
                            <select>
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                            </select>    
                        </div>
                        <div class="col-md-6 col-6">
                            <select>
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                            </select>    
                        </div>
                        <div class="col-md-6 col-6">
                            <select>
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                            </select>    
                        </div>
                        <div class="col-md-6 col-6">
                            <select >
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                            </select>    
                        </div>
                    </div> 
                    <div style="display: none;" class="row">
                        <div class="form-check col-4">
                          <input style="width: 15px; height: 15px;" type="checkbox" value="" id="">
                          <label class="form-check-label" for="flexCheckDefault">
                            Default
                          </label>
                        </div>
                        <div class="form-check col-4">
                          <input style="width: 15px; height: 15px;" type="checkbox" value="" id="">
                          <label class="form-check-label" for="flexCheckDefault">
                            Default
                          </label>
                        </div>
                        <div class="form-check col-4">
                          <input style="width: 15px; height: 15px;" type="checkbox" value="" id="">
                          <label class="form-check-label" for="flexCheckDefault">
                            Default
                          </label>
                        </div>
                    </div> 

                    <!-- Shop Top End -->

                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner">
                            <div class="row list-product">
                               @foreach($products as $product)
                               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{route('product.detail', $product->alias)}}" class="image">
                                                    <img style="width: 100%; height:auto; object-fit: cover;" class="main-image"
                                                        src="{{url($product->image)}}" alt="Product" />
                                                   
                                                </a>
                                               <!--  <span class="percentage">20%</span> -->
                                                
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{route('product.detail', $product->alias)}}">{{$product->title}}</a></h5>
                                            <span class="model">{{$product->title}}</span>
                                            <span style="justify-content: center;" class="ec-price">
                                                <span class="old-price">{{$product->getPrice()}}</span>
                                                <span class="new-price">{{$product->getSalePrice()}}</span>
                                            </span>
                                             <span style=" display: none;" class="ec-price-mobile">
                                                <p class="new-price">{{$product->getSalePrice()}}</p>
                                                <p class="old-price">{{$product->getPrice()}}</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <!-- <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                            </ul>
                        </div> -->
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
                
<!-- Sidebar Area Start -->
<div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12 hidden-xs order-lg-first order-md-last">
    <div class="ec-sidebar-wrap">
      
        <!-- Sidebar Category Block -->
        @foreach($categories as $key => $category)
        <div class="ec-sidebar-block">
            <div class="ec-sb-title">
                <h3 class="ec-sidebar-title mb-3">{{$category->name}}</h3>
            </div>
            <div class="ec-sb-block-content">
                <ul>
                    @foreach($category as $cat)
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input data-type="1" value="{{$cat->id}}" type="checkbox" value="" name="cat" /><a href="#">{{$cat->title}}</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach

        @foreach($attributes as $key => $attribute)
        <div class="ec-sidebar-block">
            <div class="ec-sb-title">
                <h3 class="ec-sidebar-title mb-3">{{$attribute->name}}</h3>
            </div>
            <div class="ec-sb-block-content">
                <ul>
                    @foreach($attribute as $attr)
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input data-type="2" value="{{$attr->id}}" type="checkbox" value="" name="attr"/><a href="#">{{$attr->title}}</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
        @endforeach
        <!-- Sidebar Color item -->
       <!--  <div class="ec-sidebar-block ec-sidebar-block-clr">
            <div class="ec-sb-title">
                <h3 class="ec-sidebar-title">Color</h3>
            </div>
            <div class="ec-sb-block-content">
                <ul>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#78a4fc;"></span></div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#ff8b9e;"></span></div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#3d3d3d;"></span></div>
                    </li>
                    <li class="active">
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#9fffad;"></span></div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#ff8367;"></span></div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#f691ff;"></span></div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#ffc601;"></span></div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#600ad6;"></span></div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#09e3db;"></span></div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item"><span
                                style="background-color:#0bc27f;"></span></div>
                    </li>
                </ul>
            </div>
        </div>
      -->
    </div>
</div>

            </div>
        </div>
    </section>

    
    @stop