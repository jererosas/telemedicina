@extends('layouts.master')

@section('styles')
  
        <!-- Swiper CSS-->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="flex items-center flex-wrap justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Reviews</h1>
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
                    <div class="row">
                        <div class="col-xl-12">
                            <h6 class="mb-3">Reviews Style 1 :</h6>
                            <div class="swiper testimonialSwiperService1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box text-white">
                                            <div class="box-body">
                                                <div class="flex justify-between gap-2 items-center mb-3">
                                                    <span class="avatar !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 block text-xs font-medium">65 views </span>
                                                    </div>
                                                </div>
                                                <p class="text-[14px] mb-4">
                                                    This
                                                    Product is amazing! It has made my daily tasks so much easier and is
                                                    very user-friendly. --
                                                    <span class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                            More
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                                customer service at this company is outstanding. They were
                                                                quick
                                                                to respond to my inquiry and resolved my issue within hours.
                                                            </span>
                                                        </a>
                                                    </span>
                                                </p>
                                                <div class="flex items-center flex-wrap justify-between gap-4">
                                                    <div class="flex-auto">
                                                        <p class="mb-0 font-bold text-[14px] text-primary">Hadley Kylin</p>
                                                        <p class="mb-0 text-[11px] font-normal op-8">UX Guru</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1">
                                                            <i class="ri-thumb-up-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box text-white">
                                            <div class="box-body">
                                                <div class="flex justify-between gap-2 items-center mb-3">
                                                    <span class="avatar !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 block text-xs font-medium">87 views </span>
                                                    </div>
                                                </div>
                                                <p class="text-[14px] mb-4">
                                                    Helping
                                                    me plan for my future. Their expertise and personalized approach have
                                                    given me great.--
                                                    <span class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                            More
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                                customer service at this company is outstanding. They were
                                                                quick
                                                                to respond to my inquiry and resolved my issue within hours.
                                                            </span>
                                                        </a>
                                                    </span>
                                                </p>
                                                <div class="flex items-center flex-wrap justify-between gap-4">
                                                    <div class="flex-auto">
                                                        <p class="mb-0 font-bold text-[14px] text-primary">Spencer Robin</p>
                                                        <p class="mb-0 text-[11px] font-normal op-8">Support Engineer</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1">
                                                            <i class="ri-thumb-up-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box text-white">
                                            <div class="box-body">
                                                <div class="flex justify-between gap-2 items-center mb-3">
                                                    <span class="avatar !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 block text-xs font-medium">47 views </span>
                                                    </div>
                                                </div>
                                                <p class="text-[14px] mb-4">
                                                    A game-changer for our business. Their insights and
                                                    strategic advice helped us streamline. --
                                                    <span class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                            More
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                                customer service at this company is outstanding. They were
                                                                quick
                                                                to respond to my inquiry and resolved my issue within hours.
                                                            </span>
                                                        </a>
                                                    </span>
                                                </p>
                                                <div class="flex items-center flex-wrap justify-between gap-4">
                                                    <div class="flex-auto">
                                                        <p class="mb-0 font-bold text-[14px] text-primary">Iliana Lilly</p>
                                                        <p class="mb-0 text-[11px] font-normal op-8">Optima Works</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1">
                                                            <i class="ri-thumb-up-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box text-white">
                                            <div class="box-body">
                                                <div class="flex justify-between gap-2 items-center mb-3">
                                                    <span class="avatar !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 block text-xs font-medium">87 views </span>
                                                    </div>
                                                </div>
                                                <p class="text-[14px] mb-4">
                                                    Incredibly
                                                    knowledgeable and supportive throughout the entire process. They
                                                    provided clear. --
                                                    <span class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                            More
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                                customer service at this company is outstanding. They were
                                                                quick
                                                                to respond to my inquiry and resolved my issue within hours.
                                                            </span>
                                                        </a>
                                                    </span>
                                                </p>
                                                <div class="flex items-center flex-wrap justify-between gap-4">
                                                    <div class="flex-auto">
                                                        <p class="mb-0 font-bold text-[14px] text-primary">Tommy Rosen</p>
                                                        <p class="mb-0 text-[11px] font-normal op-8">Freelance Dev</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1">
                                                            <i class="ri-thumb-up-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box text-white">
                                            <div class="box-body">
                                                <div class="flex justify-between gap-2 items-center mb-3">
                                                    <span class="avatar !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 block text-xs font-medium">87 views </span>
                                                    </div>
                                                </div>
                                                <p class="text-[14px] mb-4">
                                                    This
                                                    blender a month ago, and it has exceeded my expectations. It’s powerful,
                                                    easy to clean, and makes perfect --
                                                    <span class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                            More
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                                customer service at this company is outstanding. They were
                                                                quick
                                                                to respond to my inquiry and resolved my issue within hours.
                                                            </span>
                                                        </a>
                                                    </span>
                                                </p>
                                                <div class="flex items-center flex-wrap justify-between gap-4">
                                                    <div class="flex-auto">
                                                        <p class="mb-0 font-bold text-[14px] text-primary">Jasmine Della</p>
                                                        <p class="mb-0 text-[11px] font-normal op-8">Web oneness</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1">
                                                            <i class="ri-thumb-up-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box text-white">
                                            <div class="box-body">
                                                <div class="flex justify-between gap-2 items-center mb-3">
                                                    <span class="avatar !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 block text-xs font-medium">87 views </span>
                                                    </div>
                                                </div>
                                                <p class="text-[14px] mb-4">
                                                    Cloud
                                                    architect designed a scalable and efficient cloud infrastructure for us.
                                                    Their expertise has greatly. --
                                                    <span class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                            More
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                                customer service at this company is outstanding. They were
                                                                quick
                                                                to respond to my inquiry and resolved my issue within hours.
                                                            </span>
                                                        </a>
                                                    </span>
                                                </p>
                                                <div class="flex items-center flex-wrap justify-between gap-4">
                                                    <div class="flex-auto">
                                                        <p class="mb-0 font-bold text-[14px] text-primary">Samson Thomas</p>
                                                        <p class="mb-0 text-[11px] font-normal op-8">Cloud architect</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1">
                                                            <i class="ri-thumb-up-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Reviews Style 2 :
                                    </div>
                                </div>
                                <div class="box-body pb-0">
                                    <div class="swiper testimonialSwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                                    <div
                                                        class="p-4 text-center items-center justify-content-start gap-2 border-b border-dashed border-defaultborder dark:border-defaultborder/10 bg-secondary/10">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img"
                                                            class="mb-2 mx-auto text-center avatar avatar-xl !rounded-full shadow-sm">
                                                        <div class="grow">
                                                            <p class="mb-0 font-semibold h6">Flora Mary</p>
                                                            <span
                                                                class="font-normal text-textmuted dark:text-textmuted/50 text-xs">Systems
                                                                Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="mb-0">
                                                            "Technical issues quickly and efficiently resloved. Their
                                                            expertise and promptservice have been critical in keeping our
                                                            operations running smoothly".<i
                                                                class="op-4 text-[11px] font-medium">--- Flora Mary</i>
                                                        </div>
                                                        <div class="badge bg-primarytint2color !rounded-full float-end">4.5
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i
                                                            class="bx bxs-quote-alt-right review-quote !text-secondary/50"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                                    <div
                                                        class="p-4 text-center items-center justify-content-start gap-2 border-b border-dashed border-defaultborder dark:border-defaultborder/10 bg-primary/10">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"
                                                            class="mb-2 mx-auto text-center avatar avatar-xl !rounded-full shadow-sm">
                                                        <div class="grow">
                                                            <p class="mb-0 font-semibold h6">Maria Violet</p>
                                                            <span
                                                                class="font-normal text-textmuted dark:text-textmuted/50 text-xs">Web
                                                                Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="mb-0">
                                                            "Web developer did an outstanding job creating our new website.
                                                            It's user-friendly, visually appealing, and has all the
                                                            functionality we need".<i
                                                                class="op-4 text-[11px] font-medium">--- Maria Violet</i>
                                                        </div>
                                                        <div class=" badge bg-primarytint3color !rounded-full float-end">4.5
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote primary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                                    <div
                                                        class="p-4 text-center items-center justify-content-start gap-2 border-b border-dashed border-defaultborder dark:border-defaultborder/10 bg-primarytint1color/10">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"
                                                            class="mb-2 mx-auto text-center avatar avatar-xl !rounded-full shadow-sm">
                                                        <div class="grow">
                                                            <p class="mb-0 font-semibold h6">John smith</p>
                                                            <span
                                                                class="font-normal text-textmuted dark:text-textmuted/50 text-xs">Systems
                                                                Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="mb-0">
                                                            "Freelance writer delivered high-quality content that perfectly
                                                            captured our brand voice. They were professional, met all
                                                            deadlines to work".<i class="op-4 text-[11px] font-medium">---
                                                                John smith</i>
                                                        </div>
                                                        <div class=" badge bg-primary !rounded-full float-end">4.3
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i
                                                            class="bx bxs-quote-alt-right review-quote !text-primarytint1color/50"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                                    <div
                                                        class="p-4 text-center items-center justify-content-start gap-2 border-b border-dashed border-defaultborder dark:border-defaultborder/10 bg-primarytint3color/10">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"
                                                            class="mb-2 mx-auto text-center avatar avatar-xl !rounded-full shadow-sm">
                                                        <div class="grow">
                                                            <p class="mb-0 font-semibold h6">Uma Renata</p>
                                                            <span
                                                                class="font-normal text-textmuted dark:text-textmuted/50 text-xs">Systems
                                                                Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="mb-0">
                                                            "Template has an excellent theme and functionality. The quality
                                                            is great, and I
                                                            love that I can download content to make customization!!"<i
                                                                class="op-4 text-[11px] font-medium">--- Uma Renata</i>
                                                        </div>
                                                        <div class=" badge bg-danger !rounded-full float-end">4.3
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i
                                                            class="bx bxs-quote-alt-right review-quote !text-primarytint3color/50"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                                    <div
                                                        class="p-4 text-center items-center justify-content-start gap-2 border-b border-dashed border-defaultborder dark:border-defaultborder/10 bg-success/10">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"
                                                            class="mb-2 mx-auto text-center avatar avatar-xl !rounded-full shadow-sm">
                                                        <div class="grow">
                                                            <p class="mb-0 font-semibold h6">Arjun Richel</p>
                                                            <span
                                                                class="font-normal text-textmuted dark:text-textmuted/50 text-xs">Systems
                                                                Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="mb-0">
                                                            "This Product is amazing! It has made my daily tasks so much
                                                            easier and is very user-friendly. The product life is impressive
                                                            too..."<i class="op-4 text-[11px] font-medium">--- Arjun
                                                                Richel</i>
                                                        </div>
                                                        <div class=" badge bg-secondary !rounded-full float-end">4.1
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote !text-success/50"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                                    <div
                                                        class="p-4 text-center items-center justify-content-start gap-2 border-b border-dashed border-defaultborder dark:border-defaultborder/10 bg-warning/10">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"
                                                            class="mb-2 mx-auto text-center avatar avatar-xl !rounded-full shadow-sm">
                                                        <div class="grow">
                                                            <p class="mb-0 font-semibold h6">Flora Mary</p>
                                                            <span
                                                                class="font-normal text-textmuted dark:text-textmuted/50 text-xs">Data
                                                                Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="mb-0">
                                                            "The checkout process was smooth, and my order arrived on time
                                                            and well-packaged. Very satisfied with my purchase...."<i
                                                                class="op-4 text-[11px] font-medium">--- Arjun Richel</i>
                                                        </div>
                                                        <div class=" badge bg-primarytint1color !rounded-full float-end">3.8
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote !text-warning/50"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <h6 class="mb-3">Reviews Style 3 :</h6>
                            <div class="review-style-2 mb-3">
                                <div class="swiper pagination-dynamic testimonialSwiperService">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="box border mb-0 border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <div>
                                                        <span class=""><sup><i
                                                                    class="bi bi-quote text-[2.5rem] me-1 text-primary"></i></sup>
                                                            Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. --
                                                            <span class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);"
                                                                    class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                                    More
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        customer service at this company is outstanding. They were
                                                                        quick
                                                                        to respond to my inquiry and resolved my issue within hours.
                                                                    </span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="flex items-center flex-wrap text-end  justify-end">
                                                        <div class="text-warning block me-1 text-[10px]">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="flex items-center flex-wrap">
                                                        <span class="avatar !rounded-full me-2">
                                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt=""
                                                                class="img-fluid !rounded-full border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Elsa Teresa</p>
                                                            <p class="mb-0 text-[11px] font-normal op-8">
                                                                elsateresa@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary ">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </div>
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary1">
                                                                <i class="ri-share-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box border mb-0 border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <div>
                                                        <span class=""><sup><i
                                                                    class="bi bi-quote text-[2.5rem] me-1 text-primary"></i></sup>
                                                            Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. --
                                                            <span class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);"
                                                                    class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                                    More
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        customer service at this company is outstanding. They were
                                                                        quick
                                                                        to respond to my inquiry and resolved my issue within hours.
                                                                    </span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="flex items-center flex-wrap text-end  justify-end">
                                                        <div class="text-warning block me-1 text-[10px]">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="flex items-center flex-wrap">
                                                        <span class="avatar !rounded-full me-2">
                                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt=""
                                                                class="img-fluid !rounded-full border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Henry Milo</p>
                                                            <p class="mb-0 text-[11px] font-normal op-8">henrymilo@gmail.com
                                                            </p>
                                                        </div>
                                                        <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary ">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </div>
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary1">
                                                                <i class="ri-share-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box border mb-0 border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <div>
                                                        <span class=""><sup><i
                                                                    class="bi bi-quote text-[2.5rem] me-1 text-primary"></i></sup>
                                                            Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. --
                                                            <span class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);"
                                                                    class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                                    More
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        customer service at this company is outstanding. They were
                                                                        quick
                                                                        to respond to my inquiry and resolved my issue within hours.
                                                                    </span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="flex items-center flex-wrap text-end  justify-end">
                                                        <div class="text-warning block me-1 text-[10px]">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="flex items-center flex-wrap">
                                                        <span class="avatar !rounded-full me-2">
                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                                                class="img-fluid !rounded-full border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Katherin Oslo</p>
                                                            <p class="mb-0 text-[11px] font-normal op-8">
                                                                katherinoslo212@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary ">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </div>
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary1">
                                                                <i class="ri-share-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box border mb-0 border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <div>
                                                        <span class=""><sup><i
                                                                    class="bi bi-quote text-[2.5rem] me-1 text-primary"></i></sup>
                                                            Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. --
                                                            <span class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);"
                                                                    class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                                    More
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        customer service at this company is outstanding. They were
                                                                        quick
                                                                        to respond to my inquiry and resolved my issue within hours.
                                                                    </span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="flex items-center flex-wrap text-end  justify-end">
                                                        <div class="text-warning block me-1 text-[10px]">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="flex items-center flex-wrap">
                                                        <span class="avatar !rounded-full me-2">
                                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                                class="img-fluid !rounded-full border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Jestin Calm</p>
                                                            <p class="mb-0 text-[11px] font-normal op-8">
                                                                jestincalm1999@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary ">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </div>
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary1">
                                                                <i class="ri-share-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box border mb-0 border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <div>
                                                        <span class=""><sup><i
                                                                    class="bi bi-quote text-[2.5rem] me-1 text-primary"></i></sup>
                                                            Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. --
                                                            <span class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);"
                                                                    class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                                    More
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        customer service at this company is outstanding. They were
                                                                        quick
                                                                        to respond to my inquiry and resolved my issue within hours.
                                                                    </span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="flex items-center flex-wrap text-end  justify-end">
                                                        <div class="text-warning block me-1 text-[10px]">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="flex items-center flex-wrap">
                                                        <span class="avatar !rounded-full me-2">
                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt=""
                                                                class="img-fluid !rounded-full border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Harin ford</p>
                                                            <p class="mb-0 text-[11px] font-normal op-8">
                                                                harinford345@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary ">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </div>
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary1">
                                                                <i class="ri-share-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box border mb-0 border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <div>
                                                        <span class=""><sup><i
                                                                    class="bi bi-quote text-[2.5rem] me-1 text-primary"></i></sup>
                                                            Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. --
                                                            <span class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);"
                                                                    class="font-semibold hs-tooltip-toggle text-[11px]">Read
                                                                    More
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content  max-w-[200px] py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        customer service at this company is outstanding. They were
                                                                        quick
                                                                        to respond to my inquiry and resolved my issue within hours.
                                                                    </span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="flex items-center flex-wrap text-end  justify-end">
                                                        <div class="text-warning block me-1 text-[10px]">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="flex items-center flex-wrap">
                                                        <span class="avatar !rounded-full me-2">
                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt=""
                                                                class="img-fluid !rounded-full border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Phillip John</p>
                                                            <p class="mb-0 text-[11px] font-normal op-8">
                                                                phillipjohn21@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto text-xs font-semibold op-8 text-end">
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary ">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </div>
                                                            <div
                                                                class="ti-btn ti-btn-sm ti-btn-icon !rounded-full ti-btn-soft-primary1">
                                                                <i class="ri-share-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <h6 class="mb-3">Reviews Style 4 :</h6>
                            <div class="swiper testimonialSwiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box border relative border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body text-center">
                                                <div>
                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img"
                                                        class="mx-auto text-center avatar avatar-xl !rounded-full border-[3px] border border-primary mb-2 bg-primary">
                                                </div>
                                                <div class="">
                                                    <div class="mb-0 font-semibold text-[14px]">Victoria Red</div>
                                                    <div class="mb-2 text-warning text-[11px]">
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-half-line"></i>
                                                    </div>
                                                    <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                    <p class="text-[14px] mt-2 mb-1 px-3">
                                                        "Project to success with excellent planning and
                                                        coordination. Their leadership and communication kept
                                                        everything on track and within budget."
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box border relative border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body text-center">
                                                <div>
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img"
                                                        class="mx-auto text-center avatar avatar-xl !rounded-full border-[3px] border border-primary mb-2 bg-primary">
                                                </div>
                                                <div class="">
                                                    <div class="mb-0 font-semibold text-[14px]">Nicolas Noor</div>
                                                    <div class="mb-2 text-warning text-[11px]">
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-half-line"></i>
                                                    </div>
                                                    <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                    <p class="text-[14px] mt-2 mb-1 px-3">
                                                        "Cybersecurity specialist has been crucial in protecting
                                                        our data. Their proactive measures and quick response to
                                                        threats give us great peace of mind.."
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box border relative border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body text-center">
                                                <div>
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"
                                                        class="mx-auto text-center avatar avatar-xl !rounded-full border-[3px] border border-primary mb-2 bg-primary">
                                                </div>
                                                <div class="">
                                                    <div class="mb-0 font-semibold text-[14px]">Remi Gloria</div>
                                                    <div class="mb-2 text-warning text-[11px]">
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-half-line"></i>
                                                    </div>
                                                    <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                    <p class="text-[14px] mt-2 mb-1 px-3">
                                                        "Marketing consultant provided us with a clear,
                                                        actionable strategy that boosted our online presence and
                                                        increased our customer engagement."
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box border relative border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body text-center">
                                                <div>
                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"
                                                        class="mx-auto text-center avatar avatar-xl !rounded-full border-[3px] border border-primary mb-2 bg-primary">
                                                </div>
                                                <div class="">
                                                    <div class="mb-0 font-semibold text-[14px]">Danny Raj</div>
                                                    <div class="mb-2 text-warning text-[11px]">
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-half-line"></i>
                                                    </div>
                                                    <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                    <p class="text-[14px] mt-2 mb-1 px-3">
                                                        "The cloud architect designed a scalable and efficient
                                                        cloud infrastructure for us. Their expertise has greatly
                                                        improved our data accessibility."
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box border relative border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body text-center">
                                                <div>
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"
                                                        class="mx-auto text-center avatar avatar-xl !rounded-full border-[3px] border border-primary mb-2 bg-primary">
                                                </div>
                                                <div class="">
                                                    <div class="mb-0 font-semibold text-[14px]">Sissera William</div>
                                                    <div class="mb-2 text-warning text-[11px]">
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-half-line"></i>
                                                    </div>
                                                    <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                    <p class="text-[14px] mt-2 mb-1 px-3">
                                                        "Cybersecurity specialist has been crucial in protecting
                                                        our data. Their proactive measures and quick response to
                                                        threats give us great peace of mind."
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box border relative border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body text-center">
                                                <div>
                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"
                                                        class="mx-auto text-center avatar avatar-xl !rounded-full border-[3px] border border-primary mb-2 bg-primary">
                                                </div>
                                                <div class="">
                                                    <div class="mb-0 font-semibold text-[14px]">Audie Yose</div>
                                                    <div class="mb-2 text-warning text-[11px]">
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-fill"></i>
                                                        <i class="leading-none ri-star-half-line"></i>
                                                    </div>
                                                    <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                    <p class="text-[14px] mt-2 mb-1 px-3">
                                                        "Graphic designer created beautiful and impactful
                                                        designs for our campaign. Their creativity and attention
                                                        to detail were evident in every piece they delivered."
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <h6 class="mb-3">Reviews Style 5 :</h6>
                            <div class="swiper testimonialSwiper01 pagination-dynamic mb-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box mb-2 overflow-hidden">
                                            <div class="box-body">
                                                <p class="text-[1rem]">
                                                    <i class="ri-double-quotes-l text-[2.5rem] leading-none me-3"></i> The
                                                    network
                                                    administrator has ensured our systems run smoothly and
                                                    securely,always quick to resolve any issues and keep our network
                                                    optimized."
                                                </p>
                                                <div class="flex justify-end flex-wrap gap-4">
                                                    <div class="flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 leading-none text-xs font-semibold">Vinny Rose
                                                                <span class="text-[11px] font-normal ms-2"><i
                                                                        class="ri-star-fill text-warning text-[0.5625rem] mb-1 align-middle"></i>
                                                                    4.5</span>
                                                            </div>
                                                            <p class="text-xs mb-0 opacity-70">Systems Analyst</p>
                                                        </div>
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primarytint2color">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box mb-2 overflow-hidden">
                                            <div class="box-body">
                                                <p class="text-[1rem]">
                                                    <i class="ri-double-quotes-l text-[2.5rem] leading-none me-3"></i>
                                                    Always
                                                    reliable and efficient. They resolve technical problems quickly
                                                    and provide clear, helpful guidance to our staff.."
                                                </p>
                                                <div class="flex justify-end flex-wrap gap-4">
                                                    <div class="flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 leading-none text-xs font-semibold">Amaya Usha
                                                                <span class="text-[11px] font-normal ms-2"><i
                                                                        class="ri-star-fill text-warning text-[0.5625rem] mb-1 align-middle"></i>
                                                                    4.5</span>
                                                            </div>
                                                            <p class="text-xs mb-0 opacity-70">Web Developer</p>
                                                        </div>
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primarytint2color">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box mb-2 overflow-hidden">
                                            <div class="box-body">
                                                <p class="text-[1rem] pb-4">
                                                    <i
                                                        class="ri-double-quotes-l text-[2.5rem] leading-none me-3"></i>Created
                                                    a
                                                    website that exceeded our expectations. It’s visually appealing,
                                                    user-friendly, and has enhanced our online presence
                                                    significantly.."
                                                </p>
                                                <div class="flex justify-end flex-wrap gap-4 text-end">
                                                    <div class="flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 leading-none text-xs font-semibold">Sophia Ben
                                                                <span class="text-[11px] font-normal ms-2"><i
                                                                        class="ri-star-fill text-warning text-[0.5625rem] mb-1 align-middle"></i>
                                                                    4.5</span>
                                                            </div>
                                                            <p class="text-[11px] mb-0 opacity-70">Systems Analyst</p>
                                                        </div>
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primarytint2color">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box mb-2 overflow-hidden">
                                            <div class="box-body">
                                                <p class="text-[1rem]">
                                                    <i class="ri-double-quotes-l text-[2.5rem] leading-none me-3"></i>The
                                                    network
                                                    administrator has ensured our systems run smoothly and
                                                    securely,always quick to resolve any issues and keep our network
                                                    optimized."
                                                </p>
                                                <div class="flex justify-end text-end flex-wrap gap-4">
                                                    <div class="flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 leading-none text-xs font-semibold">Sissera
                                                                William
                                                                <span class="text-[11px] font-normal ms-2"><i
                                                                        class="ri-star-fill text-warning text-[0.5625rem] mb-1 align-middle"></i>
                                                                    4.5</span>
                                                            </div>
                                                            <p class="text-xs mb-0 opacity-70">Systems Analyst</p>
                                                        </div>
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primarytint2color">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rtl:dir-rtl">
                                        <div class="box mb-2 overflow-hidden">
                                            <div class="box-body">
                                                <p class="text-[1rem]">
                                                    <i class="ri-double-quotes-l text-[2.5rem] leading-none me-3"></i>The
                                                    network
                                                    administrator has ensured our systems run smoothly and
                                                    securely,Always quick to resolve any issues and keep our network
                                                    optimized."
                                                </p>
                                                <div class="flex justify-end text-end flex-wrap gap-4">
                                                    <div class="flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 leading-none text-xs font-semibold">Georgia
                                                                Kate
                                                                <span class="text-[11px] font-normal ms-2"><i
                                                                        class="ri-star-fill text-warning text-[0.5625rem] mb-1 align-middle"></i>
                                                                    4.5</span>
                                                            </div>
                                                            <p class="text-xs mb-0 opacity-70">Systems Analyst</p>
                                                        </div>
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primarytint2color">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-custom">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
                    
        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Reviews JS -->
        @vite('resources/assets/js/reviews.js')
        

@endsection