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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Timeline</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Timeline</h1>
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
                    <div class="timeline-1">
                        <div class="max-w-[91.66666667%] mx-auto">
                            <div class="box border border-defaultborder dark:border-defaultborder/10 overflow-hidden">
                                <div class="box-header">
                                    <div class="box-title">
                                        Timeline 01
                                    </div>
                                </div>
                                <div class="box-body bg-light/[0.75]">
                                    <div class="timeline">
                                        <div class="">
                                            <div class="max-w-[91.66666667%] mx-auto ">
                                                <div class="timeline-container">
                                                    <div class="timeline-end">
                                                        <span class="p-1 text-[11px] bg-primarytint2color text-white backdrop-blur text-center border border-primarytint2color border-opacity-10 rounded-sm leading-none font-medium">
                                                            22 January 2024
                                                        </span>
                                                    </div>
                                                    <div class="timeline-continue">
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <p class="timeline-date text-textmuted dark:text-textmuted/50 mb-2">
                                                                    15:36, Monday
                                                                </p>
                                                                <div class="timeline-box">
                                                                    <p class="mb-2">
                                                                        <b>You </b> Tagged <b> Emma Thompson</b>  in a Photo.
                                                                    </p>
                                                                    <p class="mb-2">
                                                                        "Including Emma in cherished memories captured on camera, tagging her in a photo to share a moment of joy or significance and inviting her to reminisce together."
                                                                    </p>
                                                                    <p class="profile-activity-media flex items-center mb-0 flex-wrap">
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt="" class="mb-0">
                                                                        </a>    
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-18.jpg')}}" alt="" class="mb-0">
                                                                        </a>    
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <p class="timeline-date text-textmuted dark:text-textmuted/50 mb-2">
                                                                    22:45, Monday
                                                                </p>
                                                                <div class="timeline-box">
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-2">
                                                                        <span class="text-defaulttextcolor"><b>Michel</b> Retweeted Emily <a href="javascript:void(0);" class="text-primarytint1color font-medium underline">Davis</a>'s Tweet </span>.
                                                                    </p>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                                        Amplifying Emily's message and sharing it with your own Twitter followers, acknowledging the importance or relevance of her tweet and extending its reach across the platform.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-end mb-5">
                                                            <span class="p-1 text-[11px] bg-primarytint3color text-white backdrop-blur text-center border border-primarytint3color/10 rounded-sm leading-none font-medium z-1 relative">
                                                                25 January 2024
                                                            </span>
                                                        </div>
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <p class="timeline-date text-textmuted dark:text-textmuted/50 mb-2">
                                                                    09:14, Thursday
                                                                </p>
                                                                <div class="timeline-box">
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-1">
                                                                        <span class="text-defaulttextcolor"><b>You</b> Shared <b>a Recipe </b></span>on Sarah Johnson's Timeline.
                                                                    </p>
                                                                    <p class="text-textmuted dark:text-textmuted/50">Spreading culinary inspiration by sharing a mouth-watering recipe on Sarah's timeline, encouraging others to indulge in delicious homemade dishes and fostering a sense of community around food.</p>
                                                                    <p class="profile-activity-media flex items-center mb-0 flex-wrap">
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-59.jpg')}}" class="mb-0" alt="">
                                                                        </a>  
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-60.jpg')}}" class="mb-0" alt="">
                                                                        </a>  
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-61.jpg')}}" class="mb-0" alt="">
                                                                        </a>  
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <p class="timeline-date text-textmuted dark:text-textmuted/50 mb-2">
                                                                    17:56, Thursday
                                                                </p>
                                                                <div class="timeline-box mb-2">
                                                                    <p class="mb-1">
                                                                        <b>You</b> Participated in a Poll Created by <b> Ethan Clark</b>  <a class="text-primarytint2color" href="javascript:void(0);"><u>#analysis-decision-making</u></a>.
                                                                    </p>
                                                                    <p class="text-textmuted dark:text-textmuted/50">Sharing your perspective and contributing to Ethan's data collection through participation in his poll, providing valuable feedback and insights to inform further analysis and decision-making.</p>
                                                                    <p class="profile-activity-media flex items-center mb-0 flex-wrap">
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="" class="mb-0">
                                                                        </a>    
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="" class="mb-0">
                                                                        </a>    
                                                                    </p>
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
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="timeline-2">
                        <div class="max-w-[91.66666667%] mx-auto">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Timeline 02
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 sm:gap-x-6">
                                    <div class="lg:col-span-1 col-span-12"></div>
                                    <div class="lg:col-span-10 col-span-12">
                                        <ul class="notification px-3">
                                            <li>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-body border !border-primary/50">
                                                            <div class="flex items-start gap-4 flex-wrap">
                                                                <div>
                                                                    <span class="avatar avatar-lg online">
                                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto sm:!w-[50%]">
                                                                    <h5 class="mb-1 text-[15px] font-medium text-dark">Event Conceptualization </h5>
                                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">Brainstormed event ideas and themes.Conducted initial research on venue options and potential sponsors</p>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-primary/10 text-primary">
                                                                        May 21, 2024 - Ongoing
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-time flex items-center gap-2">
                                                        <span class="date">Saturday</span>
                                                        <span class="time">06:15</span>
                                                        </div>
                                                        <div class="notification-icon">
                                                        <a href="javascript:void(0);"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-time flex items-center gap-2 content-end">
                                                        <span class="date">Tuesday</span>
                                                        <span class="time">22:55</span>
                                                        </div>
                                                        <div class="notification-icon">
                                                        <a href="javascript:void(0);" class="primary1"></a>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-body notification-body-end border !border-primarytint1color/50">
                                                            <div class="flex items-start gap-4 flex-wrap">
                                                                <div>
                                                                    <span class="avatar avatar-lg online">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto sm:!w-[50%]">
                                                                    <h5 class="mb-1 text-[15px] font-medium text-dark">Preparation and Organization</h5>
                                                                    <p class="text-[13px] mb-0 text-textmuted dark:text-textmuted/50">Secured venue and finalized contracts with vendors.Created event marketing materials and promotional strategies.Established event logistics.</p>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-primarytint1color/10 text-primarytint1color">
                                                                        May 21 - 26, 2024
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-body border !border-primarytint2color/50">
                                                            <div class="flex items-start gap-4 flex-wrap">
                                                                <div>
                                                                    <span class="avatar avatar-lg online">
                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto sm:!w-[50%]">
                                                                    <h5 class="mb-1 text-[15px] font-medium text-dark">Event Execution </h5>
                                                                    <p class="text-[13px] mb-0 text-textmuted dark:text-textmuted/50">Set up event space and coordinated with vendors for equipment and services.Facilitated event activities, speakers, and entertainment.</p>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-primarytint2color/10 text-primarytint2color">
                                                                        May 20, 2024
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-time flex items-center gap-2">
                                                        <span class="date">Monday</span>
                                                        <span class="time">13:05</span>
                                                        </div>
                                                        <div class="notification-icon">
                                                        <a href="javascript:void(0);" class="primary2"></a>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-time flex items-center gap-2 content-end">
                                                        <span class="date">Yesterday</span>
                                                        <span class="time">08:45</span>
                                                        </div>
                                                        <div class="notification-icon">
                                                        <a href="javascript:void(0);" class="primary3"></a>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-body notification-body-end border !border-primarytint3color/50">
                                                            <div class="flex items-start gap-4 flex-wrap">
                                                                <div>
                                                                    <span class="avatar avatar-lg online">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto sm:!w-[50%]">
                                                                    <h5 class="mb-1 text-[15px] font-medium text-dark">Product Development</h5>
                                                                    <p class="text-[13px] mb-0 text-textmuted dark:text-textmuted/50">Conducted market research and identified customer needs.Defined product specifications and features.</p>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-primarytint3color/10 text-primarytint3color">
                                                                        May 1 - May 15, 2024
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-body border !border-secondary/50">
                                                            <div class="flex items-start gap-4 flex-wrap">
                                                                <div>
                                                                    <span class="avatar avatar-lg online">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto sm:!w-[50%]">
                                                                    <h5 class="mb-1 text-[15px] font-medium text-dark">Team Building Retreat</h5>
                                                                    <p class="text-[13px] mb-0 text-textmuted dark:text-textmuted/50">Our team took a break to recharge and bond. We came back stronger!</p>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-secondary/10 text-secondary">
                                                                        February 15 - April 30, 2024
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-time flex items-center gap-2">
                                                        <span class="date">Today</span>
                                                        <span class="time">12:24</span>
                                                        </div>
                                                        <div class="notification-icon">
                                                        <a href="javascript:void(0);" class="secondary"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-time flex items-center gap-2 content-end">
                                                        <span class="date">Today</span>
                                                        <span class="time">04:11</span>
                                                        </div>
                                                        <div class="notification-icon">
                                                        <a href="javascript:void(0);" class="warning"></a>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-body notification-body-end border !border-warning/50">
                                                            <div class="flex items-start gap-4 flex-wrap">
                                                                <div>
                                                                    <span class="avatar avatar-lg online">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto sm:!w-[50%]">
                                                                    <h5 class="mb-1 text-[15px] font-medium text-dark">Design and Development </h5>
                                                                    <p class="text-[13px] mb-0 text-textmuted dark:text-textmuted/50">Designed user interface (UI) and user experience (UX) elements.Developed product functionalities.</p>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-warning/10 text-warning">
                                                                        January 20 - February 10, 2024
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-body border !border-info/50">
                                                            <div class="flex items-start gap-4 flex-wrap">
                                                                <div>
                                                                    <span class="avatar avatar-lg online">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto sm:!w-[50%]">
                                                                    <h5 class="mb-1 text-[15px] font-medium text-dark">Testing and Launch </h5>
                                                                    <p class="text-[13px] mb-0 text-textmuted dark:text-textmuted/50">Conducted comprehensive testing to ensure product quality and stability.Prepared marketing materials.</p>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-info/10 text-info">
                                                                        January 15, 2024
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <div class="notification-time flex items-center gap-2">
                                                        <span class="date">today</span>
                                                        <span class="time">02:52</span>
                                                        </div>
                                                        <div class="notification-icon">
                                                        <a href="javascript:void(0);" class="info"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lg:col-span-1 col-span-12"></div>
                                </div>
                                <div class="text-center mb-4">
                                    <button class="ti-btn bg-success/10 text-success ti-btn-loader mx-auto">
                                        <span class="me-2">Loading</span>
                                        <span class="loading"><i class="ri-loader-4-line text-[1rem]"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->
                    
                    <!-- Start:: row-3 -->
                    <div class="timeline-3">
                        <div class="max-w-[91.66666667%] mx-auto">
                            <div class="box">
                                <div class="box-header pb-4">
                                    <div class="box-title">Timeline 03</div>
                                </div>
                                <div class="box-body xxl:pt-12 xxl:mt-20">
                                    <div class="timeline-steps">
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                                                <div class="inner-circle"></div>
                                                <div class="box mb-0 border border-primarytint1color/25 !bg-primarytint1color/10">
                                                    <div class="box-body">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                        </span>
                                                        <p class="font-medium mt-1 mb-1"> October 6, 2024</p>
                                                        <p class="mb-1 font-semibold">Planning: <span class="text-textmuted dark:text-textmuted/50 font-normal mb-0 mb-lg-0">Research and competitor analysis.</span>  </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                                <div class="inner-circle"></div>
                                                <div class="box mb-0 border border-primarytint2color/25 !bg-primarytint2color/10 content-top">
                                                    <div class="box-body">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                        </span>
                                                        <p class="font-medium mt-1 mb-1">September 12, 2024</p>
                                                        <p class="mb-1 font-semibold">Design: <span class="text-textmuted dark:text-textmuted/50 font-normal mb-0 mb-lg-0">Frontend and backend components.</span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                                                <div class="inner-circle"></div>
                                                <div class="box mb-0 border border-primarytint3color/25 !bg-primarytint3color/10">
                                                    <div class="box-body">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                        </span>
                                                        <p class="font-medium mt-1 mb-1">July 20, 2024</p>
                                                        <p class="mb-1 font-semibold">Testing: <span class="text-textmuted dark:text-textmuted/50 font-normal mb-0 mb-lg-0">Conducted comprehensive testing.</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                                                <div class="inner-circle"></div>
                                                <div class="box mb-0 border border-secondary/25 !bg-secondary/10 content-top">
                                                    <div class="box-body">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                        </span>
                                                        <p class="font-medium mt-1 mb-1">May 18, 2024</p>
                                                        <p class="mb-1 font-semibold">Deployment: <span class="text-textmuted dark:text-textmuted/50 font-normal mb-0 mb-lg-0">Conducted final checks.</span></p> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-step mb-0">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                                                <div class="inner-circle"></div>
                                                <div class="box mb-0 border border-warning/25 !bg-warning/10">
                                                    <div class="box-body">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                        </span>
                                                        <p class="font-medium mt-1 mb-1"> April 5, 2024</p>
                                                        <p class="mb-1 font-semibold">Post-Launch: <span class="text-textmuted dark:text-textmuted/50 font-normal mb-0 mb-lg-0">Provided ongoing support.</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            

@endsection