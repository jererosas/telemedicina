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
                                    <li class="breadcrumb-item active" aria-current="page">HRM</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">HRM</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="m-4 bg-light rounded-sm border border-defaultborder dark:border-defaultborder/10">
                                    <div class="box-body pb-4 mb-2">
                                        <div class="flex items-center w-full justify-between gap-1">
                                            <div>
                                                <p class="mb-1 text-textmuted dark:text-textmuted/50 font-medium">Total Employees</p>
                                                <h4 class="mb-0 font-medium">12,116</h4>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-success rounded-full items-center text-[11px] inline-flex"><i class="ri-arrow-left-up-line text-[11px] me-1"></i> 2.5%</span>
                                                <div class="text-textmuted dark:text-textmuted/50 text-xs mt-1">Increased from last year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="employees"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="m-4 bg-light rounded-sm border border-defaultborder dark:border-defaultborder/10">
                                    <div class="box-body pb-4 mb-2">
                                        <div class="flex items-center w-full justify-between gap-1">
                                            <div>
                                                <p class="mb-1 text-textmuted dark:text-textmuted/50 font-medium">Total Job Applied</p>
                                                <h4 class="mb-0 font-medium">15,784</h4>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-danger rounded-full items-center text-[11px] inline-flex"><i class="ri-arrow-left-down-line text-[11px] me-1"></i> 1.5%</span>
                                                <div class="text-textmuted dark:text-textmuted/50 text-xs mt-1">Decreased from last year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="job-applied"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="m-4 bg-light rounded-sm border border-defaultborder dark:border-defaultborder/10">
                                    <div class="box-body pb-4 mb-2">
                                        <div class="flex items-center w-full justify-between gap-1">
                                            <div>
                                                <p class="mb-1 text-textmuted dark:text-textmuted/50 font-medium">Total Compensation</p>
                                                <h4 class="mb-0 font-medium">$56,784</h4>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-success rounded-full items-center text-[11px] inline-flex"><i class="ri-arrow-left-up-line text-[11px] me-1"></i> 6.0%</span>
                                                <div class="text-textmuted dark:text-textmuted/50 text-xs mt-1">Increased from last year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="total-payouts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="m-4 bg-light rounded-sm border border-defaultborder dark:border-defaultborder/10">
                                    <div class="box-body pb-4 mb-2">
                                        <div class="flex items-center w-full justify-between gap-1">
                                            <div>
                                                <p class="mb-1 text-textmuted dark:text-textmuted/50 font-medium">Annual Compensation </p>
                                                <h4 class="mb-0 font-medium">$6.8k</h4>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-success rounded-full items-center text-[11px] inline-flex"><i class="ri-arrow-left-up-line text-[11px] me-1"></i> 6.0%</span>
                                                <div class="text-textmuted dark:text-textmuted/50 text-xs mt-1">Increased from last year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="gross-salary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6 col-span-12">
                        <div class="xxl:col-span-8 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Project Analysis</div>
                                    <div class="flex gap-2">
                                        <div class="ti-btn ti-btn-sm ti-btn-outline-light">Today</div>
                                        <div class="ti-btn ti-btn-sm ti-btn-outline-light">Weakly</div>
                                        <div class="ti-btn ti-btn-sm ti-btn-light">Yearly</div>
                                    </div>
                                </div>
                                <div class="box-body pb-1">
                                    <ul class="flex flex-wrap mb-0 list-none gap-5 justify-around p-4 border rounded-sm border-dashed dark:border-defaultborder/10">
                                        <li>
                                            <div class="flex items-start justify-between gap-2">
                                                <div class="leading-none me-1">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                                        <i class="ri-stack-line text-xl"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block mb-0 font-medium text-textmuted dark:text-textmuted/50">New</span>
                                                    <h4 class="font-medium mb-0">64,241</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="flex items-start justify-between gap-2">
                                                <div class="leading-none me-1">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primarytint1color/10 !text-primarytint1color">
                                                        <i class="ri-rocket-line text-xl"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block mb-0 font-medium text-textmuted dark:text-textmuted/50">Inprogress</span>
                                                    <h4 class="font-medium mb-0">1,543</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="flex items-start justify-between gap-2">
                                                <div class="leading-none me-1">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primarytint2color/10 !text-primarytint2color">
                                                        <i class="ri-check-line text-xl"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block mb-0 font-medium text-textmuted dark:text-textmuted/50">Completed</span>
                                                    <h4 class="font-medium mb-0">3,848</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="flex items-start justify-between gap-2">
                                                <div class="leading-none me-1">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primarytint3color/10 !text-primarytint3color">
                                                        <i class="ri-time-line text-xl"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block mb-0 font-medium text-textmuted dark:text-textmuted/50">Onhold</span>
                                                    <h4 class="font-medium mb-0">938</h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="project-analysis"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Upcoming Events</div>
                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm bg-primary/10 !text-primary">
                                        View All
                                    </a>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none timeline-widget1 mb-0">
                                        <li class="timeline-widget-list">
                                            <div class="flex items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-primary/10 !text-primary me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" font-medium leading-none mb-1">02</div>
                                                        <div class="text-xs text-defaulttextcolor font-medium leading-none">Mon</div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap flex-auto items-top justify-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content">You have an announcement - Ipsum Est Diam Eirmod</p>
                                                        <p class="mb-0 text-xs leading-none text-textmuted dark:text-textmuted/50">10:00AM<span class="badge bg-primary/10 ms-2 text-primary">Announcement</span></p>
                                                    </div>
                                                    <div class="ti-dropdown hs-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-primarytint1color/10 !text-primarytint1color me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" font-medium leading-none mb-1">08</div>
                                                        <div class="text-xs text-defaulttextcolor font-medium leading-none">Tue</div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap flex-auto items-top justify-between flex-xl-nowrap gap-2">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content ">National holiday - Vero Jayanti</p>
                                                        <p class="mb-0 text-xs leading-none text-textmuted dark:text-textmuted/50"><span class="badge bg-warning/10 text-warning">Holiday</span></p>
                                                    </div>
                                                    <div class="ti-dropdown hs-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-primarytint2color/10 !text-primarytint2color me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" font-medium leading-none mb-1">12</div>
                                                        <div class="text-xs text-defaulttextcolor font-medium leading-none">Wed</div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap flex-auto items-top justify-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content">John pup birthday - Team Member</p>
                                                        <p class="mb-2 text-xs leading-none text-textmuted dark:text-textmuted/50">09:00AM<span class="badge bg-success/10 text-success ms-2">Birthday</span></p>
                                                    </div>
                                                    <div class="ti-dropdown hs-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-primarytint3color/10 !text-primarytint3color me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" font-medium leading-none mb-1">20</div>
                                                        <div class="text-xs text-defaulttextcolor font-medium leading-none">Thu</div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap flex-auto items-top justify-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content">National Holiday - Dolore Ipsum</p>
                                                        <p class="mb-0 text-xs leading-none text-textmuted dark:text-textmuted/50"><span class="badge bg-warning/10 text-warning">Holiday</span></p>
                                                    </div>
                                                    <div class="ti-dropdown hs-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-warning/10 !text-warning me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" font-medium leading-none mb-1">12</div>
                                                        <div class="text-xs text-defaulttextcolor font-medium leading-none">Wed</div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap flex-auto items-top justify-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content ">Amet sed no dolor kasd - Et Dolores Tempor Erat</p>
                                                        <p class="mb-0 text-xs leading-none text-textmuted dark:text-textmuted/50">04:00PM<span class="badge bg-primary/10 text-primary ms-2">Announcement</span></p>
                                                    </div>
                                                    <div class="ti-dropdown hs-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-secondary/10 !text-secondary me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" font-medium leading-none mb-1">21</div>
                                                        <div class="text-xs text-defaulttextcolor font-medium leading-none">Fri</div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap flex-auto items-top justify-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content">John pup birthday - Team Member</p>
                                                        <p class="mb-2 text-xs leading-none text-textmuted dark:text-textmuted/50">09:00AM<span class="badge bg-success/10 text-success ms-2">Birthday</span></p>
                                                    </div>
                                                    <div class="ti-dropdown hs-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">Employee's Leave</div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light">View All</a>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col">Employee</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Days</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-xs font-medium">Socrates Itumay</p>
                                                                <a href="javascript:void(0);" class="text-[11px] text-textmuted dark:text-textmuted/50">Team Lead</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Sick</span>
                                                    </td>
                                                    <td>
                                                        <span class="">2 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Approved</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-xs">30-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info !mb-0">
                                                                    <i class="ti ti-pencil"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary2 !m-0">
                                                                    <i class="ti ti-trash"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Delete
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-xs font-medium">Samantha Paul</p>
                                                                <a href="javascript:void(0);" class="text-[11px] text-textmuted dark:text-textmuted/50">Sr.UI Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Casual</span>
                                                    </td>
                                                    <td>
                                                        <span class="">1 Day</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-xs">29-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info !mb-0">
                                                                    <i class="ti ti-pencil"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary2 !m-0">
                                                                    <i class="ti ti-trash"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Delete
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-xs font-medium">Gray Noal</p>
                                                                <a href="javascript:void(0);" class="text-[11px] text-textmuted dark:text-textmuted/50">Java Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Paternity</span>
                                                    </td>
                                                    <td>
                                                        <span class="">5 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Approved</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-xs">28-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info !mb-0">
                                                                    <i class="ti ti-pencil"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary2 !m-0">
                                                                    <i class="ti ti-trash"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Delete
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-xs font-medium">Gray Noal</p>
                                                                <a href="javascript:void(0);" class="text-[11px] text-textmuted dark:text-textmuted/50">React Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Personal</span>
                                                    </td>
                                                    <td>
                                                        <span class="">2 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">Rejected</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-xs">27-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info !mb-0">
                                                                    <i class="ti ti-pencil"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary2 !m-0">
                                                                    <i class="ti ti-trash"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Delete
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-xs font-medium">Emiley Jackson</p>
                                                                <a href="javascript:void(0);" class="text-[11px] text-textmuted dark:text-textmuted/50">Full Stack Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Maternity</span>
                                                    </td>
                                                    <td>
                                                        <span class="">2 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Approved
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-xs">26-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info !mb-0">
                                                                    <i class="ti ti-pencil"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary2 !m-0">
                                                                    <i class="ti ti-trash"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Delete
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-xs font-medium">Pope Johnson</p>
                                                                <a href="javascript:void(0);" class="text-[11px] text-textmuted dark:text-textmuted/50">Jr.Java Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Gifted</span>
                                                    </td>
                                                    <td>
                                                        <span class="">2 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Pending
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-xs">25-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-info !mb-0">
                                                                    <i class="ti ti-pencil"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary2 !m-0">
                                                                    <i class="ti ti-trash"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Delete
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                    Today's Interviews 
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-sm">View All</a>
                                    </div>
                                </div>
                                <div class="box-body py-3">
                                    <ul class="list-none mb-0 schedule-list">
                                        <li>
                                            <div class="flex items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-danger/10">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto ms-2">
                                                    <p class="font-medium mb-0">Anurag Batiya</p>
                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 text-nowrap truncate w-75"><i class="ri-time-line me-1"></i>03 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="ti-btn bg-primary ti-btn-sm text-nowrap text-white">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-primarytint1color/10">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto ms-2">
                                                    <p class="font-medium mb-0">Project Meeting</p>
                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 text-nowrap truncate w-75"><i class="ri-time-line me-1"></i>04 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="ti-btn bg-primary ti-btn-sm text-nowrap text-white">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-primarytint2color/10">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto ms-2">
                                                    <p class="font-medium mb-0">Team Meeting</p>
                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 text-nowrap truncate w-75"><i class="ri-time-line me-1"></i>05 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="ti-btn bg-primary ti-btn-sm text-nowrap text-white">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-primarytint3color/10">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto ms-2">
                                                    <p class="font-medium mb-0">Client Meeting</p>
                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 text-nowrap truncate w-75"><i class="ri-time-line me-1"></i>06 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="ti-btn bg-primary ti-btn-sm text-nowrap text-white">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-secondary/10">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto ms-2">
                                                    <p class="font-medium mb-0">Client Meeting</p>
                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 text-nowrap truncate w-75"><i class="ri-time-line me-1"></i>06 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="ti-btn bg-primary ti-btn-sm text-nowrap text-white">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-success/10">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto ms-2">
                                                    <p class="font-medium mb-0">Team Meeting</p>
                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 text-nowrap truncate w-75"><i class="ri-time-line me-1"></i>05 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="ti-btn bg-primary ti-btn-sm text-nowrap text-white">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-info/10">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto ms-2">
                                                    <p class="font-medium mb-0">Project Meeting</p>
                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 text-nowrap truncate w-75"><i class="ri-time-line me-1"></i>04 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="ti-btn bg-primary ti-btn-sm text-nowrap text-white">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Gender Distribution
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-sm">View All</a>
                                    </div>
                                </div>
                                <div class="box-body text-center mx-auto">
                                    <div id="gender-chart"></div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <ul class="flex flex-wrap mb-0 list-none justify-around text-center gap-2">
                                        <li>
                                            <div>
                                                <div class="leading-none me-1 mb-2">
                                                    <span class="avatar avatar-md bg-primary/10 !text-primary border-primary/25 border-[3px] avatar-rounded">
                                                        <i class="ri-stack-line text-[17px] leading-none"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block mb-0 text-textmuted dark:text-textmuted/50 text-xs">Attendance</span>
                                                    <h5 class="font-medium mb-0">4,241</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="leading-none me-1 mb-2">
                                                    <span class="avatar avatar-md bg-primarytint1color/10 !text-primarytint1color border-primarytint1color/25 border-[3px] avatar-rounded">
                                                        <i class="ri-calendar-todo-line text-[17px] leading-none"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block mb-0 text-textmuted dark:text-textmuted/50 text-xs">Absent</span>
                                                    <h5 class="font-medium mb-0">485</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="leading-none me-1 mb-2">
                                                    <span class="avatar avatar-md bg-primarytint2color/10 !text-primarytint2color border-primarytint2color/25 border-[3px] avatar-rounded">
                                                        <i class="ri-time-line text-[17px] leading-none"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block mb-0 text-textmuted dark:text-textmuted/50 text-xs">Late</span>
                                                    <h5 class="font-medium mb-0">08</h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Employee Directory
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="me-3 my-1">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=" example">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown my-1">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-primary ti-dropdown-toggle hs-dropdown-toggle !m-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1"></i>
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
                                                    <th scope="col" class="text-center">S.No</th>
                                                    <th scope="col">Employee Id</th>
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Salary</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td class="text-center">
                                                        01
                                                    </td>
                                                    <td>
                                                    <span class="text-primary text-[14px]">#emp23520</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="text-[13px] font-medium">Richard Dom</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Team Leader</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Backend</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">richard116@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success leading-none">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0987654321</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$15,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary !mb-0">
                                                                <span class="ri-pencil-line text-[14px]"></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-danger !mb-0">
                                                                <span class="ri-delete-bin-7-line text-[14px]"></span>
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
                                                    <td class="text-center">
                                                        02
                                                    </td>
                                                    <td>
                                                    <span class="text-primary text-[14px]">#emp23521</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="text-[13px] font-medium">Kakashra Sri</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Web Developer</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Front End</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Kakashra987@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success leading-none">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548761</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$20,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary !mb-0">
                                                                <span class="ri-pencil-line text-[14px]"></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-danger !mb-0">
                                                                <span class="ri-delete-bin-7-line text-[14px]"></span>
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
                                                    <td class="text-center">
                                                        03
                                                    </td>
                                                    <td>
                                                    <span class="text-primary text-[14px]">#emp23522</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="text-[13px] font-medium">Nikki Jey</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Project Manager</span>
                                                    </td>
                                                    <td>
                                                        <span class="">HR</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Nikki654@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info leading-none">On Leave</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548787</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$25,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary !mb-0">
                                                                <span class="ri-pencil-line text-[14px]"></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-danger !mb-0">
                                                                <span class="ri-delete-bin-7-line text-[14px]"></span>
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
                                                    <td class="text-center">
                                                        04
                                                    </td>
                                                    <td>
                                                    <span class="text-primary text-[14px]">#emp23523</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="text-[13px] font-medium">Sasukey</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Project Manager</span>
                                                    </td>
                                                    <td>
                                                        <span class="">HR</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Sasukey986@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success leading-none">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548788</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$30,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary !mb-0">
                                                                <span class="ri-pencil-line text-[14px]"></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-danger !mb-0">
                                                                <span class="ri-delete-bin-7-line text-[14px]"></span>
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
                                                    <td class="text-center">
                                                        05
                                                    </td>
                                                    <td>
                                                    <span class="text-primary text-[14px]">#emp23524</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="text-[13px] font-medium">Xiong Yu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">UI Developer</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Engineering</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Xiongu987@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success leading-none">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548988</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$35,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary !mb-0">
                                                                <span class="ri-pencil-line text-[14px]"></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-danger !mb-0">
                                                                <span class="ri-delete-bin-7-line text-[14px]"></span>
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
                                                    <td class="text-center">
                                                        06
                                                    </td>
                                                    <td>
                                                    <span class="text-primary text-[14px]">#emp23525</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="text-[13px] font-medium">Arifa Zed</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Team Member</span>
                                                    </td>
                                                    <td>
                                                        <span class="">IT</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Arifa432@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger leading-none">Resigned</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548985</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$40,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary !mb-0">
                                                                <span class="ri-pencil-line text-[14px]"></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-danger !mb-0">
                                                                <span class="ri-delete-bin-7-line text-[14px]"></span>
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
                                                    <td class="text-center">
                                                        07
                                                    </td>
                                                    <td>
                                                    <span class="text-primary text-[14px]">#emp23526</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="text-[13px] font-medium">Jennifer Tab</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Project Manager</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Front End</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Jennifer543@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success leading-none">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+09865489987</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$45,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary !mb-0">
                                                                <span class="ri-pencil-line text-[14px]"></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-danger !mb-0">
                                                                <span class="ri-delete-bin-7-line text-[14px]"></span>
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
                                    <div class="flex flex-wrap items-center">
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
                    <!-- End:: row-4 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- HRM Dashboard --> 
        @vite('resources/assets/js/hrm-dashboard.js')
        
 
@endsection