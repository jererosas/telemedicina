@extends('layouts.master')

@section('styles')

        <!-- dragula css-->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Projects Overview</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Projects Overview</h1>
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
                        <div class="xxl:col-span-8 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Project Details
                                    </div> 
                                    <div>
                                        <a href="{{url('projects-create')}}" class="ti-btn ti-btn-sm bg-primary text-white btn-wave"><i class="ri-add-line align-middle me-1 font-medium"></i>Create Project</a>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm bg-primarytint1color text-white btn-wave"><i class="ri-share-line align-middle font-medium me-1"></i>Share</a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex items-center mb-4 gap-2 flex-wrap">
                                        <span class="avatar avatar-lg me-1 bg-gradient-to-br from-primary to-secondary"><i class="ri-stack-line text-2xl leading-none"></i></span>
                                        <div>
                                            <h6 class="font-medium mb-2 task-title">
                                                Customer Feedback Dashboard Development
                                            </h6>
                                            <span class="badge bg-success/10 text-success"> In progress</span>
                                            <span class="text-textmuted dark:text-textmuted/50 text-xs"><i class="ri-circle-fill text-success mx-2 text-[0.5625rem]"></i>Last Updated 1 Day Ago</span>
                                        </div>
                                        <div class="ms-auto align-self-start">
                                            <div class="ti-dropdown hs-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary ti-dropdown-toggle hs-dropdown-toggle">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 inline-block"></i>View</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 inline-block"></i>Edit</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-[15px] font-medium mb-2">Project Description :</div>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">The Customer Feedback Dashboard Development project aims to create a comprehensive dashboard that aggregates and visualizes customer feedback data. This will enable our team to gain actionable insights and improve customer satisfaction.</p>
                                    <div class="flex gap-5 mb-4 flex-wrap">
                                        <div class="flex items-center gap-2 me-3">
                                            <span class="avatar avatar-md avatar-rounded me-1 bg-primarytint1color/10 !text-primarytint1color"><i class="ri-calendar-event-line text-lg leading-none align-middle"></i></span>
                                            <div>
                                                <div class="font-medium mb-0 task-title">
                                                    Start Date
                                                </div>
                                                <span class="text-xs text-textmuted dark:text-textmuted/50">28 August, 2024</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 me-3">
                                            <span class="avatar avatar-md avatar-rounded me-1 bg-primarytint2color/10 !text-primarytint2color"><i class="ri-time-line text-lg leading-none align-middle"></i></span>
                                            <div>
                                                <div class="font-medium mb-0 task-title">
                                                    End Date
                                                </div>
                                                <span class="text-xs text-textmuted dark:text-textmuted/50">30 Oct, 2024</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="avatar avatar-md p-1 avatar-rounded me-1 bg-primary/10"><img src="{{asset('build/assets/images/faces/11.jpg')}}" alt=""></span>
                                            <div>
                                                <span class="block text-[14px] font-medium">Amith Catzem</span>
                                                <span class="text-xs text-textmuted dark:text-textmuted/50">Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="grid grid-cols-12 sm:gap-x-6">
                                            <div class="xl:col-span-6 col-span-12">
                                                <div class="text-[15px] font-medium mb-2">Key tasks :</div>
                                                <ul class="task-details-key-tasks mb-0 ps-8">
                                                    <li>Design and implement a user-friendly dashboard interface.</li>
                                                    <li>Integrate data sources and APIs to fetch customer feedback data.</li>
                                                    <li>Develop interactive data visualizations for easy interpretation.</li>
                                                    <li>Implement filters and sorting functionalities for data analysis.</li>
                                                    <li>Create user authentication and access control features.</li>
                                                    <li>Perform usability testing and iterate based on feedback.</li>
                                                </ul>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <div class="flex items-center justify-between mb-2">
                                                    <div class="text-[15px] font-medium">Sub Tasks :</div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary btn-wave ti-btn-sm waves-effect waves-light">See More</a>
                                                </div>
                                                <ul class="ti-list-group">
                                                    <li class="ti-list-group-item">
                                                        <div class="flex items-center">
                                                            <div class="me-2"><i class="ri-link text-[15px] text-secondary leading-none p-1 bg-secondary/10 rounded-full"></i></div>
                                                            <div class="font-medium">Research latest web development trends.</div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item">
                                                        <div class="flex items-center">
                                                            <div class="me-2"><i class="ri-link text-[15px] text-secondary leading-none p-1 bg-secondary/10 rounded-full"></i></div>
                                                            <div class="font-medium">Create technical specifications document.</div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item">
                                                        <div class="flex items-center">
                                                            <div class="me-2"><i class="ri-link text-[15px] text-secondary leading-none p-1 bg-secondary/10 rounded-full"></i></div>
                                                            <div class="font-medium">Optimize website for mobile responsiveness.</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-[15px] font-medium mb-2">Skills :</div>
                                    <div class="flex gap-2 flex-wrap">
                                        <span class="badge bg-light text-defaulttextcolor font-medium dark:text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10">UI/UX Design</span>
                                        <span class="badge bg-light text-defaulttextcolor font-medium dark:text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10">Data Integration</span>
                                        <span class="badge bg-light text-defaulttextcolor font-medium dark:text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10">Data Visualization</span>
                                        <span class="badge bg-light text-defaulttextcolor font-medium dark:text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10">Front-End Development</span>
                                        <span class="badge bg-light text-defaulttextcolor font-medium dark:text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10">Authentication Systems</span>
                                        <span class="badge bg-light text-defaulttextcolor font-medium dark:text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10">Usability Testing</span>
                                        <span class="badge bg-light text-defaulttextcolor font-medium dark:text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10">Agile Methodology</span>
                                        <span class="badge bg-light text-defaulttextcolor font-medium dark:text-defaulttextcolor/80 border border-defaultborder dark:border-defaultborder/10">API Development</span>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center justify-between gap-2 flex-wrap">
                                        <div class="flex gap-4 items-center">
                                            <span class="text-xs">Assigned To :</span>
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
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-primary !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Charlotte
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <span class="text-xs">Status:</span>
                                            <span class="block"><span class="badge bg-info">On going</span></span>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <span class="text-xs">Priority:</span>
                                            <span class="block text-[14px] font-medium"><span class="badge bg-primarytint3color">Medium</span></span>
                                        </div>
                                    </div>
                                </div>                            
                            </div>  
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">To Do Tasks</div>
                                    <div class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave"><i class="ri-add-line align-middle me-1 font-medium"></i>Add Task</div>
                                </div>
                                <div class="box-body p-0 relative" id="todo-content">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="ti-custom-table text-nowrap">
                                                <thead>
                                                    <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                        <th>
                                                            <input class="form-check-input check-all" type="checkbox" id="all-tasks" value="" aria-label="...">
                                                        </th>
                                                        <th class="todolist-handle-drag">

                                                        </th>
                                                        <th scope="col">Task Title</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">End Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="todo-drag">
                                                    <tr class="todo-box border-b !border-defaultborder dark:!border-defaultborder/10">
                                                        <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked=""></td>
                                                        <td>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm btn-wave ti-btn-light todo-handle">: :</button>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium">Implement responsive design</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium text-primarytint2color"><i class="ri-circle-line font-semibold text-[0.4375rem] me-2 leading-none align-middle"></i>Not Started</span>
                                                        </td>
                                                        <td>
                                                            17-Jan-2024
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="flex gap-2">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger btn-wave">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="todo-box border-b !border-defaultborder dark:!border-defaultborder/10">
                                                        <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                        <td>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm btn-wave ti-btn-light todo-handle">: :</button>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium">Fix login authentication issue</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium text-success text-xs"><i class="ri-circle-line font-semibold text-[0.4375rem] me-2 leading-none align-middle"></i>Completed</span>
                                                        </td>
                                                        <td>
                                                            17-Jan-2024
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="flex gap-2">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger btn-wave">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="todo-box border-b !border-defaultborder dark:!border-defaultborder/10">
                                                        <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                        <td>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm btn-wave ti-btn-light todo-handle">: :</button>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium">Optimize database queries</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium text-primarytint2color"><i class="ri-circle-line font-semibold text-[0.4375rem] me-2 leading-none align-middle"></i>Not Started</span>
                                                        </td>
                                                        <td>
                                                        18-Feb-2024
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="flex gap-2">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger btn-wave">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="todo-box border-b !border-defaultborder dark:!border-defaultborder/10">
                                                        <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked=""></td>
                                                        <td>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm btn-wave ti-btn-light todo-handle">: :</button>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium">Integrate third-party API</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium text-warning"><i class="ri-circle-line font-semibold text-[0.4375rem] me-2 leading-none align-middle"></i>Pending</span>
                                                        </td>
                                                        <td>
                                                            19-Feb-2024
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="flex gap-2">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger btn-wave">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="todo-box border-b !border-defaultborder dark:!border-defaultborder/10">
                                                        <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked=""></td>
                                                        <td>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm btn-wave ti-btn-light todo-handle">: :</button>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium">Create user documentation</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium text-primarytint2color"><i class="ri-circle-line font-semibold text-[0.4375rem] me-2 leading-none align-middle"></i>Not Started</span>
                                                        </td>
                                                        <td>
                                                            21-Feb-2024
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="flex gap-2">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger btn-wave">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="todo-box border-b !border-defaultborder dark:!border-defaultborder/10">
                                                        <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                        <td>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm btn-wave ti-btn-light todo-handle">: :</button>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium">Deploy to staging environment</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-medium text-primary"><i class="ri-circle-line font-semibold text-[0.4375rem] me-2 leading-none align-middle"></i>In Progress</span>
                                                        </td>
                                                        <td>
                                                        24-Feb-2024
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="flex gap-2">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger btn-wave">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="todo-box border-b !border-defaultborder dark:!border-defaultborder/10">
                                                        <td class="task-checkbox border-b-0"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked=""></td>
                                                        <td class="border-b-0">
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm btn-wave ti-btn-light todo-handle">: :</button>
                                                        </td>
                                                        <td class="border-b-0">
                                                            <span class="font-medium">Conduct security audit</span>
                                                        </td>
                                                        <td class="border-b-0">
                                                            <span class="font-medium text-primarytint2color"><i class="ri-circle-line font-semibold text-[0.4375rem] me-2 leading-none align-middle"></i>Not Started</span>
                                                        </td>
                                                        <td class="border-b-0">
                                                            27-Feb-2024
                                                        </td>
                                                        <td class="text-end border-b-0">
                                                            <div class="flex gap-2">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger btn-wave">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12 m-1">
                            <div class="box justify-between">
                                <div class="box-header">
                                    <div class="box-title">Project Discussions</div>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none profile-timeline">
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm shadow-sm bg-primary avatar-rounded profile-timeline-avatar">
                                                    A
                                                </span>
                                                <div class="mb-2 flex items-start gap-2">
                                                    <div>
                                                        <span class="font-medium">Project Kick-off Meeting</span>
                                                    </div>
                                                    <span class="ms-auto bg-light text-textmuted dark:text-textmuted/50 badge">15,Jun 2024 - 06:20</span>
                                                </div>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                    Discuss project scope, objectives, and timelines.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm shadow-sm bg-primarytint2color avatar-rounded profile-timeline-avatar">
                                                    B
                                                </span>
                                                <div class="mb-2 flex items-start gap-2">
                                                    <div>
                                                        <span class="font-medium">Project Details Page Planning</span>
                                                    </div>
                                                    <span class="ms-auto bg-light text-textmuted dark:text-textmuted/50 badge">20, Jun 2024 - 09:00</span>
                                                </div>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                    Define feature requirements and layout for the project details page.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm shadow-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                                <div class="text-textmuted dark:text-textmuted/50 mb-2 flex items-start gap-2 flex-wrap flex-xxl-nowrap">
                                                    <div>
                                                        <span class="text-defaulttextcolor"><b>Brenda Adams</b> shared a document with <b>you</b></span>.
                                                    </div>
                                                    <span class="ms-auto bg-light text-textmuted dark:text-textmuted/50 badge">18,Jun 2024 - 09:15</span>
                                                </div>
                                                <p class="profile-activity-media mb-0 flex items-center">
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </a>  
                                                    <span class="text-[11px] text-textmuted dark:text-textmuted/50">728.62KB</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm shadow-sm bg-primarytint3color avatar-rounded profile-timeline-avatar">
                                                    J
                                                </span>
                                                <div class="text-textmuted dark:text-textmuted/50 mb-2 flex items-start gap-2 flex-wrap flex-xxl-nowrap">
                                                    <div>
                                                        <span class="text-defaulttextcolor"><b>You</b> 
                                                        shared a post with 4 people <b>John,Emma,Liam,Sophie</b></span>.
                                                    </div>
                                                    <span class="ms-auto bg-light text-textmuted dark:text-textmuted/50 badge">30,Jun 2024 - 13:20</span>
                                                </div>
                                                <p class="profile-activity-media mb-2">
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-21.jpg')}}" alt="">
                                                    </a>   
                                                </p>
                                                <div>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm shadow-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                </span>
                                                <div class="mb-2">
                                                    <span class="font-medium">Security and Compliance Audit</span>
                                                </div>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs">
                                                    Ensure the system adheres to security and regulatory requirements.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm shadow-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="">
                                                </span>
                                                <div class="mb-1 flex items-start gap-2">
                                                    <div>
                                                        <b>Lucas</b> Commented on Project <a class="text-secondary" href="javascript:void(0);"><u>#System Integration</u></a>.
                                                    </div>
                                                    <span class="ms-auto bg-light text-textmuted dark:text-textmuted/50 badge text-nowrap">25,Jun2024-8:52</span>
                                                </div>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-4">Integration progress looks good, keep it up! &#128077;</p>
                                                <p class="profile-activity-media mb-0 flex">
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="">
                                                    </a>    
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="">
                                                    </a>    
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer">
                                    <div class="sm:flex items-center leading-none">
                                        <div class="sm:me-2 mb-2 sm:mb-0 p-1 rounded-full bg-primary/10 inline-block shrink-0">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" class="avatar avatar-sm avatar-rounded">
                                        </div>
                                        <div class="flex-auto">
                                            <div class="input-group flex-nowrap">
                                                <input type="text" class="form-control w-sm-50 border !border-s border-defaultborder dark:border-defaultborder/10 shadow-none" placeholder="Share your thoughts" aria-label="Recipient's username with two button addons">
                                                <button class="ti-btn ti-btn-soft-primary !m-0 btn-wave waves-effect waves-light" type="button"><i class="bi bi-emoji-smile"></i></button>
                                                <button class="ti-btn ti-btn-soft-primary !m-0 btn-wave waves-effect waves-light" type="button"><i class="bi bi-paperclip"></i></button>
                                                <button class="ti-btn ti-btn-soft-primary !m-0 btn-wave waves-effect waves-light" type="button"><i class="bi bi-camera"></i></button>
                                                <button class="ti-btn bg-primary !m-0 text-white btn-wave waves-effect waves-light text-nowrap" type="button">Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Project Documents
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <div class="ti-btn bg-light ti-btn-full ti-btn-sm ti-dropdown-toggle hs-dropdown-toggle">View All<i class="ti ti-chevron-down ms-1"></i>
                                        </div>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group list-group-flush !rounded-none">
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-md avatar-rounded p-2 bg-light leading-none">
                                                    <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">Project Proposal.pdf</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">1.2MB</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-rounded bg-light leading-none">
                                                    <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">Contracts.docx</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">1.5MB</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-md avatar-rounded p-2 bg-light leading-none">
                                                    <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">Meeting Notes.txt</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">256KB</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-rounded bg-light leading-none">
                                                    <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                </span>
                                                <div class="flex-auto">
                                                    <a href="javascript:void(0);"><span class="block font-medium">User Manual.pdf</span></a>
                                                    <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">1.8MB</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
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

        <!-- Dragula JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>

        <!--Project Overview JS -->
        @vite('resources/assets/js/project-overview.js')
        
                
@endsection