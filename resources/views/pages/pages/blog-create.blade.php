@extends('layouts.master')

@section('styles')
        
        <!-- Quill CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Create</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Blog Create</h1>
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
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">New Blog</div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="blog-title" class="form-label">Blog Title</label>
                                            <input type="text" class="form-control" id="blog-title" placeholder="Blog Title">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="blog-category" class="form-label">Blog Category</label>
                                            <select class="form-control" data-trigger name="blog-category" id="blog-category">
                                                <option value="">Select Category</option>
                                                <option value="Choice 1">Nature</option>
                                                <option value="Choice 2">Sports</option>
                                                <option value="Choice 3">Food</option>
                                                <option value="Choice 3">Travel</option>
                                                <option value="Choice 3">Fashion</option>
                                                <option value="Choice 3">Beauty</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="blog-author-email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="blog-author-email" placeholder="Enter Email">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="blog-author" class="form-label">Blog Author</label>
                                            <input type="text" class="form-control" id="blog-author" placeholder="Enter Name">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="publish-time" class="form-label">Publish Time</label>
                                            <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="blog-tags" class="form-label">Blog Tags</label>
                                            <select class="form-control" name="blog-tags" id="blog-tags" multiple>
                                                <option value="Top Blog" selected>Top Blog</option>
                                                <option value="Blogger">Blogger</option>
                                                <option value="Adventure">Adventure</option>
                                                <option value="Landscape" selected>Landscape</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="publish-date" class="form-label">Publish Date</label>
                                            <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="product-status-add" class="form-label">Published Status</label>
                                            <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                                <option value="">Select</option>
                                                <option value="Published">Published</option>
                                                <option value="Scheduled">Hold</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12 blog-images-container">
                                            <label for="blog-author-email" class="form-label">Blog Images</label>
                                            <input type="file" class="blog-images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label class="form-label">Blog Content</label>
                                            <div id="blog-content"></div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label class="form-label">Blog Type</label>
                                            <div class="flex items-center">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="blog-type" id="blog-free1" checked>
                                                    <label class="form-check-label" for="blog-free1">
                                                        Free
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="blog-type" id="blog-paid1">
                                                    <label class="form-check-label" for="blog-paid1">
                                                        Paid
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="btn-list text-end">
                                        <button type="button" class="ti-btn bg-primarytint1color text-white">Save As Draft</button>
                                        <button type="button" class="ti-btn bg-primary text-white me-0">Post Blog</button>
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
            
        <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.js')}}"></script>

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

        <!-- Internal Create Blog JS -->
        @vite('resources/assets/js/blog-create.js')


@endsection