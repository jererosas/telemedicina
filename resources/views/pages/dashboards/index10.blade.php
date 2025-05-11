@extends('layouts.master')

@section('styles')

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

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
                                            Dashboards
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Courses</h1>
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

                    <!-- Start::Row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-7 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="sm:col-span-6 xl:col-span-3 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body text-center">
                                            <span class="avatar avatar-md bg-primary  svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z"></path></svg>
                                            </span>
                                            <p class="mb-1 mt-3 font-medium">Total Revenue</p>
                                            <h4 class="font-semibold">$25,378 </h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Increased By 
                                                <span class="mb-0 badge bg-success/10 text-success rounded-full">
                                                        +5.35%
                                                    <i class="ri-arrow-up-line text-[10px] align-middle ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-6 xl:col-span-3 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body text-center">
                                            <span class="avatar avatar-md bg-primarytint1color svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M226.53,56.41l-96-32a8,8,0,0,0-5.06,0l-96,32A8,8,0,0,0,24,64v80a8,8,0,0,0,16,0V75.1L73.59,86.29a64,64,0,0,0,20.65,88.05c-18,7.06-33.56,19.83-44.94,37.29a8,8,0,1,0,13.4,8.74C77.77,197.25,101.57,184,128,184s50.23,13.25,65.3,36.37a8,8,0,0,0,13.4-8.74c-11.38-17.46-27-30.23-44.94-37.29a64,64,0,0,0,20.65-88l44.12-14.7a8,8,0,0,0,0-15.18ZM176,120A48,48,0,1,1,89.35,91.55l36.12,12a8,8,0,0,0,5.06,0l36.12-12A47.89,47.89,0,0,1,176,120ZM128,87.57,57.3,64,128,40.43,198.7,64Z"></path></svg>
                                            </span>
                                            <p class="mb-1 mt-3 font-medium">Total Students</p>
                                            <h4 class="font-semibold">78,565 </h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Increased By 
                                                <span class="mb-0 badge bg-success/10 text-success rounded-full">
                                                        +12.1%
                                                    <i class="ri-arrow-up-line text-[10px] align-middle ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-6 xl:col-span-3 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body text-center">
                                            <span class="avatar avatar-md bg-primarytint2color svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
                                            </span>
                                            <p class="mb-1 mt-3 font-medium">Total Instructors</p>
                                            <h4 class="font-semibold">6,247 </h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Decreased By 
                                                <span class="mb-0 badge bg-danger/10 text-danger rounded-full">
                                                        +10.21%
                                                    <i class="ri-arrow-down-line text-[10px] align-middle ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-6 xl:col-span-3 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body text-center">
                                            <span class="avatar avatar-md bg-primarytint3color svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"></path></svg>
                                            </span>
                                            <p class="mb-1 mt-3 font-medium">Total Courses</p>
                                            <h4 class="font-semibold">2,467 </h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px] mt-2">Increased By 
                                                <span class="mb-0 badge bg-success/10 text-success rounded-full">
                                                        +16.1%
                                                    <i class="ri-arrow-up-line text-[10px] align-middle ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box course-main overflow-hidden cover-image bg-cover bg-primary dark:!bg-primary">
                                <div class="box-body p-6">
                                    <div class="grid grid-cols-12 justify-between">
                                        <div class="xl:col-span-8 md:col-span-8 col-span-12 pe-3">
                                            <h5 class="font-medium mb-2 text-white">Welcome Back, Henry &#128075; </h5>
                                            <span class="text-white block mb-2 opacity-70">You've reached 90% of your goal this month! Keep going and boost your skills with courses.</span>
                                            <button type="button" class="ti-btn bg-primarytint1color text-white btn-w-md !mt-2 !mb-0">View Courses</button>
                                        </div>
                                        <div class="xl:col-span-3 md:col-span-4 col-span-12 text-end px-3">
                                            <img src="{{asset('build/assets/images/media/media-81.png')}}" alt="" class="img-fluid banner10-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-1 -->

                    <!-- Start::Row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Upcoming Tasks
                                    </div>
                                    <div>
                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-light">View All</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none mb-0 Upcoming-courses-schedule">
                                        <li class="list-item">
                                            <div class="sm:flex items-center justify-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="font-medium mb-sm-1 mb-0">Web Design</p>
                                                    <span class="text-textmuted dark:text-textmuted/50">10-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content flex items-center text-textmuted dark:text-textmuted/50 text-xs">
                                                    <span><i class="fe fe-clock me-1 text-xs"></i></span>
                                                    <span>09:00am</span>
                                                    <span class="mx-2 text-textmuted dark:text-textmuted/50">-</span>
                                                    <span>12:00pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="sm:flex items-center justify-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="font-medium mb-sm-1 mb-0">Java Programming</p>
                                                    <span class="text-textmuted dark:text-textmuted/50">15-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content flex items-center text-textmuted dark:text-textmuted/50 text-xs">
                                                    <span><i class="fe fe-clock me-1 text-xs"></i></span>
                                                    <span>12:00pm</span>
                                                    <span class="mx-2 text-textmuted dark:text-textmuted/50">-</span>
                                                    <span>13:20pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="sm:flex items-center justify-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="font-medium mb-sm-1 mb-0">Meeting <a href="javascript:void(0);" class="text-primary">Yuhan Sev</a></p>
                                                    <span class="text-textmuted dark:text-textmuted/50">15-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content flex items-center text-textmuted dark:text-textmuted/50 text-xs">
                                                    <span><i class="fe fe-clock me-1 text-xs"></i></span>
                                                    <span>16:00pm</span>
                                                    <span class="mx-2 text-textmuted dark:text-textmuted/50">-</span>
                                                    <span>17:20pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="sm:flex items-center justify-between flex-wrap gap-1">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="font-medium mb-sm-1 mb-0">UX/UI</p>
                                                    <span class="text-textmuted dark:text-textmuted/50">20-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content flex items-center text-textmuted dark:text-textmuted/50 text-xs">
                                                    <span><i class="fe fe-clock me-1 text-xs"></i></span>
                                                    <span>18:15pm</span>
                                                    <span class="mx-2 text-textmuted dark:text-textmuted/50">-</span>
                                                    <span>19:00pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="sm:flex items-center justify-between flex-wrap gap-1">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="font-medium mb-sm-1 mb-0">React js</p>
                                                    <span class="text-textmuted dark:text-textmuted/50">20-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content flex items-center text-textmuted dark:text-textmuted/50 text-xs">
                                                    <span><i class="fe fe-clock me-1 text-xs"></i></span>
                                                    <span>18:15pm</span>
                                                    <span class="mx-2 text-textmuted dark:text-textmuted/50">-</span>
                                                    <span>19:00pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="sm:flex items-center justify-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="font-medium mb-sm-1 mb-0">Java Programming</p>
                                                    <span class="text-textmuted dark:text-textmuted/50">15-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content flex items-center text-textmuted dark:text-textmuted/50 text-xs">
                                                    <span><i class="fe fe-clock me-1 text-xs"></i></span>
                                                    <span>12:00pm</span>
                                                    <span class="mx-2 text-textmuted dark:text-textmuted/50">-</span>
                                                    <span>13:20pm</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Revenue Statistics</div>
                                    <div class="flex gap-2">
                                        <div class="ti-btn ti-btn-outline-light border ti-btn-full ti-btn-sm">Today</div>
                                        <div class="ti-btn ti-btn-outline-light border ti-btn-full ti-btn-sm">Weakly</div>
                                        <div class="ti-btn ti-btn-light border ti-btn-full ti-btn-sm">Yearly</div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="earning"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Top Categories
                                    </div>
                                    <div>
                                        <button type="button" class="ti-btn ti-btn-sm bg-light">View All</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-col list-group top-categories">
                                        <li class="p-0 ti-list-group-item border-0 text-defaulttextcolor">
                                            <a href="javascript:void(0);" class="w-full">
                                                <div class="flex items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-primary/10 !text-primary p-4"><i class="ri-dashboard-line text-xl leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="text-[14px] font-medium mb-0">UI / UX Design</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">10,000 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-[14px] text-defaulttextcolor font-medium">$199.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 ti-list-group-item border-0 text-defaulttextcolor">
                                            <a href="javascript:void(0);" class="w-full">
                                                <div class="flex items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-primarytint1color/10 !text-primarytint1color p-4"><i class="ri-advertisement-line text-xl leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="text-[14px] font-medium mb-0">Digital Marketing</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">90 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-[14px] text-defaulttextcolor font-medium">$599.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 ti-list-group-item border-0 text-defaulttextcolor">
                                            <a href="javascript:void(0);" class="w-full">
                                                <div class="flex items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-primarytint2color/10 !text-primarytint2color p-4"><i class="ri-code-box-line text-xl leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="text-[14px] font-medium mb-0">Web Development</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">250 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-[14px] text-defaulttextcolor font-medium">$299.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 ti-list-group-item border-0 text-defaulttextcolor">
                                            <a href="javascript:void(0);" class="w-full">
                                                <div class="flex items-center">
                                                    <span class="avatar rounded-sm avatar-md  bg-primarytint3color/10 !text-primarytint3color p-4"><i class="ri-bar-chart-2-line text-xl leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="text-[14px] font-medium mb-0">Stocks &amp; Trading</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">100 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-[14px] text-defaulttextcolor font-medium">$999.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 ti-list-group-item border-0 text-defaulttextcolor">
                                            <a href="javascript:void(0);" class="w-full">
                                                <div class="flex items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-secondary/10 !text-secondary p-4"><i class="ri-angularjs-line text-xl leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="text-[14px] font-medium mb-0">Angular Course</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">300 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-[14px] text-defaulttextcolor font-medium">$399.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 !mb-0 ti-list-group-item border-0 text-defaulttextcolor">
                                            <a href="javascript:void(0);" class="w-full">
                                                <div class="flex items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-info/10 !text-info p-4"><i class="ri-database-2-line text-xl leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="text-[14px] font-medium mb-0">Full Stack Course</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">500 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-[14px] text-defaulttextcolor font-medium">$199.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-2 -->

                    <!-- Start::Row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Top Courses
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-icons ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                            <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-col list-none mb-0 popular-course">
                                        <li class="text-textmuted dark:text-textmuted/50 mb-4">
                                            <div class="sm:flex items-start w-full">
                                                <a href="javascript:void(0);" class="pe-4 inline-block sm:mb-0 mb-2">
                                                <img src="{{asset('build/assets/images/media/media-13.jpg')}}" alt="img" class="avatar avatar-xl rounded-2">
                                                </a>
                                                <div class="grow font-medium">
                                                    <div class="flex items-center" title="Instructor">
                                                        <a href="javascript:void(0);" class="pe-2">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img" class="avatar avatar-xs rounded-full">
                                                        </a>
                                                        <a href="javascript:void(0);" class="grow text-defaulttextcolor op-8">Natasha
                                                        Sil</a>
                                                        <a href="javascript:void(0);" class=" block mb-1 font-normal badge bg-primarytint3color/10 text-primarytint3color" title="Category"><i class="ri-price-tag-3-line "></i> UI/UX</a>
                                                    </div>
                                                    <a href="javascript:void(0);" class=" block mb-2 font-medium">
                                                    Mastering CSS Pseudo-classes: From Basics to Advanced Techniques.</a>
                                                    <div class="md:flex justify-between items-center">
                                                    <div class="min-w-fit text-xs text-textmuted dark:text-textmuted/50 op-8 d-inline-flex">
                                                        <span class="me-2 my-auto">
                                                        <i class="ri-eye-line"></i> 
                                                            2,189 Views
                                                        </span> 
                                                    </div>
                                                    <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                        <span>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-half-fill text-warning"></i>(4.2)
                                                        </span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" text-textmuted dark:text-textmuted/50 mb-4">
                                            <div class="sm:flex items-start w-full">
                                                <a href="javascript:void(0);" class="pe-4 inline-block sm:mb-0 mb-2">
                                                <img src="{{asset('build/assets/images/media/media-14.jpg')}}" alt="img" class="avatar avatar-xl rounded-2">
                                                </a>
                                                <div class="grow font-medium">
                                                    <div class="flex items-center" title="Instructor">
                                                        <a href="javascript:void(0);" class="pe-2">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img" class="avatar avatar-xs rounded-full">
                                                        </a>
                                                        <a href="javascript:void(0);" class="grow text-defaulttextcolor op-8">Catalina Keira
                                                        </a>
                                                        <a href="javascript:void(0);" class=" block mb-1 font-normal badge bg-primarytint2color/10 text-primarytint2color" title="Category"><i class="ri-price-tag-3-line "></i> Marketing</a>
                                                    </div>
                                                    <a href="javascript:void(0);" class=" block mb-2 font-medium">
                                                        Marketing Essentials: Understanding its Role in Business Success.</a>
                                                    <div class="md:flex justify-between items-center">
                                                    <div class="min-w-fit text-xs text-textmuted dark:text-textmuted/50 op-8 d-inline-flex">
                                                        <span class="me-2 my-auto">
                                                        <i class="ri-eye-line"></i> 
                                                        1,116 Views
                                                        </span> 
                                                    </div>
                                                    <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                        <span>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-half-fill text-warning"></i>(4.3)
                                                        </span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" text-textmuted dark:text-textmuted/50 mb-2">
                                        <div class="sm:flex items-start w-full">
                                            <a href="javascript:void(0);" class="pe-4 inline-block sm:mb-0 mb-2">
                                            <img src="{{asset('build/assets/images/media/media-12.jpg')}}" alt="img" class="avatar avatar-xl rounded-2">
                                            </a>
                                            <div class="grow font-medium">
                                                <div class="flex items-center" title="Instructor">
                                                    <a href="javascript:void(0);" class="pe-2">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img" class="avatar avatar-xs rounded-full">
                                                    </a>
                                                    <a href="javascript:void(0);" class="grow text-defaulttextcolor op-8">Telsko 
                                                        William</a>
                                                    <a href="javascript:void(0);" class=" block mb-1 font-normal badge bg-primarytint1color/10 text-primarytint1color" title="Category"><i class="ri-price-tag-3-line "></i> Python</a>
                                                </div>
                                                <a href="javascript:void(0);" class=" block mb-2 font-medium">
                                                    Python Mastery: Shallow Copy vs. Deep Copy and Practical Techniques.</a>
                                                <div class="md:flex justify-between items-center">
                                                <div class="min-w-fit text-xs text-textmuted dark:text-textmuted/50 op-8 d-inline-flex">
                                                    <span class="me-2 my-auto">
                                                    <i class="ri-eye-line"></i> 
                                                    2,245 Views
                                                    </span> 
                                                </div>
                                                <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                    <span>
                                                        <i class="ri-star-fill text-warning"></i>
                                                        <i class="ri-star-fill text-warning"></i>
                                                        <i class="ri-star-fill text-warning"></i>
                                                        <i class="ri-star-fill text-warning"></i>
                                                        <i class="ri-star-half-fill text-warning"></i>(4.2)
                                                    </span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    <div class="ti-btn ti-btn-soft-primary mt-3 grid"> View All Courses</div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-7 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Latest Courses
                                    </div>
                                    <div>
                                        <button type="button" class="ti-btn ti-btn-sm bg-light">View All</button>
                                    </div>
                                </div>
                                <div class="box-body pt-1">
                                    <div class="swiper crypto-swiper swiper-basic">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="box mb-0 border border-defaultborder shadow-none dark:border-defaultborder/10">
                                                    <div class="box-body p-0">
                                                        <div class="relative">
                                                            <img src="{{asset('build/assets/images/media/media-78.png')}}" alt="" class="img-fluid card-img-top">
                                                            <div class="p-4">
                                                                <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="flex gap-1 justify-between items-center flex-wrap">
                                                                    <div>
                                                                        <h6 class="font-medium text-[14px] mb-0">Coding Classes</h6>
                                                                        <a href="javascript:void(0)" class="text-primary text-xs">Read More</a>
                                                                    </div>
                                                                    <h6 class="font-semibold mb-0">$644</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box mb-0 border border-defaultborder shadow-none dark:border-defaultborder/10">
                                                    <div class="box-body p-0">
                                                        <div class="">
                                                            <img src="{{asset('build/assets/images/media/media-76.png')}}" alt="" class="img-fluid card-img-top bg-secondary/10">
                                                            <div class="p-4">
                                                                <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="flex gap-1 justify-between items-center flex-wrap">
                                                                    <div>
                                                                        <h6 class="font-medium text-[14px] mb-0">Data Science</h6>
                                                                        <a href="javascript:void(0)" class="text-primary text-xs">Read More</a>
                                                                    </div>
                                                                    <h6 class="font-semibold mb-0">$657</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box mb-0 border border-defaultborder shadow-none dark:border-defaultborder/10">
                                                    <div class="box-body p-0">
                                                        <div class="">
                                                            <img src="{{asset('build/assets/images/media/media-79.png')}}" alt="" class="img-fluid card-img-top">
                                                            <div class="p-4">
                                                                <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="flex gap-1 justify-between items-center flex-wrap">
                                                                    <div>
                                                                        <h6 class="font-medium text-[14px] mb-0">Marketing</h6>
                                                                        <a href="javascript:void(0)" class="text-primary text-xs">Read More</a>
                                                                    </div>
                                                                    <h6 class="font-semibold mb-0">$457</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box mb-0 border border-defaultborder shadow-none dark:border-defaultborder/10">
                                                    <div class="box-body p-0">
                                                        <div class="">
                                                            <img src="{{asset('build/assets/images/media/media-78.png')}}" alt="" class="img-fluid card-img-top">
                                                            <div class="p-4">
                                                                <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="flex gap-1 justify-between items-center flex-wrap">
                                                                    <div>
                                                                        <h6 class="font-medium text-[14px] mb-0">Java</h6>
                                                                        <a href="javascript:void(0)" class="text-primary text-xs">Read More</a>
                                                                    </div>
                                                                    <h6 class="font-semibold mb-0">$778</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box mb-0 border border-defaultborder shadow-none dark:border-defaultborder/10">
                                                    <div class="box-body p-0">
                                                        <div class="relative">
                                                            <img src="{{asset('build/assets/images/media/media-78.png')}}" alt="" class="img-fluid card-img-top">
                                                            <div class="p-4">
                                                                <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="flex gap-1 justify-between items-center flex-wrap">
                                                                    <div>
                                                                        <h6 class="font-medium text-[14px] mb-0">Coding Classes</h6>
                                                                        <a href="javascript:void(0)" class="text-primary text-xs">Read More</a>
                                                                    </div>
                                                                    <h6 class="font-semibold mb-0">$644</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box mb-0 border border-defaultborder shadow-none dark:border-defaultborder/10">
                                                    <div class="box-body p-0">
                                                        <div class="">
                                                            <img src="{{asset('build/assets/images/media/media-76.png')}}" alt="" class="img-fluid card-img-top bg-secondary/10">
                                                            <div class="p-4">
                                                                <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="flex gap-1 justify-between items-center flex-wrap">
                                                                    <div>
                                                                        <h6 class="font-medium text-[14px] mb-0">Data Science</h6>
                                                                        <a href="javascript:void(0)" class="text-primary text-xs">Read More</a>
                                                                    </div>
                                                                    <h6 class="font-semibold mb-0">$657</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box mb-0 border border-defaultborder shadow-none dark:border-defaultborder/10">
                                                    <div class="box-body p-0">
                                                        <div class="">
                                                            <img src="{{asset('build/assets/images/media/media-79.png')}}" alt="" class="img-fluid card-img-top">
                                                            <div class="p-4">
                                                                <div class="min-w-fit text-[11px] text-defaulttextcolor d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="flex gap-1 justify-between items-center flex-wrap">
                                                                    <div>
                                                                        <h6 class="font-medium text-[14px] mb-0">Marketing</h6>
                                                                        <a href="javascript:void(0)" class="text-primary text-xs">Read More</a>
                                                                    </div>
                                                                    <h6 class="font-semibold mb-0">$457</h6>
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
                    </div>
                    <!-- End::Row-3 -->

                    <!-- Start::Row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Course List
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="ti-dropdown hs-dropdown m-1">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-sm ti-dropdown-toggle hs-dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive overflow-auto table-bordered-default">
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Classes</th>
                                                    <th scope="col">Last Updated</th>
                                                    <th scope="col">Instructor</th>
                                                    <th scope="col">Students</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="text-[14px] font-medium mb-1">CSS Zero to Hero Master Class</p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">UI/UX Designing</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        51
                                                    </td>
                                                    <td>
                                                        22-06-2023
                                                    </td>
                                                    <td>
                                                        Burak Oin
                                                    </td>
                                                    <td>
                                                        252
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="{{asset('build/assets/images/media/media-4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="text-[14px] font-medium mb-1">Digital Marketing Course From Scratch</p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Marketing</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        115
                                                    </td>
                                                    <td>
                                                        21-06-2023
                                                    </td>
                                                    <td>
                                                        Stuart Little
                                                    </td>
                                                    <td>
                                                        1,189
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="text-[14px] font-medium mb-1">Digital Marketing Course From Scratch</p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Programming</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        30
                                                    </td>
                                                    <td>
                                                        15-06-2023
                                                    </td>
                                                    <td>
                                                        Boran Ray
                                                    </td>
                                                    <td>
                                                        3,365
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="{{asset('build/assets/images/media/media-15.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="text-[14px] font-medium mb-1">Master Linear Algebra Medium Level</p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Mathematics</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        90
                                                    </td>
                                                    <td>
                                                        11-06-2023
                                                    </td>
                                                    <td>
                                                        Arya Neo
                                                    </td>
                                                    <td>
                                                        773
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="{{asset('build/assets/images/media/media-23.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="text-[14px] font-medium mb-1">Learn How to Trade &amp; Invest</p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Stocks &amp; Trading</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        161
                                                    </td>
                                                    <td>
                                                        10-06-2023
                                                    </td>
                                                    <td>
                                                        Sia Niu
                                                    </td>
                                                    <td>
                                                        51
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary">
                                                                <i
                                                                    class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary">
                                                                <i
                                                                    class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger">
                                                                <i
                                                                class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex flex-wrap items-center mt-3">
                                        <div>
                                            Showing 6 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="ti-pagination mb-0 flex-wrap">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            Prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item "><a class="page-link active"
                                                            href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    
                                                    <li class="page-item">
                                                        <a class="page-link !text-primary" href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Top Professors
                                    </div>
                                    <div>
                                        <button type="button" class="ti-btn ti-btn-sm bg-light">View All</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none courses-instructors mb-0">
                                        <li>
                                            <div class="flex">
                                                <div class="flex flex-auto items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">John Henry</span>
                                                        <span class="text-textmuted dark:text-textmuted/50">M.Tech</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block font-medium">321 Classes</span>
                                                    <span class="text-textmuted dark:text-textmuted/50">Digital Marketing</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <div class="flex flex-auto items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">Mortal Yun</span>
                                                        <span class="text-textmuted dark:text-textmuted/50">P.H.D</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block font-medium">25 Classes</span>
                                                    <span class="text-textmuted dark:text-textmuted/50">Stocks &amp; Trading</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <div class="flex flex-auto items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">Trex Con</span>
                                                        <span class="text-textmuted dark:text-textmuted/50">MBBS</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block font-medium">39 Classes</span>
                                                    <span class="text-textmuted dark:text-textmuted/50">Science</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <div class="flex flex-auto items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">Saiu Sarah</span>
                                                        <span class="text-textmuted dark:text-textmuted/50">P.H.D</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block font-medium">11 Classes</span>
                                                    <span class="text-textmuted dark:text-textmuted/50">Science</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <div class="flex flex-auto items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">Ion Hau</span>
                                                        <span class="text-textmuted dark:text-textmuted/50">M.Tech</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block font-medium">124 Classes</span>
                                                    <span class="text-textmuted dark:text-textmuted/50">Web Development</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <div class="flex flex-auto items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">Roman Killon</span>
                                                        <span class="text-textmuted dark:text-textmuted/50">M.Tech</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block font-medium">1263 Classes</span>
                                                    <span class="text-textmuted dark:text-textmuted/50">Ui / Ux Designing</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <div class="flex flex-auto items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">Suzika Stallone</span>
                                                        <span class="text-textmuted dark:text-textmuted/50">Phd</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block font-medium">110 Classes</span>
                                                    <span class="text-textmuted dark:text-textmuted/50">Machine Leadning</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <div class="flex flex-auto items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">Robert Lewis</span>
                                                        <span class="text-textmuted dark:text-textmuted/50">Phd</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block font-medium">150 Classes</span>
                                                    <span class="text-textmuted dark:text-textmuted/50">Java Development</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-4 -->

                </div>
            </div> 
            <!-- End::app-content -->

@endsection

@section('scripts')
        
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Courses Dashboard --> 
        @vite('resources/assets/js/courses-dashboard.js')
        
     
@endsection