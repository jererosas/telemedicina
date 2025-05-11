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
                                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Projects</h1>
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
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box main-dashboard-banner project-dashboard-banner overflow-hidden">
                                <div class="box-body p-[1.5rem]">
                                    <div class="grid grid-cols-12 gap-x-6 justify-between">
                                        <div class="xxl:col-span-8 xl:col-span-5 lg:col-span-5 md:col-span-5 sm:col-span-5 col-span-12">
                                            <h4 class="mb-1 font-medium text-white">Manage Projects</h4>
                                            <p class="mb-3 text-white opacity-70">Manage projects effortlessly with our one-click solution, streamlining your workflow.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-primarytint1color text-white">Manage Now<i class="ti ti-arrow-narrow-right"></i></a>
                                        </div>
                                        <div class="xxl:col-span-4 xl:col-span-7 lg:col-span-7 md:col-span-7 sm:col-span-7 col-span-12 sm:block hidden text-end my-auto">
                                            <img src="{{asset('build/assets/images/media/media-85.png')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Team 
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light">View All</a>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Works</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Tasks</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="top-selling">
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="block font-semibold">Richard Dom</span>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">Team Leader</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">457</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-success/10 text-success">Online</span>
                                                    </td>
                                                    <td>
                                                        <span class="">564/ <span class="text-textmuted dark:text-textmuted/50">1145</span></span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
                                                                <i class="ti ti-user-plus align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Assign
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-0 ti-btn-soft-info">
                                                                <i class="ti ti-at align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Mail
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary2 !m-02">
                                                                <i class="ti ti-eye align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="block font-semibold">Jennifer Tab</span>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">Project Manager</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">965</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-success/10 text-success">Online</span>
                                                    </td>
                                                    <td>
                                                        <span class="">1,754/ <span class="text-textmuted dark:text-textmuted/50">2145</span></span>
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
                                                                <i class="ti ti-user-plus align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Assign
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-0 ti-btn-soft-info">
                                                                <i class="ti ti-at align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Mail
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary2 !m-02">
                                                                <i class="ti ti-eye align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="block font-semibold">Nikki Jey</span>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">UI Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">647</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-danger/10 text-danger">Offline</span>
                                                    </td>
                                                    <td>
                                                        <span class="">631/ <span class="text-textmuted dark:text-textmuted/50">1145</span></span>
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
                                                                <i class="ti ti-user-plus align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Assign
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-0 ti-btn-soft-info">
                                                                <i class="ti ti-at align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Mail
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary2 !m-02">
                                                                <i class="ti ti-eye align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/21.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="block font-semibold">Arifa Zed</span>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">Web Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">983</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-success/10 text-success">Online</span>
                                                    </td>
                                                    <td>
                                                        <span class="">502/ <span class="text-textmuted dark:text-textmuted/50">1236</span></span>
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
                                                                <i class="ti ti-user-plus align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Assign
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-0 ti-btn-soft-info">
                                                                <i class="ti ti-at align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Mail
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary2 !m-02">
                                                                <i class="ti ti-eye align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="block font-semibold">Xiong Yu</span>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">Team Member</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">631</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-success/10 text-success">Online</span>
                                                    </td>
                                                    <td>
                                                        <span class="">360/ <span class="text-textmuted dark:text-textmuted/50">457</span></span>
                                                    </td>
                                                    <td>
                                                    <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
                                                                <i class="ti ti-user-plus align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Assign
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-0 ti-btn-soft-info">
                                                                <i class="ti ti-at align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Mail
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary2 !m-02">
                                                                <i class="ti ti-eye align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="border-b-0">
                                                        <div class="flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="block font-semibold">Emanuel Gen</span>
                                                                <a href="javascript:void(0);" class="text-textmuted dark:text-textmuted/50 text-xs">Project Manager</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="border-b-0">
                                                        <span class="font-medium">478</span>
                                                    </td>
                                                    <td class="border-b-0">
                                                        <span class="badge leading-none bg-danger/10 text-danger">Offline</span>
                                                    </td>
                                                    <td class="border-b-0">
                                                        <span class="">558/ <span class="text-textmuted dark:text-textmuted/50">698</span></span>
                                                    </td>
                                                    <td class="border-b-0">
                                                    <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
                                                                <i class="ti ti-user-plus align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Assign
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-0 ti-btn-soft-info">
                                                                <i class="ti ti-at align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                Mail
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary2 !m-02">
                                                                <i class="ti ti-eye align-middle"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                View
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
                            </div>
                        </div>
                        <div class="xxl:col-span-7 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body">
                                            <div class="mb-5 flex items-start justify-between">
                                                <span class="avatar avatar-sm bg-primary svg-white">
                                                    <i class="ri-pages-line text-[1rem]"></i>
                                                </span>
                                                <span class="badge leading-none bg-danger/10 text-danger">-5.20%</span>
                                            </div>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="flex-shrink-0 leading-none">
                                                    <div class="text-textmuted dark:text-textmuted/50 mb-2">New Projects</div>
                                                    <h4 class="mb-0 text-xl font-medium">432</h4>
                                                </div>
                                                <div id="Projects-2" class="flex-shrink-0 text-end ms-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body">
                                            <div class="mb-5 flex items-start justify-between">
                                                <span class="avatar avatar-sm bg-primarytint1color svg-white">
                                                    <i class="ri-check-double-line text-[1rem]"></i>
                                                </span>
                                                <span class="badge leading-none bg-success/10 text-success">+7.20%</span>
                                            </div>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="flex-shrink-0 leading-none">
                                                    <div class="text-textmuted dark:text-textmuted/50 mb-2">Completed</div>
                                                    <h4 class="mb-0 text-xl font-medium">122</h4>
                                                </div>
                                                <div id="Projects-1" class="flex-shrink-0 text-end ms-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body">
                                            <div class="mb-5 flex items-start justify-between">
                                                <span class="avatar avatar-sm bg-primarytint2color svg-white">
                                                    <i class="ri-loop-left-fill text-[1rem]"></i>
                                                </span>
                                                <span class="badge leading-none bg-danger/10 text-danger">-5.20%</span>
                                            </div>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="flex-shrink-0 leading-none">
                                                    <div class="text-textmuted dark:text-textmuted/50 mb-2">Ongoing Projects</div>
                                                    <h4 class="mb-0 text-xl font-medium">1,265</h4>
                                                </div>
                                                <div id="Projects-3" class="flex-shrink-0 text-end ms-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body">
                                            <div class="mb-5 flex items-start justify-between">
                                                <span class="avatar avatar-sm bg-primarytint3color svg-white">
                                                    <i class="ri-time-line text-[1rem]"></i>
                                                </span>
                                                <span class="badge leading-none bg-success/10 text-success">+5.20%</span>
                                            </div>
                                            <div class="flex align-items-end justify-between flex-wrap">
                                                <div class="flex-shrink-0 leading-none">
                                                    <div class="text-textmuted dark:text-textmuted/50 mb-2">Pending Projects</div>
                                                    <h4 class="mb-0 text-xl font-medium">1,265</h4>
                                                </div>
                                                <div id="Projects-4" class="flex-shrink-0 text-end ms-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header justify-between">    
                                    <div class="box-title">Project Statistics</div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Last Week <i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Month</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex gap-5 items-center p-4 justify-around bg-light mx-2 flex-wrap flex-xl-nowrap rounded-md">
                                        <div class="flex gap-4 items-center flex-wrap">
                                            <div class="avatar avatar-lg flex-shrink-0 bg-primary/10 avatar-rounded svg-primary shadow-sm border border-primary border-opacity-25">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M184,89.57V84c0-25.08-37.83-44-88-44S8,58.92,8,84v40c0,20.89,26.25,37.49,64,42.46V172c0,25.08,37.83,44,88,44s88-18.92,88-44V132C248,111.3,222.58,94.68,184,89.57ZM232,132c0,13.22-30.79,28-72,28-3.73,0-7.43-.13-11.08-.37C170.49,151.77,184,139,184,124V105.74C213.87,110.19,232,122.27,232,132ZM72,150.25V126.46A183.74,183.74,0,0,0,96,128a183.74,183.74,0,0,0,24-1.54v23.79A163,163,0,0,1,96,152,163,163,0,0,1,72,150.25Zm96-40.32V124c0,8.39-12.41,17.4-32,22.87V123.5C148.91,120.37,159.84,115.71,168,109.93ZM96,56c41.21,0,72,14.78,72,28s-30.79,28-72,28S24,97.22,24,84,54.79,56,96,56ZM24,124V109.93c8.16,5.78,19.09,10.44,32,13.57v23.37C36.41,141.4,24,132.39,24,124Zm64,48v-4.17c2.63.1,5.29.17,8,.17,3.88,0,7.67-.13,11.39-.35A121.92,121.92,0,0,0,120,171.41v23.46C100.41,189.4,88,180.39,88,172Zm48,26.25V174.4a179.48,179.48,0,0,0,24,1.6,183.74,183.74,0,0,0,24-1.54v23.79a165.45,165.45,0,0,1-48,0Zm64-3.38V171.5c12.91-3.13,23.84-7.79,32-13.57V172C232,180.39,219.59,189.4,200,194.87Z"></path></svg>
                                            </div>
                                            <div>
                                                <span class="mb-1 block">Total Revenue</span> 
                                                <div class="flex align-items-end gap-2">
                                                    <h4 class="mb-0">$475,896</h4> 
                                                    <div class="text-[13px]"> 
                                                        <span class="opacity-70"> Increased By </span>  
                                                        <span class="badge leading-none bg-success align-middle opacity-90">5.6%<i class="ti ti-trending-up"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-4 items-center flex-wrap">
                                            <div class="avatar avatar-lg flex-shrink-0 bg-primarytint1color/10 avatar-rounded svg-primarytint1color shadow-sm border border-primarytint1color border-opacity-25">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M230.91,172A8,8,0,0,1,228,182.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,36,169.09l92,53.65,92-53.65A8,8,0,0,1,230.91,172ZM220,121.09l-92,53.65L36,121.09A8,8,0,0,0,28,134.91l96,56a8,8,0,0,0,8.06,0l96-56A8,8,0,1,0,220,121.09ZM24,80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26Z"></path></svg>
                                            </div>
                                            <div>
                                                <span class="mb-1 block">Total Projects</span> 
                                                <div class="flex align-items-end gap-2">
                                                    <h4 class="mb-0">75,896</h4> 
                                                    <div class="text-[13px]"> 
                                                        <span class="opacity-70"> Increased By </span>  
                                                        <span class="badge leading-none bg-danger align-middle opacity-90">1.6%<i class="ti ti-trending-down"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project-statistics"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Running Projects List
                                    </div>
                                    <button type="button" class="ti-btn ti-btn-sm bg-primary/10 text-primary ">View All</button>
                                </div>
                                <div class="p-4">
                                    <div class="flex items-start gap-4 mb-3">
                                        <div class="grow">
                                        <div class="flex items-center gap-1">
                                            <p class="font-medium mb-1 text-[14px]">Web application design
                                                <a href="javascript:void(0);" class="text-info hs-tooltip ti-main-tooltip">
                                                    <i class="ri-information-2-line text-[13px] opacity-70 leading-none align-middle mb-1"></i>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Get Info
                                                    </span>
                                                </a>
                                            </p>
                                        </div>
                                            <p class="text-textmuted dark:text-textmuted/50 mb-1 font-normal text-xs">At vero eos et accusamus et iusto odio.</p>
                                            <div>Status: <span class="text-success font-normal text-xs">75% completed</span></div>
                                        </div>
                                        <div class="flex-shrink-0 text-end ms-auto">
                                            <p class="mb-3 text-[11px] text-textmuted dark:text-textmuted/50"><i class="ri-time-line  text-textmuted dark:text-textmuted/50 text-[11px] align-middle leading-none me-1 inline-block"></i>2mins ago</p>
                                            <div class="avatar-list-stacked">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress progress-lg !rounded-full p-1 ms-auto bg-primary/10" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated !rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="flex items-start gap-4 mb-3">
                                        <div class="grow">
                                            <div class="flex items-center gap-1">
                                                <p class="font-medium mb-1 text-[14px]">Designing New Template
                                                    <a href="javascript:void(0);" class="text-info hs-tooltip ti-main-tooltip">
                                                        <i class="ri-information-2-line text-[13px] opacity-70 leading-none align-middle mb-1"></i>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Get Info
                                                        </span>
                                                    </a>
                                                </p>
                                            </div>
                                            <p class="text-textmuted dark:text-textmuted/50 mb-1 font-normal text-xs">At vero eos et accusamus et iusto odio.</p>
                                            <div>Status: <span class="text-warning font-medium text-xs">45% completed</span></div>
                                        </div>
                                        <div class="flex-shrink-0 text-end ms-auto">
                                            <p class="mb-3 text-[11px] text-textmuted dark:text-textmuted/50"><i class="ri-time-line  text-textmuted dark:text-textmuted/50 text-[11px] align-middle leading-none me-1 inline-block"></i>15mins ago</p>
                                            <div class="avatar-list-stacked">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress progress-lg !rounded-full p-1 ms-auto flex-auto bg-primarytint1color/10" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primarytint1color progress-bar-striped progress-bar-animated !rounded-full" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="flex items-start gap-4 mb-3">
                                        <div class="grow">
                                            <div class="flex items-center gap-1">
                                                <p class="font-medium mb-1 text-[14px]">Web application design
                                                    <a href="javascript:void(0);" class="text-info hs-tooltip ti-main-tooltip">
                                                        <i class="ri-information-2-line text-[13px] opacity-70 leading-none align-middle mb-1"></i>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Get Info
                                                        </span>
                                                    </a>
                                                </p>
                                            </div>
                                            <p class="text-textmuted dark:text-textmuted/50 mb-1 text-xs">At vero eos et accusamus et iusto odio.</p>
                                            <div>Status: <span class="text-success font-medium text-xs">65% completed</span></div>
                                        </div>
                                        <div class="flex-shrink-0 text-end ms-auto">
                                            <p class="mb-3 text-[11px] text-textmuted dark:text-textmuted/50"><i class="ri-time-line  text-textmuted dark:text-textmuted/50 text-[11px] align-middle leading-none me-1 inline-block"></i>20mins ago</p>
                                            <div class="avatar-list-stacked">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary border-2  avatar-rounded text-white" href="javascript:void(0);"> 2+ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress progress-lg !rounded-full p-1 ms-auto flex-auto bg-primarytint2color/10" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primarytint2color progress-bar-striped progress-bar-animated !rounded-full" style="width: 65%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Monthly Targets</div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light">View All</a>
                                </div>
                                <div class="box-body">
                                    <div id="monthly-target">
                                    </div>
                                    <div class="flex gap-4 items-center justify-between text-center p-4 bg-light rounded-md">
                                        <div>
                                            <span class="mb-1 block"><i class="ri-circle-fill text-[8px] align-middle leading-none text-primary"></i> New Projects</span> 
                                            <h6 class="mb-1">4,896</h6> 
                                            <span class="text-success font-medium"><i class="ri-arrow-up-s-fill"></i> 3.5%</span>
                                        </div>
                                        <div>
                                            <span class="mb-1 block"><i class="ri-circle-fill text-[8px] align-middle leading-none text-primarytint1color"></i> Completed</span> 
                                            <h6 class="mb-1">2,475</h6> 
                                            <span class="text-danger font-medium"><i class="ri-arrow-down-s-fill"></i> 1.5%</span>
                                        </div>
                                        <div>
                                            <span class="mb-1 block"><i class="ri-circle-fill text-[8px] align-middle leading-none text-primarytint2color"></i> Pending</span> 
                                            <h6 class="mb-1">456</h6> 
                                            <span class="text-success font-medium"><i class="ri-arrow-up-s-fill"></i> 0.1%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Daily Tasks
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            View All<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group ti-list-group-flush list-none">
                                        <li class="ti-list-group-item !border-b-0 flex gap-4 !p-0 items-start mb-2">
                                            <div class="flex-shrink-0 daily-tasks-time">
                                                <span class="text-textmuted dark:text-textmuted/50 ms-auto text-[11px] flex-shrink-0 flex-auto">09:15 AM</span>
                                            </div>
                                            <div class="box border border-primary/25 shadow-none mb-0 bg-primary/10 w-full">
                                                <div class="box-body">
                                                    <div class="flex items-center gap-2 justify-between">
                                                        <p class="font-medium mb-2 leading-none">Home Page Design
                                                        </p>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="float-end text-[1rem] text-primary">
                                                                <i class="ri-add-circle-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                View Details
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap gap-2 items-center">
                                                        <span class="badge leading-none bg-primary/10 text-primary">Framework</span>
                                                        <span class="badge leading-none bg-secondary/10 text-secondary">Angular</span>
                                                        <span class="badge leading-none bg-info/10 text-info">Php</span>
                                                        <div class="avatar-list-stacked ms-auto">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !border-b-0 flex gap-4 !p-0 items-start pt-1 mb-2">
                                            <div class="flex-shrink-0 daily-tasks-time">
                                                <span class="text-textmuted dark:text-textmuted/50 ms-auto text-[11px] flex-shrink-0 flex-auto">10:15 AM</span>
                                            </div>
                                            <div class="box border border-primarytint1color/25 shadow-none mb-0 bg-primarytint1color/10 w-full">
                                                <div class="box-body">
                                                    <div class="flex items-center gap-2 justify-between">
                                                        <p class="font-medium mb-2 leading-none">Meeting Hour
                                                        </p>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="float-end text-[1rem] text-primarytint1color">
                                                                <i class="ri-add-circle-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                View Details
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap gap-2 items-center">
                                                        <span class="badge leading-none bg-primary/10 text-primary">Framework</span>
                                                        <span class="badge leading-none bg-secondary/10 text-secondary">Angular</span>
                                                        <span class="badge leading-none bg-info/10 text-info">Php</span>
                                                        <span class="badge leading-none bg-danger/10 text-danger">Html</span>
                                                        <span class="badge leading-none bg-success/10 text-success">Laravel</span>
                                                        <div class="avatar-list-stacked ms-auto">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>  
                                        <li class="ti-list-group-item !border-b-0 flex gap-4 !p-0 items-start pt-1 mb-2">
                                            <div class="flex-shrink-0 daily-tasks-time">
                                                <span class="text-textmuted dark:text-textmuted/50 ms-auto text-[11px] flex-shrink-0 flex-auto">04:30 AM</span>
                                            </div>
                                            <div class="box border border-primarytint2color/25 shadow-none mb-0 bg-primarytint2color/10 w-full">
                                                <div class="box-body">
                                                    <div class="flex items-center gap-2 justify-between">
                                                        <p class="font-medium mb-2 leading-none">Projects Work Progress
                                                        </p>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="float-end text-[1rem] text-primarytint2color">
                                                                <i class="ri-add-circle-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                View Details
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap gap-2 items-center">
                                                        <span class="badge leading-none bg-info/10 text-info">Php</span>
                                                        <span class="badge leading-none bg-danger/10 text-danger">Html</span>
                                                        <span class="badge leading-none bg-primary/10 text-primary">Framework</span>
                                                        <div class="avatar-list-stacked ms-auto">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !border-b-0 flex gap-4 !p-0 items-start pt-1 mb-0">
                                            <div class="flex-shrink-0 daily-tasks-time">
                                                <span class="text-textmuted dark:text-textmuted/50 ms-auto text-[11px] flex-shrink-0 flex-auto">05:45 PM</span>
                                            </div>
                                            <div class="box border border-primarytint3color/25 shadow-none mb-0 bg-primarytint3color/10 w-full">
                                                <div class="box-body">
                                                    <div class="flex items-center gap-2 justify-between">
                                                        <p class="font-medium mb-2 leading-none">Status Updation by Team Leads
                                                        </p>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="float-end text-[1rem] text-primarytint3color">
                                                                <i class="ri-add-circle-fill"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                View Details
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap gap-2 items-center">
                                                        <span class="badge leading-none bg-primary/10 text-primary">Framework</span>
                                                        <span class="badge leading-none bg-secondary/10 text-secondary">Angular</span>
                                                        <span class="badge leading-none bg-info/10 text-info">Php</span>
                                                        <div class="avatar-list-stacked ms-auto">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
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
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Projects Summary
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="me-3 my-1">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown my-1">
                                            <a href="javascript:void(0);" class="ti-btn bg-primary !m-0 text-white ti-btn-sm ti-dropdown-toggle hs-dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Poject Title</th>
                                                    <th scope="col">Tasks</th>
                                                    <th scope="col">Progress</th>
                                                    <th scope="col">Assigned Team</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <span class="font-medium"> Home Page</span>
                                                    </td>
                                                    <td>210 <span class="opacity-70">/234</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="progress progress-sm w-full" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar  bg-primary" style="width: 35%"></div>
                                                            </div>
                                                            <div class="ms-2">35%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-primary/10 text-primary">In Progress</span>
                                                    </td>
                                                    <td>
                                                        14-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger !m-0">
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
                                                        2
                                                    </td>
                                                    <td>
                                                        <span class="font-medium"> Landing Design </span>
                                                    </td>
                                                    <td>162  <span class="op-8">/185</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="progress progress-sm w-full" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar  bg-primary" style="width: 80%"></div>
                                                            </div>
                                                            <div class="ms-2">80%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-primary/10 text-primary">In Progress</span>
                                                    </td>
                                                    <td>
                                                        20-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger !m-0">
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
                                                        3
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">  New Template Design</span>
                                                    </td>
                                                    <td> 10  <span class="opacity-70">/100</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="progress progress-animate progress-sm w-full" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 10%"></div>
                                                            </div>
                                                            <div class="ms-2">10%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        29-05-2023
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger !m-0">
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
                                                        4
                                                    </td>
                                                    <td>
                                                        <span class="font-medium"> HR Management Design </span>
                                                    </td>
                                                    <td>48 <span class="opacity-70">/52</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="progress progress-animate progress-sm w-full" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 63%"></div>
                                                            </div>
                                                            <div class="ms-2">63%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-xs bg-light !text-defaulttextcolor dark:!text-defaulttextcolor/80 border-2 avatar-rounded" href="javascript:void(0);">
                                                                +2
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-primary/10 text-primary">In Progress</span>
                                                    </td>
                                                    <td>
                                                        18-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger !m-0">
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
                                                        5
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">   Designing New Template</span>
                                                    </td>
                                                    <td>185 <span class="opacity-70">/192</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="progress progress-animate progress-sm w-full" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 95%"></div>
                                                            </div>
                                                            <div class="ms-2">100%</div>
                                                        </div>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-xs bg-light !text-defaulttextcolor dark:!text-defaulttextcolor/80 border-2 avatar-rounded" href="javascript:void(0);">
                                                                +2
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-success/10 text-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        11-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger !m-0">
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
                                                        6
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">  Documentation Project </span>
                                                    </td>
                                                    <td>25 <span class="opacity-70">/72</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="progress progress-animate progress-sm w-full" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 45%"></div>
                                                            </div>
                                                            <div class="ms-2">50%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge leading-none bg-primary/10 text-primary">In Progress</span>
                                                    </td>
                                                    <td>
                                                        18-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-primary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-secondary !m-0">
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
                                                            <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-sm !rounded-full me-2 ti-btn-soft-danger !m-0">
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
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                    Task Summary
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-light">View All</a>
                                </div>
                                <div class="box-body">
                                    <div class="flex gap-4 items-center justify-between p-4 bg-light mb-4 rounded-md">
                                        <div>
                                            <h6 class="mb-1">Tasks Completed Rate</h6>
                                            <p class="mb-0 text-textmuted dark:text-textmuted/50">Within the Deadline</p>
                                        </div>
                                        <div>
                                            <h5 class="mb-0">85%<span class="badge leading-none bg-success text-white font-medium text-[8px] ms-2"><i class="ri-arrow-up-s-fill"></i> 1.5%</span></h5> 
                                        </div>
                                    </div>
                                    <div id="tasks-report">
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

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Projects Dashboard --> 
        @vite('resources/assets/js/projects-dashboard.js')
        
   
@endsection