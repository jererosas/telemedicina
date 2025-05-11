@extends('layouts.master')

@section('styles')
  

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
                                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Order Details</h1>
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
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-8 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Order No - <span class="text-primary">#SPK-7832</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-primary/10 text-primary">
                                                    Estimated delivery : 30,Nov 2023
                                                </span>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="table-responsive">
                                                <table class="ti-custom-table text-nowrap">
                                                    <thead>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <th scope="col">Item</th>
                                                            <th scope="col">Tracking ID</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary/10">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[14px] font-medium">
                                                                            <a href="javascript:void(0);">Lightweight Sneakers</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Size:</span><span class="text-textmuted dark:text-textmuted/50">Men's 10</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Color:</span><span class="text-textmuted dark:text-textmuted/50">Light Pink</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1218153635</a></td>
                                                            <td>
                                                                <span class="text-[15px] font-semibold">$1,249</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1,249</td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary/10">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/12.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[14px] font-medium">
                                                                            <a href="javascript:void(0);">Kids' Party Wear Frock</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Size:</span><span class="text-textmuted dark:text-textmuted/50">6-7 Years</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Color:</span><span class="text-textmuted dark:text-textmuted/50">Gold<span class="badge bg-success ms-3">In Offer</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK3789423789</a></td>
                                                            <td>
                                                                <span class="text-[15px] font-semibold">$499</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>$998</td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary/10">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/29.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[14px] font-medium">
                                                                            <a href="javascript:void(0);">
                                                                                Ladies' Slim Bag</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Size:</span><span class="text-textmuted dark:text-textmuted/50">Small</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Color:</span><span class="text-textmuted dark:text-textmuted/50">Red<span class="badge bg-primary ms-3">32% Off</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1120324532</a></td>
                                                            <td>
                                                                <span class="text-[15px] font-semibold">$799</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$799</td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary/10">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/14.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[14px] font-medium">
                                                                            <a href="javascript:void(0);">Elegant Flower Pot</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Size:</span><span class="text-textmuted dark:text-textmuted/50">33mm</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Color:</span><span class="text-textmuted dark:text-textmuted/50">Brown</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1218153635</a></td>
                                                            <td>
                                                                <span class="text-[15px] font-semibold">$1,249</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1,249</td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary/10">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[14px] font-medium">
                                                                            <a href="javascript:void(0);">Trendy Sunglasses</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Size:</span><span class="text-textmuted dark:text-textmuted/50">9</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Color:</span><span class="text-textmuted dark:text-textmuted/50">Light Gray<span class="badge bg-success ms-3">In Offer</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK3789423789</a></td>
                                                            <td>
                                                                <span class="text-[15px] font-semibold">$499</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>$998</td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary/10">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/13.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[14px] font-medium">
                                                                            <a href="javascript:void(0);">
                                                                                Sleek Modern Chair</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Size:</span><span class="text-textmuted dark:text-textmuted/50">Small</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 inline-block">Color:</span><span class="text-textmuted dark:text-textmuted/50">Yellow<span class="badge bg-primary ms-3">32% Off</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1120324532</a></td>
                                                            <td>
                                                                <span class="text-[15px] font-semibold">$799</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$799</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box-footer flex items-center justify-between gap-2 flex-wrap">
                                            <button class="ti-btn bg-primary/10 text-primary btn-wave" onclick="javascript:window.print();"><i class="ri-printer-line me-1 align-middle inline-block"></i>Print</button>
                                            <button class="ti-btn bg-primary text-white btn-wave "><i class="ri-share-forward-line me-1 align-middle inline-block"></i>Share Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Order tracking
                                    </div>
                                    <div>
                                        ID : <a href="javascript:void(0);" class="text-primary font-semibold">#245879</a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="custom-form-group mb-3">
                                        <input type="text" class="form-control form-control-md" placeholder="Enter your order ID" aria-label="Order ID">
                                        <button class="ti-btn bg-primary text-white ti-btn-sm border-0 custom-form-btn" type="button">Track Order</button>
                                    </div>
                                    <p class="mb-4">
                                        <span class="font-medium me-2 text-[14px]">Status :</span>
                                        <span class="bg-success/10 text-success text-[11px] badge">Shipping</span>
                                    </p>
                                    <div class="order-track mt-1">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion accordion active" id="order-heading-one">
                                            <a href="javascript:void(0);" class="hs-accordion-toggle group items-center gap-x-3 w-full font-semibold text-start transition"
                                            aria-controls="order-collapse-one">
                                            <div class="flex mb-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primary/10 bg-primary/10">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/18.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow flex items-center justify-between">
                                                    <p class="font-medium mb-0 text-[0.875rem]">Order Placed</p>
                                                    <span class="font-normal text-secondary">May, 15</span>
                                                </div>
                                            </div>
                                            </a>
                                            <div id="order-collapse-one" class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="order-heading-one">
                                            <div class="accordion-body !pt-0 !ps-[3rem]">
                                                <div class="">
                                                    <p class="mb-0">Order placed successfully by <a href="javascript:void(0);" class="font-semibold text-primary">Austin Ninus</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="hs-accordion accordion active" id="order-heading-two">
                                            <a href="javascript:void(0);" class="hs-accordion-toggle group items-center gap-x-3 w-full font-semibold text-start transition"
                                            aria-controls="order-collapse-two">
                                            <div class="flex mb-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primarytint1color/10 bg-primarytint1color/10">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/8.png')}}" alt="">
                                                </span>
                                                </div>
                                                <div class="flex-grow flex items-center justify-between">
                                                    <p class="font-medium mb-0 text-[0.875rem]">Picked</p>
                                                    <span class="font-normal">May 15, 21:08</span>
                                                </div>
                                            </div>
                                            </a>
                                            <div id="order-collapse-two"
                                            class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="order-heading-two">
                                            <div class="accordion-body !pt-0 !ps-[3rem]">
                                                <div class="">
                                                    <p class="mb-0">Your order has been collected by <span class="font-weight-semibold">Suguna Enterprises.</span></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion accordion active" id="order-heading-three">
                                            <a href="javascript:void(0);" class="hs-accordion-toggle group items-center gap-x-3 w-full font-semibold text-start transition" aria-controls="order-collapse-three">
                                            <div class="flex mb-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-info/10 bg-info/10">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/19.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow flex items-center justify-between">
                                                    <p class="font-medium mb-0 text-[0.875rem]">Shipping</p>
                                                    <span class="font-normal">May 15, 21:08</span>
                                                </div>
                                            </div>
                                            </a>
                                            <div id="order-collapse-three"
                                            class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="order-heading-three">
                                            <div class="accordion-body !pt-0 !ps-[3rem]">
                                                <p class="mb-0">Order<span class="font-weight-semibold"> picked </span> and en route to location.</p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion accordion" id="order-heading-four">
                                            <a href="javascript:void(0);" class="hs-accordion-toggle group inline-flex items-center gap-x-3 w-full font-semibold text-start transition">
                                            <div class="flex mb-2 flex-grow">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-secondary/10 bg-secondary/10">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/25.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow flex items-center justify-between">
                                                    <p class="font-medium mb-0 text-[0.875rem]">Out For Delivery</p>
                                                    <span class="text-[0.75rem] !font-normal text-[#8c9097] dark:text-white/50 text-end">May 15, 15:10 (expected)</span>
                                                </div>
                                            </div>
                                            </a>
                                            <div id="order-collapse-four"
                                            class="space-y-3 hs-accordion-content hidden  w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="order-heading-four">
                                            <div class="accordion-body !pt-0 !ps-[3rem]">
                                                <div class="mb-1"> <p class="mb-0">Your order is out for delivery</p><span class="text-muted fs-12">May 15, 2022, 15:36</span> </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion accordion" id="order-heading-five">
                                            <a href="javascript:void(0);" class="group inline-flex items-center gap-x-3 w-full font-semibold text-start transition">
                                            <div class="flex mb-0 flex-grow">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primarytint2color/10 bg-primarytint2color/10">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/20.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow flex items-center justify-between">
                                                    <p class="font-semibold mb-0 text-[0.875rem]">Delivered</p>
                                                    <span class="text-[0.75rem] !font-normal text-[#8c9097] dark:text-white/50">Nov 03, 18:42</span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Order Summary
                                    </div>
                                    <div>
                                        ID : <a href="javascript:void(0);" class="text-primary font-semibold">#245879</a>
                                    </div>
                                </div>
                                <div class="box-body p-0 table-responsive">
                                    <table class="ti-custom-table text-nowrap">
                                        <tbody>
                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                <td>
                                                    <div class="font-semibold">Total Items :</div>
                                                </td>
                                                <td>
                                                    06
                                                </td>
                                            </tr>
                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                <td>
                                                    <div class="font-semibold">Applied Coupon :</div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success/10 text-success">SP0578A</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                <td>
                                                    <div class="font-semibold">Delivery Fees :</div>
                                                </td>
                                                <td>
                                                    <span class="text-danger">+$29</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                <td>
                                                    <div class="font-semibold">Sub Total :</div>
                                                </td>
                                                <td>
                                                    <span class="text-[14px] font-medium">$3,799</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                <td>
                                                    <div class="font-semibold">Total Price :</div>
                                                </td>
                                                <td>
                                                    <span class="text-xl font-semibold">$3,129</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            

@endsection