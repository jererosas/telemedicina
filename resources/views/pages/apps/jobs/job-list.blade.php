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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job List</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Job List</h1>
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
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        All Jobs List
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <a href="{{url('job-post')}}" class="ti-btn ti-btn-primary !m-0 btn-wave ti-btn-sm">
                                            <i class="ri-add-line me-1 align-middle"></i>Post Job
                                        </a> 
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary !m-0 ti-btn-sm btn-wave" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Posted Date</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Status</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Department</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Job Type</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Oldest</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-hover text-nowrap">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="row" class="ps-4"><input class="form-check-input check-all" type="checkbox" id="checkboxNoLabeljob1" value="" aria-label="..."></th>
                                                    <th scope="col">Job Title</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Applications</th>
                                                    <th scope="col">Posted Date</th>
                                                    <th scope="col">Vacancies</th>
                                                    <th scope="col">Job Type</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Expires on</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="joblist-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob22" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 p-1 bg-light">
                                                                <img src="{{asset('build/assets/images/media/jobs/2.png')}}" alt="">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p class="font-medium mb-0 flex items-center"><a href="{{url('job-details')}}"> HTML Developer - Fresher</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Remote/Onsite</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);" class="font-medium mb-0">HorizonTech Ventures</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Development
                                                    </td>
                                                    <td>18</td>
                                                    <td><span class="badge bg-primary/10 text-primary"><i class="bi bi-clock me-1"></i>Nov 12 2024</span></td>
                                                    <td>36</td>
                                                    <td>Full Time</td>
                                                    <td><span class="badge rounded-full bg-success/10 text-success">Approved</span></td>
                                                    <td>
                                                        Oct 15 2024
                                                    </td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob33" value="" aria-label="..." checked=""></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 p-1 bg-light">
                                                                <img src="{{asset('build/assets/images/media/jobs/1.png')}}" alt="">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p class="font-medium mb-0 flex items-center"><a href="{{url('job-details')}}"> React Lead Developer</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Remote/Onsite</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/10.png')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);" class="font-medium mb-0">FusionTech Industries</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Design
                                                    </td>  
                                                    <td>31</td>
                                                    <td><span class="badge bg-danger/10 text-danger"><i class="bi bi-clock me-1"></i>Oct 15 2024</span></td>
                                                    <td>50</td>
                                                    <td>Full Time</td>
                                                    <td>
                                                        <span class="badge rounded-full bg-danger/10 text-danger">Rejected</span>
                                                    </td>
                                                    <td>
                                                        Sep 27 2024
                                                    </td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>





                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob44" value="" aria-label="..." checked=""></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 p-1 bg-light">
                                                                <img src="{{asset('build/assets/images/media/jobs/3.png')}}" alt="">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p class="font-medium mb-0 flex items-center"><a href="{{url('job-details')}}"> Vuejs Frontend Developer</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Remote/Onsite</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);" class="font-medium mb-0">Optima Ventures Inc.</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Management
                                                    </td>
                                                    <td>36</td>
                                                    <td><span class="badge bg-primary/10 text-primary"><i class="bi bi-clock me-1"></i>May 15 2024</span></td>
                                                    <td>35</td>
                                                    <td>Part Time</td>
                                                    <td>
                                                        <span class="badge rounded-full bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        Dec 19 2024
                                                    </td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob55" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 p-1 bg-light">
                                                                <img src="{{asset('build/assets/images/media/jobs/4.png')}}" alt="">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p class="font-medium mb-0 flex items-center"><a href="{{url('job-details')}}"> Wordpress Developer - Remote</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Remote/Onsite</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);" class="font-medium mb-0">Tech Innovators Ltd.</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Marketing
                                                    </td>
                                                    <td>20</td>
                                                    <td><span class="badge bg-primary/10 text-primary"><i class="bi bi-clock me-1"></i>Feb 12 2024</span></td>
                                                    <td>60</td>
                                                    <td>Part Time</td>
                                                    <td>
                                                        <span class="badge rounded-full bg-success/10 text-success">Approved</span>
                                                    </td>
                                                    <td>
                                                        Jan 12 2024
                                                    </td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob2" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 p-1 bg-light">
                                                                <img src="{{asset('build/assets/images/media/jobs/2.png')}}" alt="">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p class="font-medium mb-0 flex items-center"><a href="{{url('job-details')}}"> HTML Developer - Fresher</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Remote/Onsite</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);" class="font-medium mb-0">HorizonTech Ventures</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Development
                                                    </td>
                                                    <td>18</td>
                                                    <td><span class="badge bg-primary/10 text-primary"><i class="bi bi-clock me-1"></i>Nov 12 2024</span></td>
                                                    <td>36</td>
                                                    <td>Full Time</td>
                                                    <td><span class="badge rounded-full bg-success/10 text-success">Approved</span></td>
                                                    <td>
                                                        Oct 15 2024
                                                    </td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob3" value="" aria-label="..." checked=""></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 p-1 bg-light">
                                                                <img src="{{asset('build/assets/images/media/jobs/1.png')}}" alt="">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p class="font-medium mb-0 flex items-center"><a href="{{url('job-details')}}"> React Lead Developer</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Remote/Onsite</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/10.png')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);" class="font-medium mb-0">FusionTech Industries</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Design
                                                    </td>  
                                                    <td>31</td>
                                                    <td><span class="badge bg-danger/10 text-danger"><i class="bi bi-clock me-1"></i>Oct 15 2024</span></td>
                                                    <td>50</td>
                                                    <td>Full Time</td>
                                                    <td>
                                                        <span class="badge rounded-full bg-danger/10 text-danger">Rejected</span>
                                                    </td>
                                                    <td>
                                                        Sep 27 2024
                                                    </td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob4" value="" aria-label="..." checked=""></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 p-1 bg-light">
                                                                <img src="{{asset('build/assets/images/media/jobs/3.png')}}" alt="">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p class="font-medium mb-0 flex items-center"><a href="{{url('job-details')}}"> Vuejs Frontend Developer</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Remote/Onsite</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);" class="font-medium mb-0">Optima Ventures Inc.</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Management
                                                    </td>
                                                    <td>36</td>
                                                    <td><span class="badge bg-primary/10 text-primary"><i class="bi bi-clock me-1"></i>May 15 2024</span></td>
                                                    <td>35</td>
                                                    <td>Part Time</td>
                                                    <td>
                                                        <span class="badge rounded-full bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        Dec 19 2024
                                                    </td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob5" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex">
                                                            <span class="avatar avatar-md border dark:border-defaultborder/10 p-1 bg-light">
                                                                <img src="{{asset('build/assets/images/media/jobs/4.png')}}" alt="">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p class="font-medium mb-0 flex items-center"><a href="{{url('job-details')}}"> Wordpress Developer - Remote</a></p>
                                                                <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">Remote/Onsite</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);" class="font-medium mb-0">Tech Innovators Ltd.</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Marketing
                                                    </td>
                                                    <td>20</td>
                                                    <td><span class="badge bg-primary/10 text-primary"><i class="bi bi-clock me-1"></i>Feb 12 2024</span></td>
                                                    <td>60</td>
                                                    <td>Part Time</td>
                                                    <td>
                                                        <span class="badge rounded-full bg-success/10 text-success">Approved</span>
                                                    </td>
                                                    <td>
                                                        Jan 12 2024
                                                    </td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-info btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center flex-wrap overflow-auto">
                                        <div class="mb-2 mb-sm-0">
                                            Showing <b>1</b> to <b>10</b> of <b>10</b> entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
                                        </div>
                                        <div class="ms-auto my-2">
                                            <nav aria-label="" class="">
                                                <ul class="ti-pagination mb-0 !p-0 justify-end float-end">
                                                    <li class="page-item disabled"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !border-e-0 !rounded-tr-none !rounded-br-none">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item " aria-current="page"> <a class="page-link active px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">2</a> </li>
                                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">3</a></li>
                                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">4</a></li>
                                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0" href="javascript:void(0);">5</a></li>
                                                    <li class="page-item"> <a class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-tl-none !rounded-bl-none !border-s-0" href="javascript:void(0);">Next</a> </li>
                                                </ul>
                                            </nav>
                                        </div>
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
            
        <!-- Job list JS -->
        @vite('resources/assets/js/job-list.js')
        

@endsection