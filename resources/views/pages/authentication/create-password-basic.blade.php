@extends('layouts.custom-master')

@section('styles')
  

@endsection

@section('content')

@section('error-body')
<body class="authentication-background">
@endsection

        <div class="container">
            <div class="grid grid-cols-12 justify-center authentication authentication-basic items-center h-full">
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                    <div class="box my-4">
                        <div class="box-body p-[3rem]">
                            <div class="mb-3 flex justify-center">
                                <a href="{{url('index')}}">
                                    <img alt="logo" class="desktop-logo" src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}"> 
                                    <img alt="logo" class="desktop-white" src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Create Password</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 font-normal text-center text-[14px]">Hi Henry!</p>
                            <div class="grid grid-cols-12 gap-y-4">
                                <div class="xl:col-span-12 col-span-12">
                                    <label class="form-label text-defaulttextcolor" for="create-password">Password<sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input class="form-control create-password-input" id="create-password" placeholder="password" type="password"> <a class="show-password-button text-textmuted dark:text-textmuted/50" href="javascript:void(0);" onclick="createpassword('create-password',this)"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12 mb-2">
                                    <label class="form-label text-defaulttextcolor" for="create-confirmpassword">Confirm Password<sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input class="form-control create-password-input" id="create-confirmpassword" placeholder="password" type="password"> <a class="show-password-button text-textmuted dark:text-textmuted/50" href="javascript:void(0);" onclick="createpassword('create-confirmpassword',this)"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" id="defaultCheck1" type="checkbox" value=""> <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal" for="defaultCheck1">Remember password ?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid mt-4">
                                <button class="ti-btn ti-btn-primary ">Save Password</button>
                            </div>
                            <div class="text-center">
                                <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Back to home ? <a class="text-primary" href="{{url('index')}}">Click Here</a></p>
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