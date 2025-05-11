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
                                    <li class="breadcrumb-item active" aria-current="page">Job Search</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Job Search</h1>
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
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-4 col-span-12">
                            <div class="box products-navigation-card">
                                <div class="box-body p-0">
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Categories</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check !flex mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label" for="c-1">
                                                    Research & Developement
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor ms-auto  float-end">2,712</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label" for="c-2">
                                                    Accounting 
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">536</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label" for="c-3">
                                                    Business Process
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">18,289</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label" for="c-4">
                                                    Consulting
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">3,453</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label" for="c-5">
                                                    Administrative Support
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">7,165</span>
                                            </div>
                                            <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden"
                                            id="hs-show-hide-categories-heading"
                                            aria-labelledby="hs-show-hide-categories2">
                                            <div class="form-check !mb-3 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="c-61">
                                                <label class="form-check-label" for="c-61">
                                                    Human Resources
                                                </label>
                                                <span
                                                    class="badge bg-light !text-defaulttextcolor dark:text-defaulttextcolor/10 font-medium float-end ms-auto">5,964</span>
                                            </div>
                                            <div class="form-check !mb-3 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="c-71">
                                                <label class="form-check-label" for="c-71">
                                                    Marketing
                                                </label>
                                                <span
                                                    class="badge bg-light !text-defaulttextcolor dark:text-defaulttextcolor/10 font-medium float-end ms-auto">2,123</span>
                                            </div>
                                        </div>
                                        <a class="ecommerce-more-link hs-collapse-toggle"
                                            id="hs-show-hide-categories2"
                                            data-hs-collapse="#hs-show-hide-categories-heading"
                                            href="#category-more" role="button">MORE</a>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Job Type</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label" for="j-1">
                                                    Full Time
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">512</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-2" checked>
                                                <label class="form-check-label" for="j-2">
                                                    Part Time
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">2,186</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-3" checked>
                                                <label class="form-check-label" for="j-3">
                                                    Internship
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">734</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-4">
                                                <label class="form-check-label" for="j-4">
                                                    Freelancer
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">16</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="j-5">
                                                <label class="form-check-label" for="j-5">
                                                    Remote Job
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">1,432</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Qualification</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-1">
                                                <label class="form-check-label" for="q-1">
                                                    All Education Levels
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">22,457</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-2" checked>
                                                <label class="form-check-label" for="q-2">
                                                    10th Pass and Above
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">12,562</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-3">
                                                <label class="form-check-label" for="q-3">
                                                    12th Pass and Above
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">7,155</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-4" checked>
                                                <label class="form-check-label" for="q-4">
                                                    Diploma and Graduate
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">5,767</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="q-5">
                                                <label class="form-check-label" for="q-5">
                                                    Post Graduate
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">3,651</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Experience</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-1" checked>
                                                <label class="form-check-label" for="e-1">
                                                    Fresher
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">23,156</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-2">
                                                <label class="form-check-label" for="e-2">
                                                    Less than 1 year
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">15,632</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-3" checked>
                                                <label class="form-check-label" for="e-3">
                                                    Less than 2 year
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">15,032</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="e-4" checked>
                                                <label class="form-check-label" for="e-4">
                                                    More than 3 years
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">7,154</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h6 class="font-medium mb-0">Salary Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="flex mt-4">
                                                <div class="font-medium h6 mb-0">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp; 
                                                <div class="font-medium h6 mb-0">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h6 class="font-medium mb-0">Skills</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-1" checked>
                                                <label class="form-check-label" for="s-1">
                                                    HTML5
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">23,156</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-2" checked>
                                                <label class="form-check-label" for="s-2">
                                                    Javascript
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">15,632</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-3">
                                                <label class="form-check-label" for="s-3">
                                                    PHP
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">15,032</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-4" checked>
                                                <label class="form-check-label" for="s-4">
                                                    CSS3
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor  float-end">7,154</span>
                                            </div>
                                            <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden"
                                            id="hs-show-hide-categories-heading2"
                                            aria-labelledby="hs-show-hide-categories1">
                                            <div class="form-check !mb-3 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="c-6">
                                                <label class="form-check-label" for="c-6">
                                                    Bootstrap
                                                </label>
                                                <span
                                                    class="badge bg-light !text-defaulttextcolor dark:text-defaulttextcolor/10 font-medium float-end ms-auto">5,964</span>
                                            </div>
                                            <div class="form-check !mb-3 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="c-7">
                                                <label class="form-check-label" for="c-7">
                                                    Angular
                                                </label>
                                                <span
                                                    class="badge bg-light !text-defaulttextcolor dark:text-defaulttextcolor/10 font-medium float-end ms-auto">2,123</span>
                                            </div>
                                            <div class="form-check !mb-3 !flex items-center">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="c-72">
                                                <label class="form-check-label" for="c-72">
                                                    React
                                                </label>
                                                <span
                                                    class="badge bg-light !text-defaulttextcolor dark:text-defaulttextcolor/10 font-medium float-end ms-auto">2,123</span>
                                            </div>
                                        </div>
                                        <a class="ecommerce-more-link hs-collapse-toggle"
                                            id="hs-show-hide-categories1"
                                            data-hs-collapse="#hs-show-hide-categories-heading2"
                                            href="#category-more" role="button">MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-9 xl:col-span-8 col-span-12">
                            <div class="box p-4">
                                <div class="grid grid-cols-12 gap-x-6 items-center py-4 px-[1.5rem] bg-primary/10 rounded-md mx-0 mb-3">
                                    <div class="sm:col-span-7 col-span-12">
                                        <div class="flex">
                                            <h5 class="font-medium mb-0"><span class="fw-normal">Showing</span> 6678 Jobs</h5>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-5 col-span-12 sm:text-end mt-3 sm:mt-0">
                                        <div class="btn-group ti-dropdown hs-dropdown">
                                            <button class="ti-btn ti-btn-primary border" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By
                                                <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Featured</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Best Rated</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 sm:gap-x-6">
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/2.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);">Frontend Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">Tech Solutions Inc.</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$45,000 - $60,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/1.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> React Lead Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">Infratech PVT LTD</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/3.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">G Technical Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/4.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> Wordpress Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">Hardware Private Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/2.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> HTML Developer - Fresher</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">InnovateZ Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/1.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> React Lead Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">Infratech PVT LTD</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/3.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">G Technical Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/2.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> HTML Developer - Remote</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">InnovateZ Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/1.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> React Lead Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">Infratech PVT LTD</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                            <div class="box-body">
                                                <div class="float-end ti-dropdown hs-dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-white ti-btn-icon ti-btn-sm text-textmuted dark:text-textmuted/50 !rounded-full ti-dropdown-toggle hs-dropdown-toggle border border-defaultborder dark:border-defaultborder/10">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="flex mb-3 flex-wrap gap-2 items-center">
                                                    <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                        <img src="{{asset('build/assets/images/media/jobs/3.png')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50">G Technical Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-info/10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-primarytint3color/10 text-primarytint3color"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-full text-[11px] border border-secondary/10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="flex justify-between items-center flex-wrap">
                                                    <h6 class="font-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary ti-btn-sm inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="box shadow-none bg-primary/10 mb-0">
                                            <div class="box-body border border-defaultborder dark:border-defaultborder/10 rounded-sm">
                                                <div class="">
                                                    <h5 class="font-medium mb-3">Subscribe to Latest Job Alerts</h5>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control !border-s" placeholder="Enter your email" aria-label="job-email" aria-describedby="job-subscribe">
                                                        <button class="ti-btn ti-btn-primary !m-0" type="button" id="job-subscribe">Subscribe</button>
                                                    </div>
                                                    <label class="form-check-label">
                                                        By subscribing, you accept our <a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>.
                                                    </label>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="..." class="me-4 mb-4 justify-end flex">
                                <ul class="ti-pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem]">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link !bg-white dark:!bg-bodybg active px-3 py-[0.375rem]"
                                            href="javascript:void(0);">1</a></li>
                                    <li class="page-item " aria-current="page">
                                        <a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem]"
                                            href="javascript:void(0);">2</a>
                                    </li>
                                    <li class="page-item " aria-current="page">
                                        <a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem]"
                                            href="javascript:void(0);">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>
        @vite('resources/assets/js/job-search.js')
        
    
@endsection