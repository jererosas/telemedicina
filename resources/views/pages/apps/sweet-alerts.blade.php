@extends('layouts.master')

@section('styles')
  
        <!-- Sweetalerts CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sweet Alerts</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Sweet Alerts</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Basic Alert
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="basic-alert">Basic Alert</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Title With Text Under
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-text">Title With Text</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        With Text,Error Icon & Footer
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-footer">Alert Footer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Alert With Long Window
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="long-window">Long Window Here</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Custom HTML Description
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-description">Custom HTML Alert</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Alert With Multiple Buttons
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="three-buttons">Multiple Buttons</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Custom Positioned Dialog Alert
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-dialog">Alert Dialog</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Confirm Alert
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-confirm">Confirm Alert</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Alert With Parameters
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-parameter">Alert Parameters</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Alert With Image
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-image">Image Alert</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Alert With Image
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-custom-bg">Custom Alert</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Auto Close Alert
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-auto-close">Auto Close</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Ajax Request Alert
                                    </div>
                                </div>
                                <div class="box-body text-center">
                                    <button class="ti-btn bg-primary text-white" id="alert-ajax">Ajax Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
        
        <!-- Sweetalerts JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        @vite('resources/assets/js/sweet-alerts.js')
        

@endsection