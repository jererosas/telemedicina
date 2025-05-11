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
                    <div class="box">
                        <div class="box-body p-[3rem]">
                            <div class="mb-3 flex justify-center">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="logo" class="desktop-white">
                                </a>
                            </div>
                            <p class="h5 mb-3 text-center">Lock Screen</p>
                            <div class="grid grid-cols-12 gap-y-4">
                                <div class="xl:col-span-12 col-span-12 mb-2">
                                    <label for="lockscreen-password" class="form-label text-defaulttextcolor">Password<sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input type="password" class="form-control create-password-input" id="lockscreen-password" placeholder="password">
                                        <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" onclick="createpassword('lockscreen-password',this)"  id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal" for="defaultCheck1">
                                                Remember password ?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 grid mt-2">
                                    <a href="{{url('index')}}" class="ti-btn ti-btn-primary">Unlock</a>
                                </div>
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