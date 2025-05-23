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
                                    <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Invoice List</h1>
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
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-7 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Invoice Statistics
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div id="invoice-list-stats"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-5 col-span-12">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div class="box overflow-hidden main-content-card">
                                                <div class="box-body p-4">
                                                    <div class="flex items-start gap-4">
                                                        <div class="flex-auto">
                                                            <h6 class="mb-2 text-xs">Total Amount</h6> 
                                                            <div class="pb-0 mt-0"> 
                                                                <div> 
                                                                    <h4 class="font-medium mb-1">$<span class="count-up" data-count="385">385</span>k </h4> 
                                                                    <span class="badge bg-primary">12,895</span>
                                                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Increased By <span class="text-success">2.13%<i class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="main-card-icon primary border-[3px] border-primary/50 !rounded-full">
                                                            <div class="avatar avatar-md bg-primary border border-primary/10 avatar-rounded">
                                                                <div class="avatar avatar-sm">
                                                                    <svg  class="!fill-white !stroke-primary" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--primary-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div class="box overflow-hidden main-content-card">
                                                <div class="box-body p-4">
                                                    <div class="flex items-start gap-4">
                                                        <div class="flex-auto">
                                                            <h6 class="mb-2 text-xs">Total Paid</h6> 
                                                            <div> 
                                                                <h4 class="font-medium mb-1">$<span class="count-up" data-count="126">126</span>k</h4> 
                                                                <span class="badge bg-primarytint1color">3,457</span>
                                                                <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Decreased By <span class="text-danger">1.05%<i class="ti ti-arrow-narrow-down text-[1rem]"></i></span></div>
                                                            </div> 
                                                        </div>
                                                        <div class="main-card-icon primary1 border-[3px] border-primarytint1color/50 !rounded-full">
                                                            <div class="avatar avatar-md bg-primarytint1color border border-primarytint1color/10 avatar-rounded">
                                                                <div class="avatar avatar-sm">
                                                                    <svg class="!fill-white !stroke-primarytint1color icon icon-tabler icon-tabler-discount-check" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--primary-tint1-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                                                                        <path d="M9 12l2 2l4 -4" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div class="box overflow-hidden main-content-card">
                                                <div class="box-body p-4">
                                                    <div class="flex items-start gap-4">
                                                        <div class="flex-auto">
                                                            <h6 class="mb-2 text-xs">Pending Invoices</h6> 
                                                            <div> 
                                                                <h4 class="font-medium mb-1"><span class="count-up" data-count="56">56</span></h4> 
                                                                <span class="badge bg-success">5,447</span>
                                                                <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Decreased By <span class="text-danger">2.06%<i class="ti ti-arrow-narrow-down text-[1rem]"></i></span></div>
                                                            </div> 
                                                        </div>
                                                        <div class="main-card-icon primary2 border-[3px] border-primarytint2color/50 !rounded-full">
                                                            <div class="avatar avatar-md bg-primarytint2color border border-primarytint2color/10 avatar-rounded">
                                                                <div class="avatar avatar-sm ">
                                                                    <svg class="!fill-white !stroke-primarytint2color icon icon-tabler icon-tabler-help-octagon" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--primary-tint2-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0z" />
                                                                        <path d="M12 16v.01" />
                                                                        <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div class="box overflow-hidden main-content-card">
                                                <div class="box-body p-4">
                                                    <div class="flex items-start gap-4">
                                                        <div class="flex-auto">
                                                            <h6 class="mb-2 text-xs">Overdue Invoices</h6> 
                                                            <div> 
                                                                <h4 class="font-medium mb-1"><span class="count-up" data-count="47">47</span>K</h4> 
                                                                <span class="badge bg-primarytint3color">2,145</span>
                                                                <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Increased By <span class="text-success">1.3%<i class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                                                            </div> 
                                                        </div>
                                                        <div class="main-card-icon primary3 border-[3px] border-primarytint3color/50 !rounded-full">
                                                            <div class="avatar avatar-md bg-primarytint3color border border-primarytint3color/10 avatar-rounded">
                                                                <div class="avatar avatar-sm">
                                                                    <svg class="!fill-white !stroke-primarytint3color icon icon-tabler icon-tabler-hourglass" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--primary-tint3-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M6.5 7h11" />
                                                                        <path d="M6.5 17h11" />
                                                                        <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" />
                                                                        <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Manage Invoices
                                    </div>
                                    <div class="flex">
                                        <a href="{{url('invoice-create')}}" class="ti-btn ti-btn-sm ti-btn-primary btn-wave waves-light"><i class="ri-add-line font-medium align-middle me-1"></i> Create Invoice</a>
                                        <div class="ti-dropdown hs-dropdown ms-2">
                                            <button class="ti-btn ti-btn-icon ti-btn-soft-secondary ti-btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">All Invoices</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Paid Invoices</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Pending Invoices</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Overdue Invoices</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col">Client</th>
                                                    <th scope="col">Invoice ID</th>
                                                    <th scope="col">Issued Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Henry Milo</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">henrymilo2416@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20241323
                                                        </a>
                                                    </td>
                                                    <td>
                                                        13,Mar 2024
                                                    </td>
                                                    <td>
                                                        $898.12
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        25,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Priya Riva</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">priyariva3214@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20244578
                                                        </a>
                                                    </td>
                                                    <td>
                                                        26,Apr 2024
                                                    </td>
                                                    <td>
                                                        $235.52
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        13,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Calvin James</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">calvinjames143@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20240012
                                                        </a>
                                                    </td>
                                                    <td>
                                                        30,Mar 2024
                                                    </td>
                                                    <td>
                                                        $4872.41
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">Overdue</span>
                                                    </td>
                                                    <td>
                                                        30,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Sebastian Leo</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">Sebastian Leo@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20246631
                                                        </a>
                                                    </td>
                                                    <td>
                                                        18,Mar 2024
                                                    </td>
                                                    <td>
                                                        $457.56
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        18,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Anna Angel</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">annaangel114@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20249897
                                                        </a>
                                                    </td>
                                                    <td>
                                                        18,Mar 2024
                                                    </td>
                                                    <td>
                                                        $2,568.66
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">Due By 1 Day</span>
                                                    </td>
                                                    <td>
                                                        18,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Rani Advitha</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">raniadvitha87@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20245757
                                                        </a>
                                                    </td>
                                                    <td>
                                                        02,Mar 2024
                                                    </td>
                                                    <td>
                                                        $7896.36
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        18,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Helma Finlee</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">helmafinlee@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20246301
                                                        </a>
                                                    </td>
                                                    <td>
                                                        15,Mar 2024
                                                    </td>
                                                    <td>
                                                        $1,999.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        15,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Robert Max</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">robertmax@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20241603
                                                        </a>
                                                    </td>
                                                    <td>
                                                        21,Mar 2024
                                                    </td>
                                                    <td>
                                                        $2,985.33
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        21,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr> 
                                                <tr class="invoice-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Alisa Juliet</p>
                                                                <p class="mb-0 text-[11px] text-textmuted dark:text-textmuted/50">alisajuliet555@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-medium text-primary">
                                                            #SHG20242434
                                                        </a>
                                                    </td>
                                                    <td>
                                                        08,Jul 2024
                                                    </td>
                                                    <td>
                                                        $1,841.60
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        15,Mar 2024
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <nav aria-label="..." class="me-4">
                                        <ul class="ti-pagination sm:justify-end justify-center sm:ms-0 ms-3">
                                            <li class="page-item opacity-80 pointer-events-none">
                                                <a class="page-link px-3 py-[0.375rem] !text-[1rem] disabled">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem]"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item " aria-current="page">
                                                <a class="page-link active px-3 py-[0.375rem] !text-[1rem]"
                                                    href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem]"
                                                href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link px-3 py-[0.375rem] !text-[1rem]" href="javascript:void(0);">Next</a>
                                            </li>
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

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Internal Invoice List JS -->
        @vite('resources/assets/js/invoice-list.js')
        

@endsection