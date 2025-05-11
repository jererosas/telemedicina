@extends('layouts.master')

@section('styles')
  
        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Gallery</h1>
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
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-43.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-60.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="image" >
                            </a>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')
        

@endsection