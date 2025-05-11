@extends('layouts.master')

@section('styles')
  
        <!-- Dragula CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Deals</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Deals</h1>
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
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center flex-wrap gap-2 justify-between">
                                        <div class="flex items-center">
                                            <span class="font-medium text-[1rem] me-2">Deals</span><span class="badge bg-primary align-middle">26</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2">
                                            <button class="ti-btn ti-btn-primary ti-btn-sm" data-hs-overlay="#create-contact"><i class="ri-add-line me-1 font-medium align-middle"></i>New Deal</button>
                                            <button class="ti-btn ti-btn-soft-success ti-btn-sm">Export As CSV</button>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm btn-wave waves-effect waves-light ti-dropdown-toggle hs-dropdown-toggle">
                                                    Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Date Added</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-2 md:col-span-4 col-span-12">
                            <div class="box border border-primary/50">
                                <div class="box-body p-4">
                                    <div class="flex items-top flex-wrap justify-between">
                                        <div>
                                            <h6 class="font-medium lead-discovered"><i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md bg-primary/10 text-primary me-2 align-middle"></i>Leads Discovered</h6>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <span class=" badge bg-primary">24</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 md:col-span-4 col-span-12">
                            <div class="box border border-primarytint1color/50">
                                <div class="box-body p-4">
                                    <div class="flex items-top flex-wrap justify-between">
                                        <div>
                                            <h6 class="font-medium lead-qualified"><i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md bg-primarytint1color/10 text-primarytint1color me-2 align-middle"></i>Qualified Leads</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-primarytint1color text-white">17</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 md:col-span-4 col-span-12">
                            <div class="box border border-primarytint2color/50">
                                <div class="box-body p-4">
                                    <div class="flex items-top flex-wrap justify-between">
                                        <div>
                                            <h6 class="font-medium contact-initiated"><i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md bg-primarytint2color/10 text-primarytint2color me-2 align-middle"></i>Contact Initiated</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-primarytint2color text-white">5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 md:col-span-4 col-span-12">
                            <div class="box border border-primarytint3color/50">
                                <div class="box-body p-4">
                                    <div class="flex items-top flex-wrap justify-between">
                                        <div>
                                            <h6 class="font-medium need-identified"><i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md bg-primarytint3color/10 text-primarytint3color me-2 align-middle"></i>Needs Identified</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-primarytint3color text-white">43</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 md:col-span-4 col-span-12">
                            <div class="box border border-secondary/50">
                                <div class="box-body p-4">
                                    <div class="flex items-top flex-wrap justify-between">
                                        <div>
                                            <h6 class="font-medium negotiation"><i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md bg-secondary/10 text-secondary me-2 align-middle"></i>Negotiation</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-secondary text-white">15</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 md:col-span-4 col-span-12">
                            <div class="box border border-success/50">
                                <div class="box-body p-4">
                                    <div class="flex items-top flex-wrap justify-between">
                                        <div>
                                            <h6 class="font-medium deal-finalized"><i class="ri-circle-fill p-1 leading-none text-[0.4375rem] rounded-md bg-success/10 text-success me-2 align-middle"></i>Deal Finalized</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-success text-white">127 Deals</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-2 col-span-12" id="leads-discovered">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">John Doe</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">21,May 2024 - 10:25AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Beta Innovations</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $50,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Initech Info</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Jane Smith</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">15, April 2024 - 02:15PM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Alpha Solutions</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $75,000</p>
                                    <div class="deal-description">
                                        <a href="javascript:void(0);" class="company-name">TechCorp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Michael Johnson</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">05, March 2024 - 11:30AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Gamma Enterprises</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $100,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">NextGen Inc</a>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emma Wilson</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">10, February 2024 - 09:45AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Delta Dynamics</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $120,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">InnovateX</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12" id="leads-qualified">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Daniel Brown</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">18, January 2024 - 03:20PM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Omega Solutions</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $95,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">SkyTech</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emily Brown</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">18, June 2024 - 11:15AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Delta Innovations</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $65,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Dynamics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">James Wilson</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">12, June 2024 - 09:30AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Gamma Enterprises</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $80,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Solutions Inc.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Liam Smith</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">30, June 2024 - 01:45PM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Zeta Corporation</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Agreed Amount:</span> $105,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechVision Ltd.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12" id="contact-initiated">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Sarah Martinez</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">05, June 2024 - 10:45AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">AlphaTech Solutions</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $75,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">InnovateX</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Robert Lee</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">30, May 2024 - 02:00PM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Omega Ventures</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $90,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">NextGen Tech</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12" id="needs-identified">                        
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">David Wilson</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">08, June 2024 - 09:45AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Alpha Solutions</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $70,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Innovations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emma Clark</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">20, May 2024 - 03:30PM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Zeta Dynamics</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $85,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechStar Solutions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">David Wilson</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">07, June 2024 - 09:45AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]"> AlphaTech Solutions</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Budget:</span> $100,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Innovations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Sophie Adams</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">14, June 2024 - 11:30AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]"> GammaTech Solutions</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Estimated Revenue:</span> $120,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">InnovateX</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12" id="negotiation">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Olivia Moore</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">25, May 2024 - 02:15PM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]"> Delta Dynamics</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Expected Investment:</span> $90,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechStar Solutions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Michael Johnson</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">15, June 2024 - 11:00AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">AlphaTech Solutions</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Proposed Amount:</span> $120,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Innovations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emily Davis</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">10, June 2024 - 09:30AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">BetaTech Innovations</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Estimated Budget:</span> $150,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Solutions Ltd.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12" id="deal-finalized">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emma Thompson</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">25, June 2024 - 03:45PM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Delta Dynamics</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Amount:</span> $120,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechStar Innovations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center gap-2 mb-3"> 
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <div class="leading-none">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Sophia Garcia</div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[10px]">18, June 2024 - 09:30AM</div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-medium mb-1 text-[14px]">Completed Gamma Technologies</p>
                                    <p class="font-medium mb-4"><span class="text-textmuted dark:text-textmuted/50 font-normal">Investment:</span> $85,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechSolutions Inc.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start:: New Deal -->
                    <div id="create-contact" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                        <div class="max-h-full overflow-hidden ti-modal-content">
                            <div class="ti-modal-header">
                                <h6 class="modal-title text-[1rem] font-semiboldmodal-title" id="staticBackdropLabel3">New Deal
                                </h6>
                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#create-contact">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                </svg>
                            </button>
                            </div>
                            <div class="ti-modal-body overflow-y-auto">
                                <div class="grid grid-cols-12 gap-x-6 gap-y-3">
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="mb-0 text-center">
                                            <span class="avatar avatar-xxl avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="" id="profile-img">
                                                <span class="badge rounded-full bg-primary avatar-badge">
                                                    <input type="file" name="photo" class="absolute w-full h-full opacity-0" id="profile-change">
                                                    <i class="fe fe-camera"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="deal-name" class="form-label">Contact Name</label>
                                        <input type="text" class="form-control" id="deal-name" placeholder="Contact Name">
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="deal-lead-score" class="form-label">Deal Value</label>
                                        <input type="number" class="form-control" id="deal-lead-score" placeholder="Deal Value">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="company-name" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company-name" placeholder="Company Name">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label">Last Contacted</label>
                                        <div class="input-group">
                                            <div class="input-group-text text-textmuted dark:text-textmuted/50"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ti-modal-footer">
                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-soft-secondary" data-hs-overlay="#create-contact">
                                Cancel
                            </button>
                            <a class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                Create Deal
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End:: New Deal -->

                </div>
            </div>
            <!-- End::app-content -->
      
@endsection

@section('scripts')

        <!-- Dragula JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>

        <!-- CRM Deals JS -->
        @vite('resources/assets/js/crm-deals.js')
        

@endsection