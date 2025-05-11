@extends('layouts.custom-master')

@section('styles')
  

@endsection

@section('content')

@section('error-body')
<body class="authentication-background">
@endsection

        <div class="container-lg">
            <div class="grid grid-cols-12 justify-center items-center authentication two-step-verification authentication-basic h-full">
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
                            <p class="h5 mb-2 text-center">Verification Code</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center text-xs">Enter the 4 digit code sent to the moble number ******850.</p>
                            <div class="grid grid-cols-12 gy-3">
                                <div class="xl:col-span-12 col-span-12 mb-2">
                                    <div class="grid grid-cols-12 gap-x-2">
                                        <div class="col-span-3">
                                            <input type="text" class="form-control text-center" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                        </div>
                                        <div class="col-span-3">
                                            <input type="text" class="form-control text-center" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                        </div>
                                        <div class="col-span-3">
                                            <input type="text" class="form-control text-center" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                        </div>
                                        <div class="col-span-3">
                                            <input type="text" class="form-control text-center" id="four" maxlength="1">
                                        </div>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label text-[14px]" for="defaultCheck1">
                                            Didn't recieve a code ?<a href="{{url('mail')}}" class="text-primary ms-2 inline-block">Resend</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12 grid mt-2">
                                    <a href="{{url('index')}}" class="ti-btn ti-btn-primary">Verify</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
            </div>
        </div>

@endsection

@section('scripts')

        <!-- Internal Two Step Verification JS -->
        <script src="{{asset('build/assets/two-step-verification.js')}}"></script>

@endsection