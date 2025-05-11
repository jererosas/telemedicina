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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Task Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Task Details</h1>
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

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header">
                                    <div class="box-title">
                                        Task Information
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="p-4 flex gap-5 border-b bg-light border-defaultborder dark:border-defaultborder/10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="assign" id="assign1" checked="">
                                            <label class="form-check-label !ps-1" for="assign1">
                                                Assign Lead
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="assign" id="assign2">
                                            <label class="form-check-label !ps-1" for="assign2">
                                                Assign Member
                                            </label>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">Task ID :</span></td>
                                                    <td>SPK - 456</td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">Task Tags :</span></td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">Marketing</span>
                                                        <span class="badge ti-btn-soft-primary3">Campaign</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">Project Name :</span></td>
                                                    <td>
                                                        New Product Launch Strategy
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <span class="font-medium">Assigned By :</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <span class="block text-[14px] font-medium">Emily Watson</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <span class="font-medium">Progress :</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="progress progress-sm progress-animate flex-auto me-2" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 45%"></div>
                                                            </div>
                                                            <div class="text-textmuted dark:text-textmuted/50 text-[11px]">45%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">Project Status :</span></td>
                                                    <td>
                                                        <span class="font-medium text-secondary">Inprogress</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">Project Priority :</span></td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger"><i class="ri-circle-fill text-[8px] me-1"></i> High</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">Start Date :</span></td>
                                                    <td>
                                                        13, June 2024
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">End Date :</span></td>
                                                    <td>
                                                        31, Dec 2024
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">Assigned To :</span></td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        John
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Emily
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Liam
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Sophia
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td><span class="font-medium">Last Updated Date :</span></td>
                                                    <td>
                                                        <span class="text-primarytint1color font-medium">18, June 2024</span>
                                                        <span class="text-primarytint1color font-medium">10:30</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                            
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-header">
                                    <div class="box-title">
                                        Attachments list
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary ms-auto ti-btn-sm mt-1"> View More</a>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group list-group-flush !border-t-0">
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">Full Project</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">0.45MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">assets.zip</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">0.99MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">image-1.png</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">245KB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">documentation.zip</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">2MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">landing.zip</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">3.46MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between items-center">
                                    <div class="box-title">Task Details</div>
                                    <div class="btn-list">
                                        <button type="button" class="ti-btn bg-primary text-white ti-btn-sm btn-wave me-0"><i class="ri-edit-line me-1 align-middle"></i>Edit Task</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex gap-2 mb-4 items-center flex-wrap">
                                        <div class="text-[15px] font-medium">Task Title :</div>
                                        <h5 class="font-medium mb-0">
                                            Develop New Website Features <span class="badge ti-btn-soft-primary1 text-[10px] font-medium"># created on 12 June, 2024</span>
                                        </h5>
                                    </div>
                                    <div class="text-[15px] font-medium mb-2">Task Description :</div>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">Enhance existing website features to improve user engagement and streamline user experience. Implement new functionalities to support business growth and adaptability.</p>
                                    <div class="grid grid-cols-12 sm:gap-x-6 mb-4">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="text-[15px] font-medium mb-2">Key tasks :</div>
                                            <ul class="task-details-key-tasks mb-0 ps-8">
                                                <li>Review current website features and identify areas for improvement.</li>
                                                <li>Brainstorm and develop ideas for new website functionalities.</li>
                                                <li>Design wireframes and prototypes for new features.</li>
                                                <li>Implement front-end and back-end development for new functionalities.</li>
                                                <li>Perform comprehensive testing and debugging.</li>
                                                <li>Launch and monitor performance of new website features.</li>
                                            </ul>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="flex items-center justify-between mb-2">
                                                <div class="text-[15px] font-medium">Sub Tasks :</div>
                                                <a href="javascript:void(0);" class="ti-btn bg-info/10 text-info btn-wave ti-btn-sm waves-effect waves-light">See More</a>
                                            </div>
                                            <ul class="ti-list-group mb-0">
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2"><i class="ri-link text-[15px] text-secondary leading-none p-1 bg-secondary/10 !rounded-full"></i></div>
                                                        <div class="font-medium">Research latest web development trends.</div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2"><i class="ri-link text-[15px] text-secondary leading-none p-1 bg-secondary/10 !rounded-full"></i></div>
                                                        <div class="font-medium">Create technical specifications document.</div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2"><i class="ri-link text-[15px] text-secondary leading-none p-1 bg-secondary/10 !rounded-full"></i></div>
                                                        <div class="font-medium">Optimize website for mobile responsiveness.</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-[15px] font-medium mb-2">Uploads :</div>
                                    <div class="flex gap-2 mb-0 flex-wrap">
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="{{asset('build/assets/images/media/media-37.jpg')}}" alt="File 1">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="{{asset('build/assets/images/media/media-38.jpg')}}" alt="File 2">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="File 3">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="File 4">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="File 5">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl bg-primary text-white">
                                            +2
                                        </a>
                                    </div>
                                </div>                            
                            </div>
                            <div class="box">
                                <div class="box-header justify-between">
                                    <ul class="nav nav-tabs tab-style-8 scaleX profile-settings-tab gap-2 flex mt-2" id="myTab4" role="tablist">
                                        <li class="nav-item flex-auto" role="presentation">
                                            <button class="nav-link ti-btn-soft-primary px-4 active rounded-md" data-hs-tab="#task-activity-pane">Task Activity</button>
                                        </li>
                                        <li class="nav-item flex-auto" role="presentation">
                                            <button class="nav-link ti-btn-soft-primary px-4 rounded-md" data-hs-tab="#task-comments-tab-pane">Comments</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body tab-content">
                                    <div class="tab-pane show active overflow-hidden p-0 border-0" id="task-activity-pane" role="tabpanel">
                                        <ul class="list-none profile-timeline mb-3">
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="Oliver">
                                                    </span>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-2">
                                                        <span class="text-defaulttextcolor">
                                                            <span class="font-medium">Oliver</span> shared a document with
                                                            <span class="font-medium">you</span>.
                                                        </span>
                                                        <span class="float-end text-[11px] badge bg-light text-textmuted dark:text-textmuted/50">14, June 2024 - 10:45</span>
                                                    </p>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-2 text-xs">
                                                        "We've finalized the project specifications and the client has approved the initial designs. Moving forward with the development phase."
                                                    </p>
                                                    <p class="profile-activity-media mb-0 flex items-center">
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="Document">
                                                        </a>
                                                        <span class="text-[11px] text-textmuted dark:text-textmuted/50">512.34KB</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm bg-primarytint2color avatar-rounded profile-timeline-avatar">
                                                        S
                                                    </span>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-2">
                                                        <span class="text-defaulttextcolor">
                                                            <span class="font-medium">You</span> shared a post with 6 people, including
                                                            <span class="font-medium">Ava, Sophia, Mia, Lucas</span>.
                                                        </span>
                                                        <span class="float-end text-[11px] badge bg-light text-textmuted dark:text-textmuted/50">10, June 2024 - 14:23</span>
                                                    </p>
                                                    <p class="profile-activity-media mb-2 sm:mt-0 mt-[2rem]">
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-19.jpg')}}" alt="Post Image">
                                                        </a>
                                                    </p>
                                                    <div>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="User 1">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="User 2">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="User 3">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="User 4">
                                                            </span>
                                                            4 People reacted
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Liam">
                                                    </span>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-2">
                                                        <span class="text-defaulttextcolor">
                                                            <span class="font-medium">Liam</span> commented on your post.
                                                        </span>
                                                        <span class="float-end text-[11px] badge bg-light text-textmuted dark:text-textmuted/50">12, June 2024 - 09:15</span>
                                                    </p>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">
                                                        "The updates to the project plan look great. I'll review the milestones and get back to you by end of day."
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="p-4 mt-2 bg-light rounded-md">
                                            <div class="sm:flex items-center leading-none">
                                                <div class="sm:me-4 mb-2 sm:mb-0">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto me-sm-2">
                                                    <div class="inline-flex input-group">
                                                        <input type="text" class="form-control shadow-none border !border-e-0" placeholder="Post Anything" aria-label="Recipient's username with two button addons">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-outline-light !m-0 btn-wave !border-e-0"><i class="bi bi-emoji-smile"></i></button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-outline-light !m-0 btn-wave !border-e-0"><i class="bi bi-paperclip"></i></button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-outline-light !m-0 btn-wave !border-e-0"><i class="bi bi-camera"></i></button>
                                                        <button class="ti-btn bg-primary !m-0 text-white btn-wave !border-e-0" type="button">Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane overflow-hidden hidden p-0 border-0" id="task-comments-tab-pane" role="tabpanel">
                                        <ul class="ti-list-group">
                                            <li class="ti-list-group-item">
                                                <div class="flex items-start gap-4 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-lg avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-auto w-1/2">
                                                        <span class="font-medium block mb-1">Mary Cateline</span>
                                                        <span class="block mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</span>
                                                        <div class="btn-list">
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light">Reply<i class="ri-reply-line ms-1"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave waves-effect waves-light">View Details<i class="ri-eye-line ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i></button>
                                                        <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3 btn-wave waves-effect waves-light"><i class="ri-thumb-down-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="ti-list-group-item">
                                                <div class="flex items-start gap-4 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-lg avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-auto w-1/2">
                                                        <span class="font-medium block mb-1">Monte vin</span>
                                                        <span class="block mb-3">Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam</span>
                                                        <div class="btn-list">
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light">Reply<i class="ri-reply-line ms-1"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave waves-effect waves-light">View Details<i class="ri-eye-line ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i></button>
                                                        <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3 btn-wave waves-effect waves-light"><i class="ri-thumb-down-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->
        
@endsection

@section('scripts')
        

@endsection