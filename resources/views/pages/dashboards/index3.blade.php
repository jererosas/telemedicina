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
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Dashboards
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Ecommerce</h1>
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

                    <!-- Start: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex justify-between">
                                                <div>
                                                    <div
                                                        class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                        Total Sales</div>
                                                    <div class="text-[23px] font-medium mb-0">15,432</div>
                                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased
                                                        By <span class="text-success">5.1%<i
                                                                class="ti ti-trending-up text-[16px]"></i></span></div>
                                                </div>
                                                <div class="avatar avatar-md bg-primary svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        fill="#000000" viewBox="0 0 256 256">
                                                        <path
                                                            d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex justify-between">
                                                <div>
                                                    <div
                                                        class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                        Revenue</div>
                                                    <div class="text-[23px] font-medium mb-0">$245,147</div>
                                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased
                                                        By <span class="text-success">0.6%<i
                                                                class="ti ti-trending-up text-[16px]"></i></span></div>
                                                </div>
                                                <div class="avatar avatar-md bg-primarytint1color svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        fill="#000000" viewBox="0 0 256 256">
                                                        <path
                                                            d="M168,56a8,8,0,0,1,8-8h16V32a8,8,0,0,1,16,0V48h16a8,8,0,0,1,0,16H208V80a8,8,0,0,1-16,0V64H176A8,8,0,0,1,168,56Zm62.56,54.68a103.92,103.92,0,1,1-85.24-85.24,8,8,0,0,1-2.64,15.78A88.07,88.07,0,0,0,40,128a87.62,87.62,0,0,0,22.24,58.41A79.66,79.66,0,0,1,98.3,157.66a48,48,0,1,1,59.4,0,79.66,79.66,0,0,1,36.06,28.75A87.62,87.62,0,0,0,216,128a88.85,88.85,0,0,0-1.22-14.68,8,8,0,1,1,15.78-2.64ZM128,152a32,32,0,1,0-32-32A32,32,0,0,0,128,152Zm0,64a87.57,87.57,0,0,0,53.92-18.5,64,64,0,0,0-107.84,0A87.57,87.57,0,0,0,128,216Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex justify-between">
                                                <div>
                                                    <div
                                                        class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                        Average Order Value</div>
                                                    <div class="text-[23px] font-medium mb-0">$120</div>
                                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased
                                                        By <span class="text-danger">1.08%<i
                                                                class="ti ti-trending-down text-[16px]"></i></span></div>
                                                </div>
                                                <div class="avatar avatar-md bg-primarytint2color svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        fill="#000000" viewBox="0 0 256 256">
                                                        <path
                                                            d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex justify-between">
                                                <div>
                                                    <div
                                                        class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                        Total Orders</div>
                                                    <div class="text-[23px] font-medium mb-0">1,25,032</div>
                                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased
                                                        By <span class="text-success">2.3%<i
                                                                class="ti ti-trending-up text-[16px]"></i></span></div>
                                                </div>
                                                <div class="avatar avatar-md bg-primarytint3color svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        fill="#000000" viewBox="0 0 256 256">
                                                        <path
                                                            d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-9 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">Sales Report</div>
                                            <div class="flex gap-2">
                                                <div class="ti-btn ti-btn-sm ti-btn-outline-light">Today</div>
                                                <div class="ti-btn ti-btn-sm ti-btn-outline-light">Weakly</div>
                                                <div class="ti-btn ti-btn-sm ti-btn-light">Yearly</div>
                                            </div>
                                        </div>
                                        <div class="box-body pb-2">
                                            <div id="sales-report"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-8 xl:col-span-7 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header justify-between">
                                            <div class="box-title">Recent Orders</div>
                                            <a href="javascript:void(0);"
                                                class="ti-btn ti-btn-outline-light border ti-btn-sm flex items-center !text-textmuted dark:text-textmuted/50">
                                                View All
                                            </a>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="table-responsive">
                                                <table class="ti-custom-table ti-custom-table-head ti-custom-table-hover">
                                                    <thead>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td><a href="javascript:void(0);"
                                                                    class="text-primary">#SPK781</a></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-2 leading-none">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)"
                                                                            class="text-[14px] font-medium">Priceton
                                                                            Gray</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">Mar
                                                                    18,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-success/10 text-success">Paid</span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td><a href="javascript:void(0);"
                                                                    class="text-primary">#SPK782</a></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-2 leading-none">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)"
                                                                            class="text-[14px] font-medium">Elsa Urena</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">Mar
                                                                    20,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-danger/10 text-danger">Unpaid</span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td><a href="javascript:void(0);"
                                                                    class="text-primary">#SPK783</a></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-2 leading-none">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)"
                                                                            class="text-[14px] font-medium">Gloria</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">Mar
                                                                    24,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-success/10 text-success">Paid</span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td><a href="javascript:void(0);"
                                                                    class="text-primary">#SPK784</a></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-2 leading-none">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)"
                                                                            class="text-[14px] font-medium">Priya</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">Mar
                                                                    25,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span
                                                                    class="badge bg-warning/10 text-warning">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr  class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td><a href="javascript:void(0);"
                                                                    class="text-primary">#SPK785</a></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-2 leading-none">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)"
                                                                            class="text-[14px] font-medium">Adam Smith</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">Mar
                                                                    18,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-danger/10 text-danger">UnPaid</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-5 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">Total Orders
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <button
                                                    class="ti-btn ti-btn-outline-light border flex items-center !text-textmuted dark:text-textmuted/50 ti-dropdown-toggle ti-btn-sm hs-dropdown-toggle"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    View All <i
                                                        class="ri-arrow-down-s-line align-middle d-inline-block"></i>
                                                </button>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Yearly</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Monthly
                                                        </a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Weakly</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div
                                                class="flex justify-between items-center text-center bg-light p-4 rounded-sm order-content">
                                                <div>
                                                    <p class="mb-1">Total Orders</p>
                                                    <h4 class="!text-primary mb-0">12,500</h4>
                                                </div>
                                                <div>
                                                    <p class="mb-1 text-center">Overall Growth from Last Year</p>
                                                    <h5 class="!text-success mb-0 text-center">+15%</h5>
                                                </div>
                                            </div>
                                            <div id="total-orders"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-5  col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between flex-wrap pb-0">
                                            <div class="box-title">
                                                New Visitors
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-outline-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                    <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item"
                                                            href="javascript:void(0);">Today</a></li>
                                                    <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item"
                                                            href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body !pb-0">
                                            <div class="grid grid-cols-12 sm:gap-x-6 align-items-end mx-0">
                                                <div class="col-span-5">
                                                    <h3 class="font-medium mb-0">5,642</h3>
                                                    <div><i
                                                            class="ri-checkbox-blank-circle-fill text-primary leading-none align-middle text-[10px]"></i>
                                                        Total New Visitors</div>
                                                </div>
                                                <div class="col-span-7">
                                                    <div class="font-medium">Percentage of New Visitors</div>
                                                    <div class="text-textmuted dark:text-textmuted/50 text-xs">Last 30 Days:
                                                        Increased By <span class="text-success font-medium">42.5%<i
                                                                class="ti ti-arrow-narrow-up text-[16px]"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div id="websitedesign"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Payment Methods
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-outline-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                    <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item"
                                                            href="javascript:void(0);">Today</a></li>
                                                    <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item"
                                                            href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <ul class="ti-list-group list-group-flush !rounded-none !border-t-0">
                                                <li class="ti-list-group-item flex justify-between items-center">
                                                    <div>
                                                        <i
                                                            class="ri-bank-card-line p-1 bg-primarytint3color/10 text-primarytint3color color-transparent leading-none me-2 text-[22px] rounded-sm"></i>
                                                        Credit Card
                                                    </div>
                                                    <span class="badge bg-primary leading-none rounded-full">25%</span>
                                                </li>
                                                <li class="ti-list-group-item flex justify-between items-center">
                                                    <div>
                                                        <i
                                                            class="ri-paypal-line p-1 bg-primarytint2color/10 text-primarytint2color leading-none me-2 text-[22px] rounded-sm"></i>
                                                        PayPal
                                                    </div>
                                                    <span class="badge bg-primary leading-none rounded-full">20%</span>
                                                </li>
                                                <li class="ti-list-group-item flex justify-between items-center">
                                                    <div>
                                                        <i
                                                            class="ri-visa-line p-1 bg-primarytint1color/10 text-primarytint1color leading-none me-2 text-[22px] rounded-sm"></i>
                                                        VISA
                                                    </div>
                                                    <span class="badge bg-primary leading-none rounded-full">15%</span>
                                                </li>
                                                <li class="ti-list-group-item flex justify-between items-center">
                                                    <div>
                                                        <i
                                                            class="ri-apple-line p-1 bg-info/10 text-info leading-none me-2 text-[22px] rounded-sm"></i>
                                                        Apple Pay
                                                    </div>
                                                    <span class="badge bg-primary leading-none rounded-full">10%</span>
                                                </li>
                                                <li class="ti-list-group-item flex justify-between items-center">
                                                    <div>
                                                        <i
                                                            class="ri-google-line p-1 bg-secondary/10 text-secondary leading-none me-2 text-[22px] rounded-sm"></i>
                                                        Google Pay
                                                    </div>
                                                    <span class="badge bg-primary leading-none rounded-full">10%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 md:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header justify-between pb-3">
                                            <div class="box-title">
                                                Traffic Sources
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a href="javascript:void(0);"
                                                    class="ti-btn ti-btn-light ti-btn-sm !text-textmuted dark:text-textmuted/50 !mb-0"
                                                    data-bs-toggle="dropdown">
                                                    View All<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="table-responsive">
                                                <table class="ti-custom-table ti-custom-table-head ti-custom-table-hover">
                                                    <thead>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <th scope="col">Browser</th>
                                                            <th scope="col">Traffic</th>
                                                            <th scope="col">Sessions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span
                                                                        class="avatar  avatar-sm p-2 bg-primarytint3color/10 !text-primarytint3color me-2">
                                                                        <i class="ri-chrome-line text-lg"></i>
                                                                    </span>
                                                                    <div class="font-medium">Chrome</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primarytint3color"
                                                                        role="progressbar" style="width: 78%"
                                                                        aria-valuenow="78" aria-valuemin="0"
                                                                        aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>15,248<i
                                                                        class="ri-arrow-up-s-fill ms-1 text-success align-middle text-lg"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span
                                                                        class="avatar avatar-sm p-2 bg-primarytint2color/10 !text-primarytint2color me-2">
                                                                        <i class="ri-safari-line text-lg"></i>
                                                                    </span>
                                                                    <div class="font-medium">Safari</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primarytint2color"
                                                                        role="progressbar" style="width: 56%"
                                                                        aria-valuenow="56" aria-valuemin="0"
                                                                        aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>22,945<i
                                                                        class="ri-arrow-up-s-fill ms-1 text-success align-middle text-lg"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span
                                                                        class="avatar avatar-sm p-2 bg-primarytint1color/10 !text-primarytint1color me-2">
                                                                        <i class="ri-opera-line text-lg"></i>
                                                                    </span>
                                                                    <div class="font-medium">Opera</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primarytint1color"
                                                                        role="progressbar" style="width: 62%"
                                                                        aria-valuenow="62" aria-valuemin="0"
                                                                        aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>32,453<i
                                                                        class="ri-arrow-down-s-fill ms-1 text-danger align-middle text-lg"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span
                                                                        class="avatar  avatar-sm p-2 bg-secondary/10 !text-secondary me-2">
                                                                        <i class="ri-edge-fill text-lg"></i>
                                                                    </span>
                                                                    <div class="font-medium">Edge</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                                                        role="progressbar" style="width: 45%"
                                                                        aria-valuenow="45" aria-valuemin="0"
                                                                        aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>9,886<i
                                                                        class="ri-arrow-up-s-fill ms-1 text-success align-middle text-lg"></i></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box offer-card">
                                <div class="box-body p-6">
                                    <div class="flex align-items-end gap-2">
                                        <div class="offer-card-details">
                                            <div class="offer-item">
                                                <img src="{{asset('build/assets/images/media/media-90.png')}}" alt="Product Image"
                                                    class="img-fluid offer-item-img">
                                                <div class="avatar avatar-xl mb-3">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/17.png')}}" alt="Product Image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="product-info">
                                                    <h4 class="mb-2 font-medium text-white">Today's Sale</h4>
                                                    <span class="mb-1 text-success font-semibold text-xs">Up to 20% Off
                                                        on</span>
                                                    <span class="mb-3 text-white h6">HeadPhones</span>
                                                </div>
                                                <span class="text-white">Price: $9.99</span>
                                                <span class="text-white ps-2">Discount: 20%</span>
                                            </div>
                                            <button class="ti-btn text-white bg-primarytint1color mt-6 shadow">Add to
                                                Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Top-Selling Products</div>
                                    <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-outline-light border flex items-center text-textmuted dark:text-textmuted/50 text-xs px-2 py-[0.26rem]">
                                        View All
                                    </a>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none mb-0" id="product-list">
                                        <li class="">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 dark:bg-light">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/6.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class=" flex-auto">
                                                    <span class="text-[14px] block mb-0 font-medium">Chair with
                                                        Cushion</span>
                                                    <span
                                                        class="text-textmuted dark:text-textmuted/50 text-xs">Furniture</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium">$124</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">260
                                                        Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 dark:bg-light">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="text-[14px] block mb-0 font-medium">Hand Bag</span>
                                                    <span
                                                        class="text-textmuted dark:text-textmuted/50 text-xs">Accessories</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium">$564</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">181
                                                        Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 dark:bg-light">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="text-[14px] block mb-0 font-medium">Sneakers</span>
                                                    <span
                                                        class="text-textmuted dark:text-textmuted/50 text-xs">Sports</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium">$964</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">134
                                                        Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 dark:bg-light">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="text-[14px] block mb-0 font-medium">Ron Hoodie</span>
                                                    <span
                                                        class="text-textmuted dark:text-textmuted/50 text-xs">Fashion</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium">$769</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">127
                                                        Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-lg bg-gray-200 dark:bg-light">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/23.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="text-[14px] block mb-0 font-medium">Smart Watch</span>
                                                    <span
                                                        class="text-textmuted dark:text-textmuted/50 text-xs">Electronics</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-[14px] font-medium">$999</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">108
                                                        Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header justify-between pb-0">
                                    <div class="box-title"> Recent Activity </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);"
                                            class="text-xs text-textmuted dark:text-textmuted/50 bg-light rounded ti-btn ti-btn-sm ti-btn-light"
                                            data-bs-toggle="dropdown" aria-expanded="false"> View All<i
                                                class="ri-arrow-down-s-line align-middle inline-block"></i> </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none mb-0 ecommerce-recent-activity">
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="flex items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-primary avatar-rounded">
                                                        <i class="ri-shopping-cart-line"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="block font-medium">New Order - #12345</span>
                                                    <span class="block text-xs text-textmuted dark:text-textmuted/50">2
                                                        items purchased by John Doe</span>
                                                </div>
                                                <div class="flex-auto text-end">
                                                    <span
                                                        class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">3
                                                        hrs ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="flex items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-success avatar-rounded">
                                                        <i class="ri-checkbox-circle-line text-[14px]"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="block font-medium">Order Shipped - #12345</span>
                                                    <span
                                                        class="block text-xs text-textmuted dark:text-textmuted/50">Shipped
                                                        via FedEx</span>
                                                </div>
                                                <div class="flex-auto text-end">
                                                    <span
                                                        class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">1
                                                        day ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="flex items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-primarytint1color avatar-rounded">
                                                        <i class="ri-add-circle-line text-[14px]"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="block font-medium"> Added New Products</span>
                                                    <span
                                                        class="block text-xs text-textmuted dark:text-textmuted/50 pb-2">New
                                                        items added in Fashions</span>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm bg-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" alt="">
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm bg-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/12.png')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="flex-auto text-end">
                                                    <span
                                                        class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">12
                                                        days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="flex items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-danger avatar-rounded">
                                                        <i class="ri-heart-3-line text-[14px]"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="block font-medium">Product Favorited - iPhone 12 Pro</span>
                                                    <span class="block text-xs text-textmuted dark:text-textmuted/50">Added
                                                        to favorites by Jane Smith</span>
                                                </div>
                                                <div class="flex-auto text-end">
                                                    <span
                                                        class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">2
                                                        days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="flex items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-warning avatar-rounded">
                                                        <i class="ri-star-line text-[14px]"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="block font-medium">Product Rated - Samsung Galaxy
                                                        S21</span>
                                                    <span class="block text-xs text-textmuted dark:text-textmuted/50">Rated
                                                        4.5 stars by John Doe</span>
                                                </div>
                                                <div class="flex-auto text-end">
                                                    <span
                                                        class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">3
                                                        days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="flex items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-info avatar-rounded">
                                                        <i class="ri-price-tag-3-line text-[14px]"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="block font-medium">Product Discount - Nike Air Max</span>
                                                    <span
                                                        class="block text-xs text-textmuted dark:text-textmuted/50">Discounted
                                                        price applied</span>
                                                </div>
                                                <div class="flex-auto text-end">
                                                    <span
                                                        class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">4
                                                        days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content !pb-0">
                                            <div class="flex items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-secondary avatar-rounded">
                                                        <i class="ri-chat-1-line text-[14px]"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="block font-medium">Customer Inquiry - Order ID:
                                                        #12346</span>
                                                    <span
                                                        class="block text-xs text-textmuted dark:text-textmuted/50">Inquiry
                                                        received from customer</span>
                                                </div>
                                                <div class="flex-auto text-end">
                                                    <span
                                                        class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">5
                                                        days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Newly Added Products
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <div> <input class="form-control form-control-sm" type="text"
                                                placeholder="Search Here" aria-label=".form-control-sm example"> </div>
                                        <div class="hs-dropdown ti-dropdown"> <a href="javascript:void(0);"
                                                class="ti-btn ti-btn-primary ti-btn-sm !m-0 btn-wave waves-effect waves-light"
                                                data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i> </a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive overflow-auto table-bordered-default">
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col"
                                                        class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        Product Id</th>
                                                    <th scope="col"
                                                        class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        Product Name</th>
                                                    <th scope="col"
                                                        class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        Category</th>
                                                    <th scope="col"
                                                        class="border-b border-defaultborder dark:border-defaultborder/10">%
                                                        Discount</th>
                                                    <th scope="col"
                                                        class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        Price</th>
                                                    <th scope="col"
                                                        class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        Status</th>
                                                    <th scope="col"
                                                        class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        Added Date</th>
                                                    <th scope="col"
                                                        class="border-b border-defaultborder dark:border-defaultborder/10">
                                                        Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="font-medium">#1547988</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/12.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Sweater Coat</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Women's wear</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary leading-none">40%</span>
                                                    </td>
                                                    <td>
                                                        $241.08
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Published</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">15-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="font-medium">#1415023</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/6.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Cushion Chair</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Furniture</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary leading-none">30%</span>
                                                    </td>
                                                    <td>
                                                        $1,489.00
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">20-05-2024</span>
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="font-medium">#4578162</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/23.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Smart Watch</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Gadgets</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary leading-none">10%</span>
                                                    </td>
                                                    <td>
                                                        $2,457.08
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">Saved as Draft</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">06-02-2024</span>
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="font-medium">#4578954</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/32.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Alarm Clock</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Home Decor</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary leading-none">20%</span>
                                                    </td>
                                                    <td>
                                                        $359.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Published</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">26-01-2024</span>
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="font-medium">#8745814</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Running Shoes</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Athletic Footwear</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary leading-none">0%</span>
                                                    </td>
                                                    <td>
                                                        $568.87
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Published</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">24-03-2024</span>
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center flex-wrap">
                                        <div>
                                            Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="ti-pagination mb-0 flex-wrap">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            Prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item "><a class="page-link active"
                                                            href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0);">2</a></li>

                                                    <li class="page-item">
                                                        <a class="page-link !text-primary" href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Echarts JS -->
        <script src="{{asset('build/assets/libs/echarts/echarts.min.js')}}"></script>

        <!-- Ecommerce Dashboard -->
        @vite('resources/assets/js/ecommerce-dashboard.js')
        

@endsection