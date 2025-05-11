@extends('layouts.master')

@section('styles')
        
        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Skeleton</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Skeleton</h1>
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
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <img class="card-img-top" src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="">
                            <div class="box-body">
                                <h5 class="box-title">Card title</h5>
                                <p class="card-text !mb-4">Some quick example text to build on the card title and make
                                    up
                                    the bulk of the card's content.</p>
                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box" aria-hidden="true">
                            <img class="card-img-top" src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="">
                            <div class="box-body">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                      <span class="size-12 block bg-gray-200 rounded-full dark:bg-neutral-700"></span>
                                    </div>
                                  
                                    <div class="ms-4 mt-2 w-full">
                                      <p class="h-4 bg-gray-200 rounded-full dark:bg-light" style="width: 40%;"></p>
                                  
                                      <ul class="mt-5 space-y-3">
                                        <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                        <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                        <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                      </ul>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Animation
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="flex animate-pulse">
                                    <div class="flex-shrink-0">
                                      <span class="size-12 block bg-gray-200 rounded-full dark:bg-light"></span>
                                    </div>
                                  
                                    <div class="ms-4 mt-2 w-full">
                                      <p class="h-4 bg-gray-200 rounded-full dark:bg-light" style="width: 40%;"></p>
                                  
                                      <ul class="mt-5 space-y-3">
                                        <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                        <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                        <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                        <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                      </ul>
                                    </div>
                                  </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="flex animate-pulse"&gt;
&lt;div class="flex-shrink-0"&gt;
    &lt;span class="size-12 block bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/span&gt;
&lt;/div&gt;

&lt;div class="ms-4 mt-2 w-full"&gt;
    &lt;p class="h-4 bg-gray-200 rounded-full dark:bg-light" style="width: 40%;"&gt;&lt;/p&gt;

    &lt;ul class="mt-5 space-y-3"&gt;
    &lt;li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
    &lt;li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
    &lt;li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
    &lt;li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-header justify-between">
                                                <div class="box-title">
                                                    Sizing
                                                </div>
                                                <div class="prism-toggle">
                                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i
                                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <ul class="mt-5 space-y-3">
                                                  <li class="w-full h-10 bg-gray-200 rounded-full dark:bg-light"></li>
                                                  <li class="w-full h-6 bg-gray-200 rounded-full dark:bg-light"></li>
                                                  <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                                  <li class="w-full h-2 bg-gray-200 rounded-full dark:bg-light"></li>
                                                </ul>
                                            </div>
                                            <div class="box-footer hidden border-t-0">
                                                <!-- Prism Code -->
                                                <pre class="language-html"><code class="language-html"> &lt;ul class="mt-5 space-y-3"&gt;
&lt;li class="w-full h-10 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
&lt;li class="w-full h-6 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
&lt;li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
&lt;li class="w-full h-2 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                                <!-- Prism Code -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Colors
                                        </div>
                                        <div class="prism-toggle">
                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i
                                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="mt-5 space-y-3">
                                            <li class="w-full h-4 bg-primary/50 rounded-full"></li>
                                            <li class="w-full h-4 bg-secondary/50 rounded-full"></li>
                                            <li class="w-full h-4 bg-success/50 rounded-full"></li>
                                            <li class="w-full h-4 bg-orangemain/50 rounded-full"></li>
                                            <li class="w-full h-4 bg-warning/50 rounded-full"></li>
                                          </ul>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;ul class="mt-5 space-y-3"&gt;
&lt;li class="w-full h-4 bg-primary/50 rounded-full"&gt;&lt;/li&gt;
&lt;li class="w-full h-4 bg-secondary/50 rounded-full"&gt;&lt;/li&gt;
&lt;li class="w-full h-4 bg-success/50 rounded-full"&gt;&lt;/li&gt;
&lt;li class="w-full h-4 bg-orangemain/50 rounded-full"&gt;&lt;/li&gt;
&lt;li class="w-full h-4 bg-warning/50 rounded-full"&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                        <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Width
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="mt-5 space-y-3">
                                    <li class="w-[25%] h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                    <li class="w-[50%] h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                    <li class="w-[75%] h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                    <li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"></li>
                                  </ul>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="mt-5 space-y-3"&gt;
&lt;li class="w-[25%] h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
&lt;li class="w-[50%] h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
&lt;li class="w-[75%] h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
&lt;li class="w-full h-4 bg-gray-200 rounded-full dark:bg-light"&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start:: row-2 -->
                   
                </div>
            </div>
            <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        <!-- Modal JS -->
        @vite('resources/assets/js/modal.js')
        

@endsection