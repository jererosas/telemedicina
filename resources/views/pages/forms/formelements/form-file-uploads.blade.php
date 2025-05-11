@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">
        
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Uploads</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">File Uploads</h1>
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
                                    <h5 class="box-title">Basic File Input</h5>
                                </div>
                                <div class="box-body">
                                    <div>
                                        <label for="file-input" class="sr-only">Choose file</label>
                                        <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/50
                                        file:border-0
                                        file:bg-light file:me-4
                                        file:py-3 file:px-4
                                        dark:file:bg-black/20 dark:file:text-white/50">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">File Input Buttons</h5>
                                </div>
                                <div class="box-body">
                                    <div>
                                        <label class="block">
                                            <span class="sr-only">Choose Profile photo</span>
                                            <input type="file" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 text-textmuted dark:text-textmuted/50
                                            file:me-4 file:py-2 file:px-4
                                            file:rounded-s-sm file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-primary file:text-white
                                            hover:file:bg-primary focus-visible:outline-none
                                        ">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">File Input Sizes</h5>
                                </div>
                                <div class="box-body space-y-3">
                                    <div>
                                        <label for="small-file-input" class="sr-only">Choose file</label>
                                        <input type="file" name="small-file-input" id="small-file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/50
                                        file:border-0
                                        file:bg-light file:me-4
                                        file:py-2 file:px-4
                                        dark:file:bg-black/20 dark:file:text-white/50">
                                    </div>

                                    <div>
                                        <label for="file-input-medium" class="sr-only">Choose file</label>
                                        <input type="file" name="file-input-medium" id="file-input-medium" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/50
                                        file:border-0
                                        file:bg-light file:me-4
                                        file:py-3 file:px-4
                                        dark:file:bg-black/20 dark:file:text-white/50">
                                    </div>

                                    <div>
                                        <label for="large-file-input" class="sr-only">Choose file</label>
                                        <input type="file" name="large-file-input" id="large-file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 text-textmuted dark:text-textmuted/50
                                        file:border-0
                                        file:bg-light file:me-4
                                        file:py-3 file:px-4 file:sm:py-5
                                        dark:file:bg-black/20 dark:file:text-white/50">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Dropzone File Upload</h5>
                                </div>
                                <div class="box-body">
                                    <div data-single="true" action="https://httpbin.org/post" class="dropzone"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start::row-2 -->
                    
                    <!-- End::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Single File Upload</h5>
                                </div>
                                <div class="box-body">
                                    <input type="file" class="filepond basic-filepond" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Multiple File Upload</h5>
                                </div>
                                <div class="box-body">
                                    <input type="file" class="filepond multiple-filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Circular File Upload</h5>
                                </div>
                                <div class="box-body">
                                    <input type="file" class="filepond circular-filepond" accept="image/png, image/jpeg, image/gif">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

        <!-- Filepond JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- Dropzone JS -->
        <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

        <!-- Fileupload JS -->
        @vite('resources/assets/js/fileupload.js')


@endsection