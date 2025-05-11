@extends('layouts.master')

@section('styles')

        <!-- Apexcharts CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/apexcharts/apexcharts.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apex Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Apex Area Charts</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Apex Area Charts</h1>
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Basic Area Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="area-basic"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Spline Area Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="area-spline"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Area Chart With Negative Values</div>
                                </div>
                                <div class="box-body">
                                    <div id="area-negative"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Selection-Github Style Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="chart-months"></div>
                                    <div class="github-style flex items-center">
                                        <div class="me-2">
                                            <img class="userimg rounded" src="{{asset('build/assets/images/faces/1.jpg')}}"
                                                data-hovercard-user-id="634573" alt="" width="38" height="38">
                                        </div>
                                        <div class="userdetails leading-none">
                                            <a class="username font-medium text-[14px]">coder</a>
                                            <span class="cmeta block mt-1">
                                                <span class="commits"></span> commits
                                            </span>
                                        </div>
                                    </div>
                                    <div id="chart-years"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Stacked Area Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="area-stacked"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Irregular Time Series Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="area-irregular"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Area Chart With Null Values</div>
                                </div>
                                <div class="box-body">
                                    <div id="area-null"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex">
                                    <div class="box-title">Area Chart-Datetime X-Axis Chart</div>
                                    <div class="btn-group ms-auto">
                                        <button class="btn btn-primary btn-sm" id="one_month">1M</button>
                                        <button class="btn btn-primary btn-sm" id="six_months">6M</button>
                                        <button class="btn btn-primary btn-sm" id="one_year">1Y</button>
                                        <button class="btn btn-primary btn-sm" id="all">ALL</button>
                                        <!-- <button class="btn btn-primary btn-sm" id="ytd">ALL</button> -->
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="area-datetime"></div>
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
    
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!---Used In Basic Area Chart-->
        <script src="{{asset('build/assets/apexcharts-stock-prices.js')}}"></script>

        <!-- Used For Secection-Github Style Chart -->
        <script src="{{asset('build/assets/apex-github-data.js')}}"></script>

        <!-- Used For Irregular Time Series Chart -->
        <script src="{{asset('build/assets/apexcharts-irregulardata.js')}}"></script>
        <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

        <!-- Internal Apex Area Charts JS -->
        @vite('resources/assets/js/apexcharts-area.js')
        
                  
@endsection