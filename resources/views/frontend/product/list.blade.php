@extends('frontend.layouts.master')
@section('content') 
    <!-- Ec catalog page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex sort-price">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid active"><img src="assets/images/icons/grid.svg"
                                        class="svg_img gl_svg" alt="" /></button>
                                <button class="btn btn-list"><img src="assets/images/icons/list.svg"
                                        class="svg_img gl_svg" alt="" /></button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-sort-select">
                            <span class="sort-by">Sort by</span>
                            <select name="ec-select" class="" id="ec-select">
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>  
                        </div>

                    </div>
                    <div class="row">
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
                    <div class="row">
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
                            <div class="row">
                               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product/image1.png" alt="Product" />
                                                   
                                                </a>
                                                <span class="percentage">20%</span>
                                                
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                                           
                                            <span class="model">Model: VD123</span>
                                            <span style="justify-content: center;" class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">$22.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product/image1.png" alt="Product" />
                                                   
                                                </a>
                                                <span class="percentage">20%</span>
                                                 
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                                           
                                            <span class="model">Model: VD123</span>
                                            <span style="justify-content: center;" class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">$22.00</span>
                                            </span>
                                            <span style="display: none;" class="sku">Liên hệ</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
                
<!-- Sidebar Area Start -->
<div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12 hidden-xs order-lg-first order-md-last">
    <div class="ec-sidebar-wrap">
      
        <!-- Sidebar Category Block -->
        <div class="ec-sidebar-block">
            <div class="ec-sb-title">
                <h3 class="ec-sidebar-title">Category</h3>
            </div>
            <div class="ec-sb-block-content">
                <ul>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" checked /> <a href="#">clothes</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" /> <a href="#">Bags</a><span class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" /> <a href="#">Shoes</a><span class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" /> <a href="#">cosmetics</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" /> <a href="#">electrics</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" /> <a href="#">phone</a><span class="checked"></span>
                        </div>
                    </li>
                    <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                        <ul>
                            <li>
                                <div class="ec-sidebar-block-item">
                                    <input type="checkbox" /> <a href="#">Watch</a><span
                                        class="checked"></span>
                                </div>
                            </li>
                            <li>
                                <div class="ec-sidebar-block-item">
                                    <input type="checkbox" /> <a href="#">Cap</a><span
                                        class="checked"></span>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item ec-more-toggle">
                            <span class="checked"></span><span id="ec-more-toggle">More
                                Categories</span>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- Sidebar Size Block -->
        <div class="ec-sidebar-block">
            <div class="ec-sb-title">
                <h3 class="ec-sidebar-title">Size</h3>
            </div>
            <div class="ec-sb-block-content">
                <ul>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" value="" checked /><a href="#">S</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" value="" /><a href="#">M</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" value="" /> <a href="#">L</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" value="" /><a href="#">XL</a><span
                                class="checked"></span>
                        </div>
                    </li>
                    <li>
                        <div class="ec-sidebar-block-item">
                            <input type="checkbox" value="" /><a href="#">XXL</a><span
                                class="checked"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar Color item -->
        <div class="ec-sidebar-block ec-sidebar-block-clr">
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
        <!-- Sidebar Price Block -->
        <div class="ec-sidebar-block">
            <div class="ec-sb-title">
                <h3 class="ec-sidebar-title">Price</h3>
            </div>
            <div class="ec-sb-block-content es-price-slider">
                <div class="ec-price-filter">
                    <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250"
                        data-step="10"></div>
                    <div class="ec-price-input">
                        <label class="filter__label"><input type="text" class="filter__input"></label>
                        <span class="ec-price-divider"></span>
                        <label class="filter__label"><input type="text" class="filter__input"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar Price Block -->
        <div class="ec-sidebar-block ec-contact-form">
            <div class="ec-sb-title">
                <h3 class="ec-sidebar-title">Contact With Seller</h3>
            </div>
            <div class="ec-sb-block-content ec-sb-block-form">
                <form action="#">
                    <label for="fname">Your Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.."
                        required="required">

                    <label for="lname">Your Email Id</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your email is.."
                        required="required">

                    <label for="subject">Your Message</label>
                    <textarea id="subject" name="subject" placeholder="Write Messages.." rows="4"
                        required="required"></textarea>

                    <button type="submit" class="btn btn-lg btn-primary" tabindex="0">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </section>
    @stop