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
                                    <li class="breadcrumb-item active" aria-current="page">Companies</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Companies</h1>
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
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Companies <span class="badge bg-primary rounded ms-2 text-xs align-middle">23</span>
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <button class="ti-btn ti-btn-soft-primary ti-btn-sm btn-wave" data-hs-overlay="#create-contact"><i class="ri-add-line me-1 font-medium align-middle"></i>Add Company</button>
                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm btn-wave">Export As CSV</button>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm btn-wave" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Date Added</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive whitespace-nowrap">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Company Size</th>
                                                    <th scope="col">Industry</th>
                                                    <th scope="col">Key Contact</th>
                                                    <th scope="col">Total Deals</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Alpha Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>alpha.solutions@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>1234-567-890</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primarytint1color/10 text-primarytint1color">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Software Development
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Michael</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel12" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Beta Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>contact@betainnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>9876-543-210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary/10 text-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Biotechnology
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Sophia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        420
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample"  class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Gamma Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>info@gammasolutions.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>555-123-4567</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primarytint1color/10 text-primarytint1color">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Consulting Services
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Oliver</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        390
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Delta Tech Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>contact@deltatech.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>678-987-6543</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary/10 text-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Technology Solutions
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Sophie</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        280
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Epsilon Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>info@epsiloninnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>111-222-3333</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary/10 text-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Innovation Services
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Emma</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        320
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Theta Systems</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>info@thetasystems.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>456-789-0123</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primarytint1color/10 text-primarytint1color">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Software Solutions
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Liam</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        410
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Iota Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>contact@iotainnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>333-444-5555</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary/10 text-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Digital Marketing
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Ava</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        290
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample">Alpha Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>info@alphasolutions.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>1234-567-890</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primarytint1color/10 text-primarytint1color">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Technology Services
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">John</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        570
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample"  class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" >Gamma Industries</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block mb-1"><i class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>contact@gammatech.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="block"><i class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50 inline-block"></i>8765-432-109</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary/10 text-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Engineering
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Emily</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        320
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample"  class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>                                                                                        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer border-t-0">
                                    <div class="flex items-center">
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
                    <!--End::row-1 -->

                    <!-- Start:: Company Details Offcanvas -->
                    <div class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExample">
                        <div class="ti-offcanvas-body !p-0">
                            <button type="button"
                            class="ti-btn  btn-wave flex-shrink-0 p-0 m-4 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                            data-hs-overlay="#offcanvasExample">
                            <span class="sr-only">Close modal</span>
                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                            <div class="sm:flex items-top p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 main-profile-cover">
                                <span class="avatar avatar-xxl avatar-rounded me-3 p-2 bg-primary/10">
                                    <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                </span>
                                <div class="flex-auto main-profile-info">
                                    <div class="flex items-center justify-between">
                                        <h6 class="font-medium mb-1">Ethan Thompson
                                            <span class="badge bg-success/10 text-success text-[10px]"><i class="ri-circle-fill text-[8px] text-success me-1 "></i> New Lead</span>
                                        </h6>
                                    
                                    </div>
                                    <p class="mb-2 text-textmuted dark:text-textmuted/50 text-xs">Chief Financial Officer (CFO)</p>
                                    <div class="flex gap-2 text-[15px] mt-1">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary1"><i class="ri-phone-line"></i></a>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary2"><i class="ri-mail-line"></i></a>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary3"><i class="ri-message-line"></i></a>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-secondary"><i class="ri-more-fill"></i></a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden dropdown-menu-end">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Size </a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Deals</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Status</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-3 gap-4 p-1 py-0 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <div class="p-2 text-center flex-auto">
                                    <i class="ri-shake-hands-line p-2 text-xl !rounded-full leading-none text-white shadow-sm bg-primary"></i>
                                    <p class="font-semibold text-xl text-shadow mb-0 mt-2">253</p>
                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">Deals</p>
                                </div>
                                <div class="p-2 text-center flex-auto">
                                    <i class="ri-money-dollar-circle-line p-2 text-xl !rounded-full leading-none text-white shadow-sm bg-primary"></i>
                                    <p class="font-semibold text-xl text-shadow mb-0 mt-2">$12k</p>
                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">Contributions</p>
                                </div>
                                <div class="p-2 text-center flex-auto">
                                    <i class="ri-thumb-up-line p-2 text-xl !rounded-full leading-none text-white shadow-sm bg-primary"></i>
                                    <p class="font-semibold text-xl text-shadow mb-0 mt-2">$17k</p>
                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">Comitted</p>
                                </div>
                            </div>  
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <div class="mb-0">
                                    <p class="text-[15px] mb-2 font-medium">Professional Bio :</p>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                        I am <b class="text-defaulttextcolor">Ethan Thompson,</b> hereby declaring that I am the founder and managing director of the prestigious company named Thompson Enterprises, and I serve as the Chief Financial Officer (CFO) of the company.
                                    </p>                                
                                </div>   
                            </div>  
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                <p class="text-[14px] mb-2 font-medium">Contact Information :</p>
                                <div class="">
                                    <div class="flex items-center mb-2">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-primarytint1color/10 !text-primarytint1color">
                                                <i class="ri-mail-line align-middle text-[14px]"></i>
                                            </span>
                                        </div>
                                        <div>
                                            ethanthompson@example.com 
                                            <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                            <span class="bg-light py-1 px-2 text-textmuted dark:text-textmuted/50 leading-none !rounded-full ms-1">
                                                <i class="ri-file-copy-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip">
                                                Copy
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-primarytint2color/10 !text-primarytint2color">
                                                <i class="ri-phone-line align-middle text-[14px]"></i>
                                            </span>
                                        </div>
                                        <div>
                                            +(333) 555-1234
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-0">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-primarytint3color/10 !text-primarytint3color">
                                                <i class="ri-map-pin-line align-middle text-[14px]"></i>
                                            </span>
                                        </div>
                                        <div>
                                            1234 Elm Street, Apt 101, Springfield, IL, 62701, USA
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4">
                                <p class="text-[14px] mb-0 font-medium">Priority:</p>
                                <div class="badge bg-success/10 text-success"><i class="ri-circle-fill leading-none align-middle text-[0.5625rem] me-1"></i> Low Priority</div>
                            </div>
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center gap-4">
                                <div class="text-[14px] font-medium">Company Size:</div>
                                <div>
                                    <span class="badge bg-primary/10 text-primary">Corporate</span> - 250+ Employees
                                </div>
                            </div>
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4">
                                <p class="text-[14px] mb-0 font-medium">Created Date:</p>
                                <div>25-May-2024</div>
                            </div>
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4">
                                <p class="text-[14px] mb-0 font-medium">Lead Source:</p>
                                <div><i class="ri-instagram-line bg-danger/10 !text-danger p-1 leading-none align-middle text-[15px] me-1 rounded-sm"></i> Instagram</div>
                            </div>
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4">
                                <p class="text-[14px] mb-0 font-medium">Social Networks :</p>
                                <div class="btn-list mb-0">
                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-facebook-line font-medium"></i>
                                    </button>
                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-secondary btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-twitter-x-line font-medium"></i>
                                    </button>
                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary2 btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-instagram-line font-medium"></i>
                                    </button>
                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-github-line font-medium"></i>
                                    </button>
                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-youtube-line font-medium"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4">
                                <p class="text-[14px] mb-0 font-medium">Tags :</p>
                                <div>
                                    <span class="badge bg-primary/10 text-primary">New Lead</span>
                                    <span class="badge bg-primary/10 text-primary">Others</span>
                                </div>
                            </div>
                            <div class="p-4 flex items-center gap-4">
                                <div class="text-[14px] font-medium">
                                    Key Contact :
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="leading-none">
                                        <span class="avatar avatar-rounded avatar-sm">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                    </div>    
                                    <div class="font-medium">Linda Klusty</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Company Details Offcanvas -->

                    <!-- Start:: Add Company -->
                    <div id="create-contact" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="max-h-full overflow-hidden ti-modal-content">
                            <div class="ti-modal-header">
                                <h6 class="modal-title text-[1rem] font-semiboldmodal-title" id="staticBackdropLabel3">Create Contact
                                </h6>
                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#create-contact">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                </svg>
                            </button>
                            </div>
                            <div class="ti-modal-body overflow-y-auto">
                                <div class="grid grid-cols-12 gap-x-6 gap-y-3">
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="mb-0 text-center">
                                            <span class="avatar avatar-xxl avatar-rounded p-2 bg-light">
                                                <img src="{{asset('build/assets/images/company-logos/11.png')}}" alt="" id="profile-img">
                                                <span class="badge rounded-full bg-primary avatar-badge">
                                                    <input type="file" name="photo" class="absolute w-full h-full opacity-0" id="profile-change">
                                                    <i class="fe fe-camera"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="company-name" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company-name" placeholder="Contact Name">
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="company-lead-score" class="form-label">Total Deals</label>
                                        <input type="number" class="form-control" id="company-lead-score" placeholder="Total Deals">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="company-mail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="company-mail" placeholder="Enter Email">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="company-phone" class="form-label">Phone No</label>
                                        <input type="tel" class="form-control" id="company-phone" placeholder="Enter Phone Number">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="key-contact" class="form-label">Key Contact</label>
                                        <input type="text" class="form-control" id="key-contact" placeholder="Contact Name">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label">Industry</label>
                                        <select class="form-control" data-trigger id="choices-single-default1"  name="choices-multiple-remove-button2">
                                            <option value="">Select Insustry</option>
                                            <option value="Choice 1">Information Technology</option>
                                            <option value="Choice 2">Telecommunications</option>
                                            <option value="Choice 3">Logistics</option>
                                            <option value="Choice 4">Professional Services</option>
                                            <option value="Choice 5">Education</option>
                                            <option value="Choice 6">Education</option>
                                            <option value="Choice 7">Manufacturing</option>
                                            <option value="Choice 8">Healthcare</option>
                                        </select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label">Company Size</label>
                                        <select class="form-control" data-trigger id="choices-single-default2"  name="choices-multiple-remove-button3">
                                            <option value="">Company Size</option>
                                            <option value="Choice 1">Corporate</option>
                                            <option value="Choice 2">Small Business</option>
                                            <option value="Choice 3">Micro Business</option>
                                            <option value="Choice 4">Startup</option>
                                            <option value="Choice 5">Large Enterprise</option>
                                            <option value="Choice 6">Medium Size</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="ti-modal-footer">
                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-soft-secondary" data-hs-overlay="#create-contact">
                                Cancel
                            </button>
                            <a class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                Create Company
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End:: Add Company -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- CRM Contacts JS -->
        @vite('resources/assets/js/crm-companies.js')
        

@endsection