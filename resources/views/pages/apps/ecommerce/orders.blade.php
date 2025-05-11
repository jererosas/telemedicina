@extends('layouts.master')

@section('styles')

        <!-- Dropzone CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">

        <!-- Quill editor Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Orders</h1>
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
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="box">
                        <div class="box-header justify-between">
                            <div class="box-title">
                                All Orders List
                            </div>
                            <div class="flex gap-4 items-center flex-wrap">
                                <div class="ti-btn-group ti-dropdown hs-dropdown p-0 border-0">
                                    <button class="ti-btn ti-btn-outline-light border !m-0 !border-defaultborder dark:!border-defaultborder/10 ti-dropdown-toggle hs-dropdown-toggle gap-0" type="button" >
                                        <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                                        <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                    </button>
                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0)">Created Date</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0)">Status</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0)">Orders</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0)">Product Name</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0)">Oldest</a></li>
                                    </ul>
                                </div>
                                <div class="custom-form-group grow">
                                    <input type="text" class="form-control !pe-[7rem]" placeholder="Search Orders.." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 custom-form-btn"><i class="ti ti-search"></i></a>
                                </div> 
                            </div>
                        </div>
                        <div class="box-body p-0">
                            <div class="table-responsive">
                                <table class="ti-custom-table ti-custom-table-hover text-nowrap">
                                    <thead>
                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Ordered Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Payment Mode</th>
                                            <th scope="col">Cost</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="order-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td>#1172553</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" class="w-full h-full" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="font-semibold mb-0 flex items-center"><a href="{{url('order-details')}}">Lightweight Sneakers</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                    </span>Violeta Tilly
                                                </div>
                                            </td>
                                            <td>(222) 111 - 57840</td>
                                            <td>
                                                11 Jan 2024
                                            </td>
                                            <td><span class="badge bg-success/10 text-success">Shippped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="font-semibold">$177.00</td> 
                                            <td>
                                                <a href="{{url('order-details')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td>#1172555</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{asset('build/assets/images/ecommerce/png/12.png')}}" class="w-full h-full" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="font-semibold mb-0 flex items-center"><a href="{{url('order-details')}}">Kids' Party Wear Frock</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                    </span>Danny Raj 
                                                </div>
                                            </td>
                                            <td>(222) 687-9954</td>
                                            <td>
                                                23 Jan 2024
                                            </td>
                                            <td><span class="badge bg-warning/10 text-warning">Pending</span></td>
                                            <td>Online Payment</td>
                                            <td class="font-semibold">$153.00</td>
                                            <td>
                                                <a href="{{url('order-details')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td>#1202513</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{asset('build/assets/images/ecommerce/png/29.png')}}" class="w-full h-full" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="font-semibold mb-0 flex items-center"><a href="{{url('order-details')}}">Ladies' Slim Bag</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                    </span>Sissera William
                                                </div>
                                            </td>
                                            <td>(222) 987-1323</td>
                                            <td>
                                                19 Feb 2024
                                            </td>
                                            <td><span class="badge bg-success/10 text-success">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="font-semibold">$203.00</td>
                                            <td>
                                                <a href="{{url('order-details')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td>#1202510</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{asset('build/assets/images/ecommerce/png/14.png')}}" class="w-full h-full" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="font-semibold mb-0 flex items-center"><a href="{{url('order-details')}}">Elegant Flower Pot</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                    </span>Red Stark
                                                </div>
                                            </td>
                                            <td>(222) 447-4518</td>
                                            <td>
                                                06 Mar 2024
                                            </td>
                                            <td><span class="badge bg-danger/10 text-danger">Cancelled</span></td>
                                            <td>Online Payment</td>
                                            <td class="font-semibold">$211.00</td> 
                                            <td>
                                                <a href="{{url('order-details')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td>#1222516</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" class="w-full h-full" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="font-semibold mb-0 flex items-center"><a href="{{url('order-details')}}"> Trendy Sunglasses</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                    </span>Henry Milo
                                                </div>
                                            </td>
                                            <td>(222) 666-8080</td>
                                            <td>
                                                18 Mar 2024
                                            </td>
                                            <td><span class="badge bg-success/10 text-success">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="font-semibold">$265.00</td> 
                                            <td>
                                                <a href="{{url('order-details')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td>#1202513</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{asset('build/assets/images/ecommerce/png/13.png')}}" class="w-full h-full" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="font-semibold mb-0 flex items-center"><a href="{{url('order-details')}}">Sleek Modern Chair</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                    </span>Sissera William
                                                </div>
                                            </td>
                                            <td>(222) 144-1423</td>
                                            <td>
                                                19 Feb 2024
                                            </td>
                                            <td><span class="badge bg-success/10 text-success">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="font-semibold">$203.00</td>
                                            <td>
                                                <a href="{{url('order-details')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td>#1202510</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{asset('build/assets/images/ecommerce/png/30.png')}}" class="w-full h-full" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="font-semibold mb-0 flex items-center"><a href="{{url('order-details')}}">Wireless Headphones</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                    </span>Red Stark
                                                </div>
                                            </td>
                                            <td>(222) 985-4715</td>
                                            <td>
                                                06 Mar 2024
                                            </td>
                                            <td><span class="badge bg-danger/10 text-danger">Cancelled</span></td>
                                            <td>Online Payment</td>
                                            <td class="font-semibold">$211.00</td> 
                                            <td>
                                                <a href="{{url('order-details')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td>#1222516</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{asset('build/assets/images/ecommerce/png/31.png')}}" class="w-full h-full" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="font-semibold mb-0 flex items-center"><a href="{{url('order-details')}}">Wireless Earbuds</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                    </span>Henry Milo
                                                </div>
                                            </td>
                                            <td>(222) 887-1323</td>
                                            <td>
                                                18 Mar 2024
                                            </td>
                                            <td><span class="badge bg-success/10 text-success">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="font-semibold">$265.00</td> 
                                            <td>
                                                <a href="{{url('order-details')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light !mb-0">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="flex items-center flex-wrap overflow-auto">
                                <div class="mb-2 mb-sm-0">
                                    Showing <b>1</b> to <b>10</b> entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                                </div>
                                <div class="ms-auto my-2">
                                    <nav aria-label="" class="">
                                        <ul class="ti-pagination mb-0 !p-0 justify-end float-end">
                                            <li class="page-item disabled"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !border-e-0 !rounded-tr-none !rounded-br-none">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] active !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">1</a></li>
                                            <li class="page-item " aria-current="page"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">2</a> </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">4</a></li>
                                            <li class="page-item"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-tl-none !rounded-bl-none" href="javascript:void(0);">Next</a> </li>
                                        </ul>
                                    </nav>
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

        <!-- Orders JS -->
        @vite('resources/assets/js/orders.js')
        
    
@endsection