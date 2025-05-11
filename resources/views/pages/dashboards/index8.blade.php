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
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Dashboards
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Jobs</h1>
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

                    <!-- Start::row-1 -->
                    <div class="grid xxl:grid-cols-5 xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-6">
                        <div class="col">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex gap-4 items-center">
                                        <div class="flex-auto">
                                            <p class="text-textmuted dark:text-textmuted/50 font-medium mb-2">JOB APPLICATIONS</p>
                                            <h4 class="mb-1">47,784</h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">1.6%<i class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                                        </div>
                                        <span class="avatar avatar-lg bg-primary/10 svg-primary avatar-rounded border-[3px] flex-shrink-0 border-primary/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,80l-96,56L32,80l96-56Z" opacity="0.2"></path><path d="M230.91,172A8,8,0,0,1,228,182.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,36,169.09l92,53.65,92-53.65A8,8,0,0,1,230.91,172ZM220,121.09l-92,53.65L36,121.09A8,8,0,0,0,28,134.91l96,56a8,8,0,0,0,8.06,0l96-56A8,8,0,1,0,220,121.09ZM24,80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26Z"></path></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box ">
                                <div class="box-body">
                                    <div class="flex gap-4 items-center">
                                        <div class="flex-auto">
                                            <p class="text-textmuted dark:text-textmuted/50 font-medium mb-2">INTERVIEW SCHEDULE</p>
                                            <h4 class="mb-1">5,358</h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased By <span class="text-danger">3.1%<i class="ti ti-arrow-narrow-down text-[1rem]"></i></span></div>
                                        </div>
                                        <span class="avatar avatar-lg bg-primarytint1color/10 svg-primarytint1color avatar-rounded border-[3px] border-opacity-50 flex-shrink-0 border-primarytint1color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z"></path></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box ">
                                <div class="box-body">
                                    <div class="flex gap-4 items-center">
                                        <div class="flex-auto">
                                            <p class="text-textmuted dark:text-textmuted/50 font-medium mb-2">SHORTLISTED</p>
                                            <h4 class="mb-1">784</h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">1.3%<i class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                                        </div>
                                        <span class="avatar avatar-lg bg-primarytint2color/10 svg-primarytint2color avatar-rounded border-[3px] flex-shrink-0 border-primarytint2color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M120,104A40,40,0,1,1,80,64,40,40,0,0,1,120,104Z" opacity="0.2"></path><path d="M152,80a8,8,0,0,1,8-8h88a8,8,0,0,1,0,16H160A8,8,0,0,1,152,80Zm96,40H160a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16Zm0,48H184a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm-96.25,22a8,8,0,0,1-5.76,9.74,7.55,7.55,0,0,1-2,.26,8,8,0,0,1-7.75-6c-6.16-23.94-30.34-42-56.25-42s-50.09,18.05-56.25,42a8,8,0,0,1-15.5-4c5.59-21.71,21.84-39.29,42.46-48a48,48,0,1,1,58.58,0C129.91,150.71,146.16,168.29,151.75,190ZM80,136a32,32,0,1,0-32-32A32,32,0,0,0,80,136Z"></path></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box ">
                                <div class="box-body">
                                    <div class="flex gap-4 items-center">
                                        <div class="flex-auto">
                                            <p class="text-textmuted dark:text-textmuted/50 font-medium mb-2">REJECTED APPLICATIONS</p>
                                            <h4 class="mb-1">47,784</h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased By <span class="text-danger">0.3%<i class="ti ti-arrow-narrow-down text-[1rem]"></i></span></div>
                                        </div>
                                        <span class="avatar avatar-lg bg-primarytint3color/10  avatar-rounded border-[3px] flex-shrink-0 border-primarytint3color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="!fill-primarytint3color" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box ">
                                <div class="box-body">
                                    <div class="flex gap-4 items-center">
                                        <div class="flex-auto">
                                            <p class="text-textmuted dark:text-textmuted/50 font-medium mb-2">ON-HOLD APPLICATIONS</p>
                                            <h4 class="mb-1">11,574</h4>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">0.1%<i class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                                        </div>
                                        <span class="avatar avatar-lg bg-secondary/10 svg-secondary avatar-rounded border-[3px] flex-shrink-0 border-secondary/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M159.46,53l-17.78,83H114.32L96.54,53A24,24,0,0,1,120,24h16A24,24,0,0,1,159.46,53Z" opacity="0.2"></path><path d="M224,224a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,224Zm0-80v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V144a16,16,0,0,1,16-16h56.43L88.72,54.71A32,32,0,0,1,120,16h16a32,32,0,0,1,31.29,38.71L151.57,128H208A16,16,0,0,1,224,144ZM120.79,128h14.42l16.43-76.65A16,16,0,0,0,136,32H120a16,16,0,0,0-15.65,19.35ZM208,184V144H48v40H208Z"></path></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Job Statistics</div>
                                    <div class="flex gap-2">
                                        <div class="ti-btn ti-btn-sm ti-btn-outline-light">Today</div>
                                        <div class="ti-btn ti-btn-sm ti-btn-outline-light">Weakly</div>
                                        <div class="ti-btn ti-btn-sm ti-btn-light">Yearly</div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="jobs-statistics"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="mb-4 flex items-center justify-between">
                                <h6 class="mb-0">Need To Hire:</h6>
                                <div>
                                    <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-primary ">View All</button>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <ul class="mb-0 list-none hire-list">
                                        <li>
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-lg bg-primary/10 !text-primary">UD</span>
                                                </a>
                                                <div class="flex-auto truncate">
                                                    <a href="javascript:void(0);" class="font-medium text-[14px] w-75 truncate block"> UI/UX Designers</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-75 truncate">Status: <span class="text-success">75% completed</span></p>
                                                </div>
                                                <div class=" text-end ms-auto">
                                                    <div class="text-textmuted dark:text-textmuted/50 opacity-70 text-xs">Candidates</div>
                                                    <div class="font-medium">03</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-lg bg-primarytint1color/10 !text-primarytint1color">SD</span>
                                                </a>
                                                <div class="flex-auto truncate">
                                                    <a href="javascript:void(0);" class="font-medium text-[14px] w-75 truncate block"> Senior Developer</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-75 truncate">Status: <span class="text-danger">15% completed</span></p>
                                                </div>
                                                <div class=" text-end ms-auto">
                                                    <div class="text-textmuted dark:text-textmuted/50 opacity-70 text-xs">Candidates</div>
                                                    <div class="font-medium">12</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-lg bg-primarytint2color/10 !text-primarytint2color">MM</span>
                                                </a>
                                                <div class="flex-auto truncate">
                                                    <a href="javascript:void(0);" class="font-medium text-[14px] w-75 truncate block"> Marketing Manager</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-75 truncate">Status: <span class="text-warning">pending</span></p>
                                                </div>
                                                <div class=" text-end ms-auto">
                                                    <div class="text-textmuted dark:text-textmuted/50 opacity-70 text-xs">Candidates</div>
                                                    <div class="font-medium">08</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-lg bg-primarytint3color/10 !text-primarytint3color">CW</span>
                                                </a>
                                                <div class="flex-auto truncate">
                                                    <a href="javascript:void(0);" class="font-medium text-[14px] w-75 truncate block"> Content Writers</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-75 truncate">Status: <span class="text-success">55% completed</span></p>
                                                </div>
                                                <div class=" text-end ms-auto">
                                                    <div class="text-textmuted dark:text-textmuted/50 opacity-70 text-xs">Candidates</div>
                                                    <div class="font-medium">01</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!mb-0">
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-lg bg-warning/10 !text-warning">RD</span>
                                                </a>
                                                <div class="flex-auto truncate">
                                                    <a href="javascript:void(0);" class="font-medium text-[14px] w-75 truncate block"> React Developer</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-75 truncate">Status: <span class="text-danger">15% completed</span></p>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <div class="text-textmuted dark:text-textmuted/50 opacity-70 text-xs">Candidates</div>
                                                    <div class="font-medium">03</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title w-95 truncate">
                                        Candidates By Gender
                                    </div>
                                </div>
                                <div class="box-body m-3 pb-4 px-0 bg-light rounded-sm">
                                    <div id="job-acceptance"></div>
                                </div>
                                <div class="box-footer">    
                                    <div class="grid grid-cols-12 gap-y-4">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="flex items-end gap-4 flex-wrap justify-between">
                                                <div>
                                                    <h5 class="mb-0">15,754</h5>
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs op-8">Male Candidates</span>
                                                </div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[13px]">
                                                    <span class="text-success"><i class="ri-arrow-up-s-fill"></i>1.6%<i class="ri-bar-chart-fill ms-2 text-textmuted dark:text-textmuted/50"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="flex items-end gap-4 flex-wrap justify-between">
                                                <div>
                                                    <h5 class="mb-0">4,872</h5>
                                                    <span class="text-textmuted dark:text-textmuted/50 text-xs op-8">Female Candidates</span>
                                                </div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[13px]">
                                                    <span class="text-danger"><i class="ri-arrow-down-s-fill"></i>1.3%<i class="ri-bar-chart-fill ms-2 text-textmuted dark:text-textmuted/50"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="flex items-end gap-4 flex-wrap justify-between">
                                                <div>
                                                    <h5 class="mb-0">2.5k</h5>
                                                    <span class="text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">Total Candidates</span>
                                                </div>
                                                <div class="text-textmuted dark:text-textmuted/50 text-[13px]">
                                                    <span class="text-success"><i class="ri-arrow-up-s-fill"></i>0.6%<i class="ri-bar-chart-fill ms-2 text-textmuted dark:text-textmuted/50"></i></span>
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
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 md:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        New Applicants
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <div class="ti-btn ti-btn-outline-light border ti-btn-full ti-btn-sm"
                                            data-bs-toggle="dropdown">Vew All<i class="ti ti-chevron-down "></i>
                                        </div>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="mb-0 list-none">
                                        <li class="mb-[1.5rem]">
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-md bg-primary/10 text-primary">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                    </span>
                                                </a>
                                                <div class="grow">
                                                    <a href="javascript:void(0);" class="text-[13px] font-medium"> Mona Cruzis</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 font-normal text-xs"><span class="font-medium">React Developer</span></p>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info">
                                                            <i class="ti ti-phone align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary1">
                                                            <i class="ti ti-at align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Mail
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-[1.5rem]">
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-md bg-primary/10 text-primary">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                    </span>
                                                </a>
                                                <div class="grow">
                                                    <a href="javascript:void(0);" class="text-[13px] font-medium"> Soyab Khan</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 font-normal text-xs"><span class="font-medium">Java Developer</span></p>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info">
                                                            <i class="ti ti-phone align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary1">
                                                            <i class="ti ti-at align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Mail
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-[1.5rem]">
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-md bg-primarytint2color text-white">
                                                        KM
                                                    </span>
                                                </a>
                                                <div class="grow">
                                                    <a href="javascript:void(0);" class="text-[13px] font-medium"> Katherine Myn </a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 font-normal text-xs"><span class="font-medium">UI Developer</span></p>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info">
                                                            <i class="ti ti-phone align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary1">
                                                            <i class="ti ti-at align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Mail
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-[1.5rem]">
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-md bg-primary/10 text-primary">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                    </span>
                                                </a>
                                                <div class="grow">
                                                    <a href="javascript:void(0);" class="text-[13px] font-medium"> James Roy</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 font-normal text-xs"><span class="font-medium">React Developer</span></p>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info">
                                                            <i class="ti ti-phone align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary1">
                                                            <i class="ti ti-at align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Mail
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-[1.5rem]">
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-md bg-primary/10 text-primary">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                    </span>
                                                </a>
                                                <div class="grow">
                                                    <a href="javascript:void(0);" class="text-[13px] font-medium"> Cayathe Dore </a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 font-normal text-xs"><span class="font-medium">Vue.js Developer</span></p>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info">
                                                            <i class="ti ti-phone align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary1">
                                                            <i class="ti ti-at align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Mail
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-1">
                                            <div class="flex items-center">
                                                <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                                    <span class="avatar avatar-md bg-primarytint3color text-white">
                                                        SP
                                                    </span>
                                                </a>
                                                <div class="grow">
                                                    <a href="javascript:void(0);" class="text-[13px] font-medium"> Surjith Pandey</a>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 font-normal text-xs"><span class="font-medium">UX Developer</span></p>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info">
                                                            <i class="ti ti-phone align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Call
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary1">
                                                            <i class="ti ti-at align-middle"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Mail
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 md:col-span-12 col-span-12">
                            <div class="mb-3 flex items-center justify-between">
                                <h6 class="mb-0">Recent Jobs:</h6>
                                <div>
                                    <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-primary ">View All</button>
                                </div>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head recent-job">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col">Job Title</th>
                                                    <th scope="col">Applicants</th>
                                                    <th scope="col">Openings End</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-sm bg-primary/10 !text-primary">
                                                                    <i class="ri-android-line  text-xl"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Sr. Mobile App Developer</p>
                                                                <p class=" mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">posted: 1 day ago</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">56 Applicants</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-medium">27 May 2024</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i class="ri-map-pin-fill text-xs me-1"></i>Georgia, XY</p>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary1"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-sm  bg-secondary/10 !text-secondary">
                                                                    <i class="ri-database-2-line  text-xl"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Data Scientist Trainee</p>
                                                                <p class=" mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">posted: 1 day ago</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">784 Applicants</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-medium">03 Jun 2024</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i class="ri-map-pin-fill text-xs me-1"></i>Siberia, PQ</p>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary1"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-sm  bg-info/10 !text-info">
                                                                    <i class="ri-reactjs-line text-xl"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">React Developer</p>
                                                                <p class=" mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">posted: 1 day ago</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">421 Applicants</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-medium">18 Jun 2024</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i class="ri-map-pin-fill text-xs me-1"></i>Italy, Rs</p>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary1"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-sm  bg-success/10 !text-success">
                                                                    <i class="ri-amazon-line  text-xl"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">AWS Engineer</p>
                                                                <p class=" mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">posted: 1 day ago</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">257 Applicants</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-medium">15 Jun 2024</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i class="ri-map-pin-fill text-xs me-1"></i>Georgia, XY</p>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary1"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-sm  bg-warning/10 !text-warning">
                                                                    <i class="ri-layout-masonry-line  text-xl"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Ui Developer</p>
                                                                <p class=" mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">posted: 2 days ago</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">87 Applicants</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-medium">20 Jun 2024</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i class="ri-map-pin-fill text-xs me-1"></i>Canada, UK</p>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary1"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-sm  bg-danger/10 !text-danger">
                                                                    <i class="ri-angularjs-line  text-xl"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-medium">Angular Developer</p>
                                                                <p class=" mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">posted: 3 days ago</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">86 Applicants</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-medium">23 Jun 2024</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i class="ri-map-pin-fill text-xs me-1"></i>Germany, US</p>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0)" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary1"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 md:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Activity Feed
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <div class="ti-btn ti-btn-outline-light border ti-btn-full ti-btn-sm ti-dropdown-toggle hs-dropdown-toggle"
                                            data-bs-toggle="dropdown">Vew All<i class="ti ti-chevron-down ms-1"></i>
                                        </div>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group list-group-flush list-none !border-0 activity-feed">
                                        <li class="flex gap-2 items-start">
                                            <div class="avatar avatar-sm bg-primary/10 !text-primary flex-shrink-0 avatar-rounded border border-primary/10">
                                                <i class="ri-user-fill"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="font-medium">New Job Posted</span>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-[90%] truncate">Frontend Developer</p>
                                            </div>
                                            <span class="text-textmuted dark:text-textmuted/50 ms-auto text-xs flex-shrink-0">2 mins ago</span>
                                        </li>
                                        <li class="flex gap-2 items-start">
                                            <div class="avatar avatar-sm bg-primarytint1color/10 !text-primarytint1color flex-shrink-0 avatar-rounded border border-primarytint1color/10">
                                                <i class="ri-file-list-3-fill"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="font-medium">New Application</span>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-[90%] truncate"><a href="javascript:void(0);" class="font-medium text-primary">John Doe</a> applied for Frontend Developer position</p>
                                            </div>
                                            <span class="text-textmuted dark:text-textmuted/50 ms-auto text-xs flex-shrink-0">5 mins ago</span>
                                        </li>
                                        <li class="flex gap-2 items-start">
                                            <div class="avatar avatar-sm bg-primarytint2color/10 !text-primarytint2color flex-shrink-0 avatar-rounded border border-primarytint2color/10">
                                                <i class="ri-user-fill"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="font-medium">New Job Posted</span>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-[90%] truncate"><span class="font-medium text-primarytint1color">#245</span> Backend Developer </p>
                                            </div>
                                            <span class="text-textmuted dark:text-textmuted/50 ms-auto text-xs flex-shrink-0">10 mins ago</span>
                                        </li>
                                        <li class="flex gap-2 items-start">
                                            <div class="avatar avatar-sm bg-primarytint3color/10 !text-primarytint3color flex-shrink-0 avatar-rounded border border-primarytint3color/10">
                                                <i class="ri-user-fill"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="font-medium">New Job Posted</span>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-[90%] truncate">Backend Developer</p>
                                            </div>
                                            <span class="text-textmuted dark:text-textmuted/50 ms-auto text-xs flex-shrink-0">10 mins ago</span>
                                        </li>
                                        <li class="flex gap-2 items-start">
                                            <div class="avatar avatar-sm bg-secondary/10 !text-secondary flex-shrink-0 avatar-rounded border border-secondary/10">
                                                <i class="ri-calendar-check-fill"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="font-medium">Updated Interview Dates</span>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-[90%] truncate">Updated new interview scheduled and added in the <a href="javascript:void(0);" class="font-medium text-primarytint2color underline">notification list</a></p>
                                            </div>
                                            <span class="text-textmuted dark:text-textmuted/50 ms-auto text-xs flex-shrink-0">15 mins ago</span>
                                        </li>
                                        <li class="flex gap-2 items-start">
                                            <div class="avatar avatar-sm bg-danger/10 !text-danger flex-shrink-0 avatar-rounded border border-danger/10">
                                                <i class="ri-calendar-check-fill"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="font-medium">Rescheduled Interview Dates</span>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-[90%] truncate">Rescheduled interview dates <a href="javascript:void(0);" class="font-medium text-primarytint2color underline">notification list</a></p>
                                            </div>
                                            <span class="text-textmuted dark:text-textmuted/50 ms-auto text-xs flex-shrink-0">15 mins ago</span>
                                        </li>
                                        <li class="flex gap-2 items-start !mb-0">
                                            <div class="avatar avatar-sm bg-warning/10 !text-warning flex-shrink-0 avatar-rounded border border-warning/25">
                                                <i class="ri-time-fill"></i>
                                            </div>
                                            <div class="truncate">
                                                <span class="font-medium">Closed Job Post</span>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs w-[90%] truncate">closed React Job ID: <span class="font-medium text-primary">#454</span></p>
                                            </div>
                                            <span class="text-textmuted dark:text-textmuted/50 ms-auto text-xs flex-shrink-0">15 mins ago</span>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Recent Applicants
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <div class="">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn bg-primary !mb-0 !m-0 text-white ti-btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
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
                                        <table class="ti-custom-table text-nowrap ti-custom-table-hover">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Candidate</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Designation</th>
                                                    <th scope="col">Mail</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="row">01</th>
                                                    <td>
                                                        <div class="flex items-center font-medium">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>Mayor Kelly
                                                        </div>
                                                    </td>
                                                    <td>Manufacture</td>
                                                    <td><span class="text-primary">Team Lead</span></td>
                                                    <td>mayorkelly@gmail.com</td>
                                                    <td>
                                                        <div class="inline-flex items-center">
                                                            <i class="ri-map-pin-line text-textmuted dark:text-textmuted/50"></i>
                                                            <span class="ms-1">Germany</span>
                                                        </div>
                                                    </td>
                                                    <td>Sep 15 - Oct 12, 2023</td>
                                                    <td><span class="badge bg-primary/10 text-primary">Full Time</span></td>
                                                    <td>
                                                        <div class="hstack gap-2 text-[15px]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="row">02</th>
                                                    <td>
                                                        <div class="flex items-center font-medium">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>Andrew Garfield
                                                        </div>
                                                    </td>
                                                    <td>Development</td>
                                                    <td><span class="text-secondary">Sr.UI Developer</span></td>
                                                    <td>andrewgarfield@gmail.com</td>
                                                    <td>
                                                        <div class="inline-flex items-center">
                                                            <i class="ri-map-pin-line text-textmuted dark:text-textmuted/50"></i>
                                                            <span class="ms-1">Canada</span>
                                                        </div>
                                                    </td>
                                                    <td>Apr 10 - Dec 12, 2023</td>
                                                    <td><span class="badge bg-primary/10 text-primary">Full Time</span></td>
                                                    <td>
                                                        <div class="hstack gap-2 text-[15px]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon waves-effect waves-light ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon waves-effect waves-light ti-btn-sm ti-btn-soft-primary"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="row">03</th>
                                                    <td>
                                                        <div class="flex items-center font-medium">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>Simon Cowel
                                                        </div>
                                                    </td>
                                                    <td>Service</td>
                                                    <td><span class="text-secondary">Sr.UI Developer</span></td>
                                                    <td>simoncowel234@gmail.com</td>
                                                    <td>
                                                        <div class="inline-flex items-center">
                                                            <i class="ri-map-pin-line text-textmuted dark:text-textmuted/50"></i>
                                                            <span class="ms-1">Europe</span>
                                                        </div>
                                                    </td>
                                                    <td>Sep 15 - Oct 12, 2023</td>
                                                    <td><span class="badge bg-secondary/10 text-secondary">Part Time</span></td>
                                                    <td>
                                                        <div class="hstack gap-2 text-[15px]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon waves-effect waves-light ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon waves-effect waves-light ti-btn-sm ti-btn-soft-primary"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="row">04</th>
                                                    <td>
                                                        <div class="flex items-center font-medium">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>Mirinda Hers
                                                        </div>
                                                    </td>
                                                    <td>Marketing</td>
                                                    <td><span class="text-danger">Sales Executive</span></td>
                                                    <td>mirindahers@gmail.com</td>
                                                    <td>
                                                        <div class="inline-flex items-center">
                                                            <i class="ri-map-pin-line text-textmuted dark:text-textmuted/50"></i>
                                                            <span class="ms-1">USA</span>
                                                        </div>
                                                    </td>
                                                    <td>Apr 10 - Dec 12, 2023</td>
                                                    <td><span class="badge bg-danger/10 text-danger">Hybride</span></td>
                                                    <td>
                                                        <div class="hstack gap-2 text-[15px]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon waves-effect waves-light ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon waves-effect waves-light ti-btn-sm ti-btn-soft-primary"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">05</th>
                                                    <td>
                                                        <div class="flex items-center font-medium">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                            </span>Andrew Garfield
                                                        </div>
                                                    </td>
                                                    <td>Development</td>
                                                    <td><span class="text-secondary">Sr.UI Developer</span></td>
                                                    <td>andrewgarfield@gmail.com</td>
                                                    <td>
                                                        <div class="inline-flex items-center">
                                                            <i class="ri-map-pin-line text-textmuted dark:text-textmuted/50"></i>
                                                            <span class="ms-1">London</span>
                                                        </div>
                                                    </td>
                                                    <td>Jun 10 - Dec 12, 2022</td>
                                                    <td><span class="badge bg-success/10 text-success">Freelancer</span></td>
                                                    <td>
                                                        <div class="hstack gap-2 text-[15px]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon waves-effect waves-light ti-btn-sm ti-btn-soft-success"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon waves-effect waves-light ti-btn-sm ti-btn-soft-primary"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center flex-wrap">
                                        <div>
                                            Showing 6 Entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
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
                    </div>
                    <!-- End::row-4 -->

                </div>
            </div> 
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Jobs Dashboard --> 
        @vite('resources/assets/js/jobs-dashboard.js')
        
            
@endsection