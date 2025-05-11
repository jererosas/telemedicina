@extends('layouts.master')

@section('styles')
  
        <!-- sweetalert CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Wishlist</h1>
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

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 sm:gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        My Wishlists
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn bg-primary !m-0 text-white ti-btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">This Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body m-3 bg-light p-2 rounded-sm mt-2">
                                    <div class="flex items-center justify-between flex-wrap gap-2 ps-2">
                                        <p class="mb-0 text-[15px]">Adding<span class="text-primarytint1color font-semibold"> 12 items</span> in your wishlist</p>
                                        <a href="{{url('checkout')}}" class="ti-btn bg-secondary/10 text-secondary">Checkout All <i class="ti ti-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!--start::row-2 -->
                    <div class="grid grid-cols-12 sm:gap-x-6">
                        <div class="lg:col-span-6 col-span-12">
                            <div class="box card-style-3">
                                <div class="box-body p-4">
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="md:col-span-2 col-span-12">
                                            <div class="bg-primary/10 rounded-md mb-3 mb-md-0">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/29.png')}}" alt="img" class="img-fluid w-full">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="md:col-span-10 col-span-12">
                                            <div class="flex items-start justify-between mb-2">
                                                <div class="grow">
                                                    <h6 class="text-[14px] mb-0 font-medium"><a href="{{url('product-details')}}">Ladies' Slim Bag</a></h6>
                                                    <div class="min-w-fit-content mb-1 text-[13px] font-medium text-success">In Stock</div>
                                                    <div class="flex items-baseline gap-2 mb-1">
                                                        <h6 class="text-[22px] mb-0">$251</h6>
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50 text-decoration-line-through opacity-70">$399</span>
                                                        <span class="badge bg-primarytint1color/10 text-primarytint1color ms-2">30% Off</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-delete ti-btn ti-btn-soft-primary1 ti-btn-icon"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <a href="{{url('cart')}}" class="ti-btn bg-primary text-white btn-w-md !m-0"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary btn-w-md !m-0"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                                <div class="flex items-baseline text-[13px] ms-auto">
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                    <p class="mb-0 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                        <span>(23)</span>
                                                        <span>Ratings</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <div class="box card-style-3">
                                <div class="box-body p-4">
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="md:col-span-2 col-span-12">
                                            <div class="bg-primary/10 rounded-md mb-3 mb-md-0">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/30.png')}}" alt="img" class="img-fluid w-full">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="md:col-span-10 col-span-12">
                                            <div class="flex items-start justify-between mb-2">
                                                <div class="grow">
                                                    <h6 class="text-[14px] mb-0 font-medium"><a href="{{url('product-details')}}">Wireless Headphones</a></h6>
                                                    <div class="min-w-fit-content mb-1 text-[13px] font-medium text-danger">Only 4 Left </div>
                                                    <div class="flex items-baseline gap-2 mb-1">
                                                        <h6 class="text-[22px] mb-0">$874</h6>
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50 text-decoration-line-through opacity-70">$458</span>
                                                        <span class="badge bg-primarytint1color/10 text-primarytint1color ms-2">50% Off</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-delete ti-btn ti-btn-soft-primary1 ti-btn-icon"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <a href="{{url('cart')}}" class="ti-btn bg-primary text-white btn-w-md !m-0"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary btn-w-md !m-0"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                                <div class="flex items-baseline text-[13px] ms-auto">
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                    <p class="mb-0 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                        <span>(114)</span>
                                                        <span>Ratings</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <div class="box card-style-3">
                                <div class="box-body p-4">
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="md:col-span-2 col-span-12">
                                            <div class="bg-primary/10 rounded-md mb-3 mb-md-0">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/32.png')}}" alt="img" class="img-fluid w-full">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="md:col-span-10 col-span-12">
                                            <div class="flex items-start justify-between mb-2">
                                                <div class="grow">
                                                    <h6 class="text-[14px] mb-0 font-medium"><a href="{{url('product-details')}}">Voluptatem Alarm Clock</a></h6>
                                                    <div class="min-w-fit-content mb-1 text-[13px] font-medium text-success">In Stock</div>
                                                    <div class="flex items-baseline gap-2 mb-1">
                                                        <h6 class="text-[22px] mb-0">$48</h6>
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50 text-decoration-line-through opacity-70">$57</span>
                                                        <span class="badge bg-primarytint1color/10 text-primarytint1color ms-2">10% Off</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-delete ti-btn ti-btn-soft-primary1 ti-btn-icon"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <a href="{{url('cart')}}" class="ti-btn bg-primary text-white btn-w-md !m-0"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary btn-w-md !m-0"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                                <div class="flex items-baseline text-[13px] ms-auto">
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                    <p class="mb-0 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                        <span>(15)</span>
                                                        <span>Ratings</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <div class="box card-style-3">
                                <div class="box-body p-4">
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="md:col-span-2 col-span-12">
                                            <div class="bg-primary/10 rounded-md mb-3 mb-md-0">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/15.png')}}" alt="img" class="img-fluid w-full">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="md:col-span-10 col-span-12">
                                            <div class="flex items-start justify-between mb-2">
                                                <div class="grow">
                                                    <h6 class="text-[14px] mb-0 font-medium"><a href="{{url('product-details')}}">Sports Shoes</a></h6>
                                                    <div class="min-w-fit-content mb-1 text-[13px] font-medium text-success">In Stock</div>
                                                    <div class="flex items-baseline gap-2 mb-1">
                                                        <h6 class="text-[22px] mb-0">$1,578</h6>
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50 text-decoration-line-through opacity-70">$1,877</span>
                                                        <span class="badge bg-primarytint1color/10 text-primarytint1color ms-2">25% Off</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-delete ti-btn ti-btn-soft-primary1 ti-btn-icon"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <a href="{{url('cart')}}" class="ti-btn bg-primary text-white btn-w-md !m-0"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary btn-w-md !m-0"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                                <div class="flex items-baseline text-[13px] ms-auto">
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                    <p class="mb-0 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                        <span>(15)</span>
                                                        <span>Ratings</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <div class="box card-style-3 grayscale">
                                <div class="box-body p-4">
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="md:col-span-2 col-span-12">
                                            <div class="bg-primary/10 rounded-md mb-3 mb-md-0">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" alt="img" class="img-fluid w-full">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="md:col-span-10 col-span-12">
                                            <div class="flex items-start justify-between mb-2">
                                                <div class="grow">
                                                    <h6 class="text-[14px] mb-0 font-medium"><a href="{{url('product-details')}}">Lightweight Sneakers</a></h6>
                                                    <div class="min-w-fit-content mb-1 text-[13px] font-medium text-danger">Out of Stock</div>
                                                    <div class="flex items-baseline gap-2 mb-1">
                                                        <h6 class="text-[22px] mb-0">$1,578</h6>
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50 text-decoration-line-through opacity-70">$1,877</span>
                                                        <span class="badge bg-primarytint1color/10 text-primarytint1color ms-2">25% Off</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-delete ti-btn ti-btn-soft-primary1 ti-btn-icon"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                            <div class="flex items-center gap-2 flex-wrap">     
                                                <a href="{{url('cart')}}" class="ti-btn bg-primary text-white btn-w-md !m-0"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary btn-w-md !m-0"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                                <div class="flex items-baseline text-[13px] ms-auto">
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                    <p class="mb-0 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                        <span>(15)</span>
                                                        <span>Ratings</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <div class="box card-style-3">
                                <div class="box-body p-4">
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="md:col-span-2 col-span-12">
                                            <div class="bg-primary/10 rounded-md mb-3 mb-md-0">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/6.png')}}" alt="img" class="img-fluid w-full">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="md:col-span-10 col-span-12">
                                            <div class="flex items-start justify-between mb-2">
                                                <div class="grow">
                                                    <h6 class="text-[14px] mb-0 font-medium"><a href="{{url('product-details')}}">Chair with Cushion</a></h6>
                                                    <div class="min-w-fit-content mb-1 text-[13px] font-medium text-success">In Stock</div>
                                                    <div class="flex items-baseline gap-2 mb-1">
                                                        <h6 class="text-[22px] mb-0">$687</h6>
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50 text-decoration-line-through opacity-70">$874</span>
                                                        <span class="badge bg-primarytint1color/10 text-primarytint1color ms-2">14% Off</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-delete ti-btn ti-btn-soft-primary1 ti-btn-icon"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <a href="{{url('cart')}}" class="ti-btn bg-primary text-white btn-w-md !m-0"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary btn-w-md !m-0"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                                <div class="flex items-baseline text-[13px] ms-auto">
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                    <p class="mb-0 ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                        <span>(27)</span>
                                                        <span>Ratings</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="flex items-center flex-wrap overflow-auto p-4 bg-white dark:bg-bodybg mb-3 rounded-md">
                                <div class="mb-2 mb-sm-0">
                                    Showing <b>1</b> to <b>6 </b> entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                                </div>
                                <div class="sm:ms-auto">
                                    <nav aria-label="...">
                                        <ul class="ti-pagination">
                                            <li class="page-item disabled">
                                                <span class="page-link px-3 py-[0.375rem] !border-e-0">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link active px-3 py-[0.375rem] !border-e-0"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item " aria-current="page">
                                                <span class="page-link px-3 py-[0.375rem] !border-e-0">2</span>
                                            </li>
                                            <li class="page-item " aria-current="page">
                                                <span class="page-link px-3 py-[0.375rem] !border-e-0">3</span>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                </div>
            </div>
            <!-- End::app-content -->
            
@endsection

@section('scripts')

        <!-- Sweetalerts JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Wishlist JS -->
        @vite('resources/assets/js/wishlist.js')


@endsection