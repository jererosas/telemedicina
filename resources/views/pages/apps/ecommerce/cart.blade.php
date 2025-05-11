@extends('layouts.master')

@section('styles')

        <!-- Sweet Alerts Css -->
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
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Cart</h1>
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

                    <!-- Start:: Row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box" id="cart-container-delete">
                                <div class="box-header">
                                    <div class="box-title">
                                        Cart Items
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered whitespace-nowrap min-w-full">
                                            <thead>
                                                <tr class="border border-solid dark:!border-defaultborder/10 !border-defaultborder">
                                                    <th>
                                                        Product Name
                                                    </th>
                                                    <th>
                                                        Price
                                                    </th>
                                                    <th>
                                                        Quantity
                                                    </th>
                                                    <th>
                                                        Total
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border border-solid dark:!border-defaultborder/10 !border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <div class="mb-1 text-[14px] font-semibold">
                                                                    <a href="javascript:void(0);">Compact Laptop <span
                                                                            class="badge bg-primarytint3color text-white text-[0.5625rem] inline-flex gap-1"><i
                                                                                class="ri-discount-percent-line text-[10px]"></i>20 OFF</span></a>
                                                                </div>
                                                                <div class="flex gap-4 flex-wrap mb-1 items-center">
                                                                    <div>
                                                                        <span class="me-1">Size:</span><span
                                                                            class="font-medium text-textmuted dark:text-textmuted/50">Compact</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="me-1">Color:</span><span
                                                                            class="font-medium text-textmuted dark:text-textmuted/50">Grey</span>
                                                                    </div>
                                                                </div>
                                                                <span class="badge bg-success/10 text-success">In Stock</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[14px]">
                                                            $554
                                                        </div>
                                                    </td>
                                                    <td class="product-quantity-container">
                                                        <div class="flex items-center flex-nowrap gap-1 rounded-full cart-input-group">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-minus1 border-end-0 waves-effect waves-light"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="number" class="form-control form-control-sm !rounded-full text-center p-0"
                                                                aria-label="quantity" value="1">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-plus1 border-start-0 waves-effect waves-light"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[14px] font-semibold">
                                                            $554
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primary text-white ti-btn-sm me-1 hs-tooltip-toggle">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1255px, -212px);" data-popper-placement="top">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-primarytint2color text-white ti-btn-sm btn-delete waves-effect waves-light">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-589px, 285px);" data-popper-placement="left">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="cart-items01">
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <div class="mb-1 text-[14px] font-semibold">
                                                                    <a href="javascript:void(0);">Bespoke Hand Bag</a>
                                                                </div>
                                                                <div class="flex gap-4 flex-wrap mb-1 items-center">
                                                                    <div>
                                                                        <span class="me-1">Size:</span><span
                                                                            class="font-normal text-textmuted dark:text-textmuted/50">Medium</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="me-1">Color:</span><span
                                                                            class="font-normal text-textmuted dark:text-textmuted/50">Deep
                                                                            Lavendar</span>
                                                                    </div>
                                                                </div>
                                                                <span class="badge bg-danger/10 text-danger">Out Of Stock</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[14px]">
                                                            $187
                                                        </div>
                                                    </td>
                                                    <td class="product-quantity-container">
                                                        <div class="flex items-center flex-nowrap gap-1 rounded-full cart-input-group">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-minus1 border-end-0 waves-effect waves-light"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="number" class="form-control form-control-sm !rounded-full text-center p-0"
                                                                aria-label="number" value="2">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-plus1 border-start-0 waves-effect waves-light"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[14px] font-semibold">
                                                            $374
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primary text-white ti-btn-sm me-1 hs-tooltip-toggle">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1255px, -212px);" data-popper-placement="top">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-primarytint2color text-white ti-btn-sm btn-delete waves-effect waves-light">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-589px, 285px);" data-popper-placement="left">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="cart-items01">
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/15.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <div class="mb-1 text-[14px] font-semibold">
                                                                    <a href="javascript:void(0);">StrideMax Shoes <span
                                                                            class="badge bg-info text-[0.5625rem] inline-flex gap-1"><i
                                                                                class="ri-discount-percent-line text-[10px]"></i> 12 OFF</span></a>
                                                                </div>
                                                                <div class="flex gap-4 flex-wrap mb-1 items-center">
                                                                    <div>
                                                                        <span class="me-1">Size:</span><span
                                                                            class="font-normal text-textmuted dark:text-textmuted/50">44mm
                                                                            dial</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="me-1">Color:</span><span
                                                                            class="font-normal text-textmuted dark:text-textmuted/50">Bronze</span>
                                                                    </div>
                                                                </div>
                                                                <span class="badge bg-success/10 text-success">In Stock</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[14px]">
                                                            $503
                                                        </div>
                                                    </td>
                                                    <td class="product-quantity-container">
                                                        <div class="flex items-center flex-nowrap gap-1 rounded-full cart-input-group">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-minus1 border-end-0 waves-effect waves-light"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="number" class="form-control form-control-sm !rounded-full text-center p-0"
                                                                aria-label="quantity" value="2">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-plus1 border-start-0 waves-effect waves-light"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[14px] font-semibold">
                                                            $1,006
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primary text-white ti-btn-sm me-1 hs-tooltip-toggle">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1255px, -212px);" data-popper-placement="top">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-primarytint2color text-white ti-btn-sm btn-delete waves-effect waves-light">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-589px, 285px);" data-popper-placement="left">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="cart-items01">
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/12.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <div class="mb-1 text-[14px] font-semibold">
                                                                    <a href="javascript:void(0);">Kids' Party Wear Frock</a>
                                                                </div>
                                                                <div class="flex gap-4 flex-wrap mb-1 items-center">
                                                                    <div>
                                                                        <span class="me-1">Size:</span><span
                                                                            class="font-normal text-textmuted dark:text-textmuted/50">Medium</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="me-1">Color:</span><span
                                                                            class="font-normal text-textmuted dark:text-textmuted/50">Light
                                                                            Pink</span>
                                                                    </div>
                                                                </div>
                                                                <span class="badge bg-danger/10 text-danger">Out of Stock</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[14px]">
                                                            $248
                                                        </div>
                                                    </td>
                                                    <td class="product-quantity-container">
                                                        <div class="flex items-center flex-nowrap gap-1 rounded-full cart-input-group">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-minus1 border-end-0 waves-effect waves-light"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="number" class="form-control form-control-sm !rounded-full text-center p-0"
                                                                aria-label="quantity" value="1">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-plus1 border-start-0 waves-effect waves-light"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[14px] font-semibold">
                                                            $248
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primary text-white ti-btn-sm me-1 hs-tooltip-toggle">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1255px, -212px);" data-popper-placement="top">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-primarytint2color text-white ti-btn-sm btn-delete waves-effect waves-light">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-589px, 285px);" data-popper-placement="left">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="cart-items01">
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <div class="mb-1 text-[14px] font-semibold">
                                                                    <a href="javascript:void(0);">Trendy Sunglasses</a>
                                                                </div>
                                                                <div class="flex gap-4 flex-wrap mb-1 items-center">
                                                                    <div>
                                                                        <span class="me-1">Size:</span><span
                                                                            class="font-medium text-textmuted dark:text-textmuted/50">Large</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="me-1">Color:</span><span
                                                                            class="font-medium text-textmuted dark:text-textmuted/50">Black</span>
                                                                    </div>
                                                                </div>
                                                                <span class="badge bg-success/10 text-success">In Stock</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[14px]">
                                                            $1,299
                                                        </div>
                                                    </td>
                                                    <td class="product-quantity-container">
                                                        <div class="flex items-center flex-nowrap gap-1 rounded-full cart-input-group">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-minus1 border-end-0 waves-effect waves-light"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="number" class="form-control form-control-sm !rounded-full text-center p-0"
                                                                aria-label="quantity" value="1">
                                                            <button type="button" aria-label="button"
                                                                class="ti-btn ti-btn-icon btn-wave ti-btn-sm  !rounded-full bg-primary/10 text-primary border product-quantity-plus1 border-start-0 waves-effect waves-light"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[14px] font-semibold">
                                                            $1,299
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wishlist')}}" class="ti-btn ti-btn-icon bg-primary text-white ti-btn-sm me-1 hs-tooltip-toggle">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1255px, -212px);" data-popper-placement="top">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-primarytint2color text-white ti-btn-sm btn-delete waves-effect waves-light">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-589px, 285px);" data-popper-placement="left">
                                                                        Remove From cart
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
                            </div>
                            <div class="box !hidden" id="cart-empty-cart">
                                <div class="box-header">
                                    <div class="box-title">
                                        Empty Cart
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="cart-empty text-center">
                                        <span class="svg-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="!inline-flex" width="24" height="24" viewbox="0 0 24 24"><path d="M18.6 16.5H8.9c-.9 0-1.6-.6-1.9-1.4L4.8 6.7c0-.1 0-.3.1-.4.1-.1.2-.1.4-.1h17.1c.1 0 .3.1.4.2.1.1.1.3.1.4L20.5 15c-.2.8-1 1.5-1.9 1.5zM5.9 7.1 8 14.8c.1.4.5.8 1 .8h9.7c.5 0 .9-.3 1-.8l2.1-7.7H5.9z"/><path d="M6 10.9 3.7 2.5H1.3v-.9H4c.2 0 .4.1.4.3l2.4 8.7-.8.3zM8.1 18.8 6 11l.9-.3L9 18.5z"/><path d="M20.8 20.4h-.9V20c0-.7-.6-1.3-1.3-1.3H8.9c-.7 0-1.3.6-1.3 1.3v.5h-.9V20c0-1.2 1-2.2 2.2-2.2h9.7c1.2 0 2.2 1 2.2 2.2v.4z"/><path d="M8.9 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-1 2.2-2.2 2.2zm0-3.5c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.8 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3zM18.6 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-.9 2.2-2.2 2.2zm0-3.5c-.8 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.7 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3z"/></svg>
                                        </span>
                                        <h3 class="font-bold mb-1">Your Cart is Empty</h3>
                                        <h5 class="mb-3">Add some items to make me happy :)</h5>
                                        <a href="{{url('products')}}" class="ti-btn bg-primary text-white btn-wave m-3" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">	
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Order Summary
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="p-4 border-b border-defaultborder dark:border-defaultborder/10 border-dashed">
                                        <label for="promo-code" class="font-medium mb-0">Have a Promo Code?</label>
                                        <div class="text-[11px] text-textmuted dark:text-textmuted/50 mb-3">Apply Your Promo Code for an Instant Discount!</div>
                                        <div class="input-group mb-0">
                                            <input type="text" class="form-control form-control-sm !border-s" id="promo-code" name="promo-code" placeholder="Enter Promo Code" aria-label="Enter Promo Code" aria-describedby="coupons">
                                            <button class="ti-btn ti-btn-primary !m-0" type="button" id="coupons">Apply</button>
                                        </div>
                                    </div>
                                    <div class="p-4 pb-2">
                                        <p class="mb-2 font-semibold">Delivery:</p>
                                        <ul class="nav nav-tabs tab-style-8 scaleX rounded cart-summary-nav gap-2 flex flex-wrap" role="tablist">
                                            <li class="nav-item grow me-0" role="presentation">
                                                <button class="nav-link w-full active" data-hs-tab="#freeshipping-pane"  role="tab">Free Shipping</button>
                                            </li>
                                            <li class="nav-item grow" role="presentation">
                                                <button class="nav-link w-full" data-hs-tab="#expressshipping-tab-pane" role="tab">Express Shipping</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 border-b border-defaultborder dark:border-defaultborder/10 border-dashed">
                                        <div class="overflow-hidden p-0 border-0" id="freeshipping-pane" role="tabpanel">
                                            <div class="text-xs text-textmuted dark:text-textmuted/50 mb-3"><i class="ri-information-fill"></i> Delivered Within 7 Days</div>
                                            <div class="flex items-center justify-between mb-3">
                                                <div class="text-textmuted dark:text-textmuted/50">Sub Total</div>
                                                <div class="font-medium text-[14px]">$2,547</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-3">
                                                <div class="text-textmuted dark:text-textmuted/50">Discount</div>
                                                <div class="font-medium text-[14px] text-success">20% - $124</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-3">
                                                <div class="text-textmuted dark:text-textmuted/50">Delivery Charges</div>
                                                <div class="font-medium text-[14px] text-danger">- $0</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-3">
                                                <div class="text-textmuted dark:text-textmuted/50">Service Tax (18%)</div>
                                                <div class="font-medium text-[14px]">- $12</div>
                                            </div>
                                            <div class="flex items-center justify-between h5">
                                                <div class="text-[1rem]">Total :</div>
                                                <div class="font-semibold"> $2,254</div>
                                            </div>
                                            <div class="grid">
                                                <a href="{{url('checkout')}}" class="ti-btn bg-primary text-white text-center btn-wave mb-1">Proceed To Checkout</a>
                                                <a href="{{url('products')}}" class="ti-btn ti-btn-soft-primary1 text-center btn-wave">Continue Shopping</a>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden p-0 border-0 hidden" id="expressshipping-tab-pane" role="tabpanel">
                                            <div class="text-xs text-textmuted dark:text-textmuted/50 mb-3"><i class="ri-information-fill"></i> Delivered by Tomorrow</div>
                                            <div class="flex items-center justify-between mb-3">
                                                <div class="text-textmuted dark:text-textmuted/50">Sub Total</div>
                                                <div class="font-medium text-[14px]">$2,547</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-3">
                                                <div class="text-textmuted dark:text-textmuted/50">Discount</div>
                                                <div class="font-medium text-[14px] text-success">20% - $124</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-3">
                                                <div class="text-textmuted dark:text-textmuted/50">Delivery Charges</div>
                                                <div class="font-medium text-[14px] text-danger">- $15</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-3">
                                                <div class="text-textmuted dark:text-textmuted/50">Service Tax (18%)</div>
                                                <div class="font-medium text-[14px]">- $12</div>
                                            </div>
                                            <div class="flex items-center justify-between h5">
                                                <div class="text-[1rem]">Total :</div>
                                                <div class="font-semibold"> $2,546</div>
                                            </div>
                                            <div class="grid">
                                                <a href="{{url('checkout')}}" class="ti-btn bg-primary text-white btn-wave mb-2">Proceed To Checkout</a>
                                                <a href="{{url('products')}}" class="ti-btn ti-btn-soft-primary1 btn-wave">Continue Shopping</a>
                                            </div>
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

        <!-- Sweet Alerts JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Cart JS -->
        @vite('resources/assets/js/cart.js')
        

@endsection