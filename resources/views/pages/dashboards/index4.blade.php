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
                                    <li class="breadcrumb-item active" aria-current="page">CRM</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">CRM</h1>
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
                    <div class="grid xl:grid-cols-5 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-6">
                        <div class="">
                            <div class="box crm-card">
                                <div class="box-body">
                                    <div class="">
                                        <div class="flex justify-between mb-2">
                                            <div class="p-2 border border-primary/10 bg-primary/10 rounded-full">
                                                <span class="avatar avatar-md avatar-rounded bg-primary svg-white mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">Total Leads</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-1">
                                        <h4 class="mb-0 flex items-center">1,1125</h4>
                                        <span class="text-success badge bg-success/10 rounded-full flex items-center text-[11px] me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line text-[11px]"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="box crm-card">
                                <div class="box-body">
                                    <div class="">
                                        <div class="flex justify-between mb-2">
                                            <div class="p-2 border border-primarytint1color/10 bg-primarytint1color/10  rounded-full">
                                                <span class="avatar avatar-rounded avatar-md bg-primarytint1color svg-white mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M205.66,61.64l-144,144a8,8,0,0,1-11.32-11.32l144-144a8,8,0,0,1,11.32,11.31ZM50.54,101.44a36,36,0,0,1,50.92-50.91h0a36,36,0,0,1-50.92,50.91ZM56,76A20,20,0,1,0,90.14,61.84h0A20,20,0,0,0,56,76ZM216,180a36,36,0,1,1-10.54-25.46h0A35.76,35.76,0,0,1,216,180Zm-16,0a20,20,0,1,0-5.86,14.14A19.87,19.87,0,0,0,200,180Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">Conversion Rate</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-1">
                                        <h4 class="mb-0 flex items-center">15.8% </h4>
                                        <span class="text-danger badge bg-danger/10 rounded-full flex items-center text-[11px] me-0 ms-2 mb-0"><i class="ri-arrow-left-down-line text-[11px]"></i>-2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="box crm-card">
                                <div class="box-body">
                                    <div class="">
                                        <div class="flex justify-between mb-2">
                                            <div class="p-2 border border-primarytint2color/10 bg-primarytint2color/10  rounded-full">
                                                <span class="avatar avatar-rounded avatar-md bg-primarytint2color svg-white mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">Tasks Pending</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-1">
                                        <h4 class="mb-0 flex items-center">$3,132 </h4>
                                        <span class="text-success badge bg-success/10 rounded-full flex items-center text-[11px] me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line text-[11px]"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="box crm-card">
                                <div class="box-body">
                                    <div class="">
                                        <div class="flex justify-between mb-2">
                                            <div class="p-2 border border-primarytint3color/10 bg-primarytint3color/10  rounded-full">
                                                <span class="avatar avatar-rounded avatar-md bg-primarytint3color svg-white mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V48a8,8,0,0,1,16,0V156.69l50.34-50.35a8,8,0,0,1,11.32,0L128,132.69,180.69,80H160a8,8,0,0,1,0-16h40a8,8,0,0,1,8,8v40a8,8,0,0,1-16,0V91.31l-58.34,58.35a8,8,0,0,1-11.32,0L96,123.31l-56,56V200H224A8,8,0,0,1,232,208Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">Sales Pipeline</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-1">
                                        <h4 class="mb-0 flex items-center">$3,132</h4>
                                        <span class="text-success badge bg-success/10 rounded-full flex items-center text-[11px] me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line text-[11px]"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="box crm-card">
                                <div class="box-body">
                                    <div class="">
                                        <div class="flex justify-between mb-2">
                                            <div class="p-2 border border-secondary/10 bg-secondary/10  rounded-full">
                                                <span class="avatar avatar-rounded avatar-md bg-secondary svg-white mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136Zm-57.87,58.85a8,8,0,0,1-12.26,10.3C165.75,181.19,138.09,168,108,168s-57.75,13.19-77.87,37.15a8,8,0,0,1-12.25-10.3c14.94-17.78,33.52-30.41,54.17-37.17a68,68,0,1,1,71.9,0C164.6,164.44,183.18,177.07,198.13,194.85ZM108,152a52,52,0,1,0-52-52A52.06,52.06,0,0,0,108,152Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">New Contacts</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-1">
                                        <h4 class="mb-0 flex items-center">968</h4>
                                        <span class="text-danger badge bg-danger/10 rounded-full flex items-center text-[11px] me-0 ms-2 mb-0"><i class="ri-arrow-left-down-line text-[11px]"></i>-2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    
                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="md:col-span-12 xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden earnings-card box-bg-primary shadow-sm">
                                <div class="box-body p-0 text-white">
                                    <div class="p-4 absolute total-earnings-content w-full">
                                        <div class="flex gap-2 items-center">
                                            <div>
                                                <span class="mb-1 block">Total Revenue</span> 
                                                <h4 class="mb-1 text-white">$578,784</h4> 
                                                <div class="text-white text-[13px]"> 
                                                    <span class="opacity-70"> Increased By </span>  
                                                    <span class="badge bg-primarytint1color align-middle opacity-90">7.66%<i class="ti ti-arrow-narrow-up"></i></span>
                                                </div>
                                            </div><div class="avatar avatar-lg bg-white/10 svg-white ms-auto shadow-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M184,89.57V84c0-25.08-37.83-44-88-44S8,58.92,8,84v40c0,20.89,26.25,37.49,64,42.46V172c0,25.08,37.83,44,88,44s88-18.92,88-44V132C248,111.3,222.58,94.68,184,89.57ZM232,132c0,13.22-30.79,28-72,28-3.73,0-7.43-.13-11.08-.37C170.49,151.77,184,139,184,124V105.74C213.87,110.19,232,122.27,232,132ZM72,150.25V126.46A183.74,183.74,0,0,0,96,128a183.74,183.74,0,0,0,24-1.54v23.79A163,163,0,0,1,96,152,163,163,0,0,1,72,150.25Zm96-40.32V124c0,8.39-12.41,17.4-32,22.87V123.5C148.91,120.37,159.84,115.71,168,109.93ZM96,56c41.21,0,72,14.78,72,28s-30.79,28-72,28S24,97.22,24,84,54.79,56,96,56ZM24,124V109.93c8.16,5.78,19.09,10.44,32,13.57v23.37C36.41,141.4,24,132.39,24,124Zm64,48v-4.17c2.63.1,5.29.17,8,.17,3.88,0,7.67-.13,11.39-.35A121.92,121.92,0,0,0,120,171.41v23.46C100.41,189.4,88,180.39,88,172Zm48,26.25V174.4a179.48,179.48,0,0,0,24,1.6,183.74,183.74,0,0,0,24-1.54v23.79a165.45,165.45,0,0,1-48,0Zm64-3.38V171.5c12.91-3.13,23.84-7.79,32-13.57V172C232,180.39,219.59,189.4,200,194.87Z"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profit-report"></div>
                                    <div id="revenue-report"></div>
                                </div>
                            </div>
                            <div class="box border border-primarytint2color border-opacity-25 border-primary2">
                                <div class="box-body">
                                    <div class="flex gap-2 items-center my-1">
                                        <div>
                                            <span class="mb-1 block">Total Profit</span> 
                                            <h4 class="mb-1">$37,566</h4> 
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]"> 
                                                <span class=""> Increased By </span>  
                                                <span class="badge bg-primarytint3color align-middle">5.66%<i class="ti ti-arrow-narrow-up"></i></span>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-lg bg-primarytint2color/10 svg-primarytint2color ms-auto shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-12 xxl:col-span-6 col-span-12">
                            <div class="box ">
                                <div class="box-header justify-between">
                                    <div class="box-title">Sales Overview</div>
                                    <div class="flex gap-2">
                                        <button class="ti-btn ti-btn-sm ti-btn-outline-light">Today</button>
                                        <button class="ti-btn ti-btn-sm ti-btn-outline-light">Weakly</button>
                                        <button class="ti-btn ti-btn-sm ti-btn-light">Yearly</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="sales-overview-crm"></div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-12 xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Profit By Sale</div>
                                    <div class="ti-dropdown hs-dropdown"> 
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle" data-bs-toggle="dropdown"> Sort By<i class="ri-arrow-down-s-line align-middle d-inline-block"></i></a> 
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden"> 
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                        </ul> 
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none mb-0">
                                        <li class="ti-list-group-item border-0 p-0 mb-5">
                                            <div class="flex justify-between items-top">
                                                <div class="flex">
                                                    <span class="avatar avatar-rounded avatar-md bg-primary/10 !text-primary"><i
                                                            class='bx bx-wallet-alt text-lg'></i></span>
                                                    <div class="flex flex-col ms-2">
                                                        <p class="font-medium mb-0">Total Sales</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">10% Increases</p>
                                                    </div>
                                                </div>
                                                <h6 class="font-medium mb-0">$12,345</h6>
                                            </div>
                                            <div class="progress progress-xs mt-2 mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%"></div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item border-0 p-0 mb-5">
                                            <div class="flex justify-between items-top">
                                                <div class="flex">
                                                    <span
                                                        class="avatar avatar-md avatar-rounded bg-secondary/10 !text-secondary"><i
                                                            class='bx bx-money-withdraw text-lg'></i></span>
                                                    <div class="flex flex-col ms-2">
                                                        <p class="font-medium mb-0">Total Profit</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">12% Increases</p>
                                                    </div>
                                                </div>
                                                <h6 class="font-medium mb-0">$9,345</h6>
                                            </div>
                                            <div class="progress progress-xs mt-2 mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 75%"></div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item border-0 p-0 mb-5">
                                            <div class="flex justify-between items-top">
                                                <div class="flex">
                                                    <span class="avatar avatar-md avatar-rounded bg-primarytint1color/10 !text-primarytint1color"><i
                                                            class='bx bx-money-withdraw text-lg'></i></span>
                                                    <div class="flex flex-col ms-2">
                                                        <p class="font-medium mb-0">Total Revenue</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">11% Decrease</p>
                                                    </div>
                                                </div>
                                                <h6 class="font-medium mb-0">$9,345</h6>
                                            </div>
                                            <div class="progress progress-xs mt-2 mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primarytint1color" style="width: 78%"></div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item border-0 p-0 mb-2">
                                            <div class="flex justify-between items-top">
                                                <div class="flex">
                                                    <span class="avatar avatar-md avatar-rounded bg-primarytint2color/10 !text-primarytint2color"><i
                                                            class='bx bx-money-withdraw text-lg'></i></span>
                                                    <div class="flex flex-col ms-2">
                                                        <p class="font-medium mb-0">Total loss</p>
                                                        <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">11% Decrease</p>
                                                    </div>
                                                </div>
                                                <h6 class="font-medium mb-0">$11,345</h6>
                                            </div>
                                            <div class="progress progress-xs mt-2 mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primarytint2color" style="width: 68%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Tasks List
                                    </div>
                                    <div>
                                        <ul class="nav nav-tabs justify-end nav-tabs-header box-headertabs flex" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active bg-light" data-hs-tab="#today">Today</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link bg-light" data-hs-tab="#Upcoming">Upcoming</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body todo-tab p-0">
                                    <div class="">
                                        <div class="border-0 p-5" id="today" role="tabpanel">
                                            <ul class="list-none task-list-tab mb-0">
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Review Marketing Campaign Strategy
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primary/10 text-primary px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-hourglass-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Progress
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Nemo enim ipsam voluptatem</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check me-2">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Update Client Database
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-success/10 text-success px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-check-fill"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Completed
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Eos dolor ea</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Prepare Monthly Sales Report
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primarytint1color/10 px-1 py-[0.1rem] text-primarytint1color align-middle text-[11px] leading-none  rounded-full">
                                                                                <i class="ri-error-warning-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                Pending
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Schedule Team Meeting
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-success/10 text-success px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-check-fill"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Completed
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Nemo enim ipsam voluptatem</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Update User Database
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primary/10 text-primary px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-hourglass-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                Progress
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Eos dolor ea</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check me-2">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Respond to Customer Inquiries
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-success/10 text-success px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-check-fill"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                Completed
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Sed labore ut sed</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="border-0 hidden p-5" id="Upcoming" role="tabpanel">
                                            <ul class="list-none task-list-tab mb-0">
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Conduct Product Demo Sessions
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primarytint3color/10 !text-primarytint3color px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-time-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Not Started
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Organize Training Session
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primarytint3color/10 !text-primarytint3color px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-time-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Not Started
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Consetetur et amet dolor</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Analyze Market Trends
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primarytint3color/10 !text-primarytint3color px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-time-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Not Started
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Coordinate with Logistics Department
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primarytint3color/10 !text-primarytint3color px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-time-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Not Started
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Meeting On Updation
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primarytint3color/10 !text-primarytint3color px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-time-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Not Started
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist  flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-auto w-full">
                                                            <div class="flex items-start justify-between gap-1">
                                                                <div>
                                                                    <span class="block font-medium">Plan Social Media Content Calendar
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <span class="bg-primarytint3color/10 !text-primarytint3color px-1 py-[0.1rem] align-middle text-[10px] leading-none  rounded-full">
                                                                                <i class="ri-time-line"></i>
                                                                                <span
                                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                    role="tooltip">
                                                                                    Not Started
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Accusam aliquyam ea sea</p>
                                                                </div>
                                                                <div class="flex gap-1">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-info/10 ti-btn-icon text-info">
                                                                            <i class="ti ti-edit"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-danger/10 ti-btn-icon text-danger">
                                                                            <i class="ti ti-trash"></i>
                                                                            <span
                                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                            Delete
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Leads Overview
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-light border ti-btn-full ti-btn-sm" data-bs-toggle="dropdown">Yearly<i class="ti ti-chevron-down"></i>
                                        </button>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Yearly</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Weekly</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Monthly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body px-0 pb-2">
                                    <div id="Leads-overview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-12 xxl:col-span-5 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">Sales Performance</div>
                                    
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-light border btn-full ti-btn-sm" data-bs-toggle="dropdown">Today<i class="ti ti-chevron-down"></i>
                                        </button>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Weekly</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Monthly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="col">S.No.</th>
                                                    <th scope="col">Representative</th>
                                                    <th scope="col">Deals Closed</th>
                                                    <th scope="col">Leads</th>
                                                    <th scope="col">Rate (%)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="font-medium">John Joe</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>15</td>
                                                    <td>100</td>
                                                    <td>15.0<i class="ri-arrow-up-s-fill ms-1 text-success align-middle text-lg"></i></td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>2</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="font-medium">Jane Smith</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>20</td>
                                                    <td>120</td>
                                                    <td>16.7<i class="ri-arrow-down-s-fill ms-1 text-danger align-middle text-lg"></i></td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>3</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="font-medium">Michael Johnson</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>18</td>
                                                    <td>110</td>
                                                    <td>16.4<i class="ri-arrow-up-s-fill ms-1 text-success align-middle text-lg"></i></td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>4</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="font-medium">Emily Davis</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>22</td>
                                                    <td>130</td>
                                                    <td>16.9<i class="ri-arrow-up-s-fill ms-1 text-success align-middle text-lg"></i></td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>5</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="font-medium">Anna Garcia</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>17</td>
                                                    <td>105</td>
                                                    <td>16.2<i class="ri-arrow-down-s-fill ms-1 text-danger align-middle text-lg"></i></td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="font-medium">Kiara Nousin</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>20</td>
                                                    <td>35</td>
                                                    <td>57%<i class="ri-arrow-up-s-fill ms-1 text-success align-middle text-lg"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Leads Report
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <div class="ti-btn ti-btn-light border btn-full ti-btn-sm" data-bs-toggle="dropdown">View All<i class="ti ti-chevron-down ms-1"></i>
                                        </div>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body active-tab">
                                    <div class="table-responsive overflow-auto table-bordered-default">
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="col">S.NO</th>
                                                    <th scope="col">Lead</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <span class="">01</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-[14px]">Sophia Sara</p>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">sophiasara@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 547 6897</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Nova Solutions</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Won Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-textmuted dark:text-textmuted/50 me-1"></i>Italy</span>
                                                    </td>
                                                    <td>
                                                        <span>10-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$2457</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-info">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary2">
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
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <span class="">02</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-[14px]"> Simon Leo</p>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">simonleo@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 987 9874</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Global Innovations Ltd.</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">New Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-textmuted dark:text-textmuted/50 me-1"></i>Paris</span>
                                                    </td>
                                                    <td>
                                                        <span>12-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$14009</span>
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-info">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary2">
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
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <span class="">03</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-[14px]">Hadley Kylin</p>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">hadleykylin@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 654 6541</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Blue Enterprises</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">New Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-textmuted dark:text-textmuted/50 me-1"></i>Japan</span>
                                                    </td>
                                                    <td>
                                                        <span>14-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$20000</span>
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-info">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary2">
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
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <span class="">04</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-[14px]">Isha Bella</p>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">ishabella@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 321 1232</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Silver Techns.</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">Lost Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-textmuted dark:text-textmuted/50 me-1"></i>Califonia</span>
                                                    </td>
                                                    <td>
                                                        <span>20-06-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$24000</span>
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-info">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary2">
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
                                                        <span class="">05</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-[14px]">Red Siddique</p>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">redsiddique@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 658 3256</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Omega Systems Ltd.</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">New Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-textmuted dark:text-textmuted/50 me-1"></i>Brazil</span>
                                                    </td>
                                                    <td>
                                                        <span>03-06-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$35789</span>
                                                    </td>
                                                    <td>
                                                    <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-info">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon !rounded-full me-2 ti-btn-soft-primary2">
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
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center flex-wrap">
                                        <div>Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i></div>
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

        <!-- CRM Dashboard --> 
        @vite('resources/assets/js/crm-dashboard.js')
        

@endsection