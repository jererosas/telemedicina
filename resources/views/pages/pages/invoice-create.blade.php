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
                                    <li class="breadcrumb-item" aria-current="page"><a
                                            href="javascript:void(0);">Invoice</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Invoice</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Create Invoice</h1>
                        </div>
                        <div class="btn-list">
                            <button
                                class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
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
                                        <div>
                                            <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="">
                                        </div>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-2">
                                            <input type="text" class="form-control form-control-light form-control-sm"
                                                placeholder="Invoice Title" value="INV TITLE">
                                        </div>
                                        <div class="mx-2">:</div>
                                        <div class="sm:mt-0 mt-2">
                                            <input type="text" class="form-control form-control-light form-control-sm"
                                                placeholder="Invoice ID" value="INV ID">
                                        </div>
                                    </div>
                                    <div class="ms-auto md:mt-0 mt-2">
                                        <button class="ti-btn ti-btn-sm ti-btn-primary me-2">Save As PDF<i
                                                class="ri-file-pdf-line ms-1 align-middle inline-block"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1 me-2"><i
                                                class="bi bi-plus-lg"></i></button>
                                        <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary2 me-2"><i
                                                class="bi bi-download"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="grid grid-cols-12 sm:gap-x-6">
                                                <div
                                                    class="xl:col-span-4 lg:col-span-4 md:col-span-5 sm:col-span-12 col-span-12">
                                                    <p class="dw-semibold mb-2">
                                                        Billing From :
                                                    </p>
                                                    <div class="grid grid-cols-12 gap-y-2">
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control form-control-light"
                                                                id="Company-Name" placeholder="Company Name"
                                                                value="SPRUKO TECHNOLOGIES">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12 leading-none">
                                                            <textarea class="form-control form-control-light"
                                                                id="company-address" placeholder="Enter Address"
                                                                rows="5"></textarea>
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control form-control-light"
                                                                id="company-mail" placeholder="Company Email" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control form-control-light"
                                                                id="company-phone" placeholder="Phone Number" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <textarea class="form-control form-control-light"
                                                                id="invoice-subject" placeholder="Subject"
                                                                rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="xl:col-span-4 lg:col-span-4 md:col-span-2 sm:col-span-12 col-span-12">
                                                </div>
                                                <div
                                                    class="xl:col-span-4 lg:col-span-4 md:col-span-5 sm:col-span-12 col-span-12">
                                                    <p class="dw-semibold mb-2">
                                                        Billing To :
                                                    </p>
                                                    <div class="grid grid-cols-12  gap-y-2">
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control form-control-light"
                                                                id="customer-Name" placeholder="Customer Name"
                                                                value="Henry Milo">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12 leading-none">
                                                            <textarea class="form-control form-control-light"
                                                                id="customer-address" placeholder="Enter Address"
                                                                rows="3"></textarea>
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control form-control-light"
                                                                id="customer-mail" placeholder="Customer Email" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control form-control-light"
                                                                id="customer-phone" placeholder="Phone Number" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control form-control-light"
                                                                id="zip-code" placeholder="Zip Code" value="">
                                                        </div>
                                                        <div
                                                            class="xl:col-span-12 col-span-12 choices-control choices-control-light">
                                                            <p class="dw-semibold mb-2 mt-2">
                                                                Currency :
                                                            </p>
                                                            <select class="form-control" data-trigger
                                                                name="invoice-currency" id="invoice-currency">
                                                                <option value="">Select Currency</option>
                                                                <option value="Armani">USD - (United States Dollar)</option>
                                                                <option value="Lacoste">BHD - (Bahraini Dinar)</option>
                                                                <option value="Puma">KWD - (Kuwaiti Dinar)</option>
                                                                <option value="Spykar">CHF - (Swiss Franc)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="invoice-number" class="form-label">Invoice ID</label>
                                            <input type="text" class="form-control form-control-light" id="invoice-number"
                                                placeholder="Inv No" value="#SHG148756965">
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="invoice-date-issued" class="form-label">Date Issued</label>
                                            <input type="text" class="form-control form-control-light"
                                                id="invoice-date-issued" placeholder="Choose date">
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="invoice-date-due" class="form-label">Due Date</label>
                                            <input type="text" class="form-control form-control-light" id="invoice-date-due"
                                                placeholder="Choose date">
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="invoice-due-amount" class="form-label">Due Amount</label>
                                            <input type="text" class="form-control form-control-light"
                                                id="invoice-due-amount" placeholder="Enter Amount" value="$24,784.54">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="table-responsive">
                                                <table
                                                    class="ti-custom-table ti-custom-table-head mt-3 border border-defaultborder dark:border-defaultborder/10">
                                                    <thead>
                                                        <tr
                                                            class="border-b border-defaultborder dark:border-defaultborder/10">
                                                            <th>PRODUCT NAME</th>
                                                            <th>DESCRIPTION</th>
                                                            <th>QUANTITY</th>
                                                            <th>PRICE PER UNIT</th>
                                                            <th>TOTAL</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <input type="text" class="form-control form-control-light"
                                                                    placeholder="Enter Product Name">
                                                            </td>
                                                            <td>
                                                                <textarea rows="1" class="form-control form-control-light"
                                                                    placeholder="Enter Description"></textarea>
                                                            </td>
                                                            <td class="invoice-quantity-container">
                                                                <div
                                                                    class="input-group border p-0 border-defaultborder dark:border-defaultborder/10 rounded-md flex-nowrap">
                                                                    <button
                                                                        class="ti-btn ti-btn-icon !m-0 ti-btn-primary flex-auto product-quantity-minus"><i
                                                                            class="ri-subtract-line"></i></button>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm border-0 text-center"
                                                                        aria-label="quantity" id="product-quantity4"
                                                                        value="1">
                                                                    <button
                                                                        class="ti-btn ti-btn-icon !m-0 ti-btn-primary flex-auto product-quantity-plus"><i
                                                                            class="ri-add-line"></i></button>
                                                                </div>
                                                            </td>
                                                            <td><input class="form-control form-control-light"
                                                                    placeholder="" type="text" value="$84.00"></td>
                                                            <td><input class="form-control form-control-light"
                                                                    placeholder="" type="text" value="$251.00"></td>
                                                            <td>
                                                                <button
                                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i
                                                                        class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td>
                                                                <input type="text" class="form-control form-control-light"
                                                                    placeholder="Enter Product Name">
                                                            </td>
                                                            <td>
                                                                <textarea rows="1" class="form-control form-control-light"
                                                                    placeholder="Enter Description"></textarea>
                                                            </td>
                                                            <td class="invoice-quantity-container">
                                                                <div
                                                                    class="input-group border p-0 border-defaultborder dark:border-defaultborder/10 rounded-md flex-nowrap">
                                                                    <button
                                                                        class="ti-btn ti-btn-icon !m-0 ti-btn-primary flex-auto product-quantity-minus"><i
                                                                            class="ri-subtract-line"></i></button>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm border-0 text-center"
                                                                        aria-label="quantity" id="product-quantity-4"
                                                                        value="1">
                                                                    <button
                                                                        class="ti-btn ti-btn-icon !m-0 ti-btn-primary flex-auto product-quantity-plus"><i
                                                                            class="ri-add-line"></i></button>
                                                                </div>
                                                            </td>
                                                            <td><input class="form-control form-control-light"
                                                                    placeholder="Enter Amount" type="text"></td>
                                                            <td><input class="form-control form-control-light"
                                                                    placeholder="Enter Amount" type="text"></td>
                                                            <td>
                                                                <button
                                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i
                                                                        class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td colspan="6" class="border-b-0"><a class="ti-btn bg-light"
                                                                    href="javascript:void(0);"><i class="bi bi-plus-lg"></i>
                                                                    Add Product</a></td>
                                                        </tr>
                                                        <tr
                                                            class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                            <td colspan="4"></td>
                                                            <td colspan="2">
                                                                <table
                                                                    class="table table-sm text-nowrap mb-0 table-borderless">
                                                                    <tbody>
                                                                        <tr class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <div class="font-medium">Sub Total :</div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text"
                                                                                    class="form-control form-control-light invoice-amount-input !w-auto"
                                                                                    placeholder="Enter Amount"
                                                                                    value="$2519.89">
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <div class="font-medium">Avail Discount :
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text"
                                                                                    class="form-control form-control-light invoice-amount-input !w-auto"
                                                                                    placeholder="Enter Amount"
                                                                                    value="$15.58">
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <div class="font-medium">Coupon Discount
                                                                                    <span class="text-success">(3.5%)</span>
                                                                                    :</div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text"
                                                                                    class="form-control form-control-light invoice-amount-input !w-auto"
                                                                                    placeholder="Enter Amount"
                                                                                    value="$112.00">
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <div class="font-medium">Vat <span
                                                                                        class="text-danger">(7.5%)</span> :
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text"
                                                                                    class="form-control form-control-light invoice-amount-input !w-auto"
                                                                                    placeholder="Enter Amount"
                                                                                    value="$214.00">
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <div class="font-medium">Due Till Date :
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text"
                                                                                    class="form-control form-control-light invoice-amount-input !w-auto"
                                                                                    placeholder="Enter Amount"
                                                                                    value="$2.00">
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="border-b !border-transparent">
                                                                            <th scope="row">
                                                                                <div class="text-[14px] font-medium">Total :
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text"
                                                                                    class="form-control form-control-light invoice-amount-input !w-auto"
                                                                                    placeholder="Enter Amount"
                                                                                    value="$2,106.68">
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
                                                <textarea class="form-control form-control-light !pt-3" id="invoice-note"
                                                    rows="5">If you're not satisfied with the product, you can return the unused item within 10 days of the delivery date. For refund options, please visit the official website and review the available refund policies.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer flex items-center justify-between gap-2">
                                    <button class="ti-btn ti-btn-soft-primary1"><i
                                            class="ri-eye-line me-1 align-middle inline-block"></i>Preview</button>
                                    <button class="ti-btn ti-btn-primary">Send Invoice <i
                                            class="ri-send-plane-2-line ms-1 align-middle inline-block"></i></button>
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
                                    <div class="grid grid-cols-12 gap-y-4">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="btn-group inline-flex" role="group"
                                                aria-label="Basic radio toggle button group"> 
                                                <input type="radio"
                                                    class="btn-check opacity-0 absolute" name="strap-material" id="strap1"
                                                    > 
                                                <label
                                                    class="!mb-0 ti-btn  btn-wave !m-0 !block sm:!inline-flex !py-2 !px-3 ti-btn-outline-primary z-0 !rounded-e-none !border-e-0 sm:text-[0.813rem] text-[0.75rem] waves-effect waves-light"
                                                    for="strap1">
                                                UPI
                                            </label>
                                                <input type="radio"
                                                    class="btn-check  opacity-0 absolute" name="strap-material" id="strap3" checked="">
                                                <label
                                                    class="!mb-0 ti-btn  btn-wave !m-0 !block sm:!inline-flex !py-2 text-primary !px-3 ti-btn-outline-primary !rounded-s-none z-0  sm:text-[0.813rem] text-[0.75rem] waves-effect waves-light"
                                                    for="strap3">
                                                Credit/Debit Card
                                                </label> 
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <input type="text" class="form-control form-control-light"
                                                id="invoice-payment-cardname" placeholder="Card Number"
                                                value="1323 3213 4546 XXXX">
                                            <label for="invoice-payment-cardname" class="form-label mb-0"><a
                                                    class="text-textmuted dark:text-textmuted/50 text-[11px]"
                                                    href="javascript:void(0);">Enter valid card number <sup
                                                        class="text-xs text-danger align-middle"> *</sup></a></label>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <input type="text" class="form-control form-control-light"
                                                placeholder="Card Holder Name">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <input type="password" class="form-control form-control-light mb-2"
                                                placeholder="Enter OTP">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="alert bg-primarytint2color/10 !text-primarytint2color !border-primarytint2color/10 !text-[0.812rem]"
                                                role="alert">
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
                
        <!-- Internal Create Invoice JS -->
        @vite('resources/assets/js/create-invoice.js')

        
@endsection