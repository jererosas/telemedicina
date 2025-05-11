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
                                            Pages
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Invoice</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Invoice Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Invoice Details</h1>
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

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header md:flex block">
                                    <div class="h5 mb-0 sm:flex block items-center">
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="">
                                        </div>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-2">
                                            <div class="h6 font-medium mb-0">SHOPPING INVOICE : <span class="text-primary">#7864-1542</span></div>
                                        </div>
                                    </div>
                                    <div class="ms-auto mt-md-0 mt-2">
                                        <button class="ti-btn ti-btn-sm bg-primarytint1color text-white me-1" onclick="javascript:window.print();">Print<i class="ri-printer-line ms-1 align-middle inline-block"></i></button>
                                        <button class="ti-btn ti-btn-sm bg-primary text-white">Save As PDF<i class="ri-file-pdf-line ms-1 align-middle inline-block"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="xl:col-span-4 lg:col-span-4 md:col-span-5 sm:col-span-12 col-span-12">
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-2">
                                                        Billing From :
                                                    </p>
                                                    <p class="font-bold mb-1">
                                                        SPRUKO TECHNOLOGIES
                                                    </p>
                                                    <p class="mb-1 text-textmuted dark:text-textmuted/50">
                                                        WNN-A1-1323,Robsons street
                                                    </p>
                                                    <p class="mb-1 text-textmuted dark:text-textmuted/50">
                                                        Ottawa,Canada,100072
                                                    </p>
                                                    <p class="mb-1 text-textmuted dark:text-textmuted/50">
                                                        sprukotrust.Xintra@gmail.com
                                                    </p>
                                                    <p class="mb-1 text-textmuted dark:text-textmuted/50">
                                                        (222) 142-1245
                                                    </p>
                                                    <p class="text-textmuted dark:text-textmuted/50">For more information check for <a href="javascript:void(0);" class="text-primary font-medium"><u>GSTIN</u></a> Details.</p>
                                                </div>
                                                <div class="xl:col-span-4 lg:col-span-4 md:col-span-2 sm:col-span-12 col-span-12"></div>
                                                <div class="xl:col-span-4 lg:col-span-4 md:col-span-5 sm:col-span-12 col-span-12">
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-2">
                                                        Billing To :
                                                    </p>
                                                    <p class="font-bold mb-1">
                                                        Henry Milo
                                                    </p>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-1">
                                                        Kia-13230-B12, Hamper Town
                                                    </p>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-1">
                                                        Hamburg, Germany 154210
                                                    </p>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-1">
                                                        henrymilo24510@gmail.com
                                                    </p>
                                                    <p class="text-textmuted dark:text-textmuted/50">
                                                        +1 222-887-9654
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <p class="font-medium text-textmuted dark:text-textmuted/50 mb-1">Invoice ID :</p>
                                            <p class="text-[15px] mb-1">#SHG148756965</p>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <p class="font-medium text-textmuted dark:text-textmuted/50 mb-1">Date Issued :</p>
                                            <p class="text-[15px] mb-1">15,May 2024 - <span class="text-textmuted dark:text-textmuted/50 text-xs">11:13AM</span></p>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <p class="font-medium text-textmuted dark:text-textmuted/50 mb-1">Due Date :</p>
                                            <p class="text-[15px] mb-1">28,June 2024</p>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <p class="font-medium text-textmuted dark:text-textmuted/50 mb-1">Due Amount :</p>
                                            <p class="text-[1rem] mb-1 font-medium">$4,877.11</p>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="table-responsive">
                                                <table class="ti-custom-table ti-custom-table-head mt-3 border border-defaultborder dark:border-defaultborder/10">
                                                    <thead>
                                                        <tr  class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <th>BRAND NAME</th>
                                                            <th>DESCRIPTION</th>
                                                            <th>QUANTITY</th>
                                                            <th>PRICE PER UNIT</th>
                                                            <th>TOTAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="font-medium">
                                                                    Cresta & Co (Headphones)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted dark:text-textmuted/50">
                                                                    Noise-cancelling technology, Bluetooth connectivity
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                                3
                                                            </td>
                                                            <td>
                                                                $84
                                                            </td>
                                                            <td>
                                                                $251
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="font-medium">
                                                                    Zephyr & Sons (Sneakers)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted dark:text-textmuted/50">
                                                                    Lightweight mesh upper, durable rubber outsole.
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                                2
                                                            </td>
                                                            <td>
                                                                $503
                                                            </td>
                                                            <td>
                                                                $503
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="font-medium">
                                                                    Nova & Nexus (Watch)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted dark:text-textmuted/50">
                                                                    scratch-resistant sapphire crystal
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                            1
                                                            </td>
                                                            <td>
                                                                $689
                                                            </td>
                                                            <td>
                                                                $689
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="font-medium">
                                                                    Everglow & Essentials (Skincare Set)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted dark:text-textmuted/50">
                                                                    Complete daily regimen
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                                3
                                                            </td>
                                                            <td>
                                                                $486
                                                            </td>
                                                            <td>
                                                                $939
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <div class="font-medium">
                                                                    Azure & Attire (Dress)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted dark:text-textmuted/50">
                                                                    Flowy chiffon fabric, adjustable
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                                2
                                                            </td>
                                                            <td>
                                                                $648
                                                            </td>
                                                            <td>
                                                                $648
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td colspan="3"></td>
                                                            <td colspan="2">
                                                                <table class="table table-sm text-nowrap mb-0 table-borderless">
                                                                    <tbody>
                                                                        <tr  class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <p class="mb-0">Sub Total :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-medium text-[15px]">$1,784</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr  class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <p class="mb-0">Avail Discount :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-medium text-[15px]">$15.58</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr  class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <p class="mb-0">Coupon Discount <span class="text-success">(3.5%)</span> :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-medium text-[15px]">$987.56</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr  class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <p class="mb-0">Vat <span class="text-danger">(7.5%)</span> :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-medium text-[15px]">$654.69</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr  class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <p class="mb-0">Due Till Date :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-medium text-[15px]">$1</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr  class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <p class="mb-0 text-[14px]">Total :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-medium text-[1rem] text-success">$3,846.53</p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div>
                                                <label for="invoice-note" class="form-label">Note:</label>
                                                <textarea class="form-control form-control-light" id="invoice-note" rows="5">If you're not satisfied with the product, you can return the unused item within 10 days of the delivery date. For refund options, please visit the official website and review the available refund policies.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer text-end">
                                    <button class="ti-btn ti-btn-primary">Download <i class="ri-download-2-line ms-1 align-middle"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Mode Of Payment
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <p class="text-[14px] font-medium mb-4">
                                                Credit/Debit Card
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-medium text-textmuted dark:text-textmuted/50 text-xs">Card Number :</span> 1323 3213 4546 XXXX
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-medium text-textmuted dark:text-textmuted/50 text-xs">Name On Card :</span> Henry Milo
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-medium text-textmuted dark:text-textmuted/50 text-xs">Total Amount :</span> <span class="text-success font-medium text-[14px]">$3,846.53</span>
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-medium text-textmuted dark:text-textmuted/50 text-xs">Due Date :</span> 28,June 2024 - <span class="text-danger text-xs font-medium">18 days due</span>
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-medium text-textmuted dark:text-textmuted/50 text-xs">Invoice Status : <span class="badge bg-primarytint3color/10 text-primarytint3color">Processing</span></span>
                                            </p>
                                            <div class="alert bg-primarytint2color/10 !text-primarytint2color !border-primarytint2color/10 !text-[0.812rem]" role="alert">
                                                Please Make sure to pay the invoice bill within 120 days.
                                            </div>
                                        </div>
                                    </div>
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
            
        <script>
            function PrintMe(){
                window.print();
            }
        </script>

@endsection