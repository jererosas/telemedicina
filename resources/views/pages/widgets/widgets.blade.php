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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Widgets</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Widgets</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Widgets</h1>
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


                <!-- Start:: row-1 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="sm:flex gap-4 items-center flex-wrap">
                                    <div class="avatar avatar-lg bg-primary svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">Total
                                            Sales</div>
                                        <div class="text-[21px] font-medium">87,985<span
                                                class="badge bg-success/10 text-success text-[10px] ms-2"><i
                                                    class="ri-arrow-right-up-line text-[11px]"></i>0.5</span></div>
                                    </div>
                                    <div class="ms-auto">
                                        <div id="chart-01"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="sm:flex gap-4 items-center flex-wrap">
                                    <div class="avatar avatar-lg bg-primarytint1color svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">Total
                                            profit</div>
                                        <div class="text-[21px] font-medium">$46,789<span
                                                class="badge bg-danger/10 !text-danger text-[10px] ms-2"><i
                                                    class="ri-arrow-left-down-line text-[11px]"></i>0.5</span></div>
                                    </div>
                                    <div class="ms-auto">
                                        <div id="chart-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="sm:flex gap-4 items-center flex-wrap">
                                    <div class="avatar avatar-lg bg-primarytint2color svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M244.24,60a8,8,0,0,0-7.75-.4c-42.93,21-73.59,11.16-106,.78-34-10.89-69.25-22.14-117.95,1.64A8,8,0,0,0,8,69.24V189.17a8,8,0,0,0,11.51,7.19c42.93-21,73.59-11.16,106.05-.78,19.24,6.15,38.84,12.42,61,12.42,17.09,0,35.73-3.72,56.91-14.06a8,8,0,0,0,4.49-7.18V66.83A8,8,0,0,0,244.24,60ZM232,181.67c-40.6,18.17-70.25,8.69-101.56-1.32-19.24-6.15-38.84-12.42-61-12.42a122,122,0,0,0-45.4,9V74.33c40.6-18.17,70.25-8.69,101.56,1.32S189.14,96,232,79.09ZM128,96a32,32,0,1,0,32,32A32,32,0,0,0,128,96Zm0,48a16,16,0,1,1,16-16A16,16,0,0,1,128,144ZM56,96v48a8,8,0,0,1-16,0V96a8,8,0,1,1,16,0Zm144,64V112a8,8,0,1,1,16,0v48a8,8,0,1,1-16,0Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">Total
                                            Revenue</div>
                                        <div class="text-[21px] font-medium">$57,874<span
                                                class="badge bg-badge bg-success/10 text-success text-[10px] ms-2"><i
                                                    class="ri-arrow-right-up-line text-[11px]"></i>0.5</span></div>
                                    </div>
                                    <div class="ms-auto">
                                        <div id="chart-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="flex gap-4 items-center flex-wrap">
                                    <div class="avatar avatar-lg bg-primarytint3color svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M192,116a12,12,0,1,1-12-12A12,12,0,0,1,192,116ZM152,64H112a8,8,0,0,0,0,16h40a8,8,0,0,0,0-16Zm96,48v32a24,24,0,0,1-24,24h-2.36l-16.21,45.38A16,16,0,0,1,190.36,224H177.64a16,16,0,0,1-15.07-10.62L160.65,208h-57.3l-1.92,5.38A16,16,0,0,1,86.36,224H73.64a16,16,0,0,1-15.07-10.62L46,178.22a87.69,87.69,0,0,1-21.44-48.38A16,16,0,0,0,16,144a8,8,0,0,1-16,0,32,32,0,0,1,24.28-31A88.12,88.12,0,0,1,112,32H216a8,8,0,0,1,0,16H194.61a87.93,87.93,0,0,1,30.17,37c.43,1,.85,2,1.25,3A24,24,0,0,1,248,112Zm-16,0a8,8,0,0,0-8-8h-3.66a8,8,0,0,1-7.64-5.6A71.9,71.9,0,0,0,144,48H112A72,72,0,0,0,58.91,168.64a8,8,0,0,1,1.64,2.71L73.64,208H86.36l3.82-10.69A8,8,0,0,1,97.71,192h68.58a8,8,0,0,1,7.53,5.31L177.64,208h12.72l18.11-50.69A8,8,0,0,1,216,152h8a8,8,0,0,0,8-8Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">Total
                                            Income</div>
                                        <div class="text-[21px] font-medium">$98,122<span
                                                class="badge bg-danger/10 !text-danger text-[10px] ms-2"><i
                                                    class="ri-arrow-left-down-line text-[11px]"></i>0.5</span></div>
                                    </div>
                                    <div class="ms-auto">
                                        <div id="chart-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start::row-2 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div
                            class="box  border-primary/50 dark:!border-primary/50 border overflow-hidden main-content-card">
                            <div class="box-body">
                                <div class="flex items-start justify-between">
                                    <div class="grow">
                                        <span
                                            class="text-secondary font-semibold me-1 inline-block badge bg-secondary/10"><i
                                                class="fe fe-arrow-up !text-[0.75rem]"></i>+0.5%</span>
                                        <h4 class="mt-2 mb-2 font-medium">15,877</h4>
                                        <p class="mb-0 text-xs font-medium">TOTAL EMPLOYEES
                                        </p>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-md bg-primary svg-white text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none" />
                                                <circle cx="84" cy="108" r="52" opacity="0.2" />
                                                <path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16" />
                                                <path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16" />
                                                <circle cx="84" cy="108" r="52" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                                                <path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div
                            class="box  border-primarytint1color/50 dark:!border-primarytint1color/50 border overflow-hidden main-content-card">
                            <div class="box-body">
                                <div class="flex items-start justify-between">
                                    <div class="grow">
                                        <span
                                            class="text-secondary font-semibold me-1 inline-block badge bg-secondary/10"><i
                                                class="fe fe-arrow-up !text-[0.75rem]"></i>+0.5%</span>
                                        <h4 class="mt-2 mb-2 font-medium">$88,784</h4>
                                        <p class="mb-0 text-xs font-medium">TOTAL PROFIT
                                        </p>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-md bg-primarytint1color svg-white text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none" />
                                                <path
                                                    d="M40,192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64Z"
                                                    opacity="0.2" />
                                                <path
                                                    d="M40,64V192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64h0A16,16,0,0,1,56,48H192"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16" />
                                                <circle cx="180" cy="140" r="12" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div
                            class="box  border-primarytint2color/50 dark:!border-primarytint2color/50 border overflow-hidden main-content-card">
                            <div class="box-body">
                                <div class="flex items-start justify-between">
                                    <div class="grow">
                                        <span
                                            class="text-secondary font-semibold me-1 inline-block badge bg-secondary/10"><i
                                                class="fe fe-arrow-up !text-[0.75rem]"></i>+0.5%</span>
                                        <h4 class="mt-2 mb-2 font-medium">$1,25,833</h4>
                                        <p class="mb-0 text-xs font-medium">TOTAL REVENUE
                                        </p>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-md bg-primarytint2color svg-white text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none" />
                                                <path
                                                    d="M88,216a24,24,0,0,0,24-24c0-10-8-16-8-16H216s8,6,8,16a24,24,0,0,1-24,24Z"
                                                    opacity="0.2" />
                                                <path d="M200,176V64a24,24,0,0,0-24-24H40" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16" />
                                                <line x1="104" y1="104" x2="168" y2="104" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16" />
                                                <line x1="104" y1="136" x2="168" y2="136" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16" />
                                                <path
                                                    d="M24,80s-8-6-8-16a24,24,0,0,1,48,0V192a24,24,0,0,0,48,0c0-10-8-16-8-16H216s8,6,8,16a24,24,0,0,1-24,24H88"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div
                            class="box  border-primarytint3color/50 dark:!border-primarytint3color/50 border overflow-hidden main-content-card">
                            <div class="box-body">
                                <div class="flex items-start justify-between">
                                    <div class="grow">
                                        <span
                                            class="text-secondary font-semibold me-1 inline-block badge bg-secondary/10"><i
                                                class="fe fe-arrow-up !text-[0.75rem]"></i>+0.5%</span>
                                        <h4 class="mt-2 mb-2 font-medium">15,123</h4>
                                        <p class="mb-0 text-xs font-medium">TOTAL SALES
                                        </p>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-md bg-primarytint3color svg-white text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none" />
                                                <path d="M128,128h24a40,40,0,0,1,0,80H128Z" opacity="0.2" />
                                                <path d="M128,48H112a40,40,0,0,0,0,80h16Z" opacity="0.2" />
                                                <line x1="128" y1="24" x2="128" y2="48" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16" />
                                                <line x1="128" y1="208" x2="128" y2="232" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16" />
                                                <path
                                                    d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start:: row-3 -->
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Sales Revenue
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="salerevenue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header pb-0">
                                <div class="box-title">
                                    Total Sales
                                </div>
                            </div>
                            <div class="box-body p-0 widget-circle-chart">
                                <div id="circlechart"></div>
                            </div>
                            <div class="box-footer p-0 border-t border-block-start-dashed">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="col-span-12">
                                        <div class="p-4 ps-[3rem] flex gap-2 pb-0">
                                            <div>
                                                <span class="text-[14px] visit-gender male ms-1">Average Sales</span>
                                                <div class="mt-1">
                                                    <span class="text-xl font-medium">8,777</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                                Increased By
                                                <span class="text-success">1.5%<i
                                                        class="ti ti-arrow-narrow-up text-[1rem]"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <div class="p-4 ps-[3rem] flex gap-2">
                                            <div>
                                                <span class="text-[14px] visit-gender female">Average Profit</span>
                                                <div class="mt-1">
                                                    <span class="text-xl font-medium">$12,234</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                                Decreased By
                                                <span class="text-danger">0.6%<i
                                                        class="ti ti-arrow-narrow-down text-[1rem]"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-header">
                                <div class="box-title">
                                    Total Revenue
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="flex items-center mb-3 gap-2">
                                    <h3 class="font-medium mb-0">$5,874.28</h3>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                        Increased By
                                        <span class="text-success">0.5%<i
                                                class="ti ti-arrow-narrow-up text-[1rem]"></i></span>
                                    </div>
                                </div>
                                <div class="progress-stacked progress-lg mb-2 flex">
                                    <div class="progress-bar progress-bar-striped w-[30%]" role="progressbar"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar progress-bar-striped bg-primarytint1color !rounded-none w-[20%]"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar progress-bar-striped bg-primarytint2color !rounded-none w-[23%]"
                                        role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar progress-bar-striped bg-primarytint3color !rounded-s-none !rounded-md w-[27%]"
                                        role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer p-0">
                                <ul class="ti-list-group list-group-flush !border-0">
                                    <li class="ti-list-group-item">
                                        <div class="flex items-center">
                                            <div class="flex-auto items-center">
                                                <div class="flex items-top justify-between">
                                                    <div>
                                                        <p
                                                            class="mb-1 text-textmuted dark:text-textmuted/50 flex items-center">
                                                            <i
                                                                class="ti ti-point-filled text-xl text-primary me-2 bg-primary/10 rounded-full"></i>Today
                                                            Revenue</p>
                                                        <h6 class="mb-0 leading-none font-medium ms-4 ps-1">$789</h6>
                                                    </div>
                                                    <div
                                                        class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                                        Increased By
                                                        <span class="text-success">0.5%<i
                                                                class="ti ti-arrow-narrow-up text-[1rem]"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group-item success">
                                        <div class="flex items-center">
                                            <div class="flex-auto items-center">
                                                <div class="flex items-top justify-between">
                                                    <div>
                                                        <p
                                                            class="mb-1 text-textmuted dark:text-textmuted/50 flex items-center">
                                                            <i
                                                                class="ti ti-point-filled text-xl text-primarytint1color me-2 bg-primarytint1color/10 rounded-full"></i>This
                                                            Week Revenue</p>
                                                        <h6 class="mb-0 leading-none font-medium ms-4 ps-1">$1,887</h6>
                                                    </div>
                                                    <div
                                                        class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                                        Decreased By
                                                        <span class="text-danger">2.8%<i
                                                                class="ti ti-arrow-narrow-down text-[1rem]"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group-item warning">
                                        <div class="flex items-center">
                                            <div class="flex-auto items-center">
                                                <div class="flex items-top justify-between">
                                                    <div>
                                                        <p
                                                            class="mb-1 text-textmuted dark:text-textmuted/50 flex items-center">
                                                            <i
                                                                class="ti ti-point-filled text-xl text-primarytint2color me-2 bg-primarytint2color/10 rounded-full"></i>This
                                                            Month Revenue</p>
                                                        <h6 class="mb-0 leading-none font-medium ms-4 ps-1">$55,666</h6>
                                                    </div>
                                                    <div
                                                        class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                                        Increased By <span class="text-success">0.5%<i
                                                                class="ti ti-arrow-narrow-up text-[1rem]"></i>
                                                        </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group-item success">
                                        <div class="flex items-center">
                                            <div class="flex-auto items-center">
                                                <div class="flex items-top justify-between">
                                                    <div>
                                                        <p
                                                            class="mb-1 text-textmuted dark:text-textmuted/50 flex items-center">
                                                            <i
                                                                class="ti ti-point-filled text-xl text-primarytint3color me-2 bg-primarytint3color/10 rounded-full"></i>This
                                                            Month Revenue</p>
                                                        <h6 class="mb-0 leading-none font-medium ms-4 ps-1">$3,41,173
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                                        Decreased By <span class="text-danger">1.2%<i
                                                                class="ti ti-arrow-narrow-down text-[1rem]"></i>
                                                        </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box ">
                            <div class="box-body">
                                <div class=" flex items-center justify-conent-between">
                                    <div class="flex-auto">
                                        <div class="flex justify-between mb-3">
                                            <span class="avatar avatar-rounded avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">
                                            Total Sales</p>
                                    </div>
                                    <div id="chart-10" class=""></div>
                                </div>
                                <div class="flex align-items-end justify-between">
                                    <div class="text-2xl font-medium mb-0 flex items-center">87,472
                                    </div>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                        Increased By <span class="text-success">2.0%<i
                                                class="ti ti-arrow-narrow-up text-[1rem]"></i>
                                        </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box ">
                            <div class="box-body">
                                <div class=" flex items-center justify-conent-between">
                                    <div class="flex-auto">
                                        <div class="flex justify-between mb-3">
                                            <span
                                                class="avatar avatar-rounded avatar-md bg-primarytint1color svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M216,56H176V48a24,24,0,0,0-24-24H104A24,24,0,0,0,80,48v8H40A16,16,0,0,0,24,72V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V72A16,16,0,0,0,216,56ZM96,48a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM216,72v41.61A184,184,0,0,1,128,136a184.07,184.07,0,0,1-88-22.38V72Zm0,128H40V131.64A200.19,200.19,0,0,0,128,152a200.25,200.25,0,0,0,88-20.37V200ZM104,112a8,8,0,0,1,8-8h32a8,8,0,0,1,0,16H112A8,8,0,0,1,104,112Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">
                                            Total Revenue</p>
                                    </div>
                                    <div id="chart-11" class=""></div>
                                </div>
                                <div class="flex align-items-end justify-between">
                                    <div class="text-2xl font-medium mb-0 flex items-center">$9,432
                                    </div>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                        Decreased By <span class="text-danger">1.0%<i
                                                class="ti ti-arrow-narrow-down text-[1rem]"></i>
                                        </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box ">
                            <div class="box-body">
                                <div class=" flex items-center justify-conent-between">
                                    <div class="flex-auto">
                                        <div class="flex justify-between mb-3">
                                            <span
                                                class="avatar avatar-rounded avatar-md bg-primarytint2color svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">
                                            Total Customers</p>
                                    </div>
                                    <div id="chart-12" class=""></div>
                                </div>
                                <div class="flex align-items-end justify-between">
                                    <div class="text-2xl font-medium mb-0 flex items-center">3,132
                                    </div>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                        Increased By <span class="text-success">1.5%<i
                                                class="ti ti-arrow-narrow-up text-[1rem]"></i>
                                        </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box ">
                            <div class="box-body">
                                <div class=" flex items-center justify-conent-between">
                                    <div class="flex-auto">
                                        <div class="flex justify-between mb-3">
                                            <span
                                                class="avatar avatar-rounded avatar-md bg-primarytint3color svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mb-0">
                                            Total Profit</p>
                                    </div>
                                    <div id="chart-13" class=""></div>
                                </div>
                                <div class="flex align-items-end justify-between">
                                    <div class="text-2xl font-medium mb-0 flex items-center">$5,325
                                    </div>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px] text-end ms-auto">
                                        Increased By <span class="text-success">1.3%<i
                                                class="ti ti-arrow-narrow-up text-[1rem]"></i>
                                        </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start:: row-6 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-4 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Sales Revenue
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="salerevenue1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Recent Activity
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="widgets-task-list mb-0 ps-[2rem]">
                                    <li class="">
                                        <div class=""> <i class="task-icon bg-primary"></i>
                                            <h6 class="text-[14px] mb-0">Template Review</h6>
                                            <div class="grow flex items-center justify-between">
                                                <div> <span
                                                        class="text-xs text-textmuted dark:text-textmuted/50">Reviewing
                                                        the new template <a href="javascript:void(0)"
                                                            class="text-primary">
                                                            HTML template</a></span> </div>
                                                <div class="min-w-fit-content ms-2 text-end">
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">15
                                                        May 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class=""> <i class="task-icon bg-primarytint1color"></i>
                                            <h6 class="text-[14px] mb-0">Update Documentation</h6>
                                            <div class="grow flex items-center justify-between">
                                                <div> <span
                                                        class="text-xs text-textmuted dark:text-textmuted/50">Documentation
                                                        is updated <a href="javascript:void(0)" class="text-primary">
                                                            Available here</a></span> </div>
                                                <div class="min-w-fit-content ms-2 text-end">
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">18
                                                        Jun 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class=""> <i class="task-icon bg-primarytint2color"></i>
                                            <h6 class="text-[14px] mb-0">Meeting for Managers</h6>
                                            <div class="grow flex items-center justify-between">
                                                <div> <span
                                                        class="text-xs text-textmuted dark:text-textmuted/50">Meeting is
                                                        going to be held on</span> <a href="javascript:void(0)"
                                                        class="text-secondary">
                                                        Today Evening 5:30PM</a> </div>
                                                <div class="min-w-fit-content ms-2 text-end">
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">05
                                                        Jul 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class=""> <i class="task-icon bg-primarytint3color"></i>
                                            <h6 class="text-[14px] mb-0">Monitoring progress</h6>
                                            <div class="grow flex items-center justify-between">
                                                <div> <span class="text-xs text-textmuted dark:text-textmuted/50">Work
                                                        Progess of each and every template is </span>
                                                    <a href="javascript:void(0)" class="text-success">
                                                        taken as consider</a>
                                                </div>
                                                <div class="min-w-fit-content ms-2 text-end">
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">13
                                                        July 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class=""> <i class="task-icon bg-secondary"></i>
                                            <h6 class="text-[14px] mb-0">Quality Testing</h6>
                                            <div class="grow flex items-center justify-between">
                                                <div> <span class="text-xs text-textmuted dark:text-textmuted/50"><a
                                                            href="javascript:void(0)" class="text-warning"> Pending </a>
                                                        Quality Aussrance</span>
                                                </div>
                                                <div class="min-w-fit-content ms-2 text-end">
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">15
                                                        Aug 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class=""> <i class="task-icon bg-success"></i>
                                            <h6 class="text-[14px] mb-0">Remainder for submission</h6>
                                            <div class="grow flex items-center justify-between">
                                                <div> <span class="text-xs text-textmuted dark:text-textmuted/50">The
                                                        deadline for template submission is </span> 10-08-2024
                                                </div>
                                                <div class="min-w-fit-content ms-2 text-end">
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px]">21
                                                        Aug 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-body bg-primary m-4 rounded-md">
                                <div class="flex text-white gap-4 items-center flex-wrap">
                                    <div class="avatar avatar-rounded avatar-lg bg-white/10 svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-[15px] mb-0 op-8">Today Budget</p>
                                        <p class="text-lg font-semibold mb-0">$2,78,411</p>
                                    </div>
                                    <div class="text-white text-[13px] align-self-end ms-auto"><span
                                            class="opacity-70">Increased By</span>
                                        <span class="badge align-self-end bg-success text-white text-[10px]"><i
                                                class="ri-arrow-right-up-line text-[11px]"></i>0.5</span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-body p-0">
                                <ul class="ti-list-group list-group-flush !border-0 !rounded-none">
                                    <li class="ti-list-group-item !p-[0.84rem] border-t">
                                        <div class="flex items-start gap-4">
                                            <div>
                                                <span
                                                    class="avatar avatar-rounded bg-primarytint1color/10 !text-primarytint1color"><i
                                                        class="ti ti-hourglass text-[22px]"></i></span>
                                            </div>
                                            <div class="flex-auto">
                                                <span class="mb-0 font-medium block">Total-Income</span>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">Average
                                                    Income Per Hour</span>

                                            </div>
                                            <div class="text-end">
                                                <span class="text-primarytint1color fs-medium text-xl">$17.03</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group-item !p-[0.84rem]">
                                        <div class="flex items-start gap-4">
                                            <div>
                                                <span
                                                    class="avatar avatar-rounded bg-primarytint2color/10 !text-primarytint2color"><i
                                                        class="ti ti-clock text-[22px]"></i></span>
                                            </div>
                                            <div class="flex-auto">
                                                <span class="mb-0 font-medium block">Total-Income</span>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">Average
                                                    Income Per Hour</span>

                                            </div>
                                            <div class="text-end">
                                                <span class="text-primarytint2color fs-medium text-xl">$17.03</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group-item !p-[0.84rem]">
                                        <div class="flex items-start gap-4">
                                            <div>
                                                <span
                                                    class="avatar avatar-rounded bg-primarytint3color/10 !text-primarytint3color"><i
                                                        class="ti ti-bolt text-[22px]"></i></span>
                                            </div>
                                            <div class="flex-auto">
                                                <span class="mb-0 font-medium block">Total-Income</span>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">Average
                                                    Income Per Hour</span>

                                            </div>
                                            <div class="text-end">
                                                <span class="text-primary3 fs-medium text-xl">$77.93</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group-item !p-[0.84rem]">
                                        <div class="flex items-start gap-4">
                                            <div>
                                                <span class="avatar avatar-rounded bg-secondary/10 !text-secondary"><i
                                                        class="ti ti-activity-heartbeat text-[22px]"></i></span>
                                            </div>
                                            <div class="flex-auto">
                                                <span class="mb-0 font-medium block">Total-Income</span>
                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">Average
                                                    Income Per Hour</span>

                                            </div>
                                            <div class="text-end">
                                                <span class="text-secondary fs-medium text-xl">$970.63</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-6 -->

                <!-- Start:: row-7 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex align-items-end flex-wrap justify-between text-end gap-2">
                                    <div>
                                        <div id="chart-5"></div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <span class="avatar avatar-sm bg-primary mb-2">
                                            <i class="ri-bar-chart-box-line text-[1rem]"></i>
                                        </span>
                                        <div
                                            class="flex-auto text-textmuted dark:text-textmuted/50 mt-2 text-[14px] mb-1">
                                            Total Sales</div>
                                        <div class="h4 font-medium mb-0 flex items-center flex-wrap gap-2">42,312 <span
                                                class="badge bg-success/10 !text-success text-[10px]"><i
                                                    class="ri-arrow-left-up-line"></i>+1.64%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex align-items-end flex-wrap justify-between text-end gap-2">
                                    <div>
                                        <div id="chart-6"></div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <span class="avatar avatar-sm bg-primarytint1color mb-2">
                                            <i class="ri-wallet-3-line text-[1rem]"></i>
                                        </span>
                                        <div
                                            class="flex-auto text-textmuted dark:text-textmuted/50 mt-2 text-[14px] mb-1">
                                            Total Revenue</div>
                                        <div class="h4 font-medium mb-0 flex items-center flex-wrap gap-2">$78.7K <span
                                                class="badge bg-danger/10 !text-danger text-[10px]"><i
                                                    class="ri-arrow-left-down-line"></i>1.32%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex align-items-end flex-wrap justify-between text-end gap-2">
                                    <div>
                                        <div id="chart-7"></div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <span class="avatar avatar-sm bg-primarytint2color mb-2">
                                            <i class="ri-group-line text-[1rem]"></i>
                                        </span>
                                        <div
                                            class="flex-auto text-textmuted dark:text-textmuted/50 text-[14px] mt-2 mb-1">
                                            Total Users</div>
                                        <div class="h4 font-medium mb-0 flex items-center flex-wrap gap-2">86,475 <span
                                                class="badge bg-danger/10 !text-danger text-[10px]"><i
                                                    class="ri-arrow-left-down-line"></i>1.15%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex align-items-end flex-wrap justify-between text-end gap-2">
                                    <div>
                                        <div id="chart-8"></div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <span class="avatar avatar-sm bg-primarytint3color mb-2">
                                            <i class="ri-money-dollar-circle-line text-[1rem]"></i>
                                        </span>
                                        <div
                                            class="flex-auto text-textmuted dark:text-textmuted/50 mt-2 text-[14px] mb-1">
                                            Total Profit</div>
                                        <div class="h4 font-medium mb-0 flex items-center flex-wrap gap-2">$18.4K <span
                                                class="badge bg-success/10 !text-success text-[10px]"><i
                                                    class="ri-arrow-left-up-line"></i>2.05%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-7 -->

                <!-- End:: row-8 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Total Visitors
                                </div>
                            </div>
                            <div class="box-body">

                                <div id="activecustomers"></div>
                            </div>
                            <div class="box-footer">
                                <div class="grid grid-cols-12 gap-x-6 mt-0">
                                    <div class="col-span-4">
                                        <h6 class="text-primary mb-1 font-medium">45K</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Apps</p>
                                    </div>
                                    <div class="col-span-4">
                                        <h6 class="text-primarytint1color mb-1 font-medium">35K</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Offline</p>
                                    </div>
                                    <div class="col-span-4">
                                        <h6 class="text-primarytint2color mb-1 font-medium">10K</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">Website</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Sales Revenue
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="salerevenue2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Top Sales
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="top-sales"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-8 -->

                <!-- End:: row-9 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="text-center">
                                    <div class="mb-2">
                                        <span class="avatar avatar-xl avatar-rounded online">
                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                        </span>
                                    </div>
                                    <div class="main-profile-info">
                                        <h6 class="font-semibold mb-1">Daniel David
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <span class="text-primarytint2color text-[14px]">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content !border-black py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Verified User
                                                    </span>
                                                </span>
                                            </div>
                                        </h6>
                                            <p class="text-textmuted dark:text-textmuted/50 mb-2">Web Designer</p>
                                            <p class="mb-2">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium doloremque laudan accusant. </p>
                                    </div>
                                    <div class="flex gap-1 justify-center mb-2 items-center">
                                        <i
                                            class="ri-facebook-line text-primary border rounded-full align-middle leading-none p-2 border-primary/25 me-1 inline-block text-[17px] bg-primary/10"></i>
                                        <i
                                            class="ri-twitter-x-line text-primarytint1color border rounded-full align-middle leading-none p-2 border-primarytint1color/25 me-1 inline-block text-[17px] bg-primarytint1color/10"></i>
                                        <i
                                            class="ri-linkedin-line text-primarytint2color border rounded-full align-middle leading-none p-2 border-primarytint2color/25 me-1 inline-block text-[17px] bg-primarytint2color/10"></i>
                                        <i
                                            class="ri-github-line text-primarytint3color border rounded-full align-middle leading-none p-2 border-primarytint3color/25 me-1 inline-block text-[17px] bg-primarytint3color/10"></i>
                                    </div>
                                    <div class="flex gap-2 mb-0 flex-wrap flex-xxl-nowrap">
                                        <div class="ti-btn ti-btn-primary ti-btn-sm mb-0 flex-auto">
                                            Message
                                        </div>
                                        <div class="ti-btn ti-btn-secondary ti-btn-sm mb-0 flex-auto">
                                            Follow
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Recent Transactions
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="list-none mb-3">
                                    <li class="mb-3">
                                        <div class="flex items-center flex-wrap gap-2">
                                            <div class="leading-none">
                                                <span
                                                    class="avatar  avatar-md avatar-rounded p-1 bg-primary border border-defaultborder dark:border-defaultborder/10">
                                                    <i class="fe fe-shopping-bag"></i>
                                                </span>
                                            </div>
                                            <div class="flex-auto leading-none">
                                                <span class="font-medium mb-2 block text-[14px]">Shopping</span>
                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">22
                                                    August 2024</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-[11px] text-success"><i
                                                        class="ti ti-arrow-narrow-up"></i>0.27%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="flex items-center flex-wrap gap-2">
                                            <div class="leading-none">
                                                <span
                                                    class="avatar  avatar-md avatar-rounded p-1 bg-primarytint1color border border-defaultborder dark:border-defaultborder/10">
                                                    <i class="fe fe-shopping-bag"></i>
                                                </span>
                                            </div>
                                            <div class="flex-auto leading-none">
                                                <span class="font-medium mb-2 block text-[14px]">Traveling</span>
                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">05
                                                    September 2024</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-[11px] text-danger"><i
                                                        class="ti ti-arrow-narrow-down"></i>0.3%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="flex items-center flex-wrap gap-2">
                                            <div class="leading-none">
                                                <span
                                                    class="avatar  avatar-md avatar-rounded p-1 bg-primarytint2color border border-defaultborder dark:border-defaultborder/10">
                                                    <i class="fe fe-shopping-bag"></i>
                                                </span>
                                            </div>
                                            <div class="flex-auto leading-none">
                                                <span class="font-medium mb-2 block text-[14px]">Credit card Bill</span>
                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">18
                                                    September 2024</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-[11px] text-danger"><i
                                                        class="ti ti-arrow-narrow-down"></i>1.2%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-0">
                                        <div class="flex items-center flex-wrap gap-2">
                                            <div class="leading-none">
                                                <span
                                                    class="avatar  avatar-md avatar-rounded p-1 bg-primarytint3color border border-defaultborder dark:border-defaultborder/10">
                                                    <i class="fe fe-shopping-bag"></i>
                                                </span>
                                            </div>
                                            <div class="flex-auto leading-none">
                                                <span class="font-medium mb-2 block text-[14px]">Shop Rent</span>
                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs">13
                                                    October 2024</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-[11px] text-success"><i
                                                        class="ti ti-arrow-narrow-up"></i>1.7%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="text-secondary font-medium underline"> View All
                                        Transactions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header pb-0">
                                <div class="box-title">
                                    Orders Overview
                                </div>
                            </div>
                            <div class="box-body px-0">
                                <div id="recent-orders"></div>
                                <div class="p-4 pt-0 pb-1">
                                    <div class="flex-auto flex gap-1 flex-wrap items-start justify-between">
                                        <div>
                                            <span class="text-xs mb-1 block font-medium">TOTAL ORDERS</span>
                                            <div class="flex items-center justify-between">
                                                <h5 class="mb-0 flex items-end">3,736<span
                                                        class="text-success text-xs ms-2 inline-flex items-center"><i
                                                            class="ti ti-trending-up align-middle me-1"></i>0.57%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="avatar avatar-md bg-primary/10 !text-primary">
                                                <i class="ti ti-box text-xl"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="widget-card">
                                <div class="flex items-start text-white flex-wrap px-2">
                                    <div class="grow text-center">
                                        <div class="mt-2 items-center justify-conent-between text-[21px] mb-1">
                                            <span>Monthly Budget</span>
                                            <span class="min-w-fit-content text-[10px] ms-1 "></span>
                                        </div>
                                        <div class="flex items-center justify-conent-between">
                                            <span
                                                class="grow text-[1.875rem] font-semibold sale-font counter">$78,985<span>
                                                </span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="flex items-center gap-2">
                                    <div class="grow">
                                        <div class="text-[21px] font-medium mb-1">$35,800</div>
                                        <div class="grow text-[13px] mb-2">Increased By</div>
                                        <span class="text-xs text-success"><i
                                                class="ti ti-arrow-narrow-up"></i>0.27%</span>
                                    </div>
                                    <span class="avatar bg-primary/10 !text-primary ms-auto">
                                        <i class="bx bx-up-arrow-alt text-xl"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-9 -->

            </div>
        </div>
        <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Widgets JS -->
        @vite('resources/assets/js/widgets.js')
        

@endsection