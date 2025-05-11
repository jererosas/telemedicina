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
                                    <li class="breadcrumb-item active" aria-current="page">Task List View</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Task List View</h1>
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
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden main-content-card">
                                <div class="box-body">
                                    <div class="flex items-start justify-between mb-2">
                                        <div>
                                            <span class="text-textmuted dark:text-textmuted/50 block mb-1">New Tasks</span>
                                            <h4 class="font-medium mb-0">45,478</h4>
                                        </div>
                                        <div class="leading-none">
                                            <span class="avatar avatar-md avatar-rounded bg-primary">
                                                <i class="ri-task-line text-xl"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">2.56%<i class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden main-content-card">
                                <div class="box-body">
                                    <div class="flex items-start justify-between mb-2">
                                        <div>
                                            <span class="text-textmuted dark:text-textmuted/50 block mb-1">Completed Tasks</span>
                                            <h4 class="font-medium mb-0">2,345</h4>
                                        </div>
                                        <div class="leading-none">
                                            <span class="avatar avatar-md avatar-rounded bg-primarytint1color">
                                                <i class="ri-check-line text-xl"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased By <span class="text-danger">3.05%<i class="ti ti-arrow-narrow-down text-[1rem]"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden main-content-card">
                                <div class="box-body">
                                    <div class="flex items-start justify-between mb-2">
                                        <div>
                                            <span class="text-textmuted dark:text-textmuted/50 block mb-1">Pending Tasks</span>
                                            <h4 class="font-medium mb-0">1245</h4>
                                        </div>
                                        <div class="leading-none">
                                            <span class="avatar avatar-md avatar-rounded bg-primarytint2color">
                                                <i class="ri-time-line text-xl"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">2.16%<i class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden main-content-card">
                                <div class="box-body">
                                    <div class="flex items-start justify-between mb-2">
                                        <div>
                                            <span class="text-textmuted dark:text-textmuted/50 block mb-1">Inprogress Tasks</span>
                                            <h4 class="font-medium mb-0">658</h4>
                                        </div>
                                        <div class="leading-none">
                                            <span class="avatar avatar-md avatar-rounded bg-primarytint3color">
                                                <i class="ri-loader-line text-xl"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">2.1%<i class="ti ti-arrow-narrow-up text-[1rem]"></i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Total Tasks
                                    </div>
                                    <div class="flex">
                                        <button class="ti-btn ti-btn-sm bg-primary text-white btn-wave waves-light" data-hs-overlay="#create-task"><i class="ri-add-line font-medium align-middle"></i> Create Task</button>
                                        <!-- Start::add task modal -->
                                        <div class="hs-overlay hidden ti-modal" id="create-task" tabindex="-1" aria-hidden="true">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                                <div class="ti-modal-content">
                                                    <div class="ti-modal-header">
                                                        <h6 class="ti-modal-title">Add Task</h6>
                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#create-task">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="ti-modal-body">
                                                        <div class="grid grid-cols-12 gap-x-6 gap-y-2">
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label for="task-name" class="form-label">Task Name</label>
                                                                <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label for="task-id" class="form-label">Task ID</label>
                                                                <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="form-label">Assigned Date</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-text text-textmuted dark:text-textmuted/50"> <i class="ri-calendar-line"></i> </div>
                                                                        <input type="text" class="form-control" id="assignedDate" placeholder="Choose date and time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="form-label">Due Date</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-text text-textmuted dark:text-textmuted/50"> <i class="ri-calendar-line"></i> </div>
                                                                        <input type="text" class="form-control" id="dueDate" placeholder="Choose date and time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="form-label">Status</label>
                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                                    <option value="New">New</option>
                                                                    <option value="Completed">Completed</option>
                                                                    <option value="Inprogress">Inprogress</option>
                                                                    <option value="Pending">Pending</option>
                                                                </select>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="form-label">Priority</label>
                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default1">
                                                                    <option value="High">High</option>
                                                                    <option value="Medium">Medium</option>
                                                                    <option value="Low">Low</option>
                                                                </select>
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label class="form-label">Assigned To</label>
                                                                <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1" multiple>
                                                                    <option value="Choice 1">Angelina May</option>
                                                                    <option value="Choice 2">Sarah Ruth</option>
                                                                    <option value="Choice 3">Hercules Jhon</option>
                                                                    <option value="Choice 4">Mayor Kim</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ti-modal-footer">
                                                        <button type="button" class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-light" data-hs-overlay="#create-task">
                                                            Cancel
                                                            </button>
                                                        <button type="button" class="ti-btn bg-primary text-white">Add Task</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End::add task modal -->
                                        <div class="ti-dropdown hs-dropdown ms-2">
                                            <button class="ti-btn ti-btn-icon bg-secondary/10 text-secondary ti-btn-sm btn-wave waves-light ti-dropdown-toggle hs-dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">New Tasks</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Pending Tasks</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Completed Tasks</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Inprogress Tasks</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th>
                                                        <input class="form-check-input check-all" type="checkbox" id="all-tasks" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Task</th>
                                                    <th scope="col">Task ID</th>
                                                    <th scope="col">Assigned Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Priority</th>
                                                    <th scope="col">Assigned To</th>
                                                    <th scope="col">Action</th>
                                                    <th scope="col">Status Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Design New Landing Page</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 01</span>
                                                    </td>
                                                    <td>
                                                        02-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-primary">New</span>
                                                    </td>
                                                    <td>
                                                        10-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary/10 text-secondary">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                                +2
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="..." checked>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">New Project Buleprint</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 04</span>
                                                    </td>
                                                    <td>
                                                        05-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-secondary">Inprogress</span>
                                                    </td>
                                                    <td>
                                                        15-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">High</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                                +4
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">On Hold</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Server Side Validation</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 11</span>
                                                    </td>
                                                    <td>
                                                        12-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        16-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                                +5
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked></td>
                                                    <td>
                                                        <span class="font-medium">New Project Buleprint</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 04</span>
                                                    </td>
                                                    <td>
                                                        05-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-secondary">Inprogress</span>
                                                    </td>
                                                    <td>
                                                        15-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">High</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                                +4
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                    <td>
                                                        <span class="font-medium">Server Side Validation</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 11</span>
                                                    </td>
                                                    <td>
                                                        12-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        16-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                                                +5
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="..." checked>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">New Plugin Development</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 24</span>
                                                    </td>
                                                    <td>
                                                        08-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        17-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-white">+2</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">On Hold</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Designing New Authentication Page</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 16</span>
                                                    </td>
                                                    <td>
                                                        03-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-secondary">Inprogress</span>
                                                    </td>
                                                    <td>
                                                        08-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary/10 text-secondary">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-white">+3</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">New Plugin Development</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 24</span>
                                                    </td>
                                                    <td>
                                                        08-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        17-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-white">+2</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Designing New Authentication Page</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 16</span>
                                                    </td>
                                                    <td>
                                                        03-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-secondary">Inprogress</span>
                                                    </td>
                                                    <td>
                                                        08-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary/10 text-secondary">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-white">+3</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info/10 text-info">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">Documentation For New Template</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">SPK - 07</span>
                                                    </td>
                                                    <td>
                                                        12-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="font-medium text-primary">New</span>
                                                    </td>
                                                    <td>
                                                        25-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">High</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-primary ti-btn-icon ti-btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                        <button class="ti-btn ti-btn-soft-danger ti-btn-icon ms-1 ti-btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">On Hold</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <nav aria-label="..." class="me-4 sm:mb-0 mb-2">
                                        <ul class="ti-pagination justify-end">
                                            <li class="page-item disabled">
                                                <a class="page-link px-3 py-[0.375rem] !border-e-0">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !border-e-0"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item " aria-current="page">
                                                <a class="page-link active px-3 py-[0.375rem] !border-e-0"
                                                    href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item " aria-current="page">
                                                <a class="page-link px-3 py-[0.375rem] !border-e-0"
                                                    href="javascript:void(0);">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Internal Invoice List JS -->
        @vite('resources/assets/js/task-list.js')
        

@endsection