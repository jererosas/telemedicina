@extends('layouts.master')

@section('styles')
  

@endsection

@section('content')

            <!--APP-CONTENT START-->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Validation</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Validation</h1>
                        </div>
                        <div class="btn-list">
                            <button class="ti-btn ti-btn-white btn-wave">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                   <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Default Validation</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-validation">
                                        <div class="grid lg:grid-cols-2 gap-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label dark:text-defaulttextcolor/80 mb-0">First
                                                    Name</label>
                                                <input type="text" class="my-auto ti-form-input  rounded-sm "
                                                    placeholder="Firstname" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Last
                                                    Name</label>
                                                <input type="text" class="my-auto ti-form-input  rounded-sm "
                                                    placeholder="Lastname" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Phone
                                                    Number</label>
                                                <input type="number" class="my-auto ti-form-input  rounded-sm "
                                                    placeholder="+91 123-456-789" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Email
                                                    Address</label>
                                                <input type="email" class="my-auto ti-form-input  rounded-sm"
                                                    placeholder="your@site.com" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label
                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Password</label>
                                                <input type="password" class="ti-form-input  rounded-sm"
                                                    placeholder="password" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Confirm
                                                    Password</label>
                                                <input type="password" class="ti-form-input  rounded-sm"
                                                    placeholder="password" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Date Of
                                                    Birth</label>
                                                <input type="date" class="ti-form-input  rounded-sm flatpickr-input"
                                                    id="date" readonly required>
                                            </div>
                                            <div class="space-y-2">
                                                <label
                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Gender</label>
                                                    <ul class="flex flex-col sm:flex-row">
                                                        <li
                                                            class="ti-list-group w-full gap-x-2.5 flex py-2 px-4 sm:!border-b !border-b-0 rtl:!rounded-tl-none rtl:!rounded-bl-none rtl:!rounded-tr-md rtl:!rounded-br-md !rounded-br-none !rounded-bl-none sm:!rounded-bl-md sm:!rounded-br-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                    <input id="ti-radio-validation-14"
                                                                        name="ti-radio-validation" type="radio"
                                                                        class="ti-form-radio" checked="" required="">
                                                                </div>
                                                                <label for="ti-radio-validation-14"
                                                                    class="ms-3 block w-full text-sm text-textmuted dark:text-textmuted/50">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="ti-list-group w-full gap-x-2.5 flex py-2 px-4 sm:!border-b !border-b-0 !rounded-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:!rounded-none sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                    <input id="ti-radio-validation-15"
                                                                        name="ti-radio-validation" type="radio"
                                                                        class="ti-form-radio" required="">
                                                                </div>
                                                                <label for="ti-radio-validation-12"
                                                                    class="ms-3 block w-full text-sm text-textmuted dark:text-textmuted/50">
                                                                    Male
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="ti-list-group w-full gap-x-2.5 flex py-2 rtl:!rounded-tr-none rtl:!rounded-br-none rtl:!rounded-tl-md rtl:!rounded-bl-md !rounded-tr-none !rounded-tl-none px-4 sm:-ms-px sm:mt-0 sm:!rounded-tr-md sm:first:rounded-se-none sm:!rounded-tl-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                    <input id="ti-radio-validation-16"
                                                                        name="ti-radio-validation" type="radio"
                                                                        class="ti-form-radio" required="">
                                                                </div>
                                                                <label for="ti-radio-validation-16"
                                                                    class="ms-3 block w-full text-sm text-textmuted dark:text-textmuted/50">
                                                                    Others
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>
                                        <div class="my-5">
                                            <div class="space-y-2">
                                                <label
                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Address</label>
                                                <input type="text" class="my-auto ti-form-input  rounded-sm"
                                                    placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-2 gap-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label dark:text-defaulttextcolor/80 mb-0">City</label>
                                                <input type="text" class="my-auto ti-form-input  rounded-sm"
                                                    placeholder="city" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label
                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">State</label>
                                                <input type="text" class="my-auto ti-form-input  rounded-sm"
                                                    placeholder="state" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label
                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Pincode</label>
                                                <input type="number" class="my-auto ti-form-input  rounded-sm"
                                                    placeholder="pincode" required>
                                            </div>
                                        </div>
                                        <div class="my-5">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label for="flexCheckChecked"
                                                class="text-sm text-gray-500 ms-3 text-textmuted dark:text-textmuted/50 inline">I
                                                agree with the <a href="javascript:void(0);"
                                                    class="text-primary hover:underline ms-1">terms and
                                                    conditions</a></label>
                                        </div>
                                        <button type="submit" class="ti-btn ti-btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Custom Validation</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-custom-validation" novalidate="">
                                        <div class="grid lg:grid-cols-2 gap-6">
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">First
                                                    Name</label> <input type="text"
                                                    class="firstName my-auto ti-form-input  rounded-sm"
                                                    placeholder="Firstname" value="John mark" required=""> <span
                                                    class="firstNameError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Last
                                                    Name</label> <input type="text"
                                                    class="lastName my-auto ti-form-input  rounded-sm"
                                                    placeholder="Lastname" required=""> <span
                                                    class="lastNameError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Phone
                                                    Number</label> <input type="number"
                                                    class="phonenumber my-auto ti-form-input  rounded-sm"
                                                    placeholder="+91 123-456-789" required=""> <span
                                                    class="phoneError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Email
                                                    Address</label> <input type="email"
                                                    class="email-address my-auto ti-form-input  rounded-sm"
                                                    placeholder="your@site.com" required=""> <span
                                                    class="emailError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Password</label>
                                                <input type="password" class="password ti-form-input  rounded-sm"
                                                    placeholder="password" required=""> <span
                                                    class="passwordError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Confirm
                                                    Password</label> <input type="password"
                                                    class="confirmPassword ti-form-input  rounded-sm" placeholder="password"
                                                    required=""> <span
                                                    class="confirmPasswordError text-red-500 text-xs hidden">error</span>
                                            </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Date Of
                                                    Birth</label> <input type="text"
                                                    class="birthdate ti-form-input rounded-sm flatpickr-input"
                                                    readonly="readonly" required=""> <span
                                                    class="dobError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Gender</label>
                                                    <ul class="flex flex-col sm:flex-row">
                                                        <li
                                                            class="ti-list-group w-full gap-x-2.5 flex py-2 px-4 sm:!border-b !border-b-0 rtl:!rounded-tl-none rtl:!rounded-bl-none rtl:!rounded-tr-md rtl:!rounded-br-md !rounded-br-none !rounded-bl-none sm:!rounded-bl-md sm:!rounded-br-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                    <input id="ti-radio-validation-11"
                                                                        name="ti-radio-validation" type="radio"
                                                                        class="ti-form-radio" checked="" required="">
                                                                </div>
                                                                <label for="ti-radio-validation-11"
                                                                    class="ms-3 block w-full text-sm text-textmuted dark:text-textmuted/50">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="ti-list-group w-full gap-x-2.5 flex py-2 px-4 sm:!border-b !border-b-0 !rounded-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:!rounded-none sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                    <input id="ti-radio-validation-12"
                                                                        name="ti-radio-validation" type="radio"
                                                                        class="ti-form-radio" required="">
                                                                </div>
                                                                <label for="ti-radio-validation-12"
                                                                    class="ms-3 block w-full text-sm text-textmuted dark:text-textmuted/50">
                                                                    Male
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="ti-list-group w-full gap-x-2.5 flex py-2 rtl:!rounded-tr-none rtl:!rounded-br-none rtl:!rounded-tl-md rtl:!rounded-bl-md !rounded-tr-none !rounded-tl-none px-4 sm:-ms-px sm:mt-0 sm:!rounded-tr-md sm:first:rounded-se-none sm:!rounded-tl-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                    <input id="ti-radio-validation-13"
                                                                        name="ti-radio-validation" type="radio"
                                                                        class="ti-form-radio" required="">
                                                                </div>
                                                                <label for="ti-radio-validation-13"
                                                                    class="ms-3 block w-full text-sm text-textmuted dark:text-textmuted/50">
                                                                    Others
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>
                                        <div class="my-5"> <!-- <div class="space-y-2">
                                                <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Address</label>
                                                <input type="text" class="postalAddress my-auto ti-form-input  rounded-sm" placeholder="Address" required>
                                                <span class="addressError text-red-500 text-xs hidden">error</span>
                                            </div> --> </div>
                                        <div class="grid lg:grid-cols-2 gap-6">
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Address</label>
                                                <input type="text" class="postalAddress my-auto ti-form-input  rounded-sm"
                                                    placeholder="Address" required=""> <span
                                                    class="addressError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">City</label>
                                                <input type="text" class="cityName my-auto ti-form-input  rounded-sm"
                                                    placeholder="city" required=""> <span
                                                    class="cityError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">State</label>
                                                <input type="text" class="stateName my-auto ti-form-input  rounded-sm"
                                                    placeholder="state" required=""> <span
                                                    class="stateError text-red-500 text-xs hidden">error</span> </div>
                                            <div class="space-y-2"> <label
                                                    class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Pincode</label>
                                                <input type="number" class="pincode my-auto ti-form-input  rounded-sm"
                                                    placeholder="pincode" required=""> <span
                                                    class="pincodeError text-red-500 text-xs hidden">error</span> </div>
                                        </div>
                                        <div class="my-5"> <input type="checkbox"
                                                class="form-check-input validationCheckbox ti-form-checkbox mt-0.5" id="hs-checkbox-group-12"
                                                required=""> <span
                                                class="checkboxError text-red-500 text-xs hidden">error</span> <label
                                                for="hs-checkbox-group-12"
                                                class="text-sm text-gray-500 sm:ms-3 dark:text-[#8c9097] dark:text-white/50 inline">I
                                                agree with the <a href="javascript:void(0);"
                                                    class="text-primary hover:underline">terms and conditions</a></label>
                                        </div> <button value="Login Now" type="submit"
                                            class="ti-btn ti-btn-primary ti-custom-validate-btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End::row-1 -->

                </div>
            </div>
            <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

        <!-- Form Validation JS -->
        @vite('resources/assets/js/form-validation.js')
        

@endsection