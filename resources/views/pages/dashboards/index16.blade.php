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
                                    <li class="breadcrumb-item active" aria-current="page">Social Media</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Social Media</h1>
                        </div>
                        <div class="ti-btn-list">
                            <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary text-white btn-wave me-0 !border-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- End::page-header -->

                <!-- Start::Row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-8 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box social-cards insta">
                                        <div class="box-body flex-auto">
                                            <div class="flex flex-wrap gap-2 items-center justify-between">
                                                <div>
                                                    <p class="flex-auto text-[15px] font-medium mb-1 text-primarytint2color">Instagram</p>
                                                    <p class="mb-2 text-2xl font-medium">457K</p>
                                                    <div class="flex-between">
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">Followers</span>
                                                        <span class="text-danger inline-block"><i class="bi bi-arrow-down-right me-1 text-[10px]"></i>1.5%</span>
                                                    </div>
                                                </div>
                                                <div class="self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-primarytint2color"><i class="ri-instagram-line text-[25px] leading-none"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box social-cards linkedin">
                                        <div class="box-body flex-auto">
                                            <div class="flex flex-wrap gap-2 items-center justify-between">
                                                <div>
                                                    <p class="flex-auto text-[15px] font-medium mb-1 text-info">Linked In</p>
                                                    <p class="mb-2 text-2xl font-medium">457K</p>
                                                    <div class="flex-between">
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">Followers</span>
                                                        <span class="text-danger inline-block"><i class="bi bi-arrow-down-right me-1 text-[10px]"></i>1.5%</span>
                                                    </div>
                                                </div>
                                                <div class="self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-info"><i class="ri-linkedin-line text-[25px] leading-none"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box social-cards fb">
                                        <div class="box-body flex-auto">
                                            <div class="flex flex-wrap gap-2 items-center justify-between">
                                                <div>
                                                    <p class="flex-auto text-[15px] font-medium mb-1 text-primary">Facebook</p>
                                                    <p class="mb-2 text-2xl font-medium">2.1K</p>
                                                    <div class="flex-between">
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">1 hr ago</span>
                                                        <span class="text-danger inline-block"><i class="bi bi-arrow-down-right me-1 text-[10px]"></i>1.9%</span>
                                                    </div>
                                                </div>
                                                <div class="self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-primary"><i class="ri-facebook-line text-[25px] leading-none"></i></span> -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box social-cards twit">
                                        <div class="box-body flex-auto">
                                            <div class="flex flex-wrap gap-2 items-center justify-between">
                                                <div>
                                                    <p class="flex-auto text-[15px] font-medium mb-1 text-dark">Twitter</p>
                                                    <p class="mb-2 text-2xl font-medium">2.1K</p>
                                                    <div class="flex-between">
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">1 week ago</span>
                                                        <span class="text-success inline-block"><i class="bi bi-arrow-up-right me-1 text-[10px]"></i>1.9%</span>
                                                    </div>
                                                </div>
                                                <div class="self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-dark"><i class="ri-twitter-x-line text-[25px] leading-none"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box social-cards youtube">
                                        <div class="box-body flex-auto">
                                            <div class="flex flex-wrap gap-2 items-center justify-between">
                                                <div>
                                                    <p class="flex-auto text-[15px] font-medium mb-1 text-danger">Youtube</p>
                                                    <p class="mb-2 text-2xl font-medium">1.1M</p>
                                                    <div class="flex-between">
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">1 day ago</span>
                                                        <span class="text-success inline-block"><i class="bi bi-arrow-up-right me-1 text-[10px]"></i>1.9%</span>
                                                    </div>
                                                </div>
                                                <div class="self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-danger"><i class="ri-youtube-line text-[25px] leading-none"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box social-cards msgr">
                                        <div class="box-body flex-auto">
                                            <div class="flex flex-wrap gap-2 items-center justify-between">
                                                <div>
                                                    <p class="flex-auto text-[15px] font-medium mb-1 text-secondary">Messenger</p>
                                                    <p class="mb-2 text-2xl font-medium">1.1M</p>
                                                    <div class="flex-between">
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs">1 day ago</span>
                                                        <span class="text-success inline-block"><i class="bi bi-arrow-up-right me-1 text-[10px]"></i>1.9%</span>
                                                    </div>
                                                </div>
                                                <div class="self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-secondary"><i class="ri-messenger-line text-[25px] leading-none"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title"> 
                                        Follow On Device
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm text-textmuted dark:text-textmuted/50">
                                        View All
                                    </a>
                                </div>
                                <div class="box-body p-0">
                                    <div class="grid grid-cols-12 p-4 pt-2">
                                        <div class="xl:col-span-6 col-span-12 px-0">
                                            <div id="follow-on-device"></div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <ul class="ti-list-group list-group-flush border border-t mt-3">
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-start justify-between">
                                                        <div class="session-type leading-none mobile">
                                                            <div class="font-medium mb-0">Mobile</div>
                                                            <span class="text-xs text-textmuted dark:text-textmuted/50 leading-[1.2rem]">Increased By<span class="text-success text-xs ms-1 font-medium inline-block">1.67%</span></span>
                                                        </div>
                                                        <div class="leading-none text-end">
                                                            <span class="block text-xs text-textmuted dark:text-textmuted/50 mb-1">Total</span>
                                                            <span class="block font-semibold mb-0">1,754</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-start justify-between">
                                                        <div class="session-type leading-none tablet">
                                                            <div class="font-medium mb-0">Tablet</div>
                                                            <span class="text-xs text-textmuted dark:text-textmuted/50 leading-[1.2rem]">Increased By<span class="text-success text-xs ms-1 font-medium inline-block">0.46%</span></span>
                                                        </div>
                                                        <div class="leading-none text-end">
                                                            <span class="block text-xs text-textmuted dark:text-textmuted/50 mb-1">Total</span>
                                                            <span class="block font-semibold mb-0">1,234</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-start justify-between">
                                                        <div class="session-type desktop leading-none">
                                                            <div class="font-medium mb-0">Desktop</div>
                                                            <span class="text-xs text-textmuted dark:text-textmuted/50 leading-[1.2rem]">Decresed By<span class="text-danger text-xs ms-1 font-medium inline-block">3.43%</span></span>
                                                        </div>
                                                        <div class="leading-none text-end">
                                                            <span class="block text-xs text-textmuted dark:text-textmuted/50 mb-1">Total</span>
                                                            <span class="block font-semibold mb-0">878</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
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
                                        Suggestions
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm text-textmuted dark:text-textmuted/50">
                                        View All
                                    </a>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none personal-favourite mb-0">
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-medium block mb-0">Socrates Itumay</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs">3 Mutual Friends</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-sm ti-btn-icon bg-primary text-white"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-medium block mb-0">Ryan Gercia</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs">3 Mutual Friends</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-sm ti-btn-icon bg-primary text-white"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-medium block mb-0">Prax Bhav</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs">3 Mutual Friends</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-sm ti-btn-icon bg-primary text-white"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-medium block mb-0">Jackie Chen</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs">3 Mutual Friends</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-sm ti-btn-icon bg-primary text-white"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-medium block mb-0">Samantha Sam</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs">3 Mutual Friends</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-sm ti-btn-icon bg-primary text-white"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-medium block mb-0">Robert Lewis</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs">3 Mutual Friends</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-sm ti-btn-icon bg-primary text-white"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between flex-wrap">
                                    <div class="box-title">
                                        Audience Statistics
                                    </div>
                                    <div class="flex gap-2">
                                        <div class="ti-btn ti-btn-outline-light ti-btn-full ti-btn-sm">Today</div>
                                        <div class="ti-btn ti-btn-outline-light ti-btn-full ti-btn-sm">Weakly</div>
                                        <div class="ti-btn bg-light ti-btn-full ti-btn-sm">Yearly</div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="audience" class=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Requests
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm text-textmuted dark:text-textmuted/50">
                                        View All
                                    </a>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none personal-favourite mb-0">
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto truncate">
                                                    <span class="font-medium block mb-0">Socrates Itumay</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs w-75 truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="ti-btn-list text-nowrap ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto truncate">
                                                    <span class="font-medium block mb-0">Ryan Gercia</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs w-75 truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="ti-btn-list text-nowrap ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto truncate">
                                                    <span class="font-medium block mb-0">Prax Bhav</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs w-75 truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="ti-btn-list text-nowrap ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto truncate">
                                                    <span class="font-medium block mb-0">Jackie Chen</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs w-75 truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="ti-btn-list text-nowrap ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto truncate">
                                                    <span class="font-medium block mb-0">Samantha Sam</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs w-75 truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="ti-btn-list text-nowrap ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto truncate">
                                                    <span class="font-medium block mb-0">Robert Lewis</span>
                                                    <span class="text-textmuted dark:text-textmuted/50 block text-xs w-75 truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="ti-btn-list text-nowrap ms-auto">
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-2 -->

                    <!-- Start::Row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Social Media Performance
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn bg-primary text-white ti-btn-sm !m-0 btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i> 
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
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Platform</th>
                                                    <th scope="col">Likes</th>
                                                    <th scope="col">Comments</th>
                                                    <th scope="col">Shares</th>
                                                    <th scope="col">Impressions</th>
                                                    <th scope="col">Engaged (%)</th>
                                                    <th scope="col">Followers</th>
                                                    <th scope="col">Following</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        2024-02-15
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm bg-danger/10 !text-danger">
                                                                <i class="ri-youtube-fill text-[1rem]"></i>
                                                            </span>
                                                            <span class="font-medium">Youtube</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        150
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>
                                                        50
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">10,000</span>
                                                    </td>
                                                    <td>
                                                        3.5%
                                                    </td>
                                                    <td>
                                                        458
                                                    </td>
                                                    <td>
                                                        256
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        2024-02-14
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm bg-dark/10 !text-dark">
                                                                <i class="ri-twitter-x-fill text-[1rem]"></i>
                                                            </span>
                                                            <span class="font-medium">Twitter</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        200
                                                    </td>
                                                    <td>
                                                        30
                                                    </td>
                                                    <td>
                                                        70
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary/10 text-secondary">15,000</span>
                                                    </td>
                                                    <td>
                                                        4.2%
                                                    </td>
                                                    <td>
                                                        565
                                                    </td>
                                                    <td>
                                                        355
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        2024-02-13
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm bg-info/10 !text-info">
                                                                <i class="ri-messenger-fill text-[1rem]"></i>
                                                            </span>
                                                            <span class="font-medium">Facebook</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        300
                                                    </td>
                                                    <td>
                                                        40
                                                    </td>
                                                    <td>
                                                        90
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">20,000</span>
                                                    </td>
                                                    <td>
                                                        5.0%
                                                    </td>
                                                    <td>
                                                        458
                                                    </td>
                                                    <td>
                                                        956
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        2024-02-12
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm bg-secondary/10 !text-secondary">
                                                                <i class="ri-instagram-fill text-[1rem]"></i>
                                                            </span>
                                                            <span class="font-medium">Instagram</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>
                                                        20
                                                    </td>
                                                    <td>
                                                        30
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-orangemain/10 text-orangemain">8,000</span>
                                                    </td>
                                                    <td>
                                                        2.1%
                                                    </td>
                                                    <td>
                                                        458
                                                    </td>
                                                    <td>
                                                        256
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        2024-02-11
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <span class="avatar avatar-sm bg-dark/10 !text-dark">
                                                                <i class="ri-twitter-x-fill text-[1rem]"></i>
                                                            </span>
                                                            <span class="font-medium">Twitter</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        120
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        40
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">12,000</span>
                                                    </td>
                                                    <td>
                                                        3.0%
                                                    </td>
                                                    <td>
                                                        856
                                                    </td>
                                                    <td>
                                                        295
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer border-t-0"> 
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
                    <!-- End::Row-3 -->
                    
                </div>
            </div> 
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Social Dashboard JS -->
        @vite('resources/assets/js/social-dashboard.js')
        

@endsection