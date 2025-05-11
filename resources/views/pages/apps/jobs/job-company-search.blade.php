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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Company Search</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Company Search</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 lg:col-span-5 col-span-12">
                            <div class="box products-navigation-card">
                                <div class="box-body p-0">
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Industry Type</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label !ps-0" for="c-1">
                                                    R & D
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">2,712</span>
                                            </div>
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label !ps-0" for="c-2">
                                                    Accounting 
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">536</span>
                                            </div>
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label !ps-0" for="c-3">
                                                    Business Process
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">18,289</span>
                                            </div>
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-41" checked>
                                                <label class="form-check-label !ps-0" for="c-41">
                                                    Consulting
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">3,453</span>
                                            </div>
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label !ps-0" for="c-5">
                                                    Administrative Support
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">7,165</span>
                                            </div>
                                            <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden"
                                                    id="hs-show-hide-categories-heading"
                                                    aria-labelledby="hs-show-hide-categories2">
                                                    <div class="form-check mb-2 !flex items-center">
                                                        <input class="form-check-input me-2" type="checkbox" value="" id="c4" checked>
                                                        <label class="form-check-label !ps-0" for="c4">
                                                            Human Resources
                                                        </label>
                                                        <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">3,453</span>
                                                    </div>
                                                    <div class="form-check mb-2 !flex items-center">
                                                        <input class="form-check-input me-2" type="checkbox" value="" id="c-10">
                                                        <label class="form-check-label !ps-0" for="c-10">
                                                            Marketing
                                                        </label>
                                                        <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">7,165</span>
                                                    </div>
                                                </div>
                                                <a class="ecommerce-more-link hs-collapse-toggle"
                                                    id="hs-show-hide-categories2"
                                                    data-hs-collapse="#hs-show-hide-categories-heading"
                                                    href="#category-more" role="button">MORE</a>
                                    </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Location</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-1" checked>
                                                <label class="form-check-label !ps-0" for="available-1">
                                                    Hyderabad
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">512</span>
                                            </div>
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-2">
                                                <label class="form-check-label !ps-0" for="available-2">
                                                    Banglore
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">2,186</span>
                                            </div>
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-3">
                                                <label class="form-check-label !ps-0" for="available-3">
                                                    Chennai
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">734</span>
                                            </div>
                                            <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden"
                                            id="hs-show-hide-categories-heading1"
                                            aria-labelledby="hs-show-hide-categories1">
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label !ps-0" for="c-4">
                                                    Pune
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">3,453</span>
                                            </div>
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-11">
                                                <label class="form-check-label !ps-0" for="c-11">
                                                    USA
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">7,165</span>
                                            </div>
                                        </div>
                                        <a class="ecommerce-more-link hs-collapse-toggle"
                                            id="hs-show-hide-categories1"
                                            data-hs-collapse="#hs-show-hide-categories-heading1"
                                            href="#category-more" role="button">MORE</a>
                                        
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Recruiter Type</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Recruiter-1" checked>
                                                <label class="form-check-label !ps-0" for="Recruiter-1">
                                                    Direct Company
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">13</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Recruiter-2">
                                                <label class="form-check-label !ps-0" for="Recruiter-2">
                                                    Agency
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">67</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Job Vacancies</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="vacancies-1" checked>
                                                <label class="form-check-label !ps-0" for="vacancies-1">
                                                    0 -10
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">13</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="vacancies-3">
                                                <label class="form-check-label !ps-0" for="vacancies-3">
                                                    20 +above 
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">67</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Type of Employement</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label !ps-0" for="j-1">
                                                    Full Time
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">512</span>
                                            </div>
                                            <div class="form-check mb-2 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-2">
                                                <label class="form-check-label !ps-0" for="j-2">
                                                    Part Time
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end ms-auto">2,186</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-9 lg:col-span-7 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6 items-center mb-4">
                                <div class="lg:col-span-12 col-span-12">
                                    <div class="input-group companies-search-input">
                                        <input type="text" class="form-control form-control-lg !border-r-0 border-defaultborder dark:!border-defaultborder/10 flex-auto" aria-label="Text input with segmented dropdown button" placeholder="Enter your keyword here">
                                        <input type="text" class="form-control form-control-lg !border-r-0 border-defaultborder dark:!border-defaultborder/10 flex-auto" aria-label="Text input with segmented dropdown button" placeholder="Search by location">
                                        <select class="form-select form-select-lg rounded-0" name="choices-single-default" id="choices-single-default" data-trigger>
                                            <option value="">All Categories</option>
                                            <option value="Choice 1">Software Dveloper</option>
                                            <option value="Choice 2">Web Developer</option>
                                            <option value="Choice 3">Software Architect</option>
                                            <option value="Choice 4">IT Hardware</option>
                                            <option value="Choice 5">Network Engineer</option>
                                            <option value="Choice 6">Angular Developer</option>
                                            <option value="Choice 7">React Developer</option>
                                        </select>
                                        <button type="button" class="ti-btn bg-primary text-white !m-0 sm:!rounded-tl-none sm:!rounded-bl-none !rounded-md"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <h5 class="font-medium mb-0 grow">5473 <span class="font-normal text-lg">Companies match for your search</span> </h5>
                                                <div class="btn-group ti-dropdown hs-dropdown">
                                                    <button class="ti-btn ti-btn-outline-light border m-0 hs-dropdown-toggle">
                                                        Sort By <i class="ti ti-chevron-down"></i>
                                                    </button>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Premium</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Fresher</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Experienced</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Bond Agreement</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Flexible Shift</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Day Shift</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="float-end">
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-heart"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary/10 p-4 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">TechGurus Ltd.
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="text-secondary text-[13px]">
                                                                <i class="ri-verified-badge-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Verified company
                                                                </span>
                                                            </span>
                                                        </div></a></h6>
                                                    <div class="flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Los Angeles, CA, </a>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50">Establishment year - 2015</p>
                                                    </div> 
                                                    <div class="flex items-center text-xs text-textmuted dark:text-textmuted/50">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(245)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="grow flex items-center flex-wrap gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-primarytint1color/10 text-primarytint1color me-1">
                                                            <i class="bi bi-people me-1"></i>No. of Emp : 345
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                No of employees
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-info/10 text-info"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn-sm ti-btn btn-wave ti-btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="float-end">
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-heart"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary/10 p-4 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">XYZ Solutions Ltd.    <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="text-secondary text-[13px]">
                                                                <i class="ri-verified-badge-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Verified company
                                                                </span>
                                                            </span>
                                                        </div></a></h6>
                                                    <div class="flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> New York, NY, </a>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50">Establishment year - 2010</p>
                                                    </div> 
                                                    <div class="flex items-center text-xs text-textmuted dark:text-textmuted/50">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(318)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="grow flex items-center flex-wrap gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-primarytint1color/10 text-primarytint1color me-1">
                                                            <i class="bi bi-people me-1"></i>No. of Emp : 146
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                No of employees
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-info/10 text-info"><i class="bi bi-briefcase me-1"></i>Vacancies : 40</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn-sm ti-btn btn-wave ti-btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="float-end">
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-heart"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary/10 p-4 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">Innovate Labs Inc.    <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="text-secondary text-[13px]">
                                                                <i class="ri-verified-badge-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Verified company
                                                                </span>
                                                            </span>
                                                        </div></a></h6>
                                                    <div class="flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> San Francisco, CA, </a>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50">Establishment year - 2013</p>
                                                    </div> 
                                                    <div class="flex items-center text-xs text-textmuted dark:text-textmuted/50">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(198)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="grow flex items-center flex-wrap gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-primarytint1color/10 text-primarytint1color me-1">
                                                            <i class="bi bi-people me-1"></i>No. of Emp : 56
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                No of employees
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-info/10 text-info"><i class="bi bi-briefcase me-1"></i>Vacancies : 35</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn-sm ti-btn btn-wave ti-btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="float-end">
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-heart"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary/10 p-4 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">GlobalTech Innovations    <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="text-secondary text-[13px]">
                                                                <i class="ri-verified-badge-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Verified company
                                                                </span>
                                                            </span>
                                                        </div></a></h6>
                                                    <div class="flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> London, UK, </a>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50">Establishment year - 2011</p>
                                                    </div> 
                                                    <div class="flex items-center text-xs text-textmuted dark:text-textmuted/50">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(367)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="grow flex items-center flex-wrap gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-primarytint1color/10 text-primarytint1color me-1">
                                                            <i class="bi bi-people me-1"></i>No. of Emp : 120
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                No of employees
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-info/10 text-info"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn-sm ti-btn btn-wave ti-btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="float-end">
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-heart"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-share"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Share This Company
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary/10 p-4 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">Innovision Software Solutions    <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="text-secondary text-[13px]">
                                                                <i class="ri-verified-badge-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Verified company
                                                                </span>
                                                            </span>
                                                        </div></a></h6>
                                                    <div class="flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Sydney, Australia, </a>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50">Establishment year - 2005</p>
                                                    </div> 
                                                    <div class="flex items-center text-xs text-textmuted dark:text-textmuted/50">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(276)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="grow flex items-center flex-wrap gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-primarytint1color/10 text-primarytint1color me-1">
                                                            <i class="bi bi-people me-1"></i>No. of Emp : 120
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                No of employees
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-info/10 text-info"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn-sm ti-btn btn-wave ti-btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="float-end">
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-heart"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-share"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                        Share This Company
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary/10 p-4 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">Digital Nexus Solutions    <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="text-secondary text-[13px]">
                                                                <i class="ri-verified-badge-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Verified company
                                                                </span>
                                                            </span>
                                                        </div></a></h6>
                                                    <div class="flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Chicago, IL, </a>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50">Establishment year - 2012</p>
                                                    </div> 
                                                    <div class="flex items-center text-xs text-textmuted dark:text-textmuted/50">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(389)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="grow flex items-center flex-wrap gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-primarytint1color/10 text-primarytint1color me-1">
                                                            <i class="bi bi-people me-1"></i>No. of Emp : 345
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                No of employees
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-info/10 text-info"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn-sm ti-btn btn-wave ti-btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="float-end">
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-heart"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary/10 p-4 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/10.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">Innovate IT Solutions    <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="text-secondary text-[13px]">
                                                                <i class="ri-verified-badge-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Verified company
                                                                </span>
                                                            </span>
                                                        </div></a></h6>
                                                    <div class="flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Mumbai, India, </a>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50">Establishment year - 2009</p>
                                                    </div> 
                                                    <div class="flex items-center text-xs text-textmuted dark:text-textmuted/50">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(312)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="grow flex items-center flex-wrap gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-primarytint1color/10 text-primarytint1color me-1">
                                                            <i class="bi bi-people me-1"></i>No. of Emp : 120
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                No of employees
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-info/10 text-info"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn-sm ti-btn btn-wave ti-btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="float-end">
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary/10 !text-primary avatar-sm">
                                                        <i class="bi bi-heart"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary/10 p-4 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">CloudSoft Technologies    <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="text-secondary text-[13px]">
                                                                <i class="ri-verified-badge-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Verified company
                                                                </span>
                                                            </span>
                                                        </div></a></h6>
                                                    <div class="flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Seattle, WA, </a>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50">Establishment year - 2014</p>
                                                    </div> 
                                                    <div class="flex items-center text-xs text-textmuted dark:text-textmuted/50">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(424)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="grow flex items-center flex-wrap gap-1">
                                                    <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-primarytint1color/10 text-primarytint1color me-1">
                                                            <i class="bi bi-people me-1"></i>No. of Emp : 345
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                No of employees
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md text-[11px] rounded-full bg-info/10 text-info"><i class="bi bi-briefcase me-1"></i>Vacancies : 40</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn-sm ti-btn btn-wave ti-btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="..." class="mb-4">
                                <ul class="ti-pagination justify-end">
                                    <li class="page-item disabled">
                                        <a class="page-link bg-white dark:bg-bodybg px-3 py-[0.375rem]">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link bg-white dark:bg-bodybg active px-3 py-[0.375rem]"
                                            href="javascript:void(0);">1</a></li>
                                    <li class="page-item " aria-current="page">
                                        <a class="page-link bg-white dark:bg-bodybg px-3 py-[0.375rem]"
                                            href="javascript:void(0);">2</a>
                                    </li>
                                    <li class="page-item " aria-current="page">
                                        <a class="page-link bg-white dark:bg-bodybg px-3 py-[0.375rem]"
                                            href="javascript:void(0);">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link bg-white dark:bg-bodybg px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            

@endsection