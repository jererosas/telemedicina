@extends('layouts.master')

@section('styles')
  
        <!-- nouislider CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Search Candidate</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Search Candidate</h1>
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
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-4 col-span-12">
                            <div class="box products-navigation-card">
                                <div class="box-body p-0">
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Categories</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-1"
                                                    checked>
                                                <label class="form-check-label" for="c-1">
                                                    Software Development
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">3,200</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label" for="c-2">
                                                    Finance
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">780</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-3"
                                                    checked>
                                                <label class="form-check-label" for="c-3">
                                                    Marketing
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">15,500</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-14"
                                                    checked>
                                                <label class="form-check-label" for="c-4">
                                                    Customer Service
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">2,950</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-12">
                                                <label class="form-check-label" for="c-5">
                                                    Operations
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">6,800</span>
                                            </div>
                                            <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden"
                                                id="hs-show-hide-categories-heading1"
                                                aria-labelledby="hs-show-hide-categories1">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c4"
                                                        checked>
                                                    <label class="form-check-label" for="c-4">
                                                        Human Resources
                                                    </label>
                                                    <span
                                                        class="badge bg-light text-defaulttextcolor  float-end">3,453</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c5">
                                                    <label class="form-check-label" for="c-5">
                                                        Business Development
                                                    </label>
                                                    <span
                                                        class="badge bg-light text-defaulttextcolor  float-end">7,165</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link hs-collapse-toggle" id="hs-show-hide-categories1"
                                                data-hs-collapse="#hs-show-hide-categories-heading1" href="#category-more"
                                                role="button">MORE</a>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Availability</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="available-1" checked>
                                                <label class="form-check-label" for="available-1">
                                                    Available Now
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">620</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="available-2">
                                                <label class="form-check-label" for="available-2">
                                                    30 Days Notice
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">1,850</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Bond Agreement</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-1"
                                                    checked>
                                                <label class="form-check-label" for="bond-1">
                                                    1 Year
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">760</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-2">
                                                <label class="form-check-label" for="bond-2">
                                                    2 yrs
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">480</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-3">
                                                <label class="form-check-label" for="bond-3">
                                                    3 yrs
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">240</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Languages</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="languages-1" checked>
                                                <label class="form-check-label" for="languages-1">
                                                    English
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">1,250</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="languages-2">
                                                <label class="form-check-label" for="languages-2">
                                                    Hindi
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">350</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Job Type</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-1"
                                                    checked>
                                                <label class="form-check-label" for="j-1">
                                                    Full Time
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">1,920</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-2"
                                                    checked>
                                                <label class="form-check-label" for="j-2">
                                                    Part Time
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">3,100</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-3"
                                                    checked>
                                                <label class="form-check-label" for="j-3">
                                                    Internship
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">860</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-4">
                                                <label class="form-check-label" for="j-4">
                                                    Freelancer
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">75</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Salary Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="flex mt-3 justify-center">
                                                <div class="font-medium h6 mb-0">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp;
                                                <div class="font-medium h6 mb-0">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Qualification</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-1">
                                                <label class="form-check-label" for="q-1">
                                                    All Education Levels
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">22,457</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-2"
                                                    checked>
                                                <label class="form-check-label" for="q-2">
                                                    10th Pass and Above
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">12,562</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-4"
                                                    checked>
                                                <label class="form-check-label" for="q-4">
                                                    Diploma and Graduate
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">5,767</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h6 class="font-medium mb-0">Skills</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="s-1"
                                                    checked>
                                                <label class="form-check-label" for="s-1">
                                                    HTML5
                                                </label>
                                                <span
                                                    class="badge bg-light text-defaulttextcolor fw-500 float-end">23,156</span>
                                            </div>
                                            <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden"
                                                id="hs-show-hide-categories-heading2"
                                                aria-labelledby="hs-show-hide-categories3">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-4"
                                                        checked>
                                                    <label class="form-check-label" for="c-4">
                                                        CSS3
                                                    </label>
                                                    <span
                                                        class="badge bg-light text-defaulttextcolor  float-end">3,453</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-5">
                                                    <label class="form-check-label" for="c-5">
                                                        Bootstrap
                                                    </label>
                                                    <span
                                                        class="badge bg-light text-defaulttextcolor  float-end">7,165</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-10">
                                                    <label class="form-check-label" for="c-5">
                                                        Angular
                                                    </label>
                                                    <span
                                                        class="badge bg-light text-defaulttextcolor  float-end">7,165</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-11">
                                                    <label class="form-check-label" for="c-5">
                                                        React
                                                    </label>
                                                    <span
                                                        class="badge bg-light text-defaulttextcolor  float-end">7,165</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link hs-collapse-toggle" id="hs-show-hide-categories3"
                                                data-hs-collapse="#hs-show-hide-categories-heading2" href="#category-more"
                                                role="button">MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-9 xl:col-span-8 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6 items-center">
                                <div class="lg:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body md:!p-0">
                                            <div
                                                class="input-group companies-search-input companies-search-input1 flex-lg-nowrap">
                                                <input type="text"
                                                    class="form-control form-control-lg !w-[25%] !border-e-0 !border-s"
                                                    aria-label="Text input with segmented dropdown button"
                                                    placeholder="Enter your keyword here">
                                                <select class="form-select form-select-lg rounded-0" data-trigger>
                                                    <option value="">All Categories</option>
                                                    <option value="Choice 1">Software Dveloper</option>
                                                    <option value="Choice 2">Web Developer</option>
                                                    <option value="Choice 3">Software Architect</option>
                                                    <option value="Choice 4">IT Hardware</option>
                                                    <option value="Choice 5">Network Engineer</option>
                                                    <option value="Choice 6">Angular Developer</option>
                                                    <option value="Choice 7">React Developer</option>
                                                </select>
                                                <input type="text" class="form-control form-control-lg !w-[25%] !border-e-0"
                                                    aria-label="Text input with segmented dropdown button"
                                                    placeholder="Search by location">
                                                <select class="form-select form-select-lg rounded-0" data-trigger>
                                                    <option value="Choice 1">Fresher's</option>
                                                    <option value="Choice 2">1 Year Exp</option>
                                                    <option value="Choice 3">2 Year Exp</option>
                                                    <option value="Choice 4">3 Year Exp</option>
                                                    <option value="Choice 5">4 Year Exp</option>
                                                    <option value="Choice 6">5 yrs Exp</option>
                                                </select>
                                                <button type="button" class="ti-btn btn-lg ti-btn-primary !m-0"><i
                                                        class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap gap-2 items-center">
                                                <h5 class="font-medium mb-0 grow">2468 <span
                                                        class="font-normal text-lg">Candidates match your job search</span>
                                                </h5>
                                                <div class="btn-group ti-dropdown hs-dropdown">
                                                    <button
                                                        class="ti-btn ti-btn-outline-light border m-0 hs-dropdown-toggle">
                                                        Sort By <i class="ti ti-chevron-down"></i>
                                                    </button>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item"
                                                                href="javascript:void(0);">Premium</a></li>
                                                        <li><a class="ti-dropdown-item"
                                                                href="javascript:void(0);">Newest</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Most
                                                                Relevant</a></li>
                                                        <li><a class="ti-dropdown-item"
                                                                href="javascript:void(0);">Fresher</a></li>
                                                        <li><a class="ti-dropdown-item"
                                                                href="javascript:void(0);">Experienced</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Bond
                                                                Agreement</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Flexible
                                                                Shift</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Day
                                                                Shift</a></li>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Samantha
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">UI/UX Designer</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> Silicon Valley, CA
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(245)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> UI Designer (2+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> $55,000</span> - <span
                                                            class="font-medium"> $80,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            Spanish</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="ti-btn ti-btn-primary">View Profile <i
                                                            class="ri-arrow-right-line"></i></div>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Michael <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Frontend Developer</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> New York City, NY
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(189)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Frontend Developer (4+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> $65,000</span> - <span
                                                            class="font-medium"> $90,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            French</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Emily <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Graphic Designer</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> Los Angeles, CA</p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(201)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Graphic Designer (3+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Part Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> $50,000</span> - <span
                                                            class="font-medium"> $70,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            German</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> James <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Software Engineer</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> Seattle, WA</p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(172)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> On-site Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Software Engineer (5+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Contract</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> $80,000</span> - <span
                                                            class="font-medium"> $110,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            Mandarin</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Alexander <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Digital Marketing Specialist</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> Toronto, Canada</p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-half"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(156)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> On-site Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Digital Marketing (3+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> $60,000</span> - <span
                                                            class="font-medium"> $85,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            French</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Sophia <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Data Analyst</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> London, UK</p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(178)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Data Analyst (4+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Part Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> $70,000</span> - <span
                                                            class="font-medium"> $95,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            Spanish</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Marcus <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Software Engineer</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> New York City, NY
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(120)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> On-site Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Software Engineer (5+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> $85,000</span> - <span
                                                            class="font-medium"> $110,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Emily <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Graphic Designer</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> Los Angeles, CA</p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(90)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Graphic Designer (3+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Part Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> $70,000</span> - <span
                                                            class="font-medium"> $90,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            Spanish</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Sophia <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Digital Marketer</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> London, UK</p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(180)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Digital Marketer (4+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> £45,000</span> - <span
                                                            class="font-medium"> £65,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English,
                                                            French</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
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
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                        <span><i class="ri-download-cloud-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Download CV
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                    <a href="javascript:void(0);"
                                                        class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                        <span><i class="ri-heart-line text-[14px]"></i></span>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Add to Wishlist
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Profile Picture">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-1 flex items-center"><a
                                                            href="{{url('job-candidate-details')}}"> Lucas <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a>
                                                    </h6>
                                                    <div class="flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Data Analyst</a>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-[11px]"></i> Toronto, Canada</p>
                                                    </div>
                                                    <div
                                                        class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i
                                                                    class="bi bi-star-fill"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                            <span class="text-textmuted dark:text-textmuted/50"><i
                                                                    class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                            <span>(110)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                        class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                        class="ri-remote-control-line me-1"></i> On-site Work</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-info/10 text-info"><i
                                                        class="ri-time-line me-1"></i> Data Analyst (3+ yrs)</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full text-[11px] border border-primarytint2color/10 text-primarytint2color"><i
                                                        class="ri-time-fill me-1"></i> Part Time</a>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-4">
                                                <div>
                                                    <p class="mb-1 grow"><span
                                                            class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                            :</span> <span class="font-medium"> CAD 65,000</span> - <span
                                                            class="font-medium"> CAD 85,000</span> </p>
                                                    <p class="mb-0"><span class="text-textmuted dark:text-textmuted/50">
                                                            Languages :</span> <span class="font-medium"> English</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                        Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="..." class="me-4 mb-6 flex justify-end">
                                <ul class="ti-pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link bg-white dark:!bg-bodybg px-3 py-[0.375rem] !border-e-0">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link bg-white dark:!bg-bodybg active px-3 py-[0.375rem] !border-e-0"
                                            href="javascript:void(0);">1</a></li>
                                    <li class="page-item " aria-current="page">
                                        <a class="page-link bg-white dark:!bg-bodybg px-3 py-[0.375rem] !border-e-0" href="javascript:void(0);">2</a>
                                    </li>
                                    <li class="page-item " aria-current="page">
                                        <a class="page-link bg-white dark:!bg-bodybg px-3 py-[0.375rem] !border-e-0" href="javascript:void(0);">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link bg-white dark:!bg-bodybg px-3 py-[0.375rem]"
                                            href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>

        <!-- Search Candidate JS -->
        @vite('resources/assets/js/job-search-candidate.js')
        

@endsection