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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Leads</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Leads</h1>
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
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex items-center justify-between flex-wrap gap-4">
                                    <div class="box-title">
                                        Leads<span class="badge bg-primary rounded ms-2 text-xs align-middle">28</span>
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <button class="ti-btn ti-btn-primary ti-btn-sm" data-hs-overlay="#create-contact"><i
                                                class="ri-add-line me-1 font-medium align-middle"></i>Create Lead</button>
                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Export As CSV</button>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);"
                                                class="ti-btn bg-light ti-btn-sm btn-wave waves-effect waves-light"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Date Added</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox"
                                                            id="checkboxNoLabel" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Contact Name</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Lead Status</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Lead Source</th>
                                                    <th scope="col">Owner</th>
                                                    <th scope="col">Last Contracted</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel01" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Catalina</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Spruko Technologies</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>Catalina2981@gmail.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">New
                                                            Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>1678-28993-223</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Social Media
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Jane Smith</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-15
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">David Johnson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Global Solutions Ltd.</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>david.johnson@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">Prospect</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>+1-987-654-3210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Email Campaign
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Michael Brown</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-14
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel3" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Sophia Adams</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Beta Innovations</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>sophia.adams@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>9876-543-210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Website
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Emma Wilson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-13
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Sophie Turner</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Delta Enterprises</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>sophie.turner@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">Prospect</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>+61-9876-543-210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Cold Call
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Olivia Moore</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-11
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel6" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Emma Garcia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Gamma Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>emma.garcia@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>+55-1234-5678</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Referral
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Daniel Harris</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-10
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Sophia Lee</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Omega Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>sophia.lee@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>+91-987-654-3210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Website
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Sophie Turner</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-09
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel8" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Lucas Martin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Phoenix Innovations</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>lucas.martin@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">Prospect</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>+1-234-567-8901</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Cold Call
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Olivia Moore</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-08
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel1" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Catalina</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Spruko Technologies</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>Catalina2981@gmail.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">New
                                                            Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>1678-28993-223</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Social Media
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Jane Smith</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-15
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="crm-contact leads-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkboxNoLabel9" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Isabella Adams</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Gamma Technologies</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i
                                                                    class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>isabella.adams@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primarytint1color/10 text-primarytint1color">Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i
                                                                    class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"></i>+7-987-654-3210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Advertisement
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Sophia Lee</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium">
                                                        2024-06-07
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon !mb-0"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon !mb-0"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete !mb-0"><i
                                                                    class="ri-delete-bin-line"></i></button>
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
                                            Showing 9 Entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
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
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0);">2</a></li>
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
                    <!--End::row-1 -->

                    <!-- Start:: Create Contact -->
                    <div id="create-contact" class="hs-overlay hidden ti-modal">
                        <div
                            class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                            <div class="max-h-full w-full overflow-hidden ti-modal-content">
                                <div class="ti-modal-header">
                                    <h6 class="modal-title text-[1rem] font-semiboldmodal-title" id="staticBackdropLabel3">
                                        Create Lead
                                    </h6>
                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                        data-hs-overlay="#create-contact">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="ti-modal-body overflow-y-auto">
                                    <div class="grid grid-cols-12 gap-x-6 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="mb-0 text-center">
                                                <span class="avatar avatar-xxl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="" id="profile-img">
                                                    <span class="badge rounded-full bg-primary avatar-badge">
                                                        <input type="file" name="photo"
                                                            class="absolute w-full h-full opacity-0" id="profile-change">
                                                        <i class="fe fe-camera"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="contact-name" class="form-label">Contact Name</label>
                                            <input type="text" class="form-control" id="contact-name"
                                                placeholder="Contact Name">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="contact-mail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="contact-mail"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="contact-phone" class="form-label">Phone No</label>
                                            <input type="tel" class="form-control" id="contact-phone"
                                                placeholder="Enter Phone Number">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="company-name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company-name"
                                                placeholder="Company Name">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label class="form-label">Lead Status</label>
                                            <select class="form-control" name="choices-multiple-remove-button3"
                                                id="choices-multiple-remove-button3">
                                                <option value="">Select Status</option>
                                                <option value="Choice 1">New</option>
                                                <option value="Choice 2">Follow-up</option>
                                                <option value="Choice 3">Closed</option>
                                                <option value="Choice 4">Contacted</option>
                                                <option value="Choice 5">Disqualified</option>
                                                <option value="Choice 6">Qualified</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label class="form-label">Lead Source</label>
                                            <select class="form-control" name="choices-multiple-remove-button1"
                                                id="choices-multiple-remove-button1">
                                                <option value="Choice 1">Social Media</option>
                                                <option value="Choice 2">Direct mail</option>
                                                <option value="Choice 3">Blog Articles</option>
                                                <option value="Choice 4">Affiliates</option>
                                                <option value="Choice 5">Organic search</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label class="form-label">Tags</label>
                                            <select class="form-control" name="choices-multiple-remove-button2"
                                                id="choices-multiple-remove-button2" multiple>
                                                <option value="Choice 1">New Lead</option>
                                                <option value="Choice 2">Prospect</option>
                                                <option value="Choice 3">Customer</option>
                                                <option value="Choice 4">Hot Lead</option>
                                                <option value="Choice 5">Partner</option>
                                                <option value="Choice 6">LostCustomer</option>
                                                <option value="Choice 7">Influencer</option>
                                                <option value="Choice 8">Subscriber</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="ti-modal-footer">
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-soft-secondary"
                                        data-hs-overlay="#create-contact">
                                        Cancel
                                    </button>
                                    <a class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                        Create Delta
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Create Contact -->
                </div>

            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- CRM Contacts JS -->
        @vite('resources/assets/js/crm-leads.js')
        

@endsection