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
                                    <li class="breadcrumb-item active" aria-current="page">Products List</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Products List</h1>
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
                    <div class="row">   
                        <div class="col-xl-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Products List
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive overflow-auto table-bordered-default">
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col" class="!text-start">
                                                        <input class="form-check-input check-all" type="checkbox" id="all-products" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Seller</th>
                                                    <th scope="col">Published</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="product-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product1" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img
                                                                    src="{{asset('build/assets/images/ecommerce/png/30.png')}}" class="w-full h-full" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Wireless
                                                                        Headphones</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">SoundWave</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Electronics</span>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>283</td>
                                                    <td><span class="badge bg-primary/10 text-primary">Published</span></td>
                                                    <td>
                                                        <div class="flex items-center font-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Mayor Kelly</a>
                                                        </div>
                                                    </td>
                                                    <td>24,Nov 2023 - 04:42PM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="{{url('edit-products')}}" class="ti-btn btn-wave  ti-btn-sm ti-btn-soft-primary waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product2" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img
                                                                    src="{{asset('build/assets/images/ecommerce/png/14.png')}}" class="w-full h-full" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Elegant
                                                                        Flower Pot</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Serene Garden</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Ceramic</span>
                                                    </td>
                                                    <td>$799</td>
                                                    <td>98</td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">Unpublished</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center font-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Andrew Garfield </a>
                                                        </div>
                                                    </td>
                                                    <td>18,Nov 2023 - 06:53AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="{{url('edit-products')}}" class="ti-btn btn-wave  ti-btn-sm ti-btn-soft-primary waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product3" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img
                                                                    src="{{asset('build/assets/images/ecommerce/png/31.png')}}" class="w-full h-full" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);">Wireless
                                                                        Earbuds</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">AirPods Max</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Electronics</span>
                                                    </td>
                                                    <td>$2,499</td>
                                                    <td>194</td>
                                                    <td><span class="badge bg-primary/10 text-primary">Published</span></td>
                                                    <td>
                                                        <div class="flex items-center font-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Simon Cowel </a>
                                                        </div>
                                                    </td>
                                                    <td>12,Aug 2023 - 11:21AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="{{url('edit-products')}}" class="ti-btn btn-wave  ti-btn-sm ti-btn-soft-primary waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product4" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img
                                                                    src="{{asset('build/assets/images/ecommerce/png/12.png')}}" class="w-full h-full" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);">Kids' Party
                                                                        Wear Frock</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Twinkle Twirl</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Fashion Wear</span>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>267</td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">Unpublished</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center font-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Mirinda Hers</a>
                                                        </div>
                                                    </td>
                                                    <td>05,Sep 2023 - 10:14AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="{{url('edit-products')}}" class="ti-btn btn-wave  ti-btn-sm ti-btn-soft-primary waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn btn-wave product-btn  ti-btn-sm ti-btn-soft-danger waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product5" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img
                                                                    src="{{asset('build/assets/images/ecommerce/png/32.png')}}" class="w-full h-full" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);">Alarm
                                                                        Clock</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Midest Brand</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Home Needs</span>
                                                    </td>
                                                    <td>$499</td>
                                                    <td>143</td>
                                                    <td><span class="badge bg-primary/10 text-primary">Published</span></td>
                                                    <td>
                                                        <div class="flex items-center font-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Simon Cowel</a>
                                                        </div>
                                                    </td>
                                                    <td>18,Nov 2023 - 14:35PM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="{{url('edit-products')}}" class="ti-btn btn-wave  ti-btn-sm ti-btn-soft-primary waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product6" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img
                                                                    src="{{asset('build/assets/images/ecommerce/png/23.png')}}" class="w-full h-full" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);">Advanced
                                                                        Smartwatch</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">SmartSync 2024</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Watches</span>
                                                    </td>
                                                    <td>$999</td>
                                                    <td>365</td>
                                                    <td><span class="badge bg-primary/10 text-primary">Published</span></td>
                                                    <td>
                                                        <div class="flex items-center font-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Mirinda Hers</a>
                                                        </div>
                                                    </td>
                                                    <td>27,Nov 2023 - 05:12AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="{{url('edit-products')}}" class="ti-btn btn-wave  ti-btn-sm ti-btn-soft-primary waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product7" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img
                                                                    src="{{asset('build/assets/images/ecommerce/png/15.png')}}" class="w-full h-full" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);">Sport shoe</a>
                                                                </p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Conit Brand</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Sports</span>
                                                    </td>
                                                    <td>$1,499</td>
                                                    <td>257</td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">Unpublished</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center font-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Jhon Trendy</a>
                                                        </div>
                                                    </td>
                                                    <td>29,Nov 2023 - 16:32PM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="{{url('edit-products')}}" class="ti-btn btn-wave  ti-btn-sm ti-btn-soft-primary waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center flex-wrap overflow-auto">
                                        <div class="mt-2">
                                            Showing <b>1</b> to <b>5</b> of <b>10</b> entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                                        </div>
                                        <div class="ms-auto my-2">
                                            <nav aria-label="" class="">
                                                <ul class="ti-pagination mb-0 !p-0 justify-end float-end">
                                                    <li class="page-item disabled"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !border-e-0 !rounded-tr-none !rounded-br-none">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item " aria-current="page"> <a class="page-link active px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">2</a> </li>
                                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">3</a></li>
                                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">4</a></li>
                                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">5</a></li>
                                                    <li class="page-item"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-tl-none !rounded-bl-none !border-s-0" href="javascript:void(0);">Next</a> </li>
                                                </ul>
                                            </nav>
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

        <!-- Product List JS -->
        @vite('resources/assets/js/product-list.js')
        

@endsection