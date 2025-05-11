@extends('layouts.master')

@section('styles')

        <!-- glightbox Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">
        
        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Products Details</h1>
                        </div>
                        <div class="ti-btn-list">
                            <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn bg-primary text-white btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: Row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <a href="{{asset('build/assets/images/ecommerce/png/1.png')}}" class="glightbox box border-0 mb-0" data-gallery="gallery1" data-title="Compact Laptop (1/5)" data-type="image" data-draggable="true"> 
                                        <div class="ecommerce-gallery flex text-center">
                                            <span class="badge bg-primarytint2color tag-badge">Featured</span>
                                            <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="image" class="">
                                            <span class="p-4 py-2 rounded-md text-white view-lightbox ">View More Images</span>
                                        </div>
                                    </a>    
                                    <div class="grid grid-cols-12 gap-x-6 ad-gallery">
                                        <div class="xl:col-span-3 col-span-12">
                                            <a href="{{asset('build/assets/images/ecommerce/png/2.png')}}" class="glightbox box" data-gallery="gallery1" data-title="Grey Laptop (2/5)" data-type="image" data-draggable="true">
                                                <img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <a href="{{asset('build/assets/images/ecommerce/png/3.png')}}" class="glightbox box" data-gallery="gallery1" data-title="Litson's Laptop (3/5)" data-type="image" data-draggable="true">
                                                <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <a href="{{asset('build/assets/images/ecommerce/png/4.png')}}" class="glightbox box" data-gallery="gallery1" data-title="Prism Laptop (4/5)" data-type="image" data-draggable="true">
                                                <img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <a href="{{asset('build/assets/images/ecommerce/png/5.png')}}" class="glightbox box" data-gallery="gallery1" data-title="Trends Laptop (5/5)" data-type="image" data-draggable="true">
                                                <img src="{{asset('build/assets/images/ecommerce/png/5.png')}}" alt="image" >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer text-center flex gap-2 flex-wrap justify-center">
                                    <a href="{{url('checkout')}}" class="ti-btn bg-primary text-white min-w-[9.375rem] me-2"><i class="bx bx-credit-card text-[1rem] align-middle"></i> Buy Now</a>
                                    <a href="{{url('cart')}}" class="ti-btn bg-primarytint1color text-white min-w-[9.375rem]"><i class="bx bx-cart-add text-[1rem] align-middle"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-7 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div>
                                        <p class="text-xl font-semibold mb-4">TechPro X15 Elite - 2024 Edition 15.6" 4K UHD Touchscreen Laptop with Intel i7, 16GB RAM, 1TB SSD, GTX 1650 Ti, Windows 10 Home</p>
                                        <p class="text-[1rem] mb-3">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star-half text-warning"></i>
                                            <span class="font-medium ms-1 text-[13px]">4.6<a class="text-textmuted dark:text-textmuted/50 ms-2" href="javascript:void(0);">(3.1k Reviews)</a></span>
                                        </p>
                                        <div class="flex gap-4 items-center mb-3">
                                            <p class="mb-1"><span class="h2 font-semibold">$1,899</span></p>
                                            <div class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">
                                                <p class="mb-0"> <s> $2,599</s></p>
                                                <p class="mb-0 text-info font-medium text-[15px]">Don't Miss Out! Save Up to 42% OFF!</p>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-[15px] font-semibold mb-1">Description :</p>
                                            <p class="text-textmuted dark:text-textmuted/50 mb-0 text-[13px]">
                                                Experience unrivaled performance with the TechPro X15 Elite - 2024 Edition laptop. Featuring a stunning 4K UHD touchscreen display, powerful Intel Core i7 processor, 16GB RAM, and 1TB SSD storage.
                                            </p>
                                        </div>
                                        <div class="flex gap-4 items-center mb-3 justify-between flex-wrap">
                                            <div class="flex gap-4 items-center">
                                                <p class="text-[15px] font-semibold mb-1">RAM :</p>
                                                <div class="ti-btn bg-light">8GB</div>
                                                <div class="ti-btn bg-light">16GB</div>
                                            </div>
                                            <div class="flex gap-4 items-center">
                                                <p class="text-[15px] font-semibold mb-1">SSD Storage :</p>
                                                <div class="ti-btn bg-light">256GB</div>
                                                <div class="ti-btn bg-light">1TB</div>
                                            </div>
                                            <div class="flex gap-4 items-center">
                                                <a href="javascript:void(0);" class="mb-0 text-primarytint3color font-medium underline"><i class="ri-coupon-2-line me-1 align-middle inline-block"></i>Get a Coupon</a>
                                            </div>
                                        </div>
                                        <div class="flex gap-2 items-center mb-4 flex-wrap">
                                            <p class="mb-1 text-success py-1 px-2 bg-success/10 rounded-full text-xs"><i class="ri-checkbox-circle-fill me-1 align-middle inline-block"></i> Instock</p>
                                            <p class="mb-1 text-success py-1 px-2 bg-success/10 rounded-full text-xs"><i class="ri-checkbox-circle-fill me-1 align-middle inline-block"></i> Free Shipping</p>
                                            <p class="mb-1 text-success py-1 px-2 bg-success/10 rounded-full text-xs"><i class="ri-checkbox-circle-fill me-1 align-middle inline-block"></i> Easy Return</p>
                                        </div>
                                        <div class="flex gap-5 items-center mb-4">
                                            <div class="flex gap-4 items-center">
                                                <p class="text-[15px] font-semibold mb-1">Quantity :</p>
                                                <div class="product-quantity-container ecommerce-page-quantity">
                                                    <div class="flex items-center rounded flex-nowrap gap-1">
                                                        <button class="ti-btn ti-btn-icon btn-wave ti-btn-sm !rounded-full bg-primary/10 text-primary  border product-quantity-minus border-end-0 waves-effect waves-light"><i class="ri-subtract-line m-0 text-[1rem] quantity-icon leading-none"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-full !rounded-full" aria-label="quantity" id="product-quantity" value="1">
                                                        <button class="ti-btn ti-btn-icon btn-wave ti-btn-sm !rounded-full bg-primary/10 text-primary  border product-quantity-plus border-end-0 waves-effect waves-light"><i class="ri-add-line m-0 text-[1rem] quantity-icon leading-none"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <div class="flex gap-4 items-center flex-shrink-0">
                                                <p class="text-[15px] font-semibold mb-0">Colors :</p>
                                                <p class="mb-0 flex items-center">
                                                    <a class="color-1 product-colors flex-shrink-0 selected" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-2 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-3 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-4 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-5 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="ms-auto flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="bg-primary/10 text-primary ti-btn">
                                                    <i class="bx bx-adjust text-[1rem] align-middle"></i> Compare
                                                </a>
                                                <a href="{{url('wishlist')}}" class="bg-primary text-white ti-btn">
                                                    <i class="bx bx-credit-card text-[15px] align-middle"></i> Add to Wishlist
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-8 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <ul class="nav nav-tabs tab-style-8 scaleX profile-settings-tab gap-6 flex mt-2 flex-wrap" id="myTab4" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link bg-primary/10 text-primary px-6 rounded-md" data-hs-tab="#product-details-pane">Product Details</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link bg-primary/10 text-primary px-6 rounded-md active" data-hs-tab="#key-features-tab-pane">Key Features</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link bg-primary/10 text-primary px-6 rounded-md" data-hs-tab="#add-features-tab-pane">Additional Features</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body tab-content !mt-3">
                                    <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="product-details-pane" role="tabpanel">
                                        <div class="table-responsive overflow-auto table-bordered-default">
                                            <table class="ti-custom-table text-nowrap">
                                                <tbody>
                                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        <th scope="row" class="font-semibold">
                                                            Brand
                                                        </th>
                                                        <td>TechPro</td>
                                                    </tr>
                                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        <th scope="row" class="font-semibold">
                                                            Model Name
                                                        </th>
                                                        <td>
                                                            X15 Elite - 2024 Edition
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        <th scope="row" class="font-semibold">
                                                            Display
                                                        </th>
                                                        <td>
                                                            15.6" 4K UHD Touchscreen
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        <th scope="row" class="font-semibold">
                                                            Processor
                                                        </th>
                                                        <td>
                                                            Intel Core i7
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        <th scope="row" class="font-semibold">
                                                            Operating System
                                                        </th>
                                                        <td>
                                                            Windows 10 Home
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane show active overflow-hidden p-0 border-0" id="key-features-tab-pane">
                                        <ul class="mb-0 ps-0">
                                            <li class="mb-3"><span class="font-semibold">Display:</span> Stunning 4K UHD resolution with touchscreen capability for immersive visuals and easy navigation.</li>
                                            <li class="mb-3"><span class="font-semibold">Processor:</span> High-performance Intel Core i7 processor for seamless multitasking and powerful computing.</li>
                                            <li class="mb-3"><span class="font-semibold">Memory:</span> 16GB DDR4 RAM ensures smooth performance even with multiple applications running simultaneously.</li>
                                            <li class="mb-3"><span class="font-semibold">Storage:</span> Ample 1TB SSD storage for fast boot-up times, quick file access, and plenty of space for your files and applications.</li>
                                            <li class="mb-3"><span class="font-semibold">Graphics:</span> NVIDIA GeForce GTX 1650 Ti graphics card delivers smooth gaming performance and supports creative applications.</li>
                                            <li class="mb-0"><span class="font-semibold">Operating System:</span> Pre-installed with Windows 10 Home for a familiar and user-friendly computing experience.</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="add-features-tab-pane" role="tabpanel">
                                        <ul class="mb-0 ps-0">
                                            <li class="mb-3"><span class="font-semibold">Connectivity:</span> Wi-Fi, Bluetooth, USB ports, HDMI output, and more for easy connectivity to peripherals and accessories.</li>
                                            <li class="mb-3"><span class="font-semibold">Design:</span> Sleek and stylish design with premium materials for durability and aesthetics.</li>
                                            <li class="mb-3"><span class="font-semibold">Battery Life:</span> Long-lasting battery to keep you productive on the go.</li>
                                            <li class="mb-3"><span class="font-semibold">Audio:</span> High-quality audio for immersive entertainment and clear communication.</li>
                                            <li class="mb-3"><span class="font-semibold">Security:</span> Built-in security features to protect your data and privacy.</li>
                                            <li class=""><span class="font-semibold">Warranty:</span> Backed by TechPro's warranty for peace of mind.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Reviews & Ratings
                                    </div>
                                    <a href="javascript:void(0);" class="text-[14px] text-center block text-primary font-medium underline ms-auto">
                                        View More Reviews
                                    </a>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 items-center mx-0">
                                        <div class="xxl:col-span-4 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12 text-center bg-light rounded p-4 pt-2">
                                            <div class="fs-2">
                                            4.2
                                            </div>
                                            <div class="badge bg-secondary rounded-full align-middle mb-3"> Very Good</div>
                                            <p class="mb-1">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star-half text-warning"></i>
                                            </p>
                                            <div class="font-medium mb-3"><a class="text-textmuted dark:text-textmuted/50" href="javascript:void(0);">Based on (23,435) ratings</a></div>
                                            <a class="ti-btn bg-primary text-white w-full" href="javascript:void(0);">Leave Us a Review</a>
                                        </div>
                                        <div class="xxl:col-span-8 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12 mt-xxl-0 mt-3 pe-0">
                                            <div class="swiper swiper-reviews">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="box border dark:border-defaultborder/10 shadow-none mb-0">
                                                            <div class="box-body">
                                                                <div class="sm:flex block items-center mb-3">
                                                                    <div class="flex flex-auto items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded me-2">
                                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                        </span>
                                                                        <p class="mb-0 text-[14px] leading-none font-semibold">Phillip John
                                                                            <span class="mb-0 text-xs font-normal ms-1">
                                                                                <i class="ri-star-s-fill text-warning leading-none text-[10px] me-1 font-normal align-middle"></i> 4.3
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                        <span class="badge bg-success">Verified Purchase</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p class="font-semibold mb-1">Powerful Performance, Stunning Display!</p>
                                                                    <p class="mb-0 text-[11px]">The TechPro X15 Elite - 2024 Edition is a powerhouse! The 4K UHD touchscreen display is stunning.vgwrggerrb grgrgerg </p>
                                                                </div>
                                                                <div class="product-images ps-0">
                                                                    <div class="grid grid-cols-12 gap-x-6">
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <div class="products-review-images flex">
                                                                                <a href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/png/34.png')}}" alt="">
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/png/33.png')}}" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-6 col-span-12 flex align-items-end sm:justify-end mt-sm-0 mt-2">
                                                                            <button class="ti-btn ti-btn-sm bg-light me-2">Report abuse</button>
                                                                            <button class="ti-btn ti-btn-sm ti-btn-icon bg-primary/10 text-primary  me-2">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button class="ti-btn ti-btn-sm ti-btn-icon bg-primary/10 text-primary ">
                                                                                <i class="ri-thumb-down-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="box border dark:border-defaultborder/10 shadow-none mb-0">
                                                            <div class="box-body">
                                                                <div class="sm:flex block items-center mb-3">
                                                                    <div class="flex flex-auto items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded me-2">
                                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                        </span>
                                                                        <p class="mb-0 text-[14px] leading-none font-semibold">Henry Milo
                                                                            <span class="mb-0 text-xs font-normal ms-1">
                                                                                <i class="ri-star-s-fill text-warning leading-none text-[10px] me-1 font-normal align-middle"></i> 4.3
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                        <span class="badge bg-success">Verified Purchase</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p class="font-semibold mb-1">Sleek Design, Fast Delivery, Hassle-Free Returns!</p>
                                                                    <p class="mb-0 text-[11px]">The TechPro X15 Elite - 2024 Edition impresses with its sleek design and fast delivery. vgwrggerrb grgrgerg. vgwrggerrb grgrgerg</p>
                                                                </div>
                                                                <div class="product-images ps-0">
                                                                    <div class="grid grid-cols-12 gap-x-6">
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <div class="products-review-images flex">
                                                                                <a href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/png/33.png')}}" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-6 col-span-12 flex align-items-end sm:justify-end mt-sm-0 mt-2">
                                                                            <button class="ti-btn ti-btn-sm bg-light me-2">Report abuse</button>
                                                                            <button class="ti-btn ti-btn-sm ti-btn-icon bg-primary/10 text-primary  me-2">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button class="ti-btn ti-btn-sm ti-btn-icon bg-primary/10 text-primary ">
                                                                                <i class="ri-thumb-down-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between !pb-0">
                                    <div class="box-title">
                                        Featured Products 
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-primary/10 text-primary ">View All</a>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table text-nowrap">
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top gap-2">
                                                                <div class="similar-products-image shrink-0 me-2">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/29.png')}}" alt="" class>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-[14px] font-semibold similar-product-name truncate">Ladies' Slim Bag </p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1 text-xs">(16K)</span>
                                                                    </p>
                                                                    <div class="flex gap-2 items-center">
                                                                        <p class="mb-0 text-lg font-semibold">
                                                                            $1,099
                                                                        </p>
                                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 font-normal">
                                                                            <s>$1,759</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto self-center">
                                                                    <div class="ti-btn bg-primary text-white">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top gap-2">
                                                                <div class="similar-products-image shrink-0 me-2">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/30.png')}}" alt="" class>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-[14px] font-semibold similar-product-name truncate">Wireless Headphones</p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill  text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1 text-xs">(5k)</span>
                                                                    </p>
                                                                    <div class="flex gap-2 items-center">
                                                                        <p class="mb-0 text-lg font-semibold">
                                                                            $7,99
                                                                        </p>
                                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 font-normal">
                                                                            <s>$1,299</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto self-center">
                                                                    <div class="ti-btn bg-primary text-white">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top gap-2">
                                                                <div class="similar-products-image shrink-0 me-2">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/31.png')}}" alt="" class>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 font-semibold similar-product-name truncate">Wireless Earbuds</p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill  text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1 text-xs">(2k)</span>
                                                                    </p>
                                                                    <div class="flex gap-2 items-center">
                                                                        <p class="mb-0 text-lg font-semibold">
                                                                            $1,499
                                                                        </p>
                                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 font-normal">
                                                                            <s>$2,599</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto self-center">
                                                                    <div class="ti-btn bg-primary text-white">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top gap-2">
                                                                <div class="similar-products-image shrink-0 me-2">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/32.png')}}" alt="" class>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 font-semibold similar-product-name truncate">Voluptatem Alarm Clock </p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill  text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1 text-xs">(12k)</span>
                                                                    </p>
                                                                    <div class="flex gap-2 items-center">
                                                                        <p class="mb-0 text-lg font-semibold">
                                                                            $2,299
                                                                        </p>
                                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 font-normal">
                                                                            <s>$3,299</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto self-center">
                                                                    <div class="ti-btn bg-primary text-white">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="border-b-0">
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top gap-2">
                                                                <div class="similar-products-image shrink-0 me-2">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" alt="" class>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 font-semibold similar-product-name truncate">Lightweight Sneakers</p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill  text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-s-fill leading-none text-[14px] text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1 text-xs">(12k)</span>
                                                                    </p>
                                                                    <div class="flex gap-2 items-center">
                                                                        <p class="mb-0 text-lg font-semibold">
                                                                            $8,99
                                                                        </p>
                                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50 font-normal">
                                                                            <s>$1,299</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto self-center">
                                                                    <div class="ti-btn bg-primary text-white">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Row-1 -->

                    <!-- Start:: Row-2 -->
                    <h5 class="mb-2">Related Products</h5>
                    <p class="mb-4">Explore more products similar to this one, dolore magna aliqua.</p>
                    <div class="swiper swiper-related-products">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box card-style-2">
                                    <div class="box-body p-0">
                                        <div class="top-left-badge">
                                            <div class="badge bg-info inline-flex gap-1 leading-none items-center text-white mb-1">
                                                <div class="badge-icon"><i class="ti ti-bolt"></i></div>
                                                <div class="badge-text">Trending</div>
                                            </div>
                                            <div class="badge bg-primarytint3color inline-block">12% Off</div>
                                        </div>
                                        <div class="card-img-top border-b border-dashed dark:border-defaultborder/10">
                                        <div class="btns-container-1 items-center gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-primary text-white rounded-full">
                                                            <i class="bx bx-search"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Quick View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primarytint1color text-white rounded-full">
                                                            <i class="bx bx-heart align-center"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Add To Wishlist
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-info text-white rounded-full">
                                                            <i class="bx bx-adjust"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Compare
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            <div class="img-box-2 p-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10 rounded"> 
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top] btn-style-1">
                                                    <a href="{{url('cart')}}" class="ti-btn bg-primary text-white rounded-full ti-btn-icon" title="Add to Cart">
                                                        <i class="bx bxs-cart-add text-lg"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Add To Cart
                                                        </span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}">Lightweight Sneakers</a></h6>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="grow">
                                                    <div class="flex items-baseline text-[11px]">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(874)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">Stealth Series</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="font-semibold text-primary mb-0">$771</h5>
                                                    <span class="text-[13px] ms-2 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$880</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box card-style-2">
                                    <div class="box-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-primarytint2color">10% Off</span>
                                        </div>
                                        <div class="card-img-top border-b border-dashed dark:border-defaultborder/10">
                                        <div class="btns-container-1 items-center gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-primary text-white rounded-full">
                                                            <i class="bx bx-search"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Quick View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primarytint1color text-white rounded-full">
                                                            <i class="bx bx-heart align-center"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Add To Wishlist
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-info text-white rounded-full">
                                                            <i class="bx bx-adjust"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Compare
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            <div class="img-box-2 p-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10 rounded"> 
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top] btn-style-1">
                                                    <a href="{{url('cart')}}" class="ti-btn bg-primary text-white rounded-full ti-btn-icon" title="Add to Cart">
                                                        <i class="bx bxs-cart-add text-lg"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Add To Cart
                                                        </span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}">Trendy Sunglasses</a></h6>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="grow">
                                                    <div class="flex items-baseline text-[11px]">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(514)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">Crystal Clear</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="font-semibold text-primary mb-0">$251</h5>
                                                    <span class="text-[13px] ms-2 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$399</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box card-style-2">
                                    <div class="box-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-primarytint1color">21% Off</span>
                                        </div>
                                        <div class="card-img-top border-b border-dashed dark:border-defaultborder/10">
                                        <div class="btns-container-1 items-center gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-primary text-white rounded-full">
                                                            <i class="bx bx-search"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Quick View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primarytint1color text-white rounded-full">
                                                            <i class="bx bx-heart align-center"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Add To Wishlist
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-info text-white rounded-full">
                                                            <i class="bx bx-adjust"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Compare
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            <div class="img-box-2 p-2">
                                                <a href="{{url('product-details')}}">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/30.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top] btn-style-1">
                                                    <a href="{{url('cart')}}" class="ti-btn bg-primary text-white rounded-full ti-btn-icon" title="Add to Cart">
                                                        <i class="bx bxs-cart-add text-lg"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Add To Cart
                                                        </span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}">Wireless Headphones</a></h6>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="grow">
                                                    <div class="flex items-baseline text-[11px]">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(142)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">SoundWave</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="font-semibold text-primary mb-0">$251</h5>
                                                    <span class="text-[13px] ms-2 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$399</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box card-style-2">
                                    <div class="box-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-success">60% Off</span>
                                        </div>
                                        <div class="card-img-top border-b border-dashed dark:border-defaultborder/10">
                                        <div class="btns-container-1 items-center gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-primary text-white rounded-full">
                                                            <i class="bx bx-search"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Quick View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primarytint1color text-white rounded-full">
                                                            <i class="bx bx-heart align-center"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Add To Wishlist
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-info text-white rounded-full">
                                                            <i class="bx bx-adjust"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Compare
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            <div class="img-box-2 p-2">
                                                <a href="{{url('product-details')}}">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/31.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top] btn-style-1">
                                                    <a href="{{url('cart')}}" class="ti-btn bg-primary text-white rounded-full ti-btn-icon" title="Add to Cart">
                                                        <i class="bx bxs-cart-add text-lg"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Add To Cart
                                                        </span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}"> Wireless Earbuds</a></h6>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="grow">
                                                    <div class="flex items-baseline text-[11px]">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(211)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">AirPods Max</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="font-semibold text-primary mb-0">$314</h5>
                                                    <span class="text-[13px] ms-2 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$547</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box card-style-2">
                                    <div class="box-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-info">15% Off</span>
                                        </div>
                                        <div class="card-img-top border-b border-dashed dark:border-defaultborder/10">
                                        <div class="btns-container-1 items-center gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-primary text-white rounded-full">
                                                            <i class="bx bx-search"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Quick View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primarytint1color text-white rounded-full">
                                                            <i class="bx bx-heart align-center"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Add To Wishlist
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-info text-white rounded-full">
                                                            <i class="bx bx-adjust"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Compare
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            <div class="img-box-2 p-2">
                                                <a href="{{url('product-details')}}">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/12.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top] btn-style-1">
                                                    <a href="{{url('cart')}}" class="ti-btn bg-primary text-white rounded-full ti-btn-icon" title="Add to Cart">
                                                        <i class="bx bxs-cart-add text-lg"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Add To Cart
                                                        </span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}"> Kids' Party Wear Frock</a></h6>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="grow">
                                                    <div class="flex items-baseline text-[11px]">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(231)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">Twinkle Twirl</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="font-semibold text-primary mb-0">$236</h5>
                                                    <span class="text-[13px] ms-2 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$267</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box card-style-2">
                                    <div class="box-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-primarytint1color">24% Off</span>
                                        </div>
                                        <div class="card-img-top border-b border-dashed dark:border-defaultborder/10">
                                        <div class="btns-container-1 items-center gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-primary text-white rounded-full">
                                                            <i class="bx bx-search"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Quick View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primarytint1color text-white rounded-full">
                                                            <i class="bx bx-heart align-center"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Add To Wishlist
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-info text-white rounded-full">
                                                            <i class="bx bx-adjust"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Compare
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            <div class="img-box-2 p-2">
                                                <a href="{{url('product-details')}}">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/29.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top] btn-style-1">
                                                    <a href="{{url('cart')}}" class="ti-btn bg-primary text-white rounded-full ti-btn-icon" title="Add to Cart">
                                                        <i class="bx bxs-cart-add text-lg"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Add To Cart
                                                        </span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}">Ladies' Slim Bag</a></h6>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="grow">
                                                    <div class="flex items-baseline text-[11px]">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(110)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">Sleek Elegance</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="font-semibold text-primary mb-0">$124</h5>
                                                    <span class="text-[13px] ms-2 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$105</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box card-style-2">
                                    <div class="box-body p-0">
                                        <div class="top-left-badge">
                                            <div class="badge bg-danger inline-flex leading-none items-center text-white mb-1">
                                                <div class="badge-icon"><i class="bx bxs-bolt"></i></div>
                                                <div class="badge-text">Trending</div>
                                            </div>
                                            <span class="badge bg-warning">15% Off</span>
                                        </div>
                                        <div class="card-img-top border-b border-dashed dark:border-defaultborder/10">
                                        <div class="btns-container-1 items-center gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-primary text-white rounded-full">
                                                            <i class="bx bx-search"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Quick View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primarytint1color text-white rounded-full">
                                                            <i class="bx bx-heart align-center"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Add To Wishlist
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon bg-info text-white rounded-full">
                                                            <i class="bx bx-adjust"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                            Compare
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            <div class="img-box-2 p-2">
                                                <a href="{{url('product-details')}}">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/23.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top] btn-style-1">
                                                    <a href="{{url('cart')}}" class="ti-btn bg-primary text-white rounded-full ti-btn-icon" title="Add to Cart">
                                                        <i class="bx bxs-cart-add text-lg"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Add To Cart
                                                        </span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}"> Advanced Smartwatch</a></h6>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="grow">
                                                    <div class="flex items-baseline text-[11px]">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(225)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">SmartSync 2024</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="font-semibold text-primary mb-0">$354</h5>
                                                    <span class="text-[13px] ms-2 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$455</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- End:: Row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

        <!-- Internal Ecommerce Product Details -->
        @vite('resources/assets/js/ecommerce-product-details.js')
        

@endsection