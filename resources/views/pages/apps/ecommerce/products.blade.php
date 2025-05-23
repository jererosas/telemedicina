@extends('layouts.master')

@section('styles')
  
        <!-- noioslider CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Products</h1>
                        </div>
                        <div class="btn-list">
                            <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary !border-0 btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: Row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body px-4 py-3">
                                    <div class="grid grid-cols-12 gap-x-6 items-center gap-y-2">
                                        <div class="sm:col-span-8 col-span-12">
                                            <div class="flex">
                                                <h6 class="mb-0">
                                                    Total <span class="font-semibold text-primarytint1color">6678 Items</span> Available</h6> 
                                            </div>
                                        </div>
                                        <div class="sm:col-span-4 col-span-12 sm:text-end text-start">
                                            <div class="ti-btn-group ti-dropdown hs-dropdown !p-0 !border-0">
                                                <button class="ti-btn ti-btn-outline-light border border-defaultborder dark:border-defaultborder/10 ti-dropdown-toggle hs-dropdown-toggle gap-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                                                    <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0)">Date Published</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0)">Most Relevant</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0)">Price Low to High</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0)">Price High to Low</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">                             
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <div class="badge bg-info inline-flex gap-1 leading-none items-center text-white mb-1">
                                                    <div class="badge-icon"><i class="ti ti-bolt"></i></div>
                                                    <div class="badge-text">Trending</div>
                                                </div>
                                                <div class="badge bg-primarytint3color inline-block">12% Off</div>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                                    <img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-info">15% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-primarytint1color">24% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                                        <span class="text-[13px] ms-2 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$214</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-success">60% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                                        <img src="{{asset('build/assets/images/ecommerce/png/14.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
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
                                                <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}">Elegant Flower Pot</a></h6>
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
                                                        <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">Serene Garden</a>
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-primarytint2color">10% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                                    <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-success">60% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                                        <img src="{{asset('build/assets/images/ecommerce/png/13.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
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
                                                <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}">Sleek Modern Chair</a></h6>
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
                                                        <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">Artisanal Comfort</a>
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <div class="badge bg-danger inline-flex leading-none items-center text-white mb-1">
                                                    <div class="badge-icon"><i class="bx bxs-bolt"></i></div>
                                                    <div class="badge-text">Trending</div>
                                                </div>
                                                <span class="badge bg-warning">15% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-danger">50% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                                    <img src="{{asset('build/assets/images/ecommerce/png/10.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
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
                                                <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}">Classic T-Shirt </a></h6>
                                                <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="grow">
                                                    <div class="flex items-baseline text-[11px]">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 text-textmuted dark:text-textmuted/50">
                                                            <span>(142)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">Casual Everyday</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="font-semibold text-primary mb-0">$251</h5>
                                                    <span class="text-[13px] ms-2 op-6 text-textmuted dark:text-textmuted/50 text-decoration-line-through">$399</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-info">15% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                                        <img src="{{asset('build/assets/images/ecommerce/png/9.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
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
                                                <h6 class="mb-1 font-semibold text-[1rem]"><a href="{{url('product-details')}}"> Versatile Hoodie</a></h6>
                                                <div class="flex align-items-end justify-between flex-wrap">
                                                    <div class="grow">
                                                        <div class="flex items-baseline text-[11px]">
                                                            <div class="min-w-fit-content">
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                            </div>
                                                            <p class="mb-0 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                                <span>(142)</span>
                                                                <span>Ratings</span>
                                                            </p>
                                                        </div>
                                                        <a href="javascript:void(0);" class="text-primarytint1color text-[13px] font-semibold">Urban Flex</a>
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-primarytint1color">21% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-success">60% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                <div class="xxl:col-span-3 lg:col-span-6 xl:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box card-style-2">
                                        <div class="box-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-primarytint2color">10% Off</span>
                                            </div>
                                            <div class="card-img-top border-b border-dashed dark:border-defaultborder/10 bg-light dark:bg-bodybg">
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
                                                    <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="img" class="scale-img img-fluid w-full bg-primary/10  rounded"> 
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
                                <div class="md:col-span-12 col-span-12">
                                    <!-- Start::pagination -->
                                    <nav aria-label="" class="">
                                        <ul class="ti-pagination mb-6 !p-0 justify-end float-end">
                                            <li class="page-item disabled"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !border-e-0 !rounded-tr-none !rounded-br-none">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">1</a></li>
                                            <li class="page-item " aria-current="page"> <a class="page-link active px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">2</a> </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">4</a></li>
                                            <li class="page-item"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-tl-none !rounded-bl-none" href="javascript:void(0);">Next</a> </li>
                                        </ul>
                                    </nav>
                                    <!-- End::pagination -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box products-navigation-card">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Filter
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="underline font-medium text-primarytint2color">Clear All</a>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-semibold mb-0">Categories</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="c-1">
                                                    Electronics <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(2,712)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="c-2">
                                                    Clothing & Apparel <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(536)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="c-3">
                                                    Kitchen <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(18,289)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="c-4">
                                                    Health & Beauty <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(3,453)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="c-5">
                                                    Sports <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(7,165)</span>
                                                </label>
                                            </div>
                                            <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden"
                                            id="hs-show-hide-categories-heading"
                                            aria-labelledby="hs-show-hide-categories">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-41" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="c-41">
                                                    Games <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(5,964)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-51">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="c-51">
                                                Food & Grocery <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(2,123)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <a class="ecommerce-more-link hs-collapse-toggle"
                                            id="hs-show-hide-categories"
                                            data-hs-collapse="#hs-show-hide-categories-heading"
                                            href="#category-more" role="button">MORE
                                        </a>
                                    </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-semibold mb-0">Price Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="flex mt-4">
                                                <div class="font-semibold h6">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp; 
                                                <div class="font-semibold h6">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-semibold mb-0">Discount</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-1">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="q-1">
                                                    0% - 20%  <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(245)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-2" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="q-2">
                                                    20% - 40% <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(987)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-3">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="q-3">
                                                    40% - 60% <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(123)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-4" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="q-4">
                                                    60% - 80% <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(987)</span>
                                                </label>
                                            </div>
                                            <div class="form-check p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-5">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="q-5">
                                                    80% - 90% <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(5,222)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-semibold mb-0">Brand</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="j-1">
                                                    Ruby <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(663)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-2" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="j-2">
                                                    Hadlirams <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(2,514)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-3" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="j-3">
                                                    Xioami <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(781)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-4">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="j-4">
                                                    Samsnug <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(20)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-0 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-5">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="j-5">
                                                    Tommy & Hilfigure <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(1,112)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h6 class="font-semibold mb-0">Sizes</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-1" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="e-1">
                                                    Extra Small (XS) <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(574)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-2">
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="e-2">
                                                    Small (SM) <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(1,474)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-3" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="e-3">
                                                    Medium (MD) <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(12,245)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-4" checked>
                                                <label class="form-check-label text-wrap pe-3 !ps-0" for="e-4">
                                                    Large (L) <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(877)</span>
                                                </label>
                                            </div>
                                            <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden"
                                                    id="hs-show-hide-location-heading"
                                                    aria-labelledby="hs-show-hide-location">
                                                    <div class="form-check mb-2 p-0">
                                                        <input class="form-check-input float-end" type="checkbox" value="" id="e-31" checked>
                                                        <label class="form-check-label text-wrap pe-3 !ps-0" for="e-31">
                                                            XXL <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(147)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2 p-0">
                                                        <input class="form-check-input float-end" type="checkbox" value="" id="e-41" checked>
                                                        <label class="form-check-label text-wrap pe-3 !ps-0" for="e-41">
                                                            XXXL <span class="text-[11px] font-normal text-textmuted dark:text-textmuted/50">(324)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <a class="ecommerce-more-link hs-collapse-toggle" id="hs-show-hide-location"
                                                    data-hs-collapse="#hs-show-hide-location-heading" href="#sizes-more"
                                                    role="button">MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- End:: Row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>
        @vite('resources/assets/js/ecommerce-price-range.js')
        

@endsection