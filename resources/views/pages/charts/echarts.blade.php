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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Echart Charts</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Echart Charts</h1>
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
                                    <div class="box-title">Basic Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-basic-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Smoothed Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-smoothed-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Basic Area Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-basic-area" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Stacked Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-stacked-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Stacked Area Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-stacked-area" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Step Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-step-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Basic Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-basic" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Bar With Background Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-background" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Style For a Single Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-single" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Water Fall Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-waterfall" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Bar With Negative Values Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-negative-values" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Bar With Labels Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-labels" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Horizontal Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-horizontal" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Horizontal Stacked Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-stacked-horizontal" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Pie Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-pie" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Doughnut Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-doughnut" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Basic Scatter Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-scatter" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Bubble Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bubble" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Candlestick Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-candlestick" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Basic Radar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-basic-radar" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Heatmap Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-heatmap" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Treemap Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-treemap" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Funnel Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-funnel" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Basic Gauge Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-gauge-basic" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Simple Graph Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-simple-graph" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Pictorial Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-pictorial" class="echart-charts"></div>
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

        <!-- Echarts JS -->
        <script src="{{asset('build/assets/libs/echarts/echarts.min.js')}}"></script>

        <!-- Internal Echarts JS -->
        @vite('resources/assets/js/echarts.js')
        

@endsection