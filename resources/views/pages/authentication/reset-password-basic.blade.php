@extends('layouts.custom-master')

@section('styles')
  

@endsection

@section('content')

@section('error-body')
<body class="authentication-background">
@endsection

        <div class="container">
            <div class="grid grid-cols-12 justify-center items-center authentication authentication-basic h-full">
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                    <div class="box my-4">
                        <div class="box-body p-[3rem]">
                            <div class="mb-3 flex justify-center">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="logo" class="desktop-white">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Reset Password</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center text-[14px]">Hi Henry!</p>
                            <div class="grid grid-cols-12 gap-y-4">
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="reset-password" class="form-label text-defaulttextcolor">Current Password <sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input type="password" class="form-control create-password-input" id="reset-password" placeholder="current password">
                                        <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50"  onclick="createpassword('reset-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="reset-newpassword" class="form-label text-defaulttextcolor">New Password <sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input type="password" class="form-control create-password-input" id="reset-newpassword" placeholder="new password">
                                        <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" onclick="createpassword('reset-newpassword',this)" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12 mb-2">
                                    <label for="reset-confirmpassword" class="form-label text-defaulttextcolor">Confirm Password <sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input type="password" class="form-control create-password-input" id="reset-confirmpassword" placeholder="confirm password">
                                        <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50"  onclick="createpassword('reset-confirmpassword',this)" id="button-addon22"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal" for="defaultCheck1">
                                                Remember Me ?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid mt-4">
                                <a href="{{url('signin-basic')}}" class="ti-btn ti-btn-primary">Create</a>
                            </div>
                            <div class="text-center">
                                <p class="text-textmuted dark:text-textmuted/50 mt-3">Remembered your password? <a href="{{url('signin-basic')}}" class="text-primary">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
            </div>
        </div>

@endsection

@section('scripts')

        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection