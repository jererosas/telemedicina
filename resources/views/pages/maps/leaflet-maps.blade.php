@extends('layouts.master')

@section('styles')

        <!-- Leaflet Maps CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/leaflet/leaflet.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Leaflet Maps</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Leaflet Maps</h1>
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
                                    <div class="box-title">Leaflet Map</div>
                                </div>
                                <div class="box-body">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Map With Markers,circles and Polygons</div>
                                </div>
                                <div class="box-body">
                                    <div id="map1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Map With Popup</div>
                                </div>
                                <div class="box-body">
                                    <div id="map-popup"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Map With Custom Icon</div>
                                </div>
                                <div class="box-body">
                                    <div id="map-custom-icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Interactive Choropleth Map</div>
                                </div>
                                <div class="box-body">
                                    <div id="interactive-map"></div>
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
            
        <!-- Leaflet Maps JS -->
        <script src="{{asset('build/assets/libs/leaflet/leaflet.js')}}"></script>
        @vite('resources/assets/js/leaflet.js')
        

@endsection