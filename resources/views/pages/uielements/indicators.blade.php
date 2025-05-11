@extends('layouts.master')

@section('styles')
  

@endsection

@section('content')

            <!--APP-CONTENT START-->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Indicators</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Indicators</h1>
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
                    <div class="col-span-12 lg:col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Basic Legend Indicator</h5>
                            </div>
                            <div class="box-body">
                                <div class="inline-flex items-center">
                                    <span class="w-2 h-2 inline-block bg-gray-500 dark:bg-white/80 rounded-full me-2"></span>
                                    <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Legend indicator</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Color variations Legend Indicator</h5>
                            </div>
                            <div class="box-body">
                                <div class="grid gap-y-2">
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-black/20 rounded-full me-2 dark:bg-white"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Dark</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-gray-500 rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Gray</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-red-600 rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Red</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-yellow-600 rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Yellow</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-green-600 rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Green</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-blue-600 rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Blue</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-indigo-600 rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Indigo</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-purple-600 rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Purple</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-pink-600 rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Pink</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-light rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Light</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Template Color variations Legend Indicator</h5>
                            </div>
                            <div class="box-body">
                                <div class="grid gap-y-2">
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-primary rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Primary</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-secondary rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Secondary</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-warning rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Warning</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-success rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Success</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-info rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Info</span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-danger rounded-full me-2"></span>
                                        <span class="text-defaulttextcolor dark:text-defaulttextcolor/80">Danger</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                </div>
            </div>
            <!--APP-CONTENT CLOSE-->
       
@endsection

@section('scripts')
            

@endsection