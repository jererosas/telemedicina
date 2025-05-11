@extends('layouts.master')

@section('styles')
  

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Dashboards
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">POS System</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">POS System</h1>
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
                    <!-- End::page-header -->

                    <!-- Start Row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="flex items-center justify-between mb-3">
                                <h6 class="font-medium mb-0">Categories</h6>
                                <div class="flex gap-2 items-center">
                                    <a class="categories-arrow left">
                                        <i class="ri-arrow-left-s-line"></i>
                                    </a>
                                    <a class="categories-arrow right">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="grid xxl:grid-cols-7 grid-cols-12 gap-x-6 pos-category" id="filter">
                                <div class="xxl:col-auto xl:col-span-4 md:col-span-6 col-span-12">
                                    <div class="box active">
                                        <div class="box-body p-4">
                                            <a href="javascript:void(0);" class="stretched-link categories" data-filter="*">
                                                <div class="flex gap-2 categories-content flex-wrap justify-center">
                                                    <span class="avatar avatar-md">
                                                        <img src="{{asset('build/assets/images/pos-system/1.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="font-medium">All Menu</span>
                                                        <span class="block opacity-70 text-xs">43 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-auto xl:col-span-4 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body p-4">
                                            <a href="javascript:void(0);" class="stretched-link categories"
                                                data-filter=".pizza">
                                                <div class="flex gap-2 categories-content flex-wrap justify-center">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="{{asset('build/assets/images/pos-system/2.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="font-medium">Pizza</span>
                                                        <span class="block opacity-70 text-xs">80 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-auto xl:col-span-4 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body p-4">
                                            <a href="javascript:void(0);" class="stretched-link categories"
                                                data-filter=".burger">
                                                <div class="flex gap-2 categories-content flex-wrap justify-center">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="{{asset('build/assets/images/pos-system/3.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="font-medium">Burger</span>
                                                        <span class="block opacity-70 text-xs">36 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-auto xl:col-span-4 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body p-4">
                                            <a href="javascript:void(0);" class="stretched-link categories"
                                                data-filter=".waffle">
                                                <div class="flex gap-2 categories-content flex-wrap justify-center">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="{{asset('build/assets/images/pos-system/4.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="font-medium">Waffle</span>
                                                        <span class="block opacity-70 text-xs">25 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-auto xl:col-span-4 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body p-4">
                                            <a href="javascript:void(0);" class="stretched-link categories"
                                                data-filter=".icecream">
                                                <div class="flex gap-2 categories-content flex-wrap justify-center">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="{{asset('build/assets/images/pos-system/5.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="font-medium">Ice Cream</span>
                                                        <span class="block opacity-70 text-xs">58 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-auto xl:col-span-4 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body p-4">
                                            <a href="javascript:void(0);" class="stretched-link categories"
                                                data-filter=".coffee">
                                                <div class="flex gap-2 categories-content flex-wrap justify-center">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="{{asset('build/assets/images/pos-system/6.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="font-medium">Coffee</span>
                                                        <span class="block opacity-70 text-xs">38 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-auto xl:col-span-4 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body p-4">
                                            <a href="javascript:void(0);" class="stretched-link categories"
                                                data-filter=".cupcakes">
                                                <div class="flex gap-2 categories-content flex-wrap justify-center">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="{{asset('build/assets/images/pos-system/7.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="font-medium">CupCakes</span>
                                                        <span class="block opacity-70 text-xs">38 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-center justify-between mb-3">
                                        <h6 class="font-medium mb-0">Items List</h6>
                                        <a href="#viewcart" class="ti-btn ti-btn-primary"  data-hs-overlay="#hs-overlay-example"> View Cart<i class="ti ti-arrow-narrow-right ms-1"></i>
                                        </a>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6 list-wrapper">
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item burger"
                                            data-category="burger">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/9.jpg')}}" class="card-img-top" alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Classic
                                                            Cheeseburger</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Classic
                                                            Burgers</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$78.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item icecream"
                                            data-category="icecream">
                                            <div class="box p-4 out-of-stock">
                                                <img src="{{asset('build/assets/images/pos-system/18.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Coconut
                                                            Almond Fudge</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Specialty
                                                            Flavors</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$29.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item coffee"
                                            data-category="coffee">
                                            <div class="box p-4 out-of-stock">
                                                <img src="{{asset('build/assets/images/pos-system/17.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);"
                                                            class="font-medium text-[1rem]">Cappuccino</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Espresso
                                                            Beverages</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$7.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item cupcakes"
                                            data-category="cupcakes">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/11.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Frosting
                                                            Choices</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Cupcake
                                                            Creations</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$19.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item cupcakes"
                                            data-category="cupcakes">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/12.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Nutella
                                                            Cupcake</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Specialty
                                                            Cupcakes</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$123.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item pizza"
                                            data-category="pizza">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/16.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);"
                                                            class="font-medium text-[1rem]">Mediterranean</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Specialty
                                                            Pizzas</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$2.79</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item coffee"
                                            data-category="coffee">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/14.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Cold Brew
                                                            Concentrate</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Cold
                                                            Brews</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$1.29</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item burger"
                                            data-category="burger">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/15.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Blue Cheese
                                                            Burger</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Gourmet
                                                            Burgers</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item waffle"
                                            data-category="waffle">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/19.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Apple
                                                            Cinnamon Waffle</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Specialty
                                                            Waffles</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item pizza"
                                            data-category="pizza">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/10.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Pesto
                                                            Delight</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Specialty
                                                            Pizzas</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item icecream"
                                            data-category="icecream">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/8.jpg')}}" class="card-img-top" alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="font-medium text-[1rem]">Cookie Dough
                                                            Sundae</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Sundae
                                                            Creations</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12 card-item coffee"
                                            data-category="coffee">
                                            <div class="box p-4">
                                                <img src="{{asset('build/assets/images/pos-system/13.jpg')}}" class="card-img-top"
                                                    alt="...">
                                                <div class="box-body bg-secondary/10 rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);"
                                                            class="font-medium text-[1rem]">Americano</a>
                                                        <span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 block">Espresso
                                                            Beverages</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 justify-between flex-wrap">
                                                        <h5 class="font-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="ti-btn ti-btn-primary ti-btn-sm"
                                                                data-hs-overlay="#hs-overlay-example"><i
                                                                    class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="" class="">
                                        <ul class="ti-pagination mb-6 !p-0 justify-end float-end">
                                            <li class="page-item disabled"> <a
                                                    class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !border-e-0 !rounded-tr-none !rounded-br-none">Previous</a>
                                            </li>
                                            <li class="page-item"><a
                                                    class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item " aria-current="page"> <a
                                                    class="page-link active px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0"
                                                    href="javascript:void(0);">2</a> </li>
                                            <li class="page-item"> <a
                                                    class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-tl-none !rounded-bl-none !border-s-0"
                                                    href="javascript:void(0);">Next</a> </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box active">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Orders List
                                    </div>
                                    <span class="badge bg-primarytint2color/10 !text-primarytint2color rounded-full">
                                        27 Items
                                    </span>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group mb-0 border-0 rounded-0">
                                        <li class="ti-list-group-item border-t-0 border-start-0 border-end-0">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="{{asset('build/assets/images/pos-system/17.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-medium">Cappuccino</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity :
                                                        1 <span class="badge bg-success/10 !text-success ms-3">30%
                                                            Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 font-medium">$3.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item border-t-0 border-start-0 border-end-0">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="{{asset('build/assets/images/pos-system/19.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-medium">Apple Cinnamon Waffle</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity :
                                                        1 <span class="badge bg-success/10 !text-success ms-3">30%
                                                            Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 font-medium">$1.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="ti-list-group-item  border-b border-block-end-dashed border-start-0 border-end-0">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="{{asset('build/assets/images/pos-system/15.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-medium">Classic Cheeseburger</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity :
                                                        2 <span class="badge bg-success/10 !text-success ms-3">10%
                                                            Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 font-medium">$2.79</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="ti-list-group-item  border-b border-block-end-dashed border-start-0 border-end-0">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="{{asset('build/assets/images/pos-system/12.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-medium">Nutella Cupcakes</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity :
                                                        1 <span class="badge bg-success/10 !text-success ms-3">10%
                                                            Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 font-medium">$123.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="ti-list-group-item  border-b border-block-end-dashed border-start-0 border-end-0">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="{{asset('build/assets/images/pos-system/11.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-medium">Strawberry Cupcakes</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity :
                                                        1 <span class="badge bg-success/10 !text-success ms-3">10%
                                                            Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 font-medium">$123.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="ti-list-group-item  border-b border-block-end-dashed border-start-0 border-end-0">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="{{asset('build/assets/images/pos-system/14.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-medium">Cold Coffee</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity :
                                                        1 <span class="badge bg-success/10 !text-success ms-3">10%
                                                            Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 font-medium">$546.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="ti-list-group-item  border-b border-block-end-dashed border-start-0 border-end-0">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="{{asset('build/assets/images/pos-system/16.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-medium">Cheese Burst Pizza</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity :
                                                        2 <span class="badge bg-success/10 !text-success ms-3">10%
                                                            Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 font-medium">$4.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item  border-b-0 border-start-0 border-end-0">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="{{asset('build/assets/images/pos-system/13.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-medium">Americano</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity :
                                                        1 <span class="badge bg-success/10 !text-success ms-3">10%
                                                            Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 font-medium">$1.29</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer border-dashed">
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary grid">
                                        View All
                                    </a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header justify-between items-center">
                                    <div class="box-title">Top Selling Items </div>
                                    <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-soft-primary border flex items-center ti-btn-sm">
                                        View All
                                    </a>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none mb-0" id="product-list">
                                        <li class="">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/pos-system/17.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class=" flex-auto">
                                                    <span class="block mb-0 font-medium">Cappuccino</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs">Espresso
                                                        Beverages</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium text-primary">$517</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">2.7K Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/pos-system/15.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="block mb-0 font-medium">Cheese Burger<span
                                                            class="badge bg-info/10 !text-info ms-1 text-[0.5625rem]">15%
                                                            Off</span></span>
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs">Gourmet
                                                        Burgers</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium text-primary">$564</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">1,758 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/pos-system/19.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="block mb-0 font-medium">Cinnamon Waffle</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs">Specialty
                                                        Waffles</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium text-primary">$24.89</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">894 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/pos-system/16.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="block mb-0 font-medium">Mediterranean<span
                                                            class="badge bg-primarytint1color/10 !text-primarytint1color ms-1 text-[0.5625rem]">10%
                                                            Off</span></span>
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs">Special
                                                        Pizza</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium text-primary">$2.7</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">865 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/pos-system/9.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="block mb-0 font-medium">Classic Burger<span
                                                            class="badge bg-primarytint3color/10 !text-primarytint3color ms-1 text-[0.5625rem]">10%
                                                            Off</span></span>
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs">Gourmet
                                                        Burgers</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium text-primary">$564</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">1,758 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/pos-system/18.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="block mb-0 font-medium">Almond Fudge<span
                                                            class="badge bg-success/10 !text-success ms-1 text-[0.5625rem]">30%
                                                            Off</span></span>
                                                    <span
                                                        class="text-textmuted dark:text-textmuted/50 text-xs">Icecream</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium text-primary">$89</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">789 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box p-4">
                                <div
                                    class="text-center flex flex-row items-center  bg-primary/10 p-4 justify-between rounded-sm gap-1 flex-wrap">
                                    <div class="pos-card-image ps-1">
                                        <img src="{{asset('build/assets/images/pos-system/20.png')}}" class="" alt="...">
                                    </div>
                                    <button type="button"
                                        class="ti-btn ti-btn-primary text-nowrap min-w-[8.125rem] me-2 ms-auto">Go
                                        Premium</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-1 -->

                    <!-- Start::offcanvas viewcart -->
                    <div id="hs-overlay-example" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right !z-[105]" tabindex="-1">
                        <div class="ti-offcanvas-header">
                            <h6 class="ti-offcanvas-title">
                        Cart <span class="badge bg-primarytint2color/10 ms-1 !font-normal !text-primarytint2color rounded-full !text-[0.625rem]">06 Items</span>
                            </h6>
                            <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-example">
                                <span class="sr-only">Close modal</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="ti-offcanvas-body !h-[90%] !p-0">
                            <ul class="ti-list-group mb-0 border-0 rounded-0">
                                <li class="ti-list-group-item border-t-0 border-start-0 border-end-0">
                                    <div class="flex items-start flex-wrap">
                                        <div class="me-2 leading-none">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="{{asset('build/assets/images/pos-system/17.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-1 font-medium">Cappuccino<span
                                                    class="text-[11px] text-textmuted dark:text-textmuted/50"> Coffee</span>
                                            </p>

                                            <div class="product-quantity-container order-summ">
                                                <div class="flex flex-nowrap gap-1 border rounded-full p-1 items-center  border-defaultborder dark:border-defaultborder/10">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-minus border-end-0"><i
                                                            class="ri-subtract-line"></i></button>
                                                    <input type="text"
                                                        class="form-control form-control-sm border-0 text-center p-0"
                                                        aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-plus border-start-0"><i
                                                            class="ri-add-line"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line text-[1rem] text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 font-medium mt-auto"><span
                                                    class="badge bg-success/10 ms-3 text-[0.5625rem] !text-success">30% Off</span> $3.99
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item border-t-0 border-start-0 border-end-0">
                                    <div class="flex items-start flex-wrap">
                                        <div class="me-2 leading-none">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="{{asset('build/assets/images/pos-system/11.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-1 font-medium">Frosting<span
                                                    class="text-[11px] text-textmuted dark:text-textmuted/50 ">
                                                    Cupcakes</span></p>
                                            <div class="product-quantity-container order-summ">
                                                <div class="flex flex-nowrap gap-1 border rounded-full p-1 items-center  border-defaultborder dark:border-defaultborder/10">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-minus border-end-0"><i
                                                            class="ri-subtract-line"></i></button>
                                                    <input type="text"
                                                        class="form-control form-control-sm border-0 text-center p-0"
                                                        aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-plus border-start-0"><i
                                                            class="ri-add-line"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line text-[1rem] text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 font-medium mt-auto"><span
                                                    class="badge bg-success/10 ms-3 text-[0.5625rem] !text-success">30% Off</span> $3.99
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item border-t-0 border-start-0 border-end-0">
                                    <div class="flex items-start flex-wrap">
                                        <div class="me-2 leading-none">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="{{asset('build/assets/images/pos-system/9.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-1 font-medium">Cheeseburger<span
                                                    class="text-[11px] text-textmuted dark:text-textmuted/50"> Burger</span>
                                            </p>
                                            <div class="product-quantity-container order-summ">
                                                <div class="flex flex-nowrap gap-1 border rounded-full p-1 items-center  border-defaultborder dark:border-defaultborder/10">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-minus border-end-0"><i
                                                            class="ri-subtract-line"></i></button>
                                                    <input type="text"
                                                        class="form-control form-control-sm border-0 text-center p-0"
                                                        aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-plus border-start-0"><i
                                                            class="ri-add-line"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line text-[1rem] text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 font-medium mt-auto"><span
                                                    class="badge bg-success/10 ms-3 text-[0.5625rem] !text-success">30% Off</span> $3.99
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item border-t-0 border-start-0 border-end-0">
                                    <div class="flex items-start flex-wrap">
                                        <div class="me-2 leading-none">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="{{asset('build/assets/images/pos-system/16.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-1 font-medium">Cheese Pizza<span
                                                    class="text-[11px] text-textmuted dark:text-textmuted/50"> Pizza</span>
                                            </p>
                                            <div class="product-quantity-container order-summ">
                                                <div class="flex flex-nowrap gap-1 border rounded-full p-1 items-center  border-defaultborder dark:border-defaultborder/10">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-minus border-end-0"><i
                                                            class="ri-subtract-line"></i></button>
                                                    <input type="text"
                                                        class="form-control form-control-sm border-0 text-center p-0"
                                                        aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-plus border-start-0"><i
                                                            class="ri-add-line"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line text-[1rem] text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 font-medium mt-auto"><span
                                                    class="badge bg-success/10 ms-3 text-[0.5625rem] !text-success">30% Off</span> $3.99
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item border-t-0 border-start-0 border-end-0">
                                    <div class="flex items-start flex-wrap">
                                        <div class="me-2 leading-none">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="{{asset('build/assets/images/pos-system/10.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-1 font-medium">Normal Pizza<span
                                                    class="text-[11px] text-textmuted dark:text-textmuted/50"> Pizza</span>
                                            </p>
                                            <div class="product-quantity-container order-summ">
                                                <div class="flex flex-nowrap gap-1 border rounded-full p-1 items-center  border-defaultborder dark:border-defaultborder/10">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-minus border-end-0"><i
                                                            class="ri-subtract-line"></i></button>
                                                    <input type="text"
                                                        class="form-control form-control-sm border-0 text-center p-0"
                                                        aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button"
                                                        class="ti-btn ti-btn-icon ti-btn-sm btn-wave !rounded-full !m-0 ti-btn-soft-primary border border-defaultborder dark:border-defaultborder/10 product-quantity-plus border-start-0"><i
                                                            class="ri-add-line"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line text-[1rem] text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 font-medium mt-auto"><span
                                                    class="badge bg-success/10 ms-3 text-[0.5625rem] !text-success">30% Off</span> $3.99
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10">
                                <div class="flex items-center justify-between flex-wrap">
                                    <div class="text-xs font-medium bg-primary/10 !text-primary p-1 px-2 rounded-md">SPRUKO1325</div>
                                    <div class="text-success">COUPON APPLIED</div>
                                </div>
                            </div>
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="text-textmuted dark:text-textmuted/50">Sub Total</div>
                                    <div class="font-medium text-[14px]">$318.00</div>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="text-textmuted dark:text-textmuted/50">Discount</div>
                                    <div class="font-medium text-[14px]">10% - $31.08</div>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="text-textmuted dark:text-textmuted/50">Delivery Charges</div>
                                    <div class="font-medium text-[14px]">- $29.00</div>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="text-textmuted dark:text-textmuted/50">GST (10%)</div>
                                    <div class="font-medium text-[14px]">+ $2.00</div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="text-textmuted dark:text-textmuted/50">Service Tax (18%)</div>
                                    <div class="font-medium text-[14px]">- $45.29</div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <div class="text-[15px]">Total :</div>
                                    <div class="font-semibold text-[1rem] text-dark"> $1,387.00</div>
                                </div>
                                <div class="flex gap-4 mt-4">
                                    <a href="javascript:void(0);"
                                        class="ti-btn bg-primarytint1color/10 !text-primarytint1color btn-wave flex-auto waves-effect waves-light">Save For
                                        Later</a>
                                    <a href="{{url('checkout')}}"
                                        class="ti-btn ti-btn-primary btn-wave flex-auto waves-effect waves-light">Pay Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End::offcanvas viewcart -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Isotope-layout JS -->
        <script src="{{asset('build/assets/libs/isotope-layout/isotope.pkgd.min.js')}}"></script>

        <!-- Internal POS-Dashboard JS -->
        @vite('resources/assets/js/pos-dashboard.js')
        

@endsection