@extends('layouts.master')

@section('styles')
  
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Stocks</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Stocks</h1>
                        </div>
                        <div class="ti-btn-list">
                            <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary !border-0 btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- End::page-header -->

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="swiper swiper-basic swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                                    <div class="flex flex-auto items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-dark/10 p-2 avatar-sm">
                                                                <i class="bi bi-apple text-dark"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="block text-defaulttextcolor text-[14px]">Apple</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-end">
                                                        <span class="block text-success">+0.14%</span>
                                                        <span class="block font-medium text-[14px]">AAPL</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-auto align-items-end gap-2 justify-between">
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Current Value:</span>
                                                        <span class="block ms-auto text-[15px] font-medium">$1,780.80<i class="ri-arrow-up-s-fill text-success leading-none align-middle text-xl ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-1" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                                    <div class="flex flex-auto items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-warning/10 p-2 avatar-sm">
                                                                <i class="bi bi-currency-bitcoin text-warning"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="block text-defaulttextcolor text-[14px]">Bitcoin</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-end">
                                                        <span class="block text-danger">-2.14%</span>
                                                        <span class="block font-medium text-[14px]">BTC</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-auto align-items-end gap-2 justify-between">
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Current Value:</span>
                                                        <span class="block ms-auto text-[15px] font-medium">$58,151.02<i class="ri-arrow-down-s-fill text-danger leading-none align-middle text-xl ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-2" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                                    <div class="flex flex-auto items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-primarytint1color/10 p-2 avatar-sm">
                                                                <i class="bi bi-card-list text-primarytint1color"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="block text-defaulttextcolor text-[14px]">Tesla</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-end">
                                                        <span class="block text-success">+4.02%</span>
                                                        <span class="block font-medium text-[14px]">TSLA</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-auto align-items-end gap-2 justify-between">
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Current Value:</span>
                                                        <span class="block ms-auto text-[15px] font-medium">$4,125.63<i class="ri-arrow-up-s-fill text-success leading-none align-middle text-xl ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-3" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                                    <div class="flex flex-auto items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-primarytint2color/10 p-2 avatar-sm">
                                                                <i class="bi bi-gift text-primarytint2color"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="block text-defaulttextcolor text-[14px]">Amazon</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-end">
                                                        <span class="block text-danger">-5.14%</span>
                                                        <span class="block font-medium text-[14px]">AMZN</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-auto align-items-end gap-2 justify-between">
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Current Value:</span>
                                                        <span class="block ms-auto text-[15px] font-medium">$63,251.11<i class="ri-arrow-down-s-fill text-danger leading-none align-middle text-xl ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-4" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                                    <div class="flex flex-auto items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-primarytint3color/10 p-2 avatar-sm">
                                                                <i class="bi bi-truck text-primarytint3color"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="block text-defaulttextcolor text-[14px]">Aliexpress</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-end">
                                                        <span class="block text-success">+1.14%</span>
                                                        <span class="block font-medium text-[14px]">AE </span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-auto align-items-end gap-2 justify-between">
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Current Value:</span>
                                                        <span class="block ms-auto text-[15px] font-medium">$5,401.50<i class="ri-arrow-up-s-fill text-success leading-none align-middle text-xl ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-5" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                                    <div class="flex flex-auto items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-secondary/10 p-2 avatar-sm">
                                                                <i class="bi bi-phone text-secondary"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="block text-defaulttextcolor text-[14px]">Samsung</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-end">
                                                        <span class="block text-success">+2.14%</span>
                                                        <span class="block font-medium text-[14px]">SSNLF</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-auto align-items-end gap-2 justify-between">
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Current Value:</span>
                                                        <span class="block ms-auto text-[15px] font-medium">$10,732.12<i class="ri-arrow-up-s-fill text-success leading-none align-middle text-xl ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-6" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                                    <div class="flex flex-auto items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-info/10 p-2 avatar-sm">
                                                                <i class="bi bi-nvidia text-info"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="block text-defaulttextcolor text-[14px]">Nvidia</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-end">
                                                        <span class="block text-danger">-2.13%</span>
                                                        <span class="block font-medium text-[14px]">NVDA</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-auto align-items-end gap-2 justify-between">
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Current Value:</span>
                                                        <span class="block ms-auto text-[15px] font-medium">$23,235.25<i class="ri-arrow-down-s-fill text-danger leading-none align-middle text-xl ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-7" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">Stock Market Value</div>
                                    <div class="flex gap-2">
                                        <div class="ti-btn ti-btn-outline-light border ti-btn-full ti-btn-sm">Today</div>
                                        <div class="ti-btn ti-btn-outline-light border ti-btn-full ti-btn-sm">Weakly</div>
                                        <div class="ti-btn bg-light border ti-btn-full ti-btn-sm">Yearly</div>
                                    </div>
                                </div>
                                <div class="box-body !pb-2">
                                    <div class="sm:flex align-items-end  p-4 bg-light gap-5 flex-wrap rounded-md">
                                        <div class="min-w-fit-content me-3">
                                            <p class="mb-1">Total Investment</p>
                                            <h4 class="font-medium mb-0">$15,874.50<span class="badge bg-success ms-2 text-[0.5625rem]"><i class="ti ti-trending-up me-1"></i>0.32%</span></h4>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <p class="mb-1">Market Cap</p>
                                            <h4 class="font-medium mb-0">$124,784.23<span class="badge bg-danger ms-2 text-[0.5625rem]"><i class="ti ti-trending-down me-1"></i>0.12%</span></h4>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <p class="mb-1 text-xs text-textmuted dark:text-textmuted/50">
                                                <span class="text-success">+124.25</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>Yesterday</span>
                                            </p>
                                            <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">
                                                <span>Jun 16, 2022</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>10:45 AM</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>UTC +5:30</span>
                                            </p>
                                        </div>
                                        <div class="flex-1 sm:text-end mt-2 mt-sm-0 ms-auto">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-w-lg ti-btn-soft-primary1"><i class="ti ti-plus me-1"></i>Compare</a>
                                        </div>
                                    </div>
                                    <div id="stockCap-area">
                                    </div>
                                    <div id="stockCap">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        My Watchlist
                                    </div>
                                    <button type="button" class="ti-btn ti-btn-sm bg-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-primarytint1color/10 bg-dark/10">
                                                                <img src="{{asset('build/assets/images/media/apps/apple.png')}}" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">Apple</a>
                                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">AAPL</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex-auto">
                                                                <div id="apple-change"></div>
                                                            </div>
                                                            <div class="flex-auto ms-auto">
                                                                <p class="mb-0"> $150.20</p>
                                                                <p class="text-success mb-0">+1.50%</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-1">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-primarytint2color/10 bg-primarytint2color/10">
                                                                <img src="{{asset('build/assets/images/media/apps/google.png')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">Google</a>
                                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">GOOG</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex-auto">
                                                                <div id="google-change"></div>
                                                            </div>
                                                            <div class="flex-auto ms-auto">
                                                                <p class="mb-0">$2,500.5</p>
                                                                <span class="text-danger">-5.25%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-primarytint3color/10 bg-primarytint3color/10">
                                                                <img src="{{asset('build/assets/images/media/apps/microsoft.png')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">Microsoft</a>
                                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">MSFT</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex-auto">
                                                                <div id="microsoft-change"></div>
                                                            </div>
                                                            <div class="flex-auto ms-auto">
                                                                <p class="mb-0"> $300.75</p>
                                                                <span class="text-success">+2.30%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-secondary/10 bg-secondary/10">
                                                                <img src="{{asset('build/assets/images/media/apps/amazon.png')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">Amazon</a>
                                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">AMZN</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex-auto">
                                                                <div id="amazon-change"></div>
                                                            </div>
                                                            <div class="flex-auto ms-auto">
                                                                <p class="mb-0">$3,000.00</p>
                                                                <span class="text-danger">-10.50%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-warning/10 bg-warning/10">
                                                                <img src="{{asset('build/assets/images/media/apps/tesla.png')}}" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">Tesla</a>
                                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">TSLA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex-auto">
                                                                <div id="tesla-change"></div>
                                                            </div>
                                                            <div class="flex-auto ms-auto">
                                                                <p class="mb-0">$700.80</p>
                                                                <span class="text-success">+8.00%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-info/10 bg-info/10">
                                                                <img src="{{asset('build/assets/images/media/apps/facebook.png')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">Facebook</a>
                                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">FB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex-auto">
                                                                <div id="facebook-change"></div>
                                                            </div>
                                                            <div class="flex-auto ms-auto">
                                                                <p class="mb-0">$350.40</p>
                                                                <span class="text-danger">-3.20%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-success/10 bg-success/10">
                                                                <img src="{{asset('build/assets/images/media/apps/nvidia.png')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">Nvidia</a>
                                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">NVDA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex-auto">
                                                                <div id="nvidia-change"></div>
                                                            </div>
                                                            <div class="flex-auto ms-auto">
                                                                <p class="mb-0">$800.60</p>
                                                                <span class="text-success">+5.75%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <h6 class="box-title">Statistics</h6>
                                    <button type="button" class="ti-btn ti-btn-sm bg-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="box-body">
                                    <div id="portfolio" class=""></div>
                                </div>
                                <div class="box-footer p-4 my-2">
                                    <div class="flex justify-between gap-x-6">
                                        <div class="p-0">
                                            <div class="text-center"> 
                                                <i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md ti-btn-soft-primary"></i>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs mb-1 rounded-dot dot-primary inline-block ms-2">Stocks
                                                </span>
                                                <div><span class="text-[1rem] font-medium">1,624</span> </div>
                                            </div>
                                        </div>
                                        <div class="p-0">
                                            <div class="text-center"> 
                                                <i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md ti-btn-soft-primary1"></i>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs mb-1 rounded-dot dot-secondary inline-block ms-2">Funds
                                                </span>
                                                <div><span class="text-[1rem] font-medium">1,267</span></div>
                                            </div>
                                        </div>
                                        <div class="p-0">
                                            <div class="text-center"> 
                                                <i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md bg-primarytint2color/10 text-primarytint2color"></i>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs mb-1 rounded-dot dot-success inline-block ms-2">Bond
                                                </span>
                                                <div><span class="text-[1rem] font-medium">1,153</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 lg:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header  justify-between">
                                    <div class="box-title">My Stocks</div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm text-textmuted dark:text-textmuted/50" data-bs-toggle="dropdown" aria-expanded="false">
                                            All Stocks<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);"> All Stocks</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Wishlist</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Stocks</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Crypto</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">ETFs</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Bonds</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head ti-custom-table-hover">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th>Stock</th>
                                                    <th>Quantity</th>
                                                    <th>Stock Price</th>
                                                    <th>Change</th>
                                                    <th>Total Value</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar !rounded-full avatar-sm bg-primary/10 !text-primary">
                                                                <i class="ri-github-fill text-[1rem]"></i>
                                                            </span>
                                                            <div class="flex-auto">
                                                                <div>Gituhb, Demo Inc</div>
                                                                <div class="text-textmuted dark:text-textmuted/50">GTHB</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>100</td>
                                                    <td class="font-medium">$145.20</td>
                                                    <td><span class="text-success">+$1,230.00</span></td>
                                                    <td>$14,520.00</td>
                                                    <td class="ti-btn-list">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary">Buy</a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary1">Sell</a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar !rounded-full avatar-sm bg-primarytint1color/10 !text-primarytint1color">
                                                                <i class="ri-amazon-fill text-[1rem]"></i>
                                                            </span>
                                                            <div class="flex-auto">
                                                                <div>Amazon.com Inc.</div>
                                                                <div class="text-textmuted dark:text-textmuted/50">AMZN</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td class="font-medium">$3,500.00</td>
                                                    <td><span class="text-danger">-$5,500.00</span></td>
                                                    <td>$175,000.00</td>
                                                    <td class="ti-btn-list">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary">Buy</a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary1">Sell</a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar !rounded-full avatar-sm bg-primarytint2color/10 !text-primarytint2color">
                                                                <i class="ri-microsoft-fill text-[1rem]"></i>
                                                            </span>
                                                            <div class="flex-auto">
                                                                <div>Microsoft Corporation</div>
                                                                <div class="text-textmuted dark:text-textmuted/50">MSFT</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>75</td>
                                                    <td class="font-medium">$265.75</td>
                                                    <td><span class="text-success">+$876.25</span></td>
                                                    <td>$19,931.25</td>
                                                    <td class="ti-btn-list">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary">Buy</a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary1">Sell</a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar !rounded-full avatar-sm bg-primarytint3color/10 !text-primarytint3color">
                                                                <i class="ri-google-fill text-[1rem]"></i>
                                                            </span>
                                                            <div class="flex-auto">
                                                                <div>Alphabet Inc. (Google)</div>
                                                                <div class="text-textmuted dark:text-textmuted/50">GOOGL</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>30</td>
                                                    <td class="font-medium">$2,550.00</td>
                                                    <td><span class="text-success">+$1,800.00</span></td>
                                                    <td>$76,500.00</td>
                                                    <td class="ti-btn-list">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary">Buy</a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary1">Sell</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar !rounded-full avatar-sm bg-info/10 !text-info">
                                                                <i class="ri-facebook-circle-fill text-[1rem]"></i>
                                                            </span>
                                                            <div class="flex-auto">
                                                                <div>Facebook, Inc.</div>
                                                                <div class="text-textmuted dark:text-textmuted/50">FB</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>60</td>
                                                    <td class="font-medium">$325.60</td>
                                                    <td><span class="text-danger">-$364.00</span></td>
                                                    <td>$19,536.00</td>
                                                    <td class="ti-btn-list">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary">Buy</a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-primary1">Sell</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <h6 class="box-title">Growth Analysis</h6>
                                    <button type="button" class="ti-btn ti-btn-sm bg-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="box-body pb-1">
                                    <div class="p-4 bg-light rounded-md text-defaulttextcolor rounded border flex items-center justify-between border-dashed dark:border-defaultborder/10">
                                        <div>
                                            <span class="block mb-1">Tesla, Inc (TSLA)</span>
                                            <h5 class="font-semibold leading-none mb-0">$ 17,782.00</h5>
                                        </div>
                                        <span class="badge bg-success font-semibold float-end leading-none ms-2">0.64%<i class="ri-arrow-up-s-line ms-1"></i></span>
                                    </div>
                                    <div id="visitors-report"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Transaction History
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm ti-dropdown-toggle hs-dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            All<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Buy</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Sell</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head ti-custom-table-hover">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th>Date</th>
                                                    <th>Stock</th>
                                                    <th>Shares</th>
                                                    <th>Type</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>12 Apr, 2024</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-primarytint1color/10 bg-dark/10">
                                                                <img src="{{asset('build/assets/images/media/apps/apple.png')}}" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">APPL - Apple Inc.</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td><span class="badge bg-primary/10 !text-primary">Buy</span></td>
                                                    <td>
                                                        <div class="font-medium">$150.00</div>
                                                        <div class="text-textmuted dark:text-textmuted/50">Value: $7,500.00</div>
                                                    </td>
                                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +2%</span></td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>14 Apr, 2024</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-primarytint2color/10 bg-primarytint2color/10">
                                                                <img src="{{asset('build/assets/images/media/apps/google.png')}}" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">GOOGL-Alphabet Inc..</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>20</td>
                                                    <td> <span class="badge bg-primarytint1color/10 !text-primarytint1color">Sell</span></td>
                                                    <td>
                                                        <div class="font-medium">$2,400.00</div>
                                                        <div class="text-textmuted dark:text-textmuted/50">Value: $48,000.00</div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -1.5%</span></td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>18 Apr, 2024</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-warning/10 bg-warning/10">
                                                                <img src="{{asset('build/assets/images/media/apps/tesla.png')}}" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">TSLA - Tesla Inc.</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>15</td>
                                                    <td><span class="badge bg-primary/10 !text-primary">Buy</span></td>
                                                    <td>
                                                        <div class="font-medium">$650.00</div>
                                                        <div class="text-textmuted dark:text-textmuted/50">Value: $9,750.00</div>
                                                    </td>
                                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +1.2%</span></td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>20 Apr, 2024</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-primarytint3color/10 bg-primarytint3color/10">
                                                                <img src="{{asset('build/assets/images/media/apps/microsoft.png')}}" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium"> MSFT - Microsoft Corp.</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>30</td>
                                                    <td> <span class="badge bg-primarytint1color/10 !text-primarytint1color">Sell</span></td>
                                                    <td>
                                                        <div class="font-medium">$280.00</div>
                                                        <div class="text-textmuted dark:text-textmuted/50">Value: $8,400.00</div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -0.8%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>22 Apr, 2024</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-danger/10 bg-danger/10 !text-danger">
                                                                <i class="ri-netflix-line"></i>
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-medium">NFLX - Netflix Inc.</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>25</td>
                                                    <td><span class="badge bg-primary/10 !text-primary">Buy</span></td>
                                                    <td>
                                                        <div class="font-medium">$500.00</div>
                                                        <div class="text-textmuted dark:text-textmuted/50">Value: $12,500.00</div>
                                                    </td>
                                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +0.5%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Market Movers
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                            All<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Buy</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Sell</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col">Symbol</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Change</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">% Change</th>
                                                    <th scope="col">Volume</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>AAPL</td>
                                                    <td>Apple Inc.</td>
                                                    <td><span class="text-success">$5.00</span></td>
                                                    <td class="font-medium text-[14px]">$150.00</td>
                                                    <td><span class="text-success">+3.45%</span></td>
                                                    <td>1,000,000</td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>GOOGL</td>
                                                    <td>Alphabet Inc.</td>
                                                    <td><span class="text-danger">-$10.00</span></td>
                                                    <td class="font-medium text-[14px]">$2,500.00</td>
                                                    <td><span class="text-danger">-0.40%</span></td>
                                                    <td>500,000</td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>MSFT</td>
                                                    <td>Microsoft Corporation</td>
                                                    <td><span class="text-success">$3.00</span></td>
                                                    <td class="font-medium text-[14px]">$300.00</td>
                                                    <td><span class="text-success">+1.01%</span></td>
                                                    <td>800,000</td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>TSLA</td>
                                                    <td>Tesla, Inc.</td>
                                                    <td><span class="text-success">$20.00</span></td>
                                                    <td class="font-medium text-[14px]">$700.00</td>
                                                    <td><span class="text-success">+2.94%</span></td>
                                                    <td>1,200,000</td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>NFLX</td>
                                                    <td>Netflix, Inc.</td>
                                                    <td><span class="text-danger">-$5.00</span></td>
                                                    <td class="font-medium text-[14px]">$400.00</td>
                                                    <td><span class="text-danger">-1.23%</span></td>
                                                    <td>600,000</td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>AMZN</td>
                                                    <td>Amazon.com, Inc.</td>
                                                    <td><span class="text-success">$50.00</span></td>
                                                    <td class="font-medium text-[14px]">$3,000.00</td>
                                                    <td><span class="text-success">+1.69%</span></td>
                                                    <td>1,500,000</td>
                                                </tr>
                                                <tr>
                                                    <td>FB</td>
                                                    <td>Facebook.com, Inc.</td>
                                                    <td><span class="text-success">$24.00</span></td>
                                                    <td class="font-medium text-[14px]">$6,000.00</td>
                                                    <td><span class="text-success">+2.08%</span></td>
                                                    <td>2,258,450</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                </div>
            </div> 
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Stocks Dashboard --> 
        @vite('resources/assets/js/stocks-dashboard.js')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        

@endsection