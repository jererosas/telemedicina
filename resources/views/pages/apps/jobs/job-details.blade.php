@extends('layouts.master')

@section('styles')
  
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Job Details</h1>
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
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="box !bg-primary/10 dark:!bg-primary/10">
                                <div class="box-body border dark:border-defaultborder/10 rounded-md">
                                    <div class="box overflow-hidden job-info-banner">
                                    </div>
                                    <div class="box job-info-data mb-2">
                                        <div class="box-body">
                                            <div class="flex flex-wrap items-top justify-between gap-2">
                                                <div>
                                                    <div class="flex flex-wrap gap-2">
                                                        <div>
                                                            <span class="avatar avatar-lg border p-1 dark:border-defaultborder/10">
                                                                <img src="{{asset('build/assets/images/media/jobs/2.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-medium mb-0 flex items-center"><a href="javascript:void(0);" class="">Frontend Developer</a></h5>
                                                            <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50"><i class="bi bi-building"></i> Spruko Technologies PRIVATE LIMITED</a>
                                                            <div class="flex mt-3">
                                                                <div>
                                                                    <p class="mb-1"><i class="bi bi-geo-alt me-1"></i>Bangalore, Karnataka</p>
                                                                    <p><i class="bi bi-briefcase me-1"></i>2 - 4 Yrs Exp.</p>
                                                                </div>
                                                                <div class="ms-4">
                                                                    <p class="mb-1"><i class="bi bi-coin me-1"></i><span class="font-medium">25,000 - 35,000</span> / per month (+incentives)</p>
                                                                    <p><i class="bi bi-mortarboard  me-1"></i>Graduate and Above</p>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags mt-3">
                                                                <a href="javascript:void(0);" class="badge rounded-full bg-info/10 text-info"><i class="bi bi-clock me-1"></i>Full Time</a>
                                                                <a href="javascript:void(0);" class="badge rounded-full bg-primarytint2color/10 text-primarytint2color"><i class="bi bi-briefcase me-1"></i>8 Openings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="!rounded-full ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm">
                                                            <i class="ri-bookmark-line"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                                Save
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="flex gap-1 items-center  mt-4 pt-3">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <span class="bi bi-info-circle text-info">
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    20 Days Left
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <p class="mb-0"> <span class="font-medium">20 days left </span> to apply for this job</p>
                                                    </div>
                                                    <div class="btn-list mt-3">
                                                        <a href="javascript:void(0);" class="ti-btn mb-0 bg-primary text-white"> Apply Now</a>
                                                        <a href="javascript:void(0);" class="ti-btn mb-0 ti-btn-icon ti-btn-soft-primary1 btn-wave">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn mb-0 ti-btn-icon ti-btn-soft-primary2 btn-wave me-0">
                                                            <i class="ri-share-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <h6 class="font-medium mb-3">Job Description</h6>
                                    <p class="opacity-90 mb-4">We are seeking a skilled Frontend Developer to join our dynamic team. In this role, you will be responsible for implementing visual elements that users see and interact with in web applications. You will work closely with designers and backend developers to bridge the gap between graphical design and technical implementation, ensuring an optimized and responsive user experience.</p>
                                    <p class="mb-4 opacity-90">As a Frontend Developer, you will use your expertise in HTML, CSS, and JavaScript frameworks to translate UI/UX design wireframes into high-quality code. You will collaborate with cross-functional teams to deliver scalable and maintainable frontend solutions that meet business objectives and user needs.</p>
                                    
                                    <h6 class="font-medium">Key Responsibilities</h6>
                                    <ol class="ti-list-group border-0 ps-5 list-decimal mb-3">
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Develop responsive web pages and web applications based on provided designs and specifications.</li>
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Collaborate with UX/UI designers and backend developers to deliver seamless user interfaces.</li>
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Optimize application performance and ensure cross-browser compatibility.</li>
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Implement front-end components and libraries using modern frameworks such as React, Angular, or Vue.js.</li>
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Conduct thorough testing of user interfaces to identify and fix UI issues and bugs.</li>
                                    </ol>
                                    <h6 class="font-medium">Requirements</h6>
                                    <ul class="ti-list-group border-0 ps-5 list-decimal mb-3">
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Bachelor's degree in Computer Science, Engineering, or a related field, or equivalent practical experience.</li>
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Proven experience as a Frontend Developer or similar role, with a strong portfolio demonstrating frontend development skills.</li>
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Proficiency in HTML5, CSS3, JavaScript, and frontend frameworks/libraries (e.g., React, Angular, Vue.js).</li>
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Experience with version control systems (e.g., Git) and modern development workflows.</li>
                                        <li class="ti-list-group-item !border-0 !py-1 !ps-0">Understanding of responsive design principles and mobile-first approach.</li>
                                    </ul>
                                </div>  
                            </div>
                            <div class="box border shadow-none !bg-primary/10 border-primary/10">
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-x-6 items-center">
                                        <div class="lg:col-span-6 col-span-12">
                                            <h5 class="font-medium mb-3"><i class="ri-briefcase-line me-2 p-2 bg-primary text-white text-[15px] leading-none align-middle rounded-full"></i>Explore Job Opportunities</h5>
                                            <span class="text-textmuted dark:text-textmuted/50 mb-0 text-[14px]">Find exciting job opportunities that match your skills and interests. Join us to make a difference!</span>
                                        </div>
                                        <div class="lg:col-span-6 col-span-12 sm:text-end">
                                            <a href="javascript:void(0);" class="ti-btn bg-primary text-white ti-btn-lg" role="button">
                                                <i class="ri-share-line me-2 align-middle inline-block"></i>Sign up Now
                                            </a>
                                        </div>
                                    </div>
                                </div>                            
                            </div>  
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Job Highlights</div>
                                </div>
                                <div class="box-body">
                                    <div class="mb-3 text-[14px] flex items-center">
                                        <span class="avatar avatar-sm border dark:border-defaultborder/10 border-defaultborder leading-none avatar-rounded me-2 bg-info/10 !text-info">
                                            <i class="ri-map-pin-line"></i>
                                        </span>
                                        <span class="text-textmuted dark:text-textmuted/50">Work Location</span>
                                        <span class="ms-auto font-medium">
                                            Bangalore
                                        </span>
                                    </div>
                                    <div class="mb-3 flex items-center">
                                        <span class="avatar avatar-sm border dark:border-defaultborder/10 border-defaultborder  leading-none avatar-rounded me-2 bg-danger/10 !text-danger">
                                            <i class="ri-time-line"></i>
                                        </span>
                                        <span class="text-textmuted dark:text-textmuted/50">Flexible Hours</span>
                                        <span class="ms-auto font-medium">
                                            9:00AM -6:00PM
                                        </span>
                                        
                                    </div>
                                    <div class="mb-3 flex items-center">
                                        <span class="avatar avatar-sm border dark:border-defaultborder/10 border-defaultborder leading-none avatar-rounded me-2 bg-success/10 !text-success">
                                            <i class="ri-cash-line"></i>
                                        </span>
                                        <span class="text-textmuted dark:text-textmuted/50">Competitive Salary</span>
                                        <span class="ms-auto font-medium">
                                            35,000 +
                                        </span>
                                        
                                    </div>
                                    <div class="mb-0 flex items-center">
                                        <span class="avatar avatar-sm border dark:border-defaultborder/10 border-defaultborder leading-none avatar-rounded me-2 bg-primarytint2color/10 !text-primarytint2color">
                                            <i class="ri-award-line"></i>
                                        </span>
                                        <span class="text-textmuted dark:text-textmuted/50">Employee Benefits</span>
                                        <span class="ms-auto font-medium">
                                            Award
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mb-1">
                                <h6 class="font-medium mb-3">Related Jobs</h6>
                                <div class="swiper swiper-vertical overflow-hidden swiper-related-jobs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                                <div class="box-body">
                                                    <div class="flex mb-3 gap-2 xxl:flex-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 border-defaultborder p-1">
                                                                <img src="{{asset('build/assets/images/media/jobs/2.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="ms-1 grow !w-[75%] truncate">
                                                            <h6 class="font-medium mb-0 flex items-center truncate !w-[75%]"><a href="javascript:void(0);" class="truncate"> Frontend Developer</a></h6>
                                                            <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50"><i class="bi bi-building"></i> InnovateZ Solutions</a>
                                                        </div>
                                                        <div class="ms-auto flex gap-1 ">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-primarytint1color/10 !text-primarytint1color">
                                                                    <i class="bi bi-heart"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Add to wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-warning/10 !text-warning">
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Featured Jobs
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="popular-tags mb-3 flex gap-1 flex-wrap xxl:flex-nowrap">
                                                            <a href="javascript:void(0);" class="badge rounded-full bg-info/10 text-info"><i class="bi bi-geo-alt me-1"></i> San Francisco, CA</a>
                                                            <a href="javascript:void(0);" class="badge rounded-full bg-primarytint2color/10 text-primarytint2color"><i class="bi bi-mortarboard me-1"></i> 2+ Yrs Exp.</a>
                                                        </div>
                                                        <h6 class="font-medium mb-0">$50k - $80k</h6>
                                                    </div>
                                                    <a href="javascript:void(0);" class="font-medium ti-btn ti-btn-sm bg-primary text-white grid text-nowrap">
                                                        Apply Now
                                                    </a>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                                <div class="box-body">
                                                    <div class="flex mb-3  gap-2 xxl:flex-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-md avatar-rounded bg-danger/10 !text-danger border dark:border-defaultborder/10 border-defaultborder">
                                                                <i class="bi bi-laptop"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-1 grow !w-[75%] truncate">
                                                            <h6 class="font-medium mb-0 flex items-center truncate !w-[75%]"><a href="javascript:void(0);" class="truncate"> Backend Developer</a></h6>
                                                            <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50"><i class="bi bi-building"></i> Tech Solutions Inc.</a>
                                                        </div>
                                                    <div class="ms-auto flex gap-1 ">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-primarytint1color/10 !text-primarytint1color">
                                                                    <i class="bi bi-heart"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Add to wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-warning/10 !text-warning">
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Featured Jobs
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="popular-tags mb-3 flex gap-1 flex-wrap xxl:flex-nowrap">
                                                            <a href="javascript:void(0);" class="badge rounded-full bg-info/10 text-info"><i class="bi bi-geo-alt me-1"></i> New York, NY</a>
                                                            <a href="javascript:void(0);" class="badge rounded-full bg-primarytint2color/10 text-primarytint2color"><i class="bi bi-mortarboard me-1"></i> 3+ Yrs Exp.</a>
                                                        </div>
                                                        <h6 class="font-medium mb-0">$60k - $90k</h6>
                                                    </div>
                                                    <a href="javascript:void(0);" class="font-medium ti-btn ti-btn-sm bg-primary text-white grid text-nowrap">
                                                        Apply Now
                                                    </a>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                                <div class="box-body">
                                                    <div class="flex mb-3 gap-2 xxl:flex-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-md avatar-rounded bg-warning/10 !text-warning border dark:border-defaultborder/10 border-defaultborder">
                                                                <i class="bi bi-laptop"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-1 grow !w-[75%] truncate">
                                                            <h6 class="font-medium mb-0 flex items-center truncate !w-[75%]"><a href="javascript:void(0);" class="truncate"> UI/UX Designer</a></h6>
                                                            <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50"><i class="bi bi-building"></i> Creative Designs Co.</a>
                                                        </div>
                                                    <div class="ms-auto flex gap-1 ">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-primarytint1color/10 !text-primarytint1color">
                                                                    <i class="bi bi-heart"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Add to wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-warning/10 !text-warning">
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Featured Jobs
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="popular-tags mb-3 flex gap-1 flex-wrap xxl:flex-nowrap">
                                                            <a href="javascript:void(0);" class="badge rounded-full bg-info/10 text-info"><i class="bi bi-geo-alt me-1"></i> Seattle, WA</a>
                                                            <a href="javascript:void(0);" class="badge rounded-full bg-primarytint2color/10 text-primarytint2color"><i class="bi bi-mortarboard me-1"></i> 3+ Yrs Exp.</a>
                                                        </div>
                                                        <h6 class="font-medium mb-0">$70k - $100k</h6>
                                                    </div>
                                                    <a href="javascript:void(0);" class="font-medium ti-btn ti-btn-sm bg-primary text-white grid text-nowrap">
                                                        Apply Now
                                                    </a>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box featured-jobs shadow-none border dark:border-defaultborder/10 border-defaultborder">
                                                <div class="box-body">
                                                    <div class="flex mb-3  gap-2 xxl:flex-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-md avatar-rounded bg-info/10 !text-info border dark:border-defaultborder/10 border-defaultborder">
                                                                <i class="bi bi-laptop"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-1 grow !w-[75%] truncate">
                                                            <h6 class="font-medium mb-0 flex items-center truncate !w-[75%]"><a href="javascript:void(0);" class="truncate"> Full Stack Developer</a></h6>
                                                            <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50"><i class="bi bi-building"></i> TechGurus Ltd.</a>
                                                        </div>
                                                    <div class="ms-auto flex gap-1 ">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-primarytint1color/10 !text-primarytint1color">
                                                                    <i class="bi bi-heart"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Add to wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-warning/10 !text-warning">
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Featured Jobs
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="popular-tags mb-3 flex gap-1 flex-wrap xxl:flex-nowrap">
                                                            <a href="javascript:void(0);" class="badge rounded-full bg-info/10 text-info"><i class="bi bi-geo-alt me-1"></i> Los Angeles, CA</a>
                                                            <a href="javascript:void(0);" class="badge rounded-full bg-primarytint2color/10 text-primarytint2color"><i class="bi bi-mortarboard me-1"></i> 5+ Yrs Exp.</a>
                                                        </div>
                                                        <h6 class="font-medium mb-0">$80k - $120k</h6>
                                                    </div>
                                                    <a href="javascript:void(0);" class="font-medium ti-btn ti-btn-sm bg-primary text-white grid text-nowrap">
                                                        Apply Now
                                                    </a>
                                                </div>                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="box">
                                <div class="box-body">
                                    <h6 class="font-medium mb-3">Subscribe to Job Alerts</h6>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control !border-s" placeholder="Your Email Address" aria-label="job-email" aria-describedby="job-subscribe">
                                        <button class="ti-btn bg-primary text-white !m-0" type="button" id="job-subscribe">Subscribe</button>
                                    </div>
                                    <label class="form-check-label">
                                        By subscribing, you accept our <a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Swiper jobs JS -->
        @vite('resources/assets/js/job-details.js')
        

@endsection