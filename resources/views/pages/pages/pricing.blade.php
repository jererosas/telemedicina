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
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Pricing</h1>
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
                        <div class="flex justify-center">
                            <div class="max-w-[75%]" id="convertable-pricing">
                                <div class="p-4 pt-0">
                                    <div class="text-center">
                                        <h3 class="text-primarytint1color">Pricing</h3>
                                        <h5 class="block mb-3">Plans that flex with your needs.</h5>
                                        <p class="text-textmuted dark:text-textmuted/50 mb-4">Stay agile with plans that seamlessly adjust to your changing requirements, ensuring you always have the flexibility you need.</p>
                                    </div>
                                </div>
                                <div class="flex justify-center mb-4">
                                    <div class="switcher-box">
                                        <span class="pricing-time-span">Monthly</span>
                                        <div class="switcher-pricing text-center">
                                        <input type="checkbox" class="pricing-toggle">
                                        </div>
                                        <span class="pricing-time-span">Annually <span class="badge bg-primarytint2color ms-1 rounded-full leading-none">20% off</span></span>
                                    </div>
                                </div>
                                <div class="tab-content show" id="monthly1">
                                    <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card hover !bg-primary">
                                                <div class="pricing-table-item-icon">
                                                    <i class="fe fe-zap me-2"></i> Popular
                                                </div>
                                                <div class="box-body !p-4 border-b border-dashed border-white/10">
                                                    <h6 class="font-medium mb-1 text-white">Premium</h6>
                                                    <h2 class="mb-3 font-semibold block text-white">$22.89<span class="text-xs font-medium ms-1 opacity-80"> / Month</span></h2>
                                                    <span class="opacity-70 block text-white text-[11px]">Unlock powerful tools tailored for seasoned users, designed to take your skills to the next level.</span>
                                                </div>
                                                <div class="box-body !p-4 text-white">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Unlimited users
                                                                </span>
                                                                <span class="badge bg-success rounded-full">Unlimited</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Advanced analytics
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Customizable dashboards
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-white/10 !text-white px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Phone support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Dedicated account manager
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    SLA guarantees
                                                                </span>
                                                                <span class="opacity-50 text-xs font-medium">30 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    On-site training for teams
                                                                </span>
                                                                <span class="opacity-50 text-xs font-medium">120 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer border-t border-dashed border-white/10 p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg bg-white !text-black grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="font-medium mb-1">Basic</h6>
                                                    <h2 class="mb-3 font-semibold block">$8.5<span class="text-xs font-medium ms-1"> / Month</span></h2>
                                                    <span class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Discover the vital features that create an enchanting foundation for a magical beginning.</span>
                                                </div>
                                                <div class="box-body !p-4">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 10 users
                                                                </span>
                                                                <span class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Basic reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Access to essential features
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">12 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Mobile app access
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">45 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="font-medium mb-1">Standard</h6>
                                                    <h2 class="mb-3 font-semibold block">$29.99<span class="text-xs font-medium ms-1"> / Month</span></h2>
                                                    <span class="text-[11px] text-textmuted dark:text-textmuted/50 block">Elevate to the highest standards with unparalleled excellence and exclusive top-tier support.</span>
                                                </div>
                                                <div class="box-body !p-4">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 50 users
                                                                </span>
                                                                <span class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Access to webinars
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Advanced reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Priority email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    24/7 chat support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    All Standard features
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">52 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Team collaboration tools
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">60 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="yearly1">
                                    <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card hover !bg-primary">
                                                <div class="pricing-table-item-icon">
                                                    <i class="fe fe-zap me-2"></i> Popular
                                                </div>
                                                <div class="box-body !p-4 border-b border-dashed border-white/10">
                                                    <h6 class="font-medium mb-1 text-white">Premium</h6>
                                                    <h2 class="mb-3 font-semibold block text-white">$1,999.89<span class="text-xs font-medium ms-1 opacity-80"> / Annum</span></h2>
                                                    <span class="opacity-70 block text-white text-[11px]">Unlock powerful tools tailored for seasoned users, designed to take your skills to the next level.</span>
                                                </div>
                                                <div class="box-body !p-4 text-white">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Unlimited users
                                                                </span>
                                                                <span class="badge bg-success rounded-full">Unlimited</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Advanced analytics
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Customizable dashboards
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-white/10 !text-white px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Phone support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Dedicated account manager
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    SLA guarantees
                                                                </span>
                                                                <span class="opacity-50 text-xs font-medium">90 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    On-site training for teams
                                                                </span>
                                                                <span class="opacity-50 text-xs font-medium">300 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer border-t border-dashed border-white/10 p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg bg-white !text-black grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="font-medium mb-1">Basic</h6>
                                                    <h2 class="mb-3 font-semibold block">$899.96<span class="text-xs font-medium ms-1"> / Annum</span></h2>
                                                    <span class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Discover the vital features that create an enchanting foundation for a magical beginning.</span>
                                                </div>
                                                <div class="box-body !p-4">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 10 users
                                                                </span>
                                                                <span class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Basic reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Access to essential features
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">40 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Mobile app access
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">180 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="font-medium mb-1">Standard</h6>
                                                    <h2 class="mb-3 font-semibold block">$589.99<span class="text-xs font-medium ms-1"> / Annum</span></h2>
                                                    <span class="text-[11px] text-textmuted dark:text-textmuted/50 block">Elevate to the highest standards with unparalleled excellence and exclusive top-tier support.</span>
                                                </div>
                                                <div class="box-body !p-6">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 50 users
                                                                </span>
                                                                <span class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Access to webinars
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Advanced reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Priority email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    24/7 chat support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    All Standard features
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">250 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Team collaboration tools
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">320 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="flex justify-center">
                            <div class="max-w-[75%]">
                                <div class="text-center mb-5 mt-4 flex justify-center">
                                    <nav class="-mb-0.5 flex justify-center bg-white dark:bg-bodybg p-2 rounded-full !m-0 border border-defaultborder dark:border-defaultborder/10 shadow-sm space-x-6 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:bg-primary hs-tab-active:text-white py-1 px-4 !rounded-full inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-defaulttextcolor hover:text-primary dark:text-[#8c9097] dark:text-white/50 active" id="pills-monthly" data-hs-tab="#pills-monthly1" aria-controls="pills-monthly1">
                                            Monthly
                                        </button>
                                        <button type="button" class="hs-tab-active:font-semibold !m-0 hs-tab-active:bg-primary hs-tab-active:text-white py-1 px-4 !rounded-full inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-defaulttextcolor hover:text-primary dark:text-[#8c9097] dark:text-white/50" id="pills-yearly" data-hs-tab="#pills-yearly1" aria-controls="pills-yearly1">
                                            Annually <span class="badge bg-primarytint2color ms-1 rounded-full leading-none">Save 10%</span>
                                        </button>
                                    </nav>
                                </div>
                                <div class="tab-content mb-6">
                                    <div class="tab-pane show active p-0 border-0" id="pills-monthly1" role="tabpanel" aria-labelledby="pills-monthly">
                                        <div class="box shadow-none overflow-hidden border-0">
                                            <div class="box-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered pricing-table mb-0">
                                                        <thead>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <th scope="row" class="">
                                                                    <div class="grow text-start">
                                                                        <div class="mb-0 font-medium text-[1rem]">Plans with tailored features.</div>
                                                                        <span class="opacity-80 text-[11px]">Unlock personalized features within your plans, designed specifically to suit your needs.</span>
                                                                    </div>
                                                                </th>
                                                                <th scope="row" class="">
                                                                    <div class="mb-0 font-medium text-[1rem]">Basic</div>
                                                                    <div class="mb-4 text-[1.75rem] font-medium">$3<span class="text-[13px] opacity-50 ms-1">/ month</span></div>
                                                                    <button type="button" class="ti-btn ti-btn-soft-primary3 grid w-full btn-wave waves-effect waves-light">
                                                                        <span class="ms-4 me-4">Sign Up</span>
                                                                    </button>
                                                                </th>
                                                                <th scope="row" class="">
                                                                    <div class="mb-0 font-medium text-[1rem]">Growth</div>
                                                                    <div class="mb-4 text-[1.75rem] font-medium">$19<span class="text-[13px] opacity-50 ms-1">/ month</span></div>
                                                                    <button type="button" class="ti-btn ti-btn-soft-primary3 grid w-full btn-wave waves-effect waves-light">
                                                                        <span class="ms-4 me-4">Sign Up</span>
                                                                    </button>
                                                                </th>
                                                                <th scope="row" class="relative bg-primary/10 !text-primary">
                                                                    <p class="badge badge-lg bg-primarytint1color rounded font-semibold absolute end-0 me-2 mb-0">Popular</p>
                                                                    <div class="mb-0 font-medium text-[1rem]">Pro</div>
                                                                    <div class="mb-4 text-[1.75rem] font-medium">$25<span class="text-[13px] opacity-50 ms-1">/ month</span></div>
                                                                    <button type="button" class="ti-btn ti-btn-primary grid w-full btn-wave waves-effect waves-light">
                                                                        <span class="ms-4 me-4">Sign Up</span>
                                                                    </button>
                                                                </th>
                                                                <th scope="row" class="">
                                                                    <div class="mb-0 font-medium text-[1rem]">Professional</div>
                                                                    <div class="mb-4 text-[1.75rem] font-medium">$39<span class="text-[13px] opacity-50 ms-1">/ month</span></div>
                                                                    <button type="button" class="ti-btn ti-btn-soft-primary3 grid w-full btn-wave waves-effect waves-light">
                                                                        <span class="ms-4 me-4">Sign Up</span>
                                                                    </button>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                                <td colspan="5" class="pricing-feature !font-semibold !text-primarytint2color">Offered Features :</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Storage Space</td>
                                                                <td>5 GB</td>
                                                                <td>20 GB</td>
                                                                <td class="bg-primary/10 !text-primary">Unlimited</td>
                                                                <td>30GB</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Number of Users</td>
                                                                <td>Up to 5</td>
                                                                <td>Up to 5</td>
                                                                <td class="bg-primary/10 !text-primary">Unlimited</td>
                                                                <td>Customizable</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Customer Support</td>
                                                                <td>Email Support</td>
                                                                <td>Email and Phone Support</td>
                                                                <td class="bg-primary/10 !text-primary">Priority Email, Phone, and On-site Support</td>
                                                                <td>Email and Phone Support</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Advanced Analytics</td>
                                                                <td>Basic Analytics</td>
                                                                <td>Enhanced Analytics</td>
                                                                <td class="bg-primary/10 !text-primary">Custom Analytics Solutions</td>
                                                                <td>Enhanced Analytics</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Integrations</td>
                                                                <td>Limited Integrations</td>
                                                                <td>Custom Integrations</td>
                                                                <td class="bg-primary/10 !text-primary">More Integrations</td>
                                                                <td>None</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Security Features</td>
                                                                <td>Basic Security Measures	</td>
                                                                <td>Enterprise-level Security Measures</td>
                                                                <td class="bg-primary/10 !text-primary">Advanced Security Features</td>
                                                                <td>Enterprise-level Security Measures</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Customization</td>
                                                                <td>Limited Customization Options</td>
                                                                <td>Limited Customization Options</td>
                                                                <td class="bg-primary/10 !text-primary">More Customization Options</td>
                                                                <td>Tailored Solutions</td>
                                                            </tr>
                                                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                                <td colspan="5" class="pricing-feature !font-semibold !text-primarytint2color">Functionality :</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">User Management</td>
                                                                <td>Basic User Management</td>
                                                                <td>Comprehensive User Management</td>
                                                                <td class="bg-primary/10 !text-primary">Advanced User Management</td>
                                                                <td>Comprehensive User Management</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Reporting Tools</td>
                                                                <td>Standard Reporting Tools</td>
                                                                <td>-</td>
                                                                <td class="bg-primary/10 !text-primary">Advanced Reporting Tools</td>
                                                                <td>Customized Reporting Solutions</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">API Access/td>
                                                                <td>Limited API Access</td>
                                                                <td>Limited API Access</td>
                                                                <td class="bg-primary/10 !text-primary">Full API Access</td>
                                                                <td>Extended API Access</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0 border-0 hidden" id="pills-yearly1"  role="tabpanel" aria-labelledby="pills-yearly">
                                        <div class="card shadow-none border-0 reveal">
                                            <div class="box-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered pricing-table mb-0">
                                                        <thead>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <th scope="row" class="">
                                                                    <div class="grow text-start">
                                                                        <div class="mb-0 font-medium text-[1rem]">Plans with tailored features.</div>
                                                                        <span class="opacity-80 text-[11px]">Unlock personalized features within your plans, designed specifically to suit your needs.</span>
                                                                    </div>
                                                                </th>
                                                                <th scope="row" class="">
                                                                    <div class="mb-0 font-medium text-[1rem]">Basic</div>
                                                                    <div class="mb-4 text-[1.75rem] font-medium">$50<span class="text-[13px] opacity-50 ms-1">/ Annum</span></div>
                                                                    <button type="button" class="ti-btn ti-btn-soft-primary3 grid w-full btn-wave waves-effect waves-light">
                                                                        <span class="ms-4 me-4">Sign Up</span>
                                                                    </button>
                                                                </th>
                                                                <th scope="row" class="">
                                                                    <div class="mb-0 font-medium text-[1rem]">Growth</div>
                                                                    <div class="mb-4 text-[1.75rem] font-medium">$239<span class="text-[13px] opacity-50 ms-1">/ Annum</span></div>
                                                                    <button type="button" class="ti-btn ti-btn-soft-primary3 grid w-full btn-wave waves-effect waves-light">
                                                                        <span class="ms-4 me-4">Sign Up</span>
                                                                    </button>
                                                                </th>
                                                                <th scope="row" class="relative bg-primary/10 !text-primary">
                                                                    <p class="badge badge-lg bg-primarytint1color rounded font-semibold absolute end-0 me-2 mb-0">Popular</p>
                                                                    <div class="mb-0 font-medium text-[1rem]">Pro</div>
                                                                    <div class="mb-4 text-[1.75rem] font-medium">$899<span class="text-[13px] opacity-50 ms-1">/ Annum</span></div>
                                                                    <button type="button" class="ti-btn ti-btn-primary grid w-full btn-wave waves-effect waves-light">
                                                                        <span class="ms-4 me-4">Sign Up</span>
                                                                    </button>
                                                                </th>
                                                                <th scope="row" class="">
                                                                    <div class="mb-0 font-medium text-[1rem]">Professional</div>
                                                                    <div class="mb-4 text-[1.75rem] font-medium">$799<span class="text-[13px] opacity-50 ms-1">/ Annum</span></div>
                                                                    <button type="button" class="ti-btn ti-btn-soft-primary3 grid w-full btn-wave waves-effect waves-light">
                                                                        <span class="ms-4 me-4">Sign Up</span>
                                                                    </button>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                                <td colspan="5" class="pricing-feature !font-semibold !text-primarytint2color">Offered Features :</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Storage Space</td>
                                                                <td>15 GB</td>
                                                                <td>30 GB</td>
                                                                <td class="bg-primary/10 !text-primary">Unlimited</td>
                                                                <td>50GB</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Number of Users</td>
                                                                <td>Up to 10</td>
                                                                <td>Up to 10</td>
                                                                <td class="bg-primary/10 !text-primary">Unlimited</td>
                                                                <td>Unlimited</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Customer Support</td>
                                                                <td>Email Support</td>
                                                                <td>Email and Phone Support</td>
                                                                <td class="bg-primary/10 !text-primary">Priority Email, Phone, and On-site Support</td>
                                                                <td>Email and Phone Support</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Advanced Analytics</td>
                                                                <td>Basic Analytics</td>
                                                                <td>Enhanced Analytics</td>
                                                                <td class="bg-primary/10 !text-primary">Custom Analytics Solutions</td>
                                                                <td>Enhanced Analytics</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Integrations</td>
                                                                <td>Limited Integrations</td>
                                                                <td>-</td>
                                                                <td class="bg-primary/10 !text-primary">More Integrations</td>
                                                                <td>More Integrations</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Security Features</td>
                                                                <td>Basic Security Measures	</td>
                                                                <td>Enterprise-level Security Measures</td>
                                                                <td class="bg-primary/10 !text-primary">Advanced Security Features</td>
                                                                <td>Enterprise-level Security Measures</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Customization</td>
                                                                <td>Unlimited Customization Options</td>
                                                                <td>Unlimited Customization Options</td>
                                                                <td class="bg-primary/10 !text-primary">More Customization Options</td>
                                                                <td>Tailored Solutions</td>
                                                            </tr>
                                                            <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                                <td colspan="5" class="pricing-feature !font-semibold !text-primarytint2color">Functionality :</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">User Management</td>
                                                                <td>Basic User Management</td>
                                                                <td>Comprehensive User Management</td>
                                                                <td class="bg-primary/10 !text-primary">Advanced User Management</td>
                                                                <td>Comprehensive User Management</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">Reporting Tools</td>
                                                                <td>Standard Reporting Tools</td>
                                                                <td>-</td>
                                                                <td class="bg-primary/10 !text-primary">Advanced Reporting Tools</td>
                                                                <td>Customized Reporting Solutions</td>
                                                            </tr>
                                                            <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                                <td class="pricing-feature font-semibold">API Access
                                                                <td>Limited API Access</td>
                                                                <td>Limited API Access</td>
                                                                <td class="bg-primary/10 !text-primary">Full API Access</td>
                                                                <td>Extended API Access</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Pricing JS -->
        @vite('resources/assets/js/pricing.js')
        

@endsection