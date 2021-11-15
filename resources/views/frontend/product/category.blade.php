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

    .ec-select-inner{
        width: 100% !important;
    }

    .ec-select-inner select{

        min-height: 32px !important;
        font-family: Open Sans !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 14px !important;
        line-height: 20px !important;
        color: black !important;
        /* or 143% */
        color: #585858;
    }

    .placeholder{
        font-style: italic !important;
        color: #636c72;
    }

    .in_stock{
        background: rgba(75, 170, 1, 0.05);
        border: 0.5px solid #4BAA01;
        box-sizing: border-box;
        border-radius: 5px;
        font-family: Open Sans;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 20px;
        /* or 143% */
        color: #4BAA01;
    }

      .out_stock{
        background: #EBF2FF;
        border: 0.5px solid #2264D1;
        box-sizing: border-box;
        border-radius: 5px;
        font-family: Open Sans;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 20px;
        /* or 143% */


        color: #2264D1;
    }
    .form-check.col-4{
        padding-left: 14px !important;

    }

    .form-check.col-4 button{
        width: 100%;
    }

    @media only screen and (max-width: 767px) {
        .filter-mobile{
            display: block !important;
        }
    }


</style>
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb" style="height:130px; background-image: url('/assets/images/background/breakcum.png')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <ul style="float:left; margin-top: 35px;" class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{route('home.index')}}">Trang chủ</a></li>
                                <li class="ec-breadcrumb-item "><a href="#">{{$category->title}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec catalog page -->
    <section class="ec-page-content section-space-p">
        <input type="hidden" class="product-alias" value="{{$alias}}" name="">
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

                    <div class="filter-mobile" style="display: none;">
                    <div style="" class="row">
                        @foreach($categories as $key => $category)
                        <div class="col-md-6 col-6 mb-2">
                            <div  class="ec-select-inner">
                            <select data-type="1" class="form-control form-control-sm select-cat" style="background: #F7F7F7;">
                                    <option class="placeholder" selected>{{$category->name}}</option>
                                    @foreach($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach
                            </select>    
                            </div>
                        </div>
                        @endforeach

                        @foreach($attributes as $key => $attribute)
                        <div class="col-md-6 col-6 mb-2">
                            <div  class="ec-select-inner">
                            <select  data-type="2" class="form-control form-control-sm select-attr" style="background: #F7F7F7;">
                                    <option class="placeholder" selected >{{$attribute->name}}</option>
                                    @foreach($attribute as $attr)
                                    <option value="{{$attr->id}}">{{$attr->title}}</option>
                                    @endforeach
                                    
                            </select>    
                            </div>
                        </div>
                        @endforeach

                        <div class="col-md-6 col-6 mb-2">
                            <div  class="ec-select-inner">
                            <select class="form-control form-control-sm sort-by-price" style="background: #F7F7F7;">
                                    <option value="0" class="placeholder" selected disabled>Xếp theo</option>
                                    <option value="1">Từ thấp đến cao</option>
                                    <option value="2">Từ cao đến thấp</option>
                            </select>    
                            </div>
                        </div>

                    </div> 
  

                   <!--  <div style="" class="row">
                       <div class="col-6 ">
                          <button style="width: 100%" data-type="ban_chay" type="button" class="btn btn-filter in_stock">Bán chạy</button>
                        </div>
                        <div class="col-6 ">
                          <button style="width: 100%" data-type="ban_chay" type="button" class="btn btn-filter out_stock">Bán chạy</button>
                        </div>
                    </div>  -->

                    <div style="" class="row mb-8">
                        <div class="form-check col-4">
                          <button style="" data-type="ban_chay" type="button" class="btn btn-filter col-md-4  ">Bán chạy</button>
                        </div>
                        <div class="form-check col-4">
                          <button data-type="tra_gop" type="button" class="btn btn-filter col-md-4  ">Trả góp</button>
                        </div>
                        <div class="form-check col-4">
                          <button data-type="khuyen_mai" type="button" class="btn btn-filter col-md-4  ">Khuyến mãi</button>
                        </div>
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
                                                    <img style="width: 100%; height: auto; object-fit: cover;" class="main-image"
                                                        src="{{url($product->image)}}" alt="Product" />
                                                   
                                                </a>
                                               <!--  <span class="percentage">20%</span> -->
                                                
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{route('product.detail', $product->alias)}}">{{$product->title}}</a></h5>
                                            <span class="model">Model: {{$product->model}}</span>
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