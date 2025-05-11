@extends('layouts.master')

@section('styles')
  
        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Form Wizard</h1>
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
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    FORM WIZARD
                                </div>
                            </div>
                            <div class="box-body !p-0">
                                <form class="wizard wizard-tab horizontal" method="POST">
                                    <aside class="wizard-content container">
                                        <div class="wizard-step " data-title="Personal Information"
                                            data-id="2e8WqSV3slGIpTbnjcJzmDwBQaHrfh0Z">
                                            <div class="grid grid-cols-12 sm:gap-x-6 justify-content-center">
                                                <div class="xl:col-span-12 col-span-12">
                                                    <div class="register-page">
                                                        <h6 class="mb-3 font-medium">Registration :</h6>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label for="Customer" class="ti-form-label">First Name</label>
                                                                <input type="text" class="form-control " id="Customer"
                                                                    placeholder="Enter First Name">
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label for="last-name" class="ti-form-label">Last Name</label>
                                                                <input type="text" class="form-control " id="last-name"
                                                                    placeholder="Enter Last Name">
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label for="Email" class="ti-form-label">Email Address</label>
                                                                <input type="email" class="form-control " id="Email"
                                                                    placeholder="Enter Email Adress">
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="ti-form-label">Phone Number</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-default">+99</span>
                                                                    <input type="text" class="form-control "
                                                                        placeholder="Enter Phone Number"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-default">
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="ti-form-label">Date of Birth</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text text-textmuted dark:text-textmuted/50">
                                                                        <i class="ri-calendar-line"></i>
                                                                    </div> <input type="text"
                                                                        class="form-control flatpickr-input active"
                                                                        id="date" placeholder="Select DOB"
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="ti-form-label">Select Gender
                                                                    :</label>
                                                                <select class="form-control " data-trigger>
                                                                    <option value="Choice 2">Male</option>
                                                                    <option value="Choice 1">Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="ti-form-label">Country</label>
                                                                <select class="form-control " data-trigger>
                                                                    <option value="Choice 2">United States</option>
                                                                    <option value="Choice 1">China</option>
                                                                    <option value="Choice 1">India</option>
                                                                    <option value="Choice 1">Brazil</option>
                                                                    <option value="Choice 1">Russia</option>
                                                                </select>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="ti-form-label">Select City
                                                                    :</label>
                                                                <select class="form-control" data-trigger>
                                                                    <option value="choose">India</option>
                                                                    <option value="Choice 1">USA</option>
                                                                    <option value="Choice 2">Australia</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-7 col-span-12">
                                                    <div class="login-page hidden">
                                                        <h6 class="mb-3">Sign In :</h6>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 justify-content-center gy-4">
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label for="email-adress" class="ti-form-label">Email
                                                                    Address</label>
                                                                <input type="text" class="form-control " id="email-adress"
                                                                    placeholder="Enter Email Adress">
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label for="password" class="ti-form-label">Enter
                                                                    Password</label>
                                                                <input type="text" class="form-control " id="password"
                                                                    placeholder="Enter Password">
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <div class="grid">
                                                                    <a href="javascript:void(0);"
                                                                        class="ti-btn ti-btn-primary px-4">Login</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" wizard-step active" data-title="Select Service"
                                            data-id="2e8WqSV3slGIpTbnjcJzmDwBQaHrfh0Z">
                                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="col">
                                                        <div class="form-check !flex items-center gap-4 !p-2 border !rounded-full  border-defaultborder dark:border-defaultborder/10">
                                                            <div>
                                                                <span class="avatar avatar-lg avatar-rounded bg-primary/[0.15] !text-primary">
                                                                    <i class="bi bi-hospital text-[1.25rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <label class="form-check-label block font-medium text-[0.9375rem] !ps-0" for="flexCheckChecked">Cardio Check</label>
                                                                <span class="text-[0.75rem] text-textmuted dark:text-textmuted/50">$249</span>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input form-checked-primary !rounded-full" type="checkbox" value="" id="flexCheckChecked" checked>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="col">
                                                        <div class="form-check !flex items-center gap-4 !p-2 border !rounded-full  border-defaultborder dark:border-defaultborder/10">
                                                            <div>
                                                                <span class="avatar avatar-lg avatar-rounded bg-secondary/[0.15] !text-secondary">
                                                                    <i class="bi bi-hospital text-[1.25rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <label class="form-check-label block font-medium text-[0.9375rem] !ps-0" for="flexCheckChecked1">Ortho Consult</label>
                                                                <span class="text-[0.75rem] text-textmuted dark:text-textmuted/50">$120</span>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input form-checked-secondary !rounded-full" type="checkbox" value="" id="flexCheckChecked1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="col">
                                                        <div class="form-check !flex items-center gap-4 !p-2 border !rounded-full  border-defaultborder dark:border-defaultborder/10">
                                                            <div>
                                                                <span class="avatar avatar-lg avatar-rounded bg-success/[0.15] !text-success">
                                                                    <i class="bi bi-hospital text-[1.25rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <label class="form-check-label block font-medium text-[0.9375rem] !ps-0" for="flexCheckChecked2">Gyn Exam</label>
                                                                <span class="text-[0.75rem] text-textmuted dark:text-textmuted/50">$100</span>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input form-checked-success checked:!bg-success chekched:!border-success !rounded-full" type="checkbox" value="" id="flexCheckChecked2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="col">
                                                        <div class="form-check !flex items-center gap-4 !p-2 border !rounded-full  border-defaultborder dark:border-defaultborder/10">
                                                            <div>
                                                                <span class="avatar avatar-lg avatar-rounded bg-orangemain/[0.15] !text-orangemain">
                                                                    <i class="bi bi-hospital text-[1.25rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <label class="form-check-label block font-medium text-[0.9375rem] !ps-0" for="flexCheckChecked3">Pediatric Vaccines</label>
                                                                <span class="text-[0.75rem] text-textmuted dark:text-textmuted/50">$50</span>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input form-checked-orange checked:!bg-orange chekched:!border-orange !rounded-full" type="checkbox" value="" id="flexCheckChecked3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="col">
                                                        <div class="form-check !flex items-center gap-4 !p-2 border !rounded-full  border-defaultborder dark:border-defaultborder/10">
                                                            <div>
                                                                <span class="avatar avatar-lg avatar-rounded bg-info/[0.15] !text-info">
                                                                    <i class="bi bi-hospital text-[1.25rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <label class="form-check-label block font-medium text-[0.9375rem] !ps-0" for="flexCheckChecked4">Dental Checkup</label>
                                                                <span class="text-[0.75rem] text-textmuted dark:text-textmuted/50">$80</span>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input form-checked-info !rounded-full" type="checkbox" value="" id="flexCheckChecked4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="col">
                                                        <div class="form-check !flex items-center gap-4 !p-2 border !rounded-full  border-defaultborder dark:border-defaultborder/10">
                                                            <div>
                                                                <span class="avatar avatar-lg avatar-rounded bg-warning/[0.15] !text-warning">
                                                                    <i class="bi bi-hospital text-[1.25rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <label class="form-check-label block font-medium text-[0.9375rem] !ps-0" for="flexCheckChecked5">X-ray Imaging</label>
                                                                <span class="text-[0.75rem] text-textmuted dark:text-textmuted/50">$80</span>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input form-checked-warning !rounded-full" type="checkbox" value="" id="flexCheckChecked5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="col">
                                                        <div class="form-check !flex items-center gap-4 !p-2 border !rounded-full  border-defaultborder dark:border-defaultborder/10">
                                                            <div>
                                                                <span class="avatar avatar-lg avatar-rounded bg-danger/[0.15] !text-danger">
                                                                    <i class="bi bi-hospital text-[1.25rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <label class="form-check-label block font-medium text-[0.9375rem] !ps-0" for="flexCheckChecked6">Blood Tests</label>
                                                                <span class="text-[0.75rem] text-textmuted dark:text-textmuted/50">Varies</span>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input form-checked-danger !rounded-full" type="checkbox" value="" id="flexCheckChecked6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="col">
                                                        <div class="form-check !flex items-center gap-4 !p-2 border !rounded-full  border-defaultborder dark:border-defaultborder/10">
                                                            <div>
                                                                <span class="avatar avatar-lg avatar-rounded bg-dark/[0.15] !text-dark">
                                                                    <i class="bi bi-hospital text-[1.25rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <label class="form-check-label block font-medium text-[0.9375rem] !ps-0" for="flexCheckChecked7">Eye Exam</label>
                                                                <span class="text-[0.75rem] text-textmuted dark:text-textmuted/50">$90</span>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input form-checked-dark !rounded-full" type="checkbox" value="" id="flexCheckChecked7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-step" data-title="Appointment Details"
                                            data-id="H53WJiv9blN17MYTztq4g8U6eSVkaZDx">
                                            <div class="summary-view">
                                                <div class="sm:max-w-[58.33333333%] mx-auto">
                                                    <div class="border border-defaultborder dark:border-defaultborder/10 rounded-1 mb-3">
                                                        <div class="box-body !p-0">
                                                            <div class="table-responsive">
                                                                <table class="ti-custom-table">
                                                                    <thead class="border-b border-defaultborder dark:border-defaultborder/10">
                                                                        <tr>
                                                                            <th scope="col">Appointment Details</th>
                                                                            <th scope="col"></th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span
                                                                                    class="block font-semibold">Category</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start  text-textmuted dark:text-textmuted/50">
                                                                                Neuro Clinic
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span
                                                                                    class="block font-semibold">Service</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                Heart Care
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span class="block font-semibold">Service
                                                                                    providers</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                Jiohn Alzian
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span
                                                                                    class="block font-semibold">Branch</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                India
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span
                                                                                    class="block font-semibold">Appointment
                                                                                    Date</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                12-Sep-2024
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span
                                                                                    class="block font-semibold">Appointment
                                                                                    Time</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                10:00 AM
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border  border-defaultborder dark:border-defaultborder/10 rounded-1 mb-3 ">
                                                        <div class="box-body !p-0">
                                                            <div class="table-responsive">
                                                                <table class="ti-custom-table">
                                                                    <thead class="border-b border-defaultborder dark:border-defaultborder/10">
                                                                        <tr>
                                                                            <th scope="col">Persional Details</th>
                                                                            <th scope="col"></th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span class="block font-semibold">First
                                                                                    Name</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start  text-textmuted dark:text-textmuted/50">
                                                                                Jogh barle
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span class="block font-semibold">Last Name
                                                                                </span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                Jogh barle
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span class="block font-semibold">Email
                                                                                    Address</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                Jogh12@gamil.com
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span class="block font-semibold">Phone
                                                                                    Number</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                98765433221
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span class="block font-semibold">Country
                                                                                </span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start text-textmuted dark:text-textmuted/50">
                                                                                India
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border  border-defaultborder dark:border-defaultborder/10 rounded-1 mb-3 ">
                                                        <div class="box-body !p-0">
                                                            <div class="table-responsive">
                                                                <table class="ti-custom-table">
                                                                    <thead class="border-b border-defaultborder dark:border-defaultborder/10">
                                                                        <tr>
                                                                            <th scope="col">Payment Details</th>
                                                                            <th scope="col"></th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="w-25">
                                                                                <span class="block font-semibold">Mode of
                                                                                    Payment</span>
                                                                            </td>
                                                                            <td class="w-10">:</td>
                                                                            <td class="text-start  text-textmuted dark:text-textmuted/50">
                                                                                Paypal
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-4 rounded-2 bg-light">
                                                        <label  class="mb-1 font-semibold">Source Information:</label>
                                                        <div class="flex items-center flex-wrap gap-2">
                                                            <div class="form-check-sm">
                                                                <input class="form-check-input" type="radio" name="Radio"
                                                                    id="Radio-sm">
                                                                <label class="form-check-label" for="Radio-sm"> Google
                                                                </label>
                                                            </div>
                                                            <div class="form-check-sm ">
                                                                <input class="form-check-input" type="radio" name="Radio"
                                                                    id="Radio-md">
                                                                <label class="form-check-label" for="Radio-md">
                                                                    Advertisement </label>
                                                            </div>
                                                            <div class="form-check-sm ">
                                                                <input class="form-check-input" type="radio" name="Radio"
                                                                    id="Radio-s">
                                                                <label class="form-check-label" for="Radio-s"> Other</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-step" data-title="Payment"
                                            data-id="dOM0iRAyJXsLTr9b3KZfQ2jNv4pgn6Gu" data-limit="3">
                                            <div class="grid grid-cols-12 sm:gap-x-6">
                                                <div class="xl:col-span-12 col-span-12">
                                                    <div>
                                                        <div class="text-[0.9375rem] font-medium sm:d-flex block items-center justify-between mb-3">
                                                            <div>Payment Details :</div>
                                                        </div>
                                                        <div class="grid grid-cols-12 sm:gap-x-6">
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <div class="mb-3">
                                                                    <label class="ti-form-label">Delivery Address</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control !border-s border-defaultborder dark:border-defaultborder/10" placeholder="Address" aria-label="address" aria-describedby="payment-address" value="1234 Elm Street,Anytown, USA,12345">
                                                                        <button type="button"  class="ti-btn !bg-info/[0.15] !text-info !m-0 input-group-text" id="payment-address">Change</button>
                                                                    </div>
                                                                </div>
                                                                <div class="box border border-defaultborder dark:border-defaultborder/10 shadow-none mb-3">
                                                                    <div class="box-header">
                                                                        <div class="box-title">
                                                                            Payment Methods
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-body">
                                                                        <div class="mb-4 sm:flex block " role="group" aria-label="Basic radio toggle button group"> <input type="radio" class="btn-check opacity-0 absolute" name="btnradio" id="btnradio1"> <label class="w-full ti-btn ti-btn-outline-light !text-defaulttextcolor !m-0 sm:!border-e-0 dark:!text-defaulttextcolor/70 dark:!border-defaultborder/10 hover:!bg-light !rounded-e-none" for="btnradio1">C.O.D(Cash on delivery)</label>
                                                                            <input type="radio" class="btn-check  opacity-0 absolute" name="btnradio" id="btnradio2"> <label class="w-full ti-btn ti-btn-outline-light !m-0 !text-defaulttextcolor dark:!text-defaulttextcolor/70 sm:!border-e-0 dark:!border-defaultborder/10 hover:!bg-light sm:mt-0 mt-1 !rounded-none" for="btnradio2">UPI</label> <input type="radio" class="btn-check  opacity-0 absolute" name="btnradio" id="btnradio3" checked="">
                                                                            <label class="w-full ti-btn ti-btn-light !m-0 !text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:!border-defaultborder/10 hover:!bg-light !rounded-s-none sm:mt-0 mt-1" for="btnradio3">Credit/Debit Card</label>
                                                                        </div>
                                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                                                            <div class="xl:col-span-12 col-span-12">
                                                                                <label for="payment-card-number" class="ti-form-label">Card Number</label>
                                                                                <input type="text" class="form-control" id="payment-card-number" placeholder="Card Number" value="1245 - 5447 - 8934 - XXXX">
                                                                            </div>
                                                                            <div class="xl:col-span-12 col-span-12">
                                                                                <label for="payment-card-name" class="ti-form-label">Name On Card</label>
                                                                                <input type="text" class="form-control" id="payment-card-name" placeholder="Name On Card" value="Jack Miller">
                                                                            </div>
                                                                            <div class="xl:col-span-4 col-span-12">
                                                                                <label for="payment-cardexpiry-date" class="ti-form-label">Expiration Date</label>
                                                                                <input type="text" class="form-control" id="payment-cardexpiry-date" placeholder="MM/YY" value="08/2024">
                                                                            </div>
                                                                            <div class="xl:col-span-4 col-span-12">
                                                                                <label for="payment-cvv" class="ti-form-label">CVV</label>
                                                                                <input type="text" class="form-control" id="payment-cvv" placeholder="XXX" value="341">
                                                                            </div>
                                                                            <div class="xl:col-span-4 col-span-12">
                                                                                <label for="payment-security" class="ti-form-label">O.T.P</label>
                                                                                <input type="text" class="form-control" id="payment-security" placeholder="XXXXXX" value="183467">
                                                                                <label for="payment-security" class="ti-form-label mt-1 text-success !text-[0.6875rem]"><sup><i class="ri-star-s-fill"></i></sup>Do not share O.T.P with anyone</label>
                                                                            </div>
                                                                            <div class="xl:col-span-12 col-span-12">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input form-checked-success checked:!bg-success chekcde:!border-success" type="checkbox" value="" id="payment-card-save" checked>
                                                                                    <label class="form-check-label" for="payment-card-save">
                                                                                        Save this card
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-footer">
                                                                        <div class="grid grid-cols-12 gap-y-4 sm:gap-x-4">
                                                                            <p class="xl:col-span-12 col-span-12 text-[0.9375rem] font-semibold mb-1">
                                                                                Saved Cards :</p>
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <div class="form-check payment-card-container mb-0 leading-none">
                                                                                    <div class="form-check-label">
                                                                                        <div class="sm:flex block items-center justify-between">
                                                                                            <div class="me-2 leading-none">
                                                                                                <span class="avatar avatar-md">
                                                                                                    <img src="{{asset('build/assets/images/ecommerce/png/26.png')}}" alt=""> </span>
                                                                                            </div>
                                                                                            <div class="saved-card-details">
                                                                                                <p class="mb-0 font-semibold">
                                                                                                    XXXX - XXXX - XXXX - 7646
                                                                                                </p>
                                                                                            </div>
                                                                                            <div> <input id="payment-card1" name="payment-cards1" type="radio" class="form-check-input !top-[1.5rem]" checked=""> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <div class="form-check payment-card-container mb-0 leading-none">
                                                                                    <div class="form-check-label">
                                                                                        <div class="sm:flex block items-center justify-between">
                                                                                            <div class="me-2 leading-none">
                                                                                                <span class="avatar avatar-md">
                                                                                                    <img src="{{asset('build/assets/images/ecommerce/png/27.png')}}" alt=""> </span>
                                                                                            </div>
                                                                                            <div class="saved-card-details">
                                                                                                <p class="mb-0 font-semibold">
                                                                                                    XXXX - XXXX - XXXX - 9556
                                                                                                </p>
                                                                                            </div>
                                                                                            <div> <input id="payment-card" name="payment-cards1" type="radio" class="form-check-input !top-[1.5rem]"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-step" data-title="Confirmation"
                                            data-id="dOM0iRAyJXsLTr9b3KZfQ2jNv4pgn6Gu" data-limit="3">
                                            <div class="grid grid-cols-12 sm:gap-x-6">
                                                <div class="xl:col-span-12 col-span-12">
                                                    <div class="checkout-payment-success">
                                                        <div class="mb-4">
                                                            <h5 class="text-success font-medium">Appointment Booked...</h5>
                                                        </div>
                                                        <div class="mb-4">
                                                            <img src="{{asset('build/assets/images/ecommerce/png/24.png')}}" alt="" class="img-fluid !inline-flex">
                                                        </div>
                                                        <div class="mb-4">
                                                            <p class="mb-1 fs-14">You will get the appointment details with appointment id <b>SPK#1FR</b> to <a class="!text-success" href="javascript:void(0);"><u>Jogh12@gamil.com</u></a></p>
                                                            <p class="text-textmuted dark:text-textmuted/50">Thank you for booking an appointment .</p>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-success">Book Another Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </form>
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
 
        <!-- Internal Form Wizard JS -->
        <script src="{{asset('build/assets/form-wizard.js')}}"></script>
        @vite('resources/assets/js/form-wizard-init.js')
        

@endsection