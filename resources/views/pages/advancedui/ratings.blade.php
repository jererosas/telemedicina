@extends('layouts.master')

@section('styles')
  

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ratings</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Ratings</h1>
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
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                <div class="box-title">
                                        Basic Rater
                                </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[14px] mb-0 font-medium">Show Some <span class="text-danger">&#10084;</span> with rating :</p>
                                        <div id="rater-basic"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        5 star rater with steps
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[14px] mb-0 font-medium">Dont forget to rate the product :</p>
                                        <div id="rater-steps"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Custom messages
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[14px] mb-0 font-medium">Your rating is much appreciated&#128079; :</p>
                                        <div id="custom-messages"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Unlimited number of stars readOnly
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[14px] mb-0 font-medium">Thanks for rating :</p>
                                        <div id="stars-unlimited"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        On hover event
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[14px] mb-0 font-medium">Please give your valuable rating :</p>
                                        <div class="flex flex-wrap items-center">
                                            <div id="stars-hover"></div>
                                            <span class="live-rating badge bg-success/10 text-success ms-3">
                                                1
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Clear/reset rater
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[14px] mb-0 font-medium">Thank You so much for your support :</p>
                                        <div class="flex flex-wrap items-center">
                                            <div id="rater-reset"></div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-danger ms-3" id="rater-reset-button">
                                                    <i class="ri-restart-line"></i>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                    Reset
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        5 Star rater with custom isBusyText and simulated backend
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[14px] mb-0 font-medium">Thanks for rating :</p>
                                        <div id="stars-busytext"></div>
                                    </div>
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

        <!-- Rater JS -->
        <script src="{{asset('build/assets/libs/rater-js/index.js')}}"></script>

        <!-- Internal Ratings JS -->
        @vite('resources/assets/js/ratings.js')
        
    
@endsection