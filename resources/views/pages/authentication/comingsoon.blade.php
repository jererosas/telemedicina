@extends('layouts.custom-master')

@section('styles')
  

@endsection

@section('content')

@section('error-body')
<body class="coming-soon-main">
@endsection

        <div class="flex authentication coming-soon justify-center g-0 my-auto">
            <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-6 sm:col-span-7 col-span-11 my-auto px-2">
                <div class="authentication-cover rounded-md overflow-hidden box border border-defaultborder dark:border-defaultborder/10 my-3">
                    <div class="aunthentication-cover-content text-center">
                        <div class="grid grid-cols-12 justify-center items-center mx-0 g-0">
                            <div class="col-span-12">
                                <div>
                                    <div class="mb-4 flex justify-center"> <a href="{{url('index')}}"> 
                                        <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="" class="authentication-brand"> </a> 
                                    </div>
                                    <h4 class="mb-2">Coming Soon</h4>
                                    <p class="mb-5 text-textmuted dark:text-textmuted/50">Something incredible is on the horizon – stay tuned for the unveiling of a new experience!</p>
                                    <div class="input-group mb-5">
                                        <input type="email" class="form-control !border-s form-control-lg bg-light" placeholder="info@gmail.com" aria-label="info@gmail.com" aria-describedby="button-addon2">
                                        <button class="ti-btn ti-btn-primary !m-0 ti-btn-lg mb-0" type="button" id="button-addon2">Subscribe</button>
                                    </div>
                                    <div class="flex gap-4 flex-wrap mt-4 mb-0 gy-xxl-0 gy-3 justify-center" id="timer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')

        <!-- Anime JS -->
        <script src="{{asset('build/assets/libs/animejs/lib/anime.min.js')}}"></script>

        <!-- Internal Coming Soon JS -->
        <script src="{{asset('build/assets/coming-soon.js')}}"></script>
        
@endsection