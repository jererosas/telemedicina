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
                                            Dashboards
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Podcast</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Podcast</h1>
                        </div>
                        <div class="ti-btn-list">
                            <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary text-white-full btn-wave me-0 !border-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- End::page-header -->

                    <!-- Start Row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="box overflow-hidden podcast-banner !rounded-[0.75rem]">
                                <div class="box-body p-12">
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="xl:col-span-8 col-span-12 my-auto pe-3">
                                            <h5 class="font-semibold text-white mb-2 leading-[1.5rem]">
                                                Mastering Music Distribution for Your Podcast
                                            </h5>
                                            <span class="block text-white op-8 fw-meidum mb-4 pb-1">Unlock the potential of various music distribution channels to amplify your podcast’s sound. Embrace new possibilities.</span>
                                            <div class="ti-btn-list">
                                                <button type="button" class="ti-btn bg-primary text-white"><i class="ri-headphone-line me-2"></i> Listen Now</button>
                                                <button type="button" class="ti-btn bg-primarytint1color text-white"><i class="ri-headphone-line me-2"></i> 18.5k Playlist</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Popular Artists
                                    </div>
                                    <button class="ti-btn bg-primary text-white ti-btn-sm" type="button">View All</button>
                                </div>
                                <div class="box-body">
                                    <div class="list-none podcast-recently-played-list grid grid-cols-12 sm:gap-x-6">
                                        <div class="xl:col-span-3 sm:col-span-6 col-span-12 mb-3 xl:mb-0">
                                            <div class="bg-light items-center gap-2 p-4 text-center rounded-sm">
                                                <div class="leading-none mb-3">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/podcast/1.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="font-semibold">Technos Talk</a>
                                                    <span class="block text-[13px] text-textmuted dark:text-textmuted/50">John Samitrin</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 sm:col-span-6 col-span-12 mb-3 xl:mb-0">
                                            <div class="bg-light items-center gap-2 p-4 text-center rounded-sm">
                                                <div class="leading-none mb-3">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/podcast/2.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="font-semibold">Science Explorers</a>
                                                    <span class="block text-[13px] text-textmuted dark:text-textmuted/50">Emily Johnson</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 sm:col-span-6 col-span-12 mb-3 xl:mb-0">
                                            <div class="bg-light items-center gap-2 p-4 text-center rounded-sm">
                                                <div class="leading-none mb-3">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/podcast/3.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="font-semibold">Business Insights</a>
                                                    <span class="block text-[13px] text-textmuted dark:text-textmuted/50">David Williams</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 sm:col-span-6 col-span-12">
                                            <div class="bg-light items-center gap-2 p-4 text-center rounded-sm">
                                                <div class="leading-none mb-3">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/podcast/4.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="font-semibold">Entertainment</a>
                                                    <span class="block text-[13px] text-textmuted dark:text-textmuted/50">Michael Brown</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-1 -->

                    <!-- Start::Row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Categories
                                    </div>
                                    <button class="ti-btn bg-primary text-white ti-btn-sm" type="button">View All</button>
                                </div>
                                <div class="box-body">
                                    <div class="grid xxl:grid-cols-8 xl:grid-cols-4 lg:grid-cols-4 md:grid-cols sm:grid-cols-2 grid-cols-1 gap-x-6 personal-favourite-contacts mb-0 gap-2">
                                        <div class="col-span-1">
                                            <div class="flex items-center bg-light rounded-sm p-2 flex-wrap align-items-center gap-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-primary/10 !text-primary p-2">
                                                        <i class="ri-macbook-line text-lg leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-0">Technology</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs mb-0">250</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex items-center bg-light rounded-sm p-2 flex-wrap align-items-center gap-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-primarytint1color/10 !text-primarytint1color p-2">
                                                        <i class="ri-briefcase-2-line text-lg leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-0">Business</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex items-center bg-light rounded-sm p-2 flex-wrap align-items-center gap-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-primarytint2color/10 !text-primarytint2color p-2">
                                                        <i class="ri-heart-pulse-line text-lg leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-0">Health</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex items-center bg-light rounded-sm p-2 flex-wrap align-items-center gap-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-primarytint3color/10 !text-primarytint3color p-2">
                                                        <i class="ri-football-line text-lg leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-0">Sports</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex items-center bg-light rounded-sm p-2 flex-wrap align-items-center gap-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-secondary/10 !text-secondary p-2">
                                                        <i class="ri-flask-line text-lg leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-0">Science</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex items-center bg-light rounded-sm p-2 flex-wrap align-items-center gap-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-warning/10 !text-warning p-2">
                                                        <i class="ri-book-line text-lg leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-0">Education</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex items-center bg-light rounded-sm p-2 flex-wrap align-items-center gap-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-info/10 !text-info p-2">
                                                        <i class="ri-disc-line text-lg leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-0">Music</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex items-center bg-light rounded-sm p-2 flex-wrap align-items-center gap-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-danger/10 !text-danger p-2">
                                                        <i class="ri-tv-line text-lg leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-0">Entertainment</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-2 -->

                    <!-- Start::Row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Most Popular 
                                    </div>
                                    <button class="ti-btn bg-light ti-btn-sm" type="button">View All</button>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4 mb-3">
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="flex items-center p-4 bg-light rounded-sm flex-wrap gap-2 sm:flex-nowrap">
                                                <img src="{{asset('build/assets/images/podcast/6.jpg')}}" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="font-semibold mb-0">Foodie Adventures</h6></a>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">By Chef Mia Johnson</span>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="ti-btn bg-light ti-btn-sm ti-btn-icon">
                                                                <i class="ri-more-2-fill text-textmuted dark:text-textmuted/50"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flex align-items-end justify-between gap-2 flex-wrap">
                                                        <button aria-label="button" type="button" class="ti-btn bg-primary text-white ti-btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="flex items-center gap-4 leading-none">
                                                            <span class="flex items-center gap-2 text-textmuted dark:text-textmuted/50 font-medium leading-none"><i class="ri-volume-up-line leading-none align-middle text-[14px]"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="flex items-center p-4 bg-light rounded-sm flex-wrap gap-2 sm:flex-nowrap">
                                                <img src="{{asset('build/assets/images/podcast/7.jpg')}}" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="font-semibold mb-0 break-words"> Environmental Insights</h6></a>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">By Dr. David Green</span>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="ti-btn bg-light ti-btn-sm ti-btn-icon">
                                                                <i class="ri-more-2-fill text-textmuted dark:text-textmuted/50"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flex align-items-end justify-between gap-2 flex-wrap">
                                                        <button aria-label="button" type="button" class="ti-btn bg-primary text-white ti-btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="flex items-center gap-4 leading-none">
                                                            <span class="flex items-center gap-2 text-textmuted dark:text-textmuted/50 font-medium leading-none"><i class="ri-volume-up-line leading-none align-middle text-[14px]"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="flex items-center p-4 bg-light rounded-sm flex-wrap gap-2 sm:flex-nowrap">
                                                <img src="{{asset('build/assets/images/podcast/7.jpg')}}" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="font-semibold mb-0">Travel Tales</h6></a>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">By Wanderlost Explorers</span>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="ti-btn bg-light ti-btn-sm ti-btn-icon">
                                                                <i class="ri-more-2-fill text-textmuted dark:text-textmuted/50"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flex align-items-end justify-between gap-2 flex-wrap">
                                                        <button aria-label="button" type="button" class="ti-btn bg-primary text-white ti-btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="flex items-center gap-4 leading-none">
                                                            <span class="flex items-center gap-2 text-textmuted dark:text-textmuted/50 font-medium leading-none"><i class="ri-volume-up-line leading-none align-middle text-[14px]"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4 mb-0">
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="flex items-center p-4 bg-light rounded-sm flex-wrap gap-2 sm:flex-nowrap">
                                                <img src="{{asset('build/assets/images/podcast/9.jpg')}}" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="font-semibold mb-0">True Crime Files</h6></a>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">By Detective John Smith</span>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="ti-btn bg-light ti-btn-sm ti-btn-icon">
                                                                <i class="ri-more-2-fill text-textmuted dark:text-textmuted/50"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flex align-items-end justify-between gap-2 flex-wrap">
                                                        <button aria-label="button" type="button" class="ti-btn bg-primary text-white ti-btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="flex items-center gap-4 leading-none">
                                                            <span class="flex items-center gap-2 text-textmuted dark:text-textmuted/50 font-medium leading-none"><i class="ri-volume-up-line leading-none align-middle text-[14px]"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="flex items-center p-4 bg-light rounded-sm flex-wrap gap-2 sm:flex-nowrap">
                                                <img src="{{asset('build/assets/images/podcast/8.jpg')}}" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="font-semibold mb-0">Science Explained</h6></a>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">Dr. Michael Lee</span>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="ti-btn bg-light ti-btn-sm ti-btn-icon">
                                                                <i class="ri-more-2-fill text-textmuted dark:text-textmuted/50"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flex align-items-end justify-between gap-2 flex-wrap">
                                                        <button aria-label="button" type="button" class="ti-btn bg-primary text-white ti-btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="flex items-center gap-4 leading-none">
                                                            <span class="flex items-center gap-2 text-textmuted dark:text-textmuted/50 font-medium leading-none"><i class="ri-volume-up-line leading-none align-middle text-[14px]"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="flex items-center p-4 bg-light rounded-sm flex-wrap gap-2 sm:flex-nowrap">
                                                <img src="{{asset('build/assets/images/podcast/8.jpg')}}" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="font-semibold mb-0">Business Buzz</h6></a>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">By  Emily Davis</span>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="ti-btn bg-light ti-btn-sm ti-btn-icon">
                                                                <i class="ri-more-2-fill text-textmuted dark:text-textmuted/50"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flex align-items-end justify-between gap-2 flex-wrap">
                                                        <button aria-label="button" type="button" class="ti-btn bg-primary text-white ti-btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="flex items-center gap-4 leading-none">
                                                            <span class="flex items-center gap-2 text-textmuted dark:text-textmuted/50 font-medium leading-none"><i class="ri-volume-up-line leading-none align-middle text-[14px]"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden bg-playing-image">
                                <div class="box-body p-6">
                                    <div class="text-center mb-6">
                                        <span class="mb-5 podcast-playing-now">
                                            <img src="{{asset('build/assets/images/podcast/1.jpg')}}" alt="" class="w-full !rounded-full shadow-sm">
                                        </span>
                                        <a href="javascript:void(0);"><h6 class="font-semibold mb-1 text-white">Mindful Living</h6></a>
                                        <span class="text-white op-8 text-xs">By Wanderlost Explorers</span>
                                    </div>
                                    <div class="flex gap-4 items-center mb-6 pb-6">
                                        <div class="text-xs text-white">12.25</div>
                                        <div class="progress progress-xs progress-custom progress-animate podcast-playing-progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 50%">
                                            </div>
                                        </div>
                                        <div class="text-xs text-white">23.45</div>
                                    </div>
                                    <div class="flex items-center justify-between flex-wrap gap-2 leading-none px-6 py-4 bg-black-transparent rounded-full">
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-repeat-2-line text-xl text-white"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-skip-back-line text-xl text-white"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-pause-line text-xl text-white"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-skip-forward-line text-xl text-white"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-shuffle-line text-xl text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-3 -->

                    <!-- Start::Row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Recently Played
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn bg-primary !m-0 text-white ti-btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col">Podcast Name</th>
                                                    <th scope="col">duration</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Latest Episode</th>
                                                    <th scope="col">Average Duration</th>
                                                    <th scope="col">Favourites</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar avatar-md"><img src="{{asset('build/assets/images/podcast/6.jpg')}}" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-semibold mb-0 flex items-center">Whimsical Wonders</a>
                                                                <span class="text-xs block text-textmuted dark:text-textmuted/50">Emily Watson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        150s
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary/10 text-secondary">Comedy</span>
                                                    </td>
                                                    <td>
                                                        #156: Silly Stories
                                                    </td>
                                                    <td>
                                                        45 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill text-[1rem] leading-none text-danger me-2"></i>Added
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light ti-btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical !text-[0.813rem]"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar avatar-md"><img src="{{asset('build/assets/images/podcast/7.jpg')}}" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-semibold mb-0 flex items-center">Mindful Meditations</a>
                                                                <span class="text-xs block text-textmuted dark:text-textmuted/50">Sarah Johnson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        1 min
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Culture</span>
                                                    </td>
                                                    <td>
                                                        #82: Deep Nonsense
                                                    </td>
                                                    <td>
                                                        30 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill text-[1rem] opacity-[0.2] leading-none text-textmuted dark:text-textmuted/50 me-2"></i>Add Now
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light ti-btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical  !text-[0.813rem]"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar avatar-md"><img src="{{asset('build/assets/images/podcast/8.jpg')}}" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-semibold mb-0 flex items-center">Deep Dive Dialogues</a>
                                                                <span class="text-xs block text-textmuted dark:text-textmuted/50">John Doe</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        2 min
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">Personal Journal</span>
                                                    </td>
                                                    <td>
                                                        #30: Life's Random Moments
                                                    </td>
                                                    <td>
                                                        60 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill text-[1rem] leading-none text-danger me-2"></i>Added
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light ti-btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical  !text-[0.813rem]"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar avatar-md"><img src="{{asset('build/assets/images/podcast/9.jpg')}}" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-semibold mb-0 flex items-center">Random Revelations</a>
                                                                <span class="text-xs block text-textmuted dark:text-textmuted/50">Sophia Brown</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        3 min
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">News and Politics</span>
                                                    </td>
                                                    <td>
                                                        #300: Current Affairs
                                                    </td>
                                                    <td>
                                                        20 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill text-[1rem] opacity-[0.2] leading-none text-textmuted dark:text-textmuted/50 me-2"></i>Add Now
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light ti-btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical  !text-[0.813rem]"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex gap-2">
                                                            <span class="avatar avatar-md"><img src="{{asset('build/assets/images/media/media-60.jpg')}}" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="font-semibold mb-0 flex items-center">Bite-sized Banter</a>
                                                                <span class="text-xs block text-textmuted dark:text-textmuted/50">Michael Smith</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        4 min
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">Food and Drink</span>
                                                    </td>
                                                    <td>
                                                        #45: Culinary Capers
                                                    </td>
                                                    <td>
                                                        50 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill text-[1rem] leading-none text-danger me-2"></i>Added
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="ti-dropdown hs-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light ti-btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical  !text-[0.813rem]"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center flex-wrap">
                                        <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i> </div>
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
                    </div>
                    <!-- End::Row-4 -->
                    
                </div>
            </div> 
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

@endsection