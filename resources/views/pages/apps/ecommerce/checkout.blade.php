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
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Checkout</h1>
                        </div>
                        <div class="btn-list">
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
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-body product-checkout">
                                    <ul class="nav nav-tabs tab-style-8 scaleX md:flex block justify-around border border-dashed dark:border-defaultborder/10 border-b-0 bg-light rounded-top" id="myTab1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link !p-4 active md:w-auto w-full" id="order-tab"
                                                data-hs-tab="#order-tab-pane" type="button" role="tab">
                                                <i class="ri-truck-line me-2 align-middle"></i>Shipping</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link !p-4 md:w-auto w-full" id="confirmed-tab"
                                                data-hs-tab="#confirm-tab-pane" type="button" role="tab">
                                                <i class="ri-user-3-line me-2 align-middle"></i>Personal Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link !p-4 md:w-auto w-full"  id="shipped-tab"
                                                data-hs-tab="#shipped-tab-pane" type="button" role="tab">
                                                <i class="ri-bank-card-line me-2 align-middle"></i>Payment</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link !p-4 md:w-auto w-full" id="delivered-tab"
                                                data-hs-tab="#delivery-tab-pane" type="button" role="tab">
                                                <i class="ri-checkbox-circle-line me-2 align-middle"></i>Complete Order</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content border border-dashed dark:border-defaultborder/10" id="myTabContent">
                                        <div class="tab-pane fade show active border-0 p-0"   id="order-tab-pane" aria-labelledby="order-tab" role="tabpanel"
                                        tabindex="0">
                                            <div class="p-4">
                                                <p class="mb-1 font-semibold text-textmuted dark:text-textmuted/50 op-5 text-xl">01</p>
                                                <p class="text-[15px] font-semibold mb-3">Shipping Methods :</p>
                                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 mb-4">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="form-check shipping-method-container mb-0">
                                                            <input id="shipping-method1" name="shipping-methods" type="radio" class="form-check-input mt-1" checked="">
                                                            <div class="form-check-label">
                                                                <div class="sm:flex items-center justify-between">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/21.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="shipping-partner-details sm:me-[3rem] me-0">
                                                                        <p class="mb-0 font-semibold">UPS</p>
                                                                        <p class="text-textmuted dark:text-textmuted/50 text-[11px] mb-0">Delivered By 11,May 2024</p>
                                                                    </div>
                                                                    <div class="font-semibold sm:me-[3rem] me-0">
                                                                        $9.99
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="form-check shipping-method-container mb-0">
                                                            <input id="shipping-method2" name="shipping-methods" type="radio" class="form-check-input mt-1">
                                                            <div class="form-check-label">
                                                                <div class="sm:flex items-center justify-between">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/22.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="shipping-partner-details sm:me-[3rem] me-0">
                                                                        <p class="mb-0 font-semibold">USPS</p>
                                                                        <p class="text-textmuted dark:text-textmuted/50 text-[11px] mb-0">Delivered By 22,Nov 2022</p>
                                                                    </div>
                                                                    <div class="font-semibold sm:me-[3rem] me-0">
                                                                        $10.49
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-[15px] font-semibold sm:flex block items-center justify-between mb-3">
                                                    <div>Shipping Address :</div>
                                                    <div class="mt-sm-0 mt-2">
                                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-sm btn-wave ti-btn-primary" data-hs-overlay="#hs-extralarge-modal">
                                                            <i class="ri-add-line me-1 align-middle text-[14px] font-semibold"></i>Add New Address
                                                        </button>
                                                        <div id="hs-extralarge-modal" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                <h6 class="ti-modal-title">
                                                                    New Address
                                                                </h6>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#hs-extralarge-modal">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                </button>
                                                                </div>
                                                                <div class="ti-modal-body">
                                                                    <div class="grid grid-cols-12 gap-x-6 gap-y-3">
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <label for="fullname-new" class="form-label">Full Name</label>
                                                                            <input type="text" class="form-control" id="fullname-new" placeholder="Full Name">
                                                                        </div>
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <label for="email-new" class="form-label">Email</label>
                                                                            <input type="email" class="form-control" id="email-new" placeholder="email">
                                                                        </div>
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <label for="phonenumber-new" class="form-label">Phone Number</label>
                                                                            <input type="number" class="form-control" id="phonenumber-new" placeholder="Phone">
                                                                        </div>
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <label for="address-new" class="form-label">Address</label>
                                                                            <input type="text" class="form-control" id="address-new" placeholder="Address">
                                                                        </div>
                                                                        <div class="xl:col-span-12 col-span-12">
                                                                            <div class="grid grid-cols-12 gap-x-6">
                                                                                <div class="xl:col-span-3 col-span-12">
                                                                                    <label for="pincode-new" class="form-label">Pincode</label>
                                                                                    <input type="number" class="form-control" id="pincode-new" placeholder="Pincode">
                                                                                </div>
                                                                                <div class="xl:col-span-3 col-span-12">
                                                                                    <label for="city-new" class="form-label">City</label>
                                                                                    <input type="text" class="form-control" id="city-new" placeholder="City">
                                                                                </div>
                                                                                <div class="xl:col-span-3 col-span-12">
                                                                                    <label for="state-new" class="form-label">State</label>
                                                                                    <input type="text" class="form-control" id="state-new" placeholder="State">
                                                                                </div>
                                                                                <div class="xl:col-span-3 col-span-12">
                                                                                    <label for="country-new" class="form-label">Country</label>
                                                                                    <input type="text" class="form-control" id="country-new" placeholder="Country">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ti-modal-footer">
                                                                    <button type="button" class="ti-btn bg-light text-dark"  data-hs-overlay="#hs-extralarge-modal">Close</button>
                                                                    <button type="button" class="ti-btn bg-success text-white">Save
                                                                        Address</button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="box card-style-6 border border-defaultborder dark:border-defaultborder/10 shadow-none mb-xl-0">
                                                            <div class="box-body p-4">
                                                                <div class="flex gap-2">
                                                                    <input class="form-check-input" type="radio" id="address1" name="default-address" checked="">
                                                                    <label class="form-check-label cursor-pointer" for="address1">Set as Default</label>
                                                                </div>
                                                                <div class="flex items-center justify-between mb-3">
                                                                    <div class="grow">
                                                                        <h6 class="text-[1rem] mb-0 font-semibold">My Home Address</h6>
                                                                    </div>
                                                                    <a class="ti-btn bg-primary text-white ti-btn-sm"><i class="ri-edit-2-line"></i> Change</a>
                                                                </div>
                                                                <h6 class="mb-1">Victoria Gracie</h6>
                                                                <p class="mb-1 fw-500 text-[13px]">victoriagracie@jinno.mail</p>
                                                                <p class="mb-2 fw-500 text-[13px]">+05-554-874113</p>
                                                                <p class="mb-0">
                                                                    H.No: 48A-1B/C451, Smart Avenue,Coolin Street,
                                                                    Opp. NG Super Mart, 57016, Canada
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="box card-style-6 border dark:border-defaultborder/10 shadow-none mb-0">
                                                            <div class="box-body p-4">
                                                                <div class="flex gap-2">
                                                                    <input class="form-check-input" type="radio" id="address2" name="default-address">
                                                                    <label class="form-check-label cursor-pointer" for="address2">Set as Default</label>
                                                                </div>
                                                                <div class="flex items-center justify-between mb-3">
                                                                    <div class="grow">
                                                                        <div class="flex items-center gap-2 card-style-6-avatar">
                                                                            <h6 class="text-[1rem] mb-0 font-semibold">Work Place Address</h6>
                                                                        </div>
                                                                    </div>
                                                                    <a class="ti-btn bg-primary text-white ti-btn-sm"><i class="ri-edit-2-line"></i> Change</a>
                                                                </div>
                                                                <h6 class="mb-1">Victoria Gracie</h6>
                                                                <p class="mb-1 fw-500 text-[13px]">victoriagracie@jinno.mail</p>
                                                                <p class="mb-2 fw-500 text-[13px]">+05-554-874113</p>
                                                                <p class="mb-0">
                                                                    Sunset Plaza, 5th Floor, Suite No: 502, Ocean Avenue,, Seaview Heights, Sunnydale, CA 90210, United States
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-6 py-4 border-t border-dashed dark:border-defaultborder/10 sm:flex justify-end">
                                                    <button type="button" class="ti-btn ti-btn-soft-success"
                                                        id="personal-details-trigger">Personal Details<i
                                                            class="ri-user-3-line ms-2 align-middle inline-block"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0 hidden"  id="confirm-tab-pane" aria-labelledby="confirmed-tab" role="tabpanel"
                                        tabindex="0">
                                            <div class="p-4">
                                                <p class="mb-1 font-semibold text-textmuted dark:text-textmuted/50 op-5 text-xl">02</p>
                                                <div class="text-[15px] font-semibold sm:flex block items-center justify-between mb-3">
                                                    <div>Personal Details :</div>
                                                </div>
                                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="firstname-personal" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstname-personal" placeholder="First Name" value="Victoria ">
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="lastname-personal" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname-personal" placeholder="Last Name" value="Gracie">
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="email-personal" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email-personal" placeholder="victoriagracie@jinno.mail" value="">
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="phoneno-personal" class="form-label">Phone no</label>
                                                        <input type="text" class="form-control" id="phoneno-personal" placeholder="554-874113" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                    class="px-4 py-3 border-top border-block-start-dashed sm:flex justify-between">
                                                    <button type="button" class="ti-btn ti-btn-soft-danger m-1"
                                                        id="back-shipping-trigger"><i
                                                            class="ri-truck-line me-2 align-middle inline-block"></i>Back To
                                                        Shipping</button> <button type="button"
                                                        class="ti-btn ti-btn-soft-success m-1" id="payment-trigger">Continue
                                                        To
                                                        Payment<i
                                                            class="bi bi-credit-card-2-front align-middle ms-2 inline-block"></i></button>
                                                </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0 hidden" id="shipped-tab-pane"
                                        aria-labelledby="shipped-tab" role="tabpanel" tabindex="0">
                                            <div class="p-4">
                                                <p class="mb-1 font-semibold text-textmuted dark:text-textmuted/50 op-5 text-xl">03</p>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <div class="text-[15px] font-semibold sm:flex block items-center justify-between mb-3">
                                                            <div>Payment Details :</div>
                                                        </div>
                                                        <div class="mb-3 sm:flex block gap-4" role="group" aria-label="Basic radio toggle button group">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="Paymentoptions" id="Paymentoptions3" value="Paymentoptions3" checked="checked">
                                                                <label class="form-check-label" for="Paymentoptions3">Credit/Debit Card</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="Paymentoptions" id="Paymentoptions1" value="Paymentoptions1">
                                                                <label class="form-check-label" for="Paymentoptions1">C.O.D (Cash on delivery)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="Paymentoptions" id="Paymentoptions2" value="Paymentoptions2">
                                                                <label class="form-check-label" for="Paymentoptions2">UPI Payment</label>
                                                            </div>                                                        
                                                        </div>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 mb-3">
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label for="payment-card-number" class="form-label">Card Number</label>
                                                                <input type="text" class="form-control" id="payment-card-number" placeholder="Card Number" value="1245 - 5447 - 8934 - XXXX">
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label for="payment-card-name" class="form-label">Name On Card</label>
                                                                <input type="text" class="form-control" id="payment-card-name" placeholder="Name On Card" value="JSON TAYLOR">
                                                            </div>
                                                            <div class="xl:col-span-4 col-span-12">
                                                                <label for="payment-cardexpiry-date" class="form-label">Expiration Date</label>
                                                                <input type="text" class="form-control" id="payment-cardexpiry-date" placeholder="MM/YY" value="08/2024">
                                                            </div>
                                                            <div class="xl:col-span-4 col-span-12">
                                                                <label for="payment-cvv" class="form-label">CVV</label>
                                                                <input type="text" class="form-control" id="payment-cvv" placeholder="XXX" value="341">
                                                            </div>
                                                            <div class="xl:col-span-4 col-span-12">
                                                                <label for="payment-security" class="form-label">O.T.P</label>
                                                                <input type="text" class="form-control" id="payment-security" placeholder="XXXXXX" value="183467">
                                                                <label for="payment-security" class="form-label mt-1 mb-0 text-danger text-[11px]"><sup><i class="ri-star-s-fill"></i></sup>Do not share O.T.P with anyone</label>
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input form-checked-success" type="checkbox" value="" id="payment-card-save" checked="">
                                                                    <label class="form-check-label" for="payment-card-save">
                                                                        Save this card
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-[15px] font-semibold sm:flex block items-center justify-between mb-3">
                                                            <div>Saved Cards :</div>
                                                        </div>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <div class="form-check payment-card-container mb-0">
                                                                    <input id="payment-card1" name="payment-cards" type="radio" class="form-check-input" checked="">
                                                                    <div class="form-check-label">
                                                                    <div class="sm:flex block items-center justify-between">
                                                                        <div class="me-2 leading-none">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/ecommerce/png/26.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="saved-card-details">
                                                                            <p class="mb-0 font-semibold">XXXX - XXXX - XXXX - 7646</p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <div class="form-check payment-card-container mb-0">
                                                                    <input id="payment-card2" name="payment-cards" type="radio" class="form-check-input">
                                                                    <div class="form-check-label">
                                                                    <div class="sm:flex block items-center justify-between">
                                                                        <div class="me-2 leading-none">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/ecommerce/png/27.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="saved-card-details">
                                                                            <p class="mb-0 font-semibold">XXXX - XXXX - XXXX - 9556</p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                    class="px-6 py-4 border-t border-dashed dark:border-defaultborder/10 sm:flex justify-between">
                                                    <button type="button" class="ti-btn ti-btn-soft-danger m-1"
                                                        id="back-personal-trigger"><i
                                                            class="ri-user-3-line me-2 align-middle inline-block"></i>Back
                                                        To Personal Info</button> <button type="button"
                                                        class="ti-btn ti-btn-soft-success m-1"
                                                        id="continue-payment-trigger">Continue Payment<i
                                                            class="bi bi-credit-card-2-front align-middle ms-2 inline-block"></i></button>
                                                </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0 hidden" id="delivery-tab-pane"
                                        aria-labelledby="delivered-tab" role="tabpanel" tabindex="0">
                                            <div class="p-4 checkout-payment-success my-3">
                                                <div class="mb-4">
                                                    <h5 class="text-success font-semibold">Payment Successful...</h5>
                                                </div>
                                                <div class="mb-4 flex justify-center">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/24.png')}}" alt="">
                                                </div>
                                                <div class="mb-4">
                                                    <p class="mb-1 text-[14px]">You can track your order with Order Id <b>SPK#1FR</b> from <a class="text-primarytint1color" href="javascript:void(0);"><u>Track Order</u></a></p>
                                                    <p class="text-textmuted dark:text-textmuted/50">Thankyou for shopping with us.</p>
                                                </div>
                                                <a href="{{url('products')}}" class="ti-btn bg-primary text-white">Continue Shopping<i class="bi bi-cart ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title me-1">Order Summary</div><span class="badge bg-primary/10 text-primary rounded-full">02</span>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group mb-0 border-0 rounded-0">
                                        <li class="ti-list-group-item p-4 border-t-0">
                                            <div class="flex items-center flex-wrap">
                                                <span class="avatar avatar-lg bg-light me-2">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/9.png')}}" alt="">
                                                </span>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-semibold">Versatile Hoodie</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity : 2  <span class="badge bg-success/10 text-success mx-3">30% Off</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-0 text-end">
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-textmuted dark:text-textmuted/50"></i>
                                                        </a>
                                                    </p>
                                                    <p class="mb-0 text-[14px] font-semibold">$189<span class="ms-1 text-textmuted dark:text-textmuted/50 text-[11px] inline-block font-normal"><s>$329</s></span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item p-4  border-b border-block-end-dashed">
                                            <div class="flex items-center flex-wrap">
                                                <span class="avatar avatar-lg bg-light me-2">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" alt="">
                                                </span>
                                                <div class="flex-auto">
                                                    <p class="mb-0 font-semibold">Leather Hand Bag</p>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Quantity : 1  <span class="badge bg-success/10 text-success mx-3">10% Off</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-0 text-end">
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-close-line text-[1rem] text-textmuted dark:text-textmuted/50"></i>
                                                        </a>
                                                    </p>
                                                    <p class="mb-0 text-[14px] font-semibold">$187<span class="ms-1 text-textmuted dark:text-textmuted/50 text-[11px] inline-block font-normal"><s>$139</s></span></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                        <div class="flex items-center justify-between flex-wrap">
                                            <div class="text-xs font-semibold bg-primary/10 text-primary badge badge-md rounded">SPRUKO25</div>
                                            <div class="text-success">COUPON APPLIED</div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="text-textmuted dark:text-textmuted/50">Sub Total</div>
                                            <div class="font-semibold text-[14px]">$318</div>
                                        </div>
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="text-textmuted dark:text-textmuted/50">Discount</div>
                                            <div class="font-semibold text-[14px] text-success">10% - $31.8</div>
                                        </div>
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="text-textmuted dark:text-textmuted/50">Delivery Charges</div>
                                            <div class="font-semibold text-[14px] text-danger">- $29</div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="text-textmuted dark:text-textmuted/50">Service Tax (18%)</div>
                                            <div class="font-semibold text-[14px]">- $45.29</div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center justify-between">
                                            <div class="text-[15px]">Total :</div>
                                            <div class="font-semibold text-[1rem] text-dark"> $1,387</div>
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

        <!-- Internal Checkout JS -->
        @vite('resources/assets/js/checkout.js')


@endsection