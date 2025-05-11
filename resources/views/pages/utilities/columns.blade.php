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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Columns</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Columns</h1>
                        </div>
                        <div class="btn-list">
                            <button class="ti-btn ti-btn-white btn-wave">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                   <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Based On Column Count</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="absolute inset-0 -top-8 -bottom-8 grid grid-cols-1 sm:grid-cols-3 gap-8">
                                        <div class="bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                        <div class="hidden sm:block bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                        <div class="hidden sm:block bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                    </div>
                                    <div class="relative columns-1 sm:columns-3 gap-8">
                                        <div class="relative aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="relative aspect-w-1 aspect-h-1 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="relative aspect-w-1 aspect-h-1 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8 sm:mt-0">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-27.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-16 aspect-h-9 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8 sm:mt-0">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-31.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-16 aspect-h-9 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-25.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Based On Column Width</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative rounded-sm overflow-auto max-h-[800px]">
                                    <div class="relative">
                                        <div class="columns-3xs gap-8 space-y-8">
                                            <div class="relative aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative aspect-w-1 aspect-h-1">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-27.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative hidden sm:block aspect-w-1 aspect-h-1">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative hidden sm:block aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative hidden sm:block aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-25.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->
                    
                </div>
            </div>
            <!--APP-CONTENT CLOSE-->   

@endsection

@section('scripts')
            

@endsection