@extends('layouts.custom-master')

@section('styles')
  

@endsection

@section('content')

@section('error-body')
<body class="bg-white">
@endsection

        <div class="grid grid-cols-12 authentication authentication-cover-main mx-0">
            <div class="xxl:col-span-6 xl:col-span-7 col-span-12">
                <div class="grid grid-cols-12 justify-center items-center h-full">
                    <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                    <div class="xxl:col-span-6 xl:col-span-8 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                        <div class="box my-auto border border-defaultborder dark:border-defaultborder/10">
                            <div class="box-body p-[3rem]">
                                <p class="h5 mb-2 text-center">Sign In</p>
                                <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">Welcome back Henry !</p>
                                <div class="flex mb-3 justify-between gap-2 flex-wrap flex-lg-nowrap">
                                    <button class="ti-btn ti-btn-lg border border-defaultborder dark:border-defaultborder/10 flex items-center justify-center flex-auto bg-light">
                                        <span class="avatar avatar-xs flex-shrink-0">
                                            <img src="{{asset('build/assets/images/media/apps/google.png')}}" alt="">
                                        </span>
                                        <span class="leading-[1.2rem] ms-2 text-[13px] text-defaulttextcolor">Signup with Google</span>
                                    </button>
                                </div>
                                <div class="text-center my-3 authentication-barrier">
                                    <span>OR</span>
                                </div>
                                <div class="grid grid-cols-12 gap-y-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signin-username" class="form-label text-defaulttextcolor">User Name</label>
                                        <input type="text" class="form-control" id="signin-username" placeholder="user name">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mb-2">
                                        <label for="signin-password" class="form-label text-defaulttextcolor block">Password<a href="{{url('reset-password-cover')}}" class="float-end font-normal text-textmuted dark:text-textmuted/50">Forget password ?</a></label>
                                        <div class="relative">
                                            <input type="password" class="form-control create-password-input" id="signin-password" placeholder="password">
                                            <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
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
                                </div>
                                <div class="grid mt-4">
                                    <a href="{{url('index')}}" class="ti-btn ti-btn-primary">Sign In</a>
                                </div>
                                <div class="text-center">
                                    <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Dont have an account? <a href="{{url('signup-cover')}}" class="text-primary">Sign Up</a></p>
                                </div>
                                <div class="btn-list text-center mt-3">
                                    <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary">
                                        <i class="ri-facebook-line leading-none align-center text-[17px]"></i>
                                    </button>
                                    <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary1">
                                        <i class="ri-twitter-x-line leading-none align-center text-[17px]"></i>
                                    </button>
                                    <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary2">
                                        <i class="ri-instagram-line leading-none align-center text-[17px]"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                </div>
            </div>
            <div class="xxl:col-span-6 xl:col-span-5 lg:col-span-12 xl:block hidden px-0">
                <div class="authentication-cover overflow-hidden">
                    <div class="authentication-cover-logo"> 
                        <a href="{{url('index')}}"> 
                            <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="" class="authentication-brand desktop-white"> 
                        </a> 
                    </div>
                    <div class="aunthentication-cover-content flex items-center justify-center">
                        <div>
                            <h3 class="text-white mb-1 font-medium">Welcome Henry!</h3>
                            <h6 class="text-white mb-3 font-medium">Login to Your Account</h6>
                            <p class="text-white mb-1 op-6">Welcome to the Admin Dashboard. Please log in to securely manage your administrative tools and oversee platform activities. Your credentials ensure system integrity and functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')

        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection