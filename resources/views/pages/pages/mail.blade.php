@extends('layouts.master')

@section('styles')
  
        <!-- Quill CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mail</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Mail</h1>
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

                    <div class="main-mail-container mb-2 gap-2 flex">
                        <div class="mail-navigation border border-defaultborder dark:border-defaultborder/10">
                            <div
                                class="grid items-top p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <button class="ti-btn ti-btn-primary flex items-center justify-center"
                                    data-hs-overlay="#mail-Compose">
                                    <i class="ri-add-circle-line text-[1rem] align-middle me-1"></i>Compose Mail
                                </button>
                            </div>
                            <div>
                                <ul class="list-none mail-main-nav" id="mail-main-nav">
                                    <li class="px-0 pt-0">
                                        <span
                                            class="text-[11px] text-textmuted dark:text-textmuted/50 opacity-70 font-medium">MAILS</span>
                                    </li>
                                    <li class="active mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-mail align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    All Mails
                                                </span>
                                                <span class="badge bg-primarytint1color rounded-full">2,142</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-inbox align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Inbox
                                                </span>
                                                <span class="badge bg-primarytint2color rounded-full">12</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-send align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Sent
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-notes align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Drafts
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-alert-circle align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Spam
                                                </span>
                                                <span class="badge bg-primarytint3color rounded-full">6</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-archive align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Archive
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-bookmark align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Important
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-trash align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Trash
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-star align-middle text-[1rem]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Starred
                                                </span>
                                                <span class="badge bg-warning rounded-full">05</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0">
                                        <span
                                            class="text-[11px] text-textmuted dark:text-textmuted/50 opacity-70 font-medium">LABELS</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i
                                                        class="ri-circle-fill align-middle text-[10px] font-medium text-primarytint1color"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Mail
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i
                                                        class="ri-circle-fill align-middle text-[10px] font-medium text-primarytint2color"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Home
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i
                                                        class="ri-circle-fill align-middle text-[10px] font-medium text-primary3"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Work
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i
                                                        class="ri-circle-fill align-middle text-[10px] font-medium text-warning"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Friends
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0">
                                        <span
                                            class="text-[11px] text-textmuted dark:text-textmuted/50 opacity-70 font-medium">ONLINE
                                            USERS</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-top  leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm online avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="text-defaulttextcolor font-medium mb-1">Angelica</p>
                                                    <p
                                                        class="text-xs text-textmuted dark:text-textmuted/50 mb-0 font-normal">
                                                        Can please send me the file.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="flex items-top  leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm online avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="text-defaulttextcolor font-medium mb-1">Rexha</p>
                                                    <p
                                                        class="text-xs text-textmuted dark:text-textmuted/50 mb-0 font-normal">
                                                        Waiting for response &#128077;.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0">
                                        <span
                                            class="text-[11px] text-textmuted dark:text-textmuted/50 opacity-70 font-medium">SETTINGS</span>
                                    </li>
                                    <li>
                                        <a href="{{url('mail-settings')}}">
                                            <div class="flex items-center">
                                                <span class="me-2 leading-none">
                                                    <i class="ti ti-settings align-middle text-[14px]"></i>
                                                </span>
                                                <span class="flex-auto text-nowrap">
                                                    Settings
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="total-mails border border-defaultborder dark:border-defaultborder/10">
                            <div
                                class="p-4 flex items-center border-b border-dashed flex-wrap gap-2 border-defaultborder dark:border-defaultborder/10">
                                <div class="input-group">
                                    <input type="text" class="form-control !border-s shadow-none" placeholder="Search Email"
                                        aria-describedby="button-addon">
                                    <button class="ti-btn ti-btn-primary !m-0" type="button" id="button-addon"><i
                                            class="ri-search-line me-1"></i> Search</button>
                                </div>
                            </div>
                            <div
                                class="px-3 p-2 flex items-center border-b  border-defaultborder dark:border-defaultborder/10 flex-wrap gap-2">
                                <div class="mx-2">
                                    <input class="form-check-input check-all" type="checkbox" id="checkAll" value=""
                                        aria-label="...">
                                </div>
                                <div class="flex-auto truncate">
                                    <h6 class="font-medium mb-0">All Mails</h6>
                                </div>
                                <div class="flex gap-2">
                                    <button class="ti-btn ti-btn-icon bg-light me-1 lg:hidden block total-mails-close">
                                        <i class="ri-close-line"></i>
                                    </button>
                                    <div class="">
                                        <button
                                            class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave"
                                            type="button" aria-expanded="false">
                                            <i class="ri-inbox-archive-line me-1"></i> Archive
                                        </button>
                                        <button
                                            class="ti-btn ti-btn-sm ti-btn-soft-primary2 btn-wave"
                                            type="button" aria-expanded="false">
                                            <i class="ri-error-warning-line me-1"></i> Spam
                                        </button>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button
                                                class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary3 btn-wave ti-dropdown-toggle hs-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Recent</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Unread</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Mark All Read</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Delete All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-messages" id="mail-messages">
                                <ul class="list-none mb-0 mail-messages-container">
                                    <li>
                                        <div class="flex items-top ">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel1"
                                                    value="" aria-label="...">
                                            </div>
                                            <div class="me-1 leading-none">
                                                <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-auto truncate">
                                                <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight">
                                                    <p class="mb-1 text-xs font-medium">
                                                        Iliana Lilly <span
                                                            class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]"><span
                                                                class="me-2"><i
                                                                    class="ri-attachment-2 align-middle text-xs"></i></span>12:12AM</span>
                                                    </p>
                                                </a>
                                                <div class="mail-msg mb-0">
                                                    <span class="block mb-0 font-medium truncate w-[75%]">Meeting Agenda</span>
                                                    <button
                                                        class="ti-btn p-0 leading-none mail-starred true border-0 float-end">
                                                        <i class="ri-star-fill text-[14px]"></i>
                                                    </button>
                                                    <div
                                                        class="text-xs text-textmuted dark:text-textmuted/50  truncate mail-msg-content !w-[75%]">
                                                        Reviewing the agenda for tomorrow's meeting. We'll be discussing the
                                                        project timeline and budget allocation.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div class="flex items-top ">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel2"
                                                    value="" aria-label="..." checked>
                                            </div>
                                            <div class="me-1 leading-none">
                                                <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-auto truncate">
                                                <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight">
                                                    <p class="mb-1 text-xs font-medium">
                                                        Priceton Gray <span
                                                            class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">03:18PM</span>
                                                    </p>
                                                </a>
                                                <div class="mail-msg mb-0">
                                                    <span class="block mb-0 font-medium truncate w-[75%]">Exclusive Offers
                                                        Inside!</span>
                                                    <button
                                                        class="ti-btn p-0 leading-none mail-starred border-0 float-end">
                                                        <i class="ri-star-fill text-[14px]"></i>
                                                    </button>
                                                    <div
                                                        class="text-xs text-textmuted dark:text-textmuted/50  truncate mail-msg-content !w-[75%]">
                                                        Unlock exclusive deals and discounts inside! Don't miss out on this
                                                        limited-time opportunity to save big on your favorite products and
                                                        services.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-top ">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel3"
                                                    value="" aria-label="...">
                                            </div>
                                            <div class="me-1 leading-none">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded bg-primary mail-msg-avatar">
                                                    CH
                                                </span>
                                            </div>
                                            <div class="flex-auto truncate">
                                                <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight">
                                                    <p class="mb-1 text-xs font-medium">
                                                        Charlie Edson <span
                                                            class="badge bg-warning ms-2">Promotion</span><span
                                                            class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">Yesterday,
                                                            06:45AM</span>
                                                    </p>
                                                </a>
                                                <div class="mail-msg mb-0">
                                                    <span class="block mb-0 font-medium truncate w-[75%]"> Limited-Time Offer:
                                                        Save on Your Next Trip!</span>
                                                    <button
                                                        class="ti-btn p-0 leading-none mail-starred border-0 float-end">
                                                        <i class="ri-star-fill text-[14px]"></i>
                                                    </button>
                                                    <div
                                                        class="text-xs text-textmuted dark:text-textmuted/50  truncate mail-msg-content !w-[75%]">
                                                        Unlock exclusive deals and discounts inside! Don't miss out on this
                                                        limited-time opportunity to save big on your favorite products and
                                                        services.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-top ">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel54"
                                                    value="" aria-label="..." checked>
                                            </div>
                                            <div class="me-1 leading-none">
                                                <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-auto truncate">
                                                <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight">
                                                    <p class="mb-1 text-xs font-medium">
                                                        Isha Bella <span
                                                            class="badge bg-primarytint1color ms-2">Social</span><span
                                                            class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">May
                                                            15 2024, 08:16PM</span>
                                                    </p>
                                                </a>
                                                <div class="mail-msg mb-0">
                                                    <span class="block mb-0 font-medium truncate w-[75%]"> You Have New
                                                        Notifications</span>
                                                    <button
                                                        class="ti-btn p-0 leading-none mail-starred border-0 float-end">
                                                        <i class="ri-star-fill text-[14px]"></i>
                                                    </button>
                                                    <div
                                                        class="text-xs text-textmuted dark:text-textmuted/50  truncate mail-msg-content !w-[75%]">
                                                        Stay connected with your friends and family. See who's commented on
                                                        your latest post and catch up on messages from loved ones.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-top ">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel14"
                                                    value="" aria-label="...">
                                            </div>
                                            <div class="me-1 leading-none">
                                                <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-auto truncate">
                                                <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight">
                                                    <p class="mb-1 text-xs font-medium">
                                                        Danny Raj <span
                                                            class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">May
                                                            13 2024, 11:24AM</span>
                                                    </p>
                                                </a>
                                                <div class="mail-msg mb-0">
                                                    <span class="block mb-0 font-medium truncate w-[75%]">New Connection
                                                        Request</span>
                                                    <button
                                                        class="ti-btn p-0 leading-none mail-starred true border-0 float-end">
                                                        <i class="ri-star-fill text-[14px]"></i>
                                                    </button>
                                                    <div
                                                        class="text-xs text-textmuted dark:text-textmuted/50  truncate mail-msg-content !w-[75%]">
                                                        Expand your professional network with a new connection. Accept the
                                                        request to connect and start networking today to explore new
                                                        opportunities.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-top ">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel24"
                                                    value="" aria-label="...">
                                            </div>
                                            <div class="me-1 leading-none">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded bg-primarytint2color mail-msg-avatar">
                                                    SR
                                                </span>
                                            </div>
                                            <div class="flex-auto truncate">
                                                <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight">
                                                    <p class="mb-1 text-xs font-medium">
                                                        Spencer Robin <span
                                                            class="badge bg-primarytint3color ms-2">Personal</span><span
                                                            class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">May
                                                            18 2024, 11:15PM</span>
                                                    </p>
                                                </a>
                                                <p class="text-xs mb-0">
                                                <div class="mail-msg mb-0">
                                                    <span class="block mb-0 font-medium truncate w-[75%]">Invitation By Summer
                                                        Soiree Under the Stars!</span>
                                                    <button
                                                        class="ti-btn p-0 leading-none mail-starred true border-0 float-end">
                                                        <i class="ri-star-fill text-[14px]"></i>
                                                    </button>
                                                    <div
                                                        class="text-xs text-textmuted dark:text-textmuted/50  truncate mail-msg-content !w-[75%]">
                                                        Hello, You are cordially invited to join us for an unforgettable
                                                        evening of summer magic at our Summer Soiree Under the Stars!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-top ">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel34"
                                                    value="" aria-label="...">
                                            </div>
                                            <div class="me-1 leading-none">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded bg-warning mail-msg-avatar">
                                                    HJ
                                                </span>
                                            </div>
                                            <div class="flex-auto truncate">
                                                <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight">
                                                    <p class="mb-1 text-xs font-medium">
                                                        Harry Justin <span
                                                            class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">April
                                                            05 2024, 08:12AM</span>
                                                    </p>
                                                </a>
                                                <p class="text-xs mb-0">
                                                <div class="mail-msg mb-0">
                                                    <span class="block mb-0 font-medium truncate w-[75%]">New Connection
                                                        Request</span>
                                                    <button
                                                        class="ti-btn p-0 leading-none mail-starred border-0 float-end">
                                                        <i class="ri-star-fill text-[14px]"></i>
                                                    </button>
                                                    <div
                                                        class="text-xs text-textmuted dark:text-textmuted/50  truncate mail-msg-content !w-[75%]">
                                                        Expand your professional network with a new connection. Accept the
                                                        request to connect and start networking today to explore new
                                                        opportunities.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-top ">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel44"
                                                    value="" aria-label="...">
                                            </div>
                                            <div class="me-1 leading-none">
                                                <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-auto truncate">
                                                <a href="javascript:void(0);" data-hs-overlay="#offcanvasRight">
                                                    <p class="mb-1 text-xs font-medium">
                                                        Nicolas Noor <span
                                                            class="float-end text-textmuted dark:text-textmuted/50 font-normal text-[11px]">March
                                                            20, 08:30PM</span>
                                                    </p>
                                                </a>
                                                <p class="text-xs mb-0">
                                                <div class="mail-msg mb-0">
                                                    <span class="block mb-0 font-medium truncate w-[75%]">Claim Your Prize
                                                        Now!</span>
                                                    <button
                                                        class="ti-btn p-0 leading-none mail-starred border-0 float-end">
                                                        <i class="ri-star-fill text-[14px]"></i>
                                                    </button>
                                                    <div
                                                        class="text-xs text-textmuted dark:text-textmuted/50  truncate mail-msg-content !w-[75%]">
                                                        Congratulations! You've won a prize! Click here to claim your reward
                                                        before it's too late and enjoy your well-deserved prize.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mail-recepients border border-defaultborder dark:border-defaultborder/10">
                            <div class="p-4 border-b border-defaultborder dark:border-defaultborder/10">
                                <div class="hs-tooltip ti-main-tooltip">
                                    <button
                                    class="ti-btn bg-primarytint1color/10 text-primarytint1color ti-btn-icon rounded-full"><i
                                        class="ri-add-line"></i>
                                        <span
                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                        role="tooltip">
                                        Add Recepient
                                    </span>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4 flex flex-col items-center total-mail-recepients" id="mail-recepients">
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                        <span class="avatar online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                            <span
                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                Hadley Kylin
                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                        <span class="avatar online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                            <span
                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                Iliana Lilly
                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                        <span class="avatar online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                            <span
                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                Jasmine Della
                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                        <span class="avatar online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                            <span
                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                Emanuel Rush
                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                    <span class="avatar online avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                        <span
                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                            role="tooltip">
                                            Nyra Tiyana
                                        </span>
                                    </span>
                                </div>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                    <span class="avatar online avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                        <span
                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                            role="tooltip">
                                            Maria Violet
                                        </span>
                                    </span>
                                </div>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                        <span class="avatar online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                            <span
                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                Priceton Gray
                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                        <span class="avatar online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                            <span
                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                Charlie Edson
                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <div class="hs-tooltip ti-main-tooltip">
                                        <span class="avatar online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                            <span
                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                Spencer Robin
                                            </span>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::app-content -->

            <!-- Start::composemail modal -->
            <div id="mail-Compose" class="hs-overlay hidden ti-modal">
                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                <div class="ti-modal-content m-3">
                    <div class="ti-modal-header">
                    <h6 class="ti-modal-title">
                        Compose Mail
                    </h6>
                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                        data-hs-overlay="#mail-Compose">
                        <span class="sr-only">Close</span>
                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                            fill="currentColor" />
                        </svg>
                    </button>
                    </div>
                    <div class="ti-modal-body">
                        <div class="grid grid-cols-12 xl:gap-x-6">
                            <div class="xl:col-span-6 col-span-12 mb-2">
                                <label for="fromMail" class="form-label">From<sup><i
                                            class="ri-star-s-fill text-success text-[8px]"></i></sup></label>
                                <input type="email" class="form-control" id="fromMail"
                                    value="henrymilo2345@gmail.com">
                            </div>
                            <div class="xl:col-span-6 col-span-12 mb-2">
                                <label for="toMail" class="form-label">To<sup><i
                                            class="ri-star-s-fill text-success text-[8px]"></i></sup></label>
                                <select class="form-control" name="toMail" id="toMail" multiple>
                                    <option value="Choice 1" selected>jay@gmail.com</option>
                                    <option value="Choice 2">kia@gmail.com</option>
                                    <option value="Choice 3">don@gmail.com</option>
                                    <option value="Choice 4">kimo@gmail.com</option>
                                </select>
                            </div>
                            <div class="xl:col-span-6 col-span-12 mb-2">
                                <label for="mailCC"
                                    class="form-label text-dark font-medium">Cc</label>
                                <input type="email" class="form-control" id="mailCC">
                            </div>
                            <div class="xl:col-span-6 col-span-12 mb-2">
                                <label for="mailBcc"
                                    class="form-label text-dark font-medium">Bcc</label>
                                <input type="email" class="form-control" id="mailBcc">
                            </div>
                            <div class="xl:col-span-12 col-span-12 mb-2">
                                <label for="Subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="Subject"
                                    placeholder="Subject">
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <label class="form-label">Content :</label>
                                <div class="mail-compose">
                                    <div id="mail-compose-editor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ti-modal-footer">
                        <button type="button" class="ti-btn ti-btn-light"
                        data-hs-overlay="#mail-Compose">Cancel</button>
                        <button type="button" class="ti-btn ti-btn-primary">Send</button>
                    </div>
                </div>
                </div>
            </div>
            <!-- End::composemail modal -->

            <!-- Start::mail information offcanvas -->
            <div class="hs-overlay hidden ti-offcanvas ti-offcanvas-right mail-info-offcanvas" id="offcanvasRight">
                <div class="ti-offcanvas-body !p-0">
                    <div class="mails-information">
                        <div class="mail-info-header flex gap-2 items-center">
                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                            </span>
                            <div class="flex-auto truncate">
                                <h6 class="mb-0 font-medium">Raiden stevie</h6>
                                <span
                                    class="text-textmuted dark:text-textmuted/50 text-[11px]">raidenstevie777@gmail.com</span>
                            </div>
                            <div class="mail-action-icons flex items-center gap-1">
                                <div class="hs-tooltip ti-main-tooltip">
                                    <button class="ti-btn ti-btn-icon ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/80 border">
                                        <i class="ri-star-line"></i>
                                        <span
                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                            role="tooltip">
                                            Starred
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                    <button class="ti-btn ti-btn-icon ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/80 border ms-1">
                                        <i class="ri-inbox-archive-line"></i>
                                        <span
                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                            role="tooltip">
                                            Archive
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                    <button class="ti-btn ti-btn-icon ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/80 border ms-1">
                                        <i class="ri-spam-2-line"></i>
                                        <span
                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                            role="tooltip">
                                            Report spam
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                    <button class="ti-btn ti-btn-icon ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/80 border ms-1">
                                        <i class="ri-delete-bin-line"></i>
                                        <span
                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                            role="tooltip">
                                            Delete
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                    <button class="ti-btn ti-btn-icon ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/80 border ms-1">
                                        <i class="ri-reply-line"></i>
                                        <span
                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                            role="tooltip">
                                            Reply
                                        </span>
                                    </button>
                                </div>
                                <button type="button"
                                class="ti-btn ti-btn-icon ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10 btn-wave"
                                data-hs-overlay="#offcanvasRight">
                                <span class="sr-only">Close modal</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                            </div>
                            <div class="responsive-mail-action-icons">
                                <div class="ti-dropdown hs-dropdown">
                                    <button
                                        class="ti-btn ti-btn-icon bg-light btn-wave waves-light waves-effect waves-light"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-star-line me-1 align-middle inline-block"></i>Starred</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-inbox-archive-line me-1 align-middle inline-block"></i>Archive</a>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-spam-2-line me-1 align-middle inline-block"></i>Report
                                                Spam</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-line me-1 align-middle inline-block"></i>Delete</a>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-reply-line me-1 align-middle inline-block"></i>Reply</a></li>
                                    </ul>
                                </div>
                                <button type="button"
                                class="ti-btn ti-btn-icon ti-btn-light close-button !text-textmuted dark:!text-defaulttextcolor/80 btn-wave"
                                data-hs-overlay="#offcanvasRight">
                                <span class="sr-only">Close modal</span>
                                <svg class="w-3 h-3 !fill-textmuted" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                            </div>
                        </div>
                        <div class="mail-info-body p-4" id="mail-info-body">
                            <div class="sm:flex block items-center justify-between mb-3">
                                <div>
                                    <p class="text-xl font-medium mb-0">Strategic Insights Webinar: Navigating Future
                                        Trends.</p>
                                </div>
                                <div class="float-end">
                                    <span class="text-xs text-textmuted dark:text-textmuted/50">Oct-22-2024,03:05PM</span>
                                </div>
                            </div>
                            <div class="main-mail-content mb-3">
                                <p class="text-[14px] font-medium mb-3">Greetings Mr Jack &#128400;,</p>
                                <p class="mb-2 text-textmuted dark:text-textmuted/50">We're excited to invite you to our
                                    upcoming webinar, "Navigating Future Trends," where industry experts will share
                                    strategic insights to help you stay ahead in an ever-evolving landscape. Join us on
                                    [Date] at [Time] for an engaging session that promises to provide actionable knowledge
                                    and valuable perspectives.</p>
                                <span class="block text-textmuted dark:text-textmuted/50 fw-meidum">Key Highlights :</span>
                                <ul class="text-textmuted dark:text-textmuted/50 my-3">
                                    <li class="mb-2">Expert analysis of emerging trends</li>
                                    <li class="mb-2">Practical strategies for staying competitive</li>
                                    <li class="mb-2">Q&A session for personalized insights</li>
                                </ul>
                                <p class="mb-2 text-textmuted dark:text-textmuted/50">Earth has a diameter of roughly 8,000
                                    miles (13,000 kilometers) and is mostly round because gravity generally pulls matter
                                    into a ball. But the spin of our home planet causes it to be squashed at its poles and
                                    swollen at the equator, making the true shape of the Earth an "oblate spheroid.".</p>
                                <p class="mb-0 mt-4">
                                    <span class="block">Best Regards,</span>
                                    <span class="block">Raiden stevie</span>
                                </p>
                            </div>
                            <div class="mail-attachments mb-3">
                                <div class="flex justify-between items-center">
                                    <div class="mb-2">
                                        <span class="text-[14px] font-medium"><i
                                                class="ri-attachment-2 me-1 align-middle"></i>Attachments (5.8KB):</span>
                                    </div>
                                    <div class="btn-list">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Download All</button>
                                    </div>
                                </div>
                                <div class="mt-2 flex flex-wrap gap-4">
                                    <div class="flex items-center flex-wrap gap-4 border p-2 rounded-md border-defaultborder dark:border-defaultborder/10">
                                        <div class="me-1 leading-none">
                                            <span class="avatar avatar-md bg-primary">
                                                <i class="ri-file-pdf-2-line text-lg"></i>
                                            </span>
                                        </div>
                                        <div class="flex-auto truncate">
                                            <a href="javascript:void(0);">
                                                <p class="mb-1 text-xs font-medium">
                                                    Instructions_file.pdf
                                                </p>
                                            </a>
                                            <div class="text-xs text-textmuted dark:text-textmuted/50 text-wrap">2.1KB</div>
                                        </div>
                                        <div
                                            class="ms-auto ti-btn ti-btn-sm bg-primarytint1color/10 text-primarytint1color !rounded-full ti-btn-icon">
                                            <i class="ri-download-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-wrap gap-4 border p-2 rounded-md border-defaultborder dark:border-defaultborder/10">
                                        <div class="me-1 leading-none">
                                            <span class="avatar avatar-md bg-primary">
                                                <i class="ri-file-pdf-line text-lg"></i>
                                            </span>
                                        </div>
                                        <div class="flex-auto truncate">
                                            <a href="javascript:void(0);">
                                                <p class="mb-1 text-xs font-medium">
                                                    Complete_Folder.doc
                                                </p>
                                            </a>
                                            <div class="text-xs text-textmuted dark:text-textmuted/50 text-wrap">1.5KB</div>
                                        </div>
                                        <div
                                            class="ms-auto ti-btn ti-btn-sm bg-primarytint1color/10 text-primarytint1color !rounded-full ti-btn-icon">
                                            <i class="ri-download-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-images mb-3">
                                <div class="flex justify-between items-center">
                                    <div class="mb-2">
                                        <span class="text-[14px] font-medium"><i
                                                class="ri-image-line me-1 align-middle"></i>Images:</span>
                                    </div>
                                    <div class="btn-list">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Download All</button>
                                    </div>
                                </div>
                                <div class="mt-2 flex flex-wrap gap-4">
                                    <a href="javascript:void(0)">
                                        <span class="avatar avatar-lg shadow-sm">
                                            <img src="{{asset('build/assets/images/media/media-74.jpg')}}" alt="">
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <span class="avatar avatar-lg shadow-sm">
                                            <img src="{{asset('build/assets/images/media/media-75.jpg')}}" alt="">
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <span class="avatar avatar-lg shadow-sm">
                                            <img src="{{asset('build/assets/images/media/media-77.jpg')}}" alt="">
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <span class="avatar avatar-lg bg-primary/10 !text-primary">
                                            5+
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-3">
                                <span class="text-[14px] font-medium"><i
                                        class="ri-reply-all-line me-1 align-middle inline-block"></i>Reply:</span>
                            </div>
                            <div class="mail-reply">
                                <div id="mail-reply-editor"></div>
                            </div>
                        </div>
                        <div class="mail-info-footer flex flex-wrap gap-2 items-center justify-between">
                            <div>
                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                    <button class="ti-btn ti-btn-icon ti-btn-soft-primary">
                                        <i class="ri-printer-line"></i>
                                        <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip">
                                        Print
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                    <button class="ti-btn ti-btn-icon ti-btn-soft-secondary ms-1">
                                        <i class="ri-mail-open-line"></i>
                                        <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip">
                                            Mark as read
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                    <button class="ti-btn ti-btn-icon ti-btn-soft-success ms-1">
                                        <i class="ri-refresh-line"></i>
                                        <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip">
                                            Reload
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button class="ti-btn bg-secondary text-white">
                                    <i class="ri-share-forward-line me-1 inline-block align-middle"></i>Forward
                                </button>
                                <button class="ti-btn bg-danger text-white ms-1">
                                    <i class="ri-reply-all-line me-1 inline-block align-middle"></i>Reply
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::mail information offcanvas -->

@endsection

@section('scripts')

        <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.js')}}"></script>

        <!-- Mail JS -->
        @vite('resources/assets/js/mail.js')
        

@endsection