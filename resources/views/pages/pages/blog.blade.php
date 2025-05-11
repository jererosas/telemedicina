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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Blog</h1>
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
                    <!-- End::page-header -->

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="swiper swiper-basic !rounded-none">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/blog/1.jpg')}}" class="block w-full" alt="..."></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/blog/3.jpg')}}" class="block w-full" alt="..."></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/blog/2.jpg')}}" class="block w-full" alt="..."></div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="font-semibold"><a href="{{url('blog-details')}}">Melodic Mastery: A Deep Dive into Music Notes</a></h5>
                                        <p class="mb-3">Exploring the intricate symbols and structures that form the foundation of every melody.</p>
                                        <p class="mb-3">As musicologist Charles Seeger notes, “Music is a system of communication involving structured sounds produced by members of a community that communicate with other members”</p>
                                        <p class="mb-3">“Music” is one of the most difficult terms to define, partially because beliefs about music have changed dramatically over time just in Western culture alone.<a href="javascript:void(0);" class="font-medium text-primary ms-2 align-middle text-xs text-Augoration-underline inline-block">Read More</a></p>
                                        <div class="flex flex-wrap items-center justify-between">
                                            <div class="flex items-center">
                                                <div class="avatar avatar-md avatar-rounded me-2">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <p class="mb-0 font-medium">Justin Roy</p>
                                                    <p class="text-textmuted dark:text-textmuted/50 text-xs mb-0">26,Mar 2024 - 15:37</p>
                                                </div>
                                            </div>
                                            <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                                <i class="ri-heart-line text-danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-7 col-span-12">
                                    <div class="box">
                                        <div class="grid grid-cols-12 gap-x-0">
                                            <div class="xxl:col-span-8 md:col-span-10 sm:col-span-10 col-span-12">
                                                <div class="box-body">
                                                    <h5 class="font-semibold">
                                                        <a href="javascript:void(0);">Listening: Finding Happiness in Music</a>
                                                    </h5>
                                                    <span class="block mb-3">
                                                        Different genres and melodies can evoke joy, reduce stress, and create lasting memories. <a href="javascript:void(0);" class="font-medium text-primary ms-2 align-middle text-xs text-Augoration-underline inline-block">
                                                            Read More
                                                        </a>
                                                    </span>
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-start flex-wrap">
                                                            <div class="avatar avatar-md avatar-rounded me-2">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="" class="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Nicolas Noor</p>
                                                                <div class="text-textmuted dark:text-textmuted/50 text-xs mb-0">20,Aug 2024 - 16:32</div>
                                                            </div>
                                                        </div>
                                                        <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                                            <i class="ri-heart-line text-danger"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-4 md:col-span-2 sm:col-span-2 col-span-12">
                                                <img src="{{asset('build/assets/images/media/blog/4.jpg')}}" class="img-fluid !rounded-tr-md !rounded-br-md h-full w-full" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="grid grid-cols-12 gap-x-6 g-0 justify-center">
                                            <div class="sm:col-span-12 col-span-12">
                                                <div class="box-body">
                                                    <h5 class="font-semibold">
                                                        <a href="javascript:void(0);">Music for the Soul: Enhancing Your Life Through Sound</a>
                                                    </h5>
                                                    <span class="block mb-3">
                                                        Learn how to create sacred spaces for musical reflection, find solace in times of hardship, and cultivate mindfulness through. <a href="javascript:void(0);" class="font-medium text-primary ms-2 align-middle text-xs text-Augoration-underline inline-block">
                                                            Read More
                                                        </a>
                                                    </span>
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="avatar avatar-md avatar-rounded me-2">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Sissera William</p>
                                                                <div class="text-textmuted dark:text-textmuted/50 text-xs mb-0">25,Aug 2024 - 04:25</div>
                                                            </div>
                                                        </div>
                                                        <div class="avatar avatar-sm bg-danger/10 avatar-rounded ms-auto">
                                                            <i class="ri-heart-fill text-danger"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-12 col-span-12 text-center">
                                                <div class="box-body pt-1">
                                                    <img src="{{asset('build/assets/images/media/blog/9.jpg')}}" class="img-fluid rounded-md w-full" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-5 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Categories :
                                            </div>
                                            <a href="javascript:void(0);" class="ti-btn bg-light btn-wave ti-btn-sm text-textmuted dark:text-textmuted/50 waves-effect waves-light">All<i class="ti ti-arrow-narrow-right ms-1"></i></a>
                                        </div>
                                        <div class="box-body p-0">
                                            <ul class="ti-list-group list-group-flush list-style !border-0">
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <span class="font-medium"><i class="ri-leaf-fill text-[14px] p-1 rounded-md me-2 inline-block align-middle leading-none bg-primary/10 text-primary"></i>Nature Life</span>
                                                        <span class="badge bg-primary/10 text-primary">12</span>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <span class="font-medium"><i class="ri-flight-takeoff-fill text-[14px] p-1 rounded-md me-2 inline-block align-middle leading-none bg-primarytint1color/10 text-primarytint1color"></i>Tourism & Trips </span>
                                                        <span class="badge bg-primary/10 text-primary">36</span>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <span class="font-medium"><i class="ri-global-fill text-[14px] p-1 rounded-md me-2 inline-block align-middle leading-none bg-primarytint2color/10 text-primarytint2color"></i>Technology</span>
                                                        <span class="badge bg-primary/10 text-primary">45</span>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <span class="font-medium"><i class="ri-cloud-fill p-1 rounded-md me-2 inline-block align-middle leading-none bg-primarytint3color/10 text-primarytint3color"></i>Data Networking</span>
                                                        <span class="badge bg-primary/10 text-primary">124</span>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <span class="font-medium"><i class="ri-home-wifi-fill p-1 rounded-md me-2 inline-block align-middle leading-none bg-info/10 text-info"></i>Modern Living</span>
                                                        <span class="badge bg-primary/10 text-primary">16</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box overflow-hidden">
                                        <div class="box-header flex items-center justify-between">
                                            <div class="box-title">
                                                Related Blogs:
                                            </div>
                                            <div>
                                                <span class="badge bg-primary/10 text-primary rounded-full">15</span>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <ul class="ti-list-group list-group-flush !border-t-0 !rounded-none">
                                                <li class="ti-list-group-item border-b-0">
                                                    <div class="flex flew-wrap truncate items-center gap-2">
                                                        <span class="avatar avatar-xl flex-shrink-0 me-1">
                                                            <img src="{{asset('build/assets/images/media/blog/5.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-auto text-wrap">
                                                            <a href="javascript:void(0);" class="text-[14px] font-medium mb-0">Jack Diamond</a>
                                                            <p class="mb-1 popular-blog-content truncate text-textmuted dark:text-textmuted/50">
                                                                To generate....
                                                            </p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-[10px]">25,Mar 2024 - 22:30</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item border-b-0">
                                                    <div class="flex flew-wrap truncate items-center gap-2">
                                                        <span class="avatar avatar-xl flex-shrink-0 me-1">
                                                            <img src="{{asset('build/assets/images/media/blog/6.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-auto text-wrap">
                                                            <a href="javascript:void(0);" class="text-[14px] font-medium mb-0">Jack Diamond</a>
                                                            <p class="mb-1 popular-blog-content truncate text-textmuted dark:text-textmuted/50">
                                                                To generate....
                                                            </p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-[10px]">25,Mar 2024 - 22:30</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item border-b-0">
                                                    <div class="flex flew-wrap truncate items-center gap-2">
                                                        <span class="avatar avatar-xl flex-shrink-0 me-1">
                                                            <img src="{{asset('build/assets/images/media/blog/8.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-auto text-wrap">
                                                            <a href="javascript:void(0);" class="text-[14px] font-medium mb-0">Jack Diamond</a>
                                                            <p class="mb-1 popular-blog-content truncate text-textmuted dark:text-textmuted/50">
                                                                To generate....
                                                            </p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-[10px]">25,Mar 2024 - 22:30</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item border-b-0">
                                                    <div class="flex flew-wrap truncate items-center gap-2">
                                                        <span class="avatar avatar-xl flex-shrink-0 me-1">
                                                            <img src="{{asset('build/assets/images/media/blog/9.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-auto text-wrap">
                                                            <a href="javascript:void(0);" class="text-[14px] font-medium mb-0">Jack Diamond</a>
                                                            <p class="mb-1 popular-blog-content truncate text-textmuted dark:text-textmuted/50">
                                                                To generate....
                                                            </p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-[10px]">25,Mar 2024 - 22:30</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="p-4 pt-2 mt-1">
                                                <button class="ti-btn mx-auto ti-btn-primary ti-btn-loader text-center justify-center w-full">
                                                    <span class="me-2">Load More</span>
                                                    <span class="loading"><i class="ri-loader-4-line text-[1rem]"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 lg:col-span-12 md:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header flex items-center justify-between">
                                    <div class="box-title">
                                        Featured Blogs
                                    </div>
                                    <div>
                                        <span class="badge bg-primary/10 text-primary">23 Blogs</span>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group list-group-flush !rounded-none !border-t-0">
                                        <li class="ti-list-group-item">
                                            <div class="flex flex-wrap items-center gap-4">
                                                <span class="avatar avatar-lg">
                                                    <img src="{{asset('build/assets/images/media/blog/14.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);" class="text-[14px] font-medium mb-1">Jack Diamond</a>
                                                    <p class="mb-0 mt-1 popular-blog-content truncate">
                                                        To generate Lorem Ipsum which looks reasonable
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex flex-wrap items-center gap-4">
                                                <span class="avatar avatar-lg">
                                                    <img src="{{asset('build/assets/images/media/blog/15.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);" class="text-[14px] font-medium mb-0">Dhruva Gen</a>
                                                    <p class="mb-0 mt-1 popular-blog-content truncate">
                                                        All the Lorem Ipsum generators on the Internet
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex flex-wrap items-center gap-4">
                                                <span class="avatar avatar-lg">
                                                    <img src="{{asset('build/assets/images/media/blog/16.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);" class="text-[14px] font-medium mb-0">Henry Milo</a>
                                                    <p class="mb-0 mt-1 popular-blog-content truncate">
                                                        Lorem Ipsum is therefore always free from repetition, injected humour
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex flex-wrap items-center gap-4">
                                                <span class="avatar avatar-lg">
                                                    <img src="{{asset('build/assets/images/media/blog/17.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);" class="text-[14px] font-medium mb-0">Peter Paul</a>
                                                    <p class="mb-0 mt-1 popular-blog-content truncate">
                                                        orem Ipsum is not simply random text. It has roots in a piece of classical
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item border-b-0">
                                            <div class="flex flex-wrap items-center gap-4">
                                                <span class="avatar avatar-lg">
                                                    <img src="{{asset('build/assets/images/media/blog/7.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);" class="text-[14px] font-medium mb-0">Fahad Rafi</a>
                                                    <p class="mb-0 mt-1 popular-blog-content truncate">
                                                        Electronic typesetting, remaining essentially unchanged.
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="p-4 pt-2">
                                        <button class="ti-btn mx-auto ti-btn-soft-primary ti-btn-sm ti-btn-loader text-center justify-center w-full ti-btn-sm !mb-0">
                                            <span class="me-2">Load More</span>
                                            <span class="loading"><i class="ri-loader-4-line text-[1rem]"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-8 lg:col-span-12 md:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                    <div class="box">
                                            <a href="javascript:void(0);" class="p-4 pb-0 rounded-5">
                                                <img src="{{asset('build/assets/images/media/blog/15.jpg')}}" class="rounded-3 card-img-top" alt="...">
                                            </a>
                                        <div class="box-body">
                                            <a href="{{url('blog-details')}}" class="h5 font-semibold mb-2 block lh-base">Beats to Bliss</a>
                                            <p class="mb-4">Experiencing the Euphoria of Music<a href="javascript:void(0);" class="font-medium text-primary ms-2 align-middle text-xs text-Augoration-underline inline-block">Read More ?</a></p>
                                            <div class="flex flex-wrap items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="avatar avatar-md avatar-rounded me-2">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-medium">Tilly</p>
                                                        <span class="text-textmuted  dark:text-textmuted/50 text-xs mb-0">19,Apr 2024 - 15:45</span>
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                                    <i class="ri-heart-line text-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                    <div class="box">
                                            <a href="javascript:void(0);" class="p-4 pb-0 rounded-5">
                                                <img src="{{asset('build/assets/images/media/blog/8.jpg')}}" class="rounded-3 card-img-top" alt="...">
                                            </a>
                                        <div class="box-body">
                                            <a href="{{url('blog-details')}}" class="h5 font-semibold mb-2 block lh-base">The Pleasure of Harmony: Unlocking the Joy of Music</a>
                                            <p class="mb-4">Exploring the world of 3D images doesn't have to be limited to consumption – you can also become the creator! With accessible.<a href="javascript:void(0);" class="font-medium text-primary align-middle text-xs text-Augoration-underline inline-block">Read More ?</a></p>
                                            <div class="flex flex-wrap items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="avatar avatar-md avatar-rounded me-2">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-medium">Tilly</p>
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs mb-0">19,Apr 2024 - 15:45</span>
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                                    <i class="ri-heart-line text-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <a href="{{url('blog-details')}}" class="h5 font-semibold mb-2 block lh-base">Tuning into Happiness: How Music Lifts Our Spirits</a>
                                            <p class="mb-3">Explore the remarkable ability of music to evoke joy, uplift our moods, and nourish our souls. This blog delves into the science behind. <a href="javascript:void(0);" class="font-medium text-primarytint1color ms-2 align-middle text-xs text-Augoration-underline">Read More ?</a></p>
                                            <div class="flex flex-wrap items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="avatar avatar-md avatar-rounded me-2">
                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-medium">Henry Milo</p>
                                                        <span class="text-textmuted  dark:text-textmuted/50 text-xs mb-0">31,Mar 2024 - 20:13</span>
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                                    <i class="ri-heart-line text-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="p-4 pt-0 rounded-5">
                                            <img src="{{asset('build/assets/images/media/blog/9.jpg')}}" class="rounded-md card-img-bottom" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->
                    
                    <!--Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <a href="javascript:void(0);">
                                    <img src="{{asset('build/assets/images/media/blog/12.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <div class="box-body">
                                    <a href="{{url('blog-details')}}" class="h5 font-semibold mb-2 block lh-base">Understanding Music Notes</a>
                                    <p class="mb-3">Through detailed explanations, visual aids, and practical examples reduce stress, and create lasting memories...<a href="javascript:void(0);" class="font-medium text-primary ms-2 align-middle text-xs text-Augoration-underline inline-block">Read More ?</a></p>
                                    <div class="flex flex-wrap items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="avatar avatar-md avatar-rounded me-2">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <p class="mb-0 font-medium">Rosalie </p>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs mb-0">26,Mar 2024 - 15:37</span>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                            <i class="ri-heart-line text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <a href="javascript:void(0);">
                                    <img src="{{asset('build/assets/images/media/blog/10.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <div class="box-body">
                                    <a href="{{url('blog-details')}}" class="h5 font-semibold mb-2 block leading-[1.5rem]">Enhancing Your Life Through The Sound</a>
                                    <p class="mb-3">Join us on a journey of discovery as we unravel the mysteries of music note..<a href="javascript:void(0);" class="font-medium text-primarytint2color ms-2 align-middle text-xs text-Augoration-underline inline-block">Read More ?</a></p>
                                    <div class="flex flex-wrap items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="avatar avatar-md avatar-rounded me-2">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                            </div>
                                            <div class="">
                                                <p class="mb-0 font-medium">Emanuel </p>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs mb-0">26,Mar 2024 - 15:37</span>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                            <i class="ri-heart-line text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <a href="{{url('blog-details')}}" class="font-semibold h5 mb-2 block lh-base">Mastering the Art of The Music Notation</a>
                                    <p class="mb-3">Discover how these seemingly simple marks on a page translate into the beautiful sounds.<a href="javascript:void(0);" class="font-medium text-primary3 ms-2 align-middle text-xs text-Augoration-underline inline-block">Read More ?</a></p>
                                    <div class="flex flex-wrap items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <p class="mb-0 font-medium">Jacob 
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs mb-0 ms-1 font-normal">- 06,Mar 2024 - 15:37</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                            <i class="ri-heart-line text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <img src="{{asset('build/assets/images/media/blog/13.jpg')}}" class="card-img-bottom" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <a href="{{url('blog-details')}}" class="font-semibold h5 mb-2 block lh-base">How to Truly Enjoy Your Favorite Tunes?</a>
                                    <p class="mb-3">Through insightful articles, personal anecdotes, and expert advice, "Music for the Soul"..<a href="javascript:void(0);" class="font-medium text-primarytint2color ms-2 align-middle text-xs text-Augoration-underline inline-block">Read More ?</a></p>
                                    <div class="flex flex-wrap items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <p class="mb-0 font-medium">Flora
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs mb-0 font-normal">- 26,Mar 2024 - 15:37</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-sm bg-danger/10 avatar-rounded">
                                            <i class="ri-heart-line text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <img src="{{asset('build/assets/images/media/blog/11.jpg')}}" class="card-img-bottom" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End::row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        
        <!-- Blog JS -->
        @vite('resources/assets/js/blog.js')
        

@endsection  