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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Borders</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Borders</h1>
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
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Borders
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="border dark:border-defaultborder/10 border-defaultborder border-container"></span>
                                <span class="border-t dark:border-defaultborder/10 border-container"></span>
                                <span class="border-e dark:border-defaultborder/10 border-container"></span>
                                <span class="border-b dark:border-defaultborder/10 border-container"></span>
                                <span class="border-s dark:border-defaultborder/10 border-container"></span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="border dark:border-defaultborder/10 border-defaultborder border-container"&gt;&lt;/span&gt;
    &lt;span class="border-t dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;
    &lt;span class="border-e dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;
    &lt;span class="border-b dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;
    &lt;span class="border-s dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Remove borders
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="border-0 border-container"></span>
                                <span class="border dark:border-defaultborder/10 border-defaultborder border-t-0 border-container"></span>
                                <span class="border dark:border-defaultborder/10 border-defaultborder border-e-0 border-container"></span>
                                <span class="border dark:border-defaultborder/10 border-defaultborder border-b-0 border-container"></span>
                                <span class="border dark:border-defaultborder/10 border-defaultborder border-s-0 border-container"></span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="border-0 border-container"&gt;&lt;/span&gt;
    &lt;span class="border dark:border-defaultborder/10 border-defaultborder border-t-0 border-container"&gt;&lt;/span&gt;
    &lt;span class="border dark:border-defaultborder/10 border-defaultborder border-e-0 border-container"&gt;&lt;/span&gt;
    &lt;span class="border dark:border-defaultborder/10 border-defaultborder border-b-0 border-container"&gt;&lt;/span&gt;
    &lt;span class="border dark:border-defaultborder/10 border-defaultborder border-s-0 border-container"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
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
                                    Border colors
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="border border-container !border-primary"></span>
                                <span class="border border-container !border-secondary"></span>
                                <span class="border border-container !border-success"></span>
                                <span class="border border-container !border-danger"></span>
                                <span class="border border-container !border-warning"></span>
                                <span class="border border-container !border-info"></span>
                                <span class="border border-container !border-light"></span>
                                <span class="border border-container !border-black"></span>
                                <span class="border border-container !border-white"></span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="border border-container !border-primary"&gt;&lt;/span&gt;
    &lt;span class="border border-container !border-secondary"&gt;&lt;/span&gt;
    &lt;span class="border border-container !border-success"&gt;&lt;/span&gt;
    &lt;span class="border border-container !border-danger"&gt;&lt;/span&gt;
    &lt;span class="border border-container !border-warning"&gt;&lt;/span&gt;
    &lt;span class="border border-container !border-info"&gt;&lt;/span&gt;
    &lt;span class="border border-container !border-light"&gt;&lt;/span&gt;
    &lt;span class="border border-container !border-black"&gt;&lt;/span&gt;
    &lt;span class="border border-container !border-white"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Border Widths
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="border-1 dark:border-defaultborder/10 border-defaultborder border-container"></span>
                                <span class="border-container dark:border-defaultborder/10 border-defaultborder border-2"></span>
                                <span class="border-container dark:border-defaultborder/10 border-defaultborder border-4"></span>
                                <span class="border-container dark:border-defaultborder/10 border-defaultborder border-8"></span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="border-1 dark:border-defaultborder/10 border-defaultborder border-container"&gt;&lt;/span&gt;
    &lt;span class="border-container dark:border-defaultborder/10 border-defaultborder border-2"&gt;&lt;/span&gt;
    &lt;span class="border-container dark:border-defaultborder/10 border-defaultborder border-4"&gt;&lt;/span&gt;
    &lt;span class="border-container dark:border-defaultborder/10 border-defaultborder border-8"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Border Radius
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-md" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-t-md" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-e-md" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-b-md" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-s-md" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-full" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img  rounded-full" alt="...">
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-md" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-t-md" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-e-md" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-b-md" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-s-md" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-full" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img  rounded-full" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Sizes
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-none" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-sm" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-md" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-lg" alt="...">
                                <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-xl" alt="...">
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-none" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-sm" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-md" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-lg" alt="..."&gt;
    &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-xl" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Border with opacity
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="border border-success p-2 mb-2">This is default success border</div>
                                <div class="border border-success/75 p-2 mb-2">This is 75%
                                    opacity
                                    success border
                                </div>
                                <div class="border border-success/50 p-2 mb-2">This is 50%
                                    opacity
                                    success border
                                </div>
                                <div class="border border-success/25 p-2 mb-2 ">This is 25%
                                    opacity
                                    success border
                                </div>
                                <div class="border border-success/10 p-2">This is 10% opacity
                                    success
                                    border
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="border border-success p-2 mb-2"&gt;This is default success border&lt;/div&gt;
    &lt;div class="border border-success/75 p-2 mb-2"&gt;This is 75%
        opacity
        success border
    &lt;/div&gt;
    &lt;div class="border border-success/50 p-2 mb-2"&gt;This is 50%
        opacity
        success border
    &lt;/div&gt;
    &lt;div class="border border-success/25 p-2 mb-2 "&gt;This is 25%
        opacity
        success border
    &lt;/div&gt;
    &lt;div class="border border-success/10 p-2"&gt;This is 10% opacity
        success
        border
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Border color Styling
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>  
                            </div>
                            <div class="box-body">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Email
                                        address</label>
                                    <input type="email" class="form-control w-full !rounded-md !border-success"
                                        id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="h4 pb-4 mb-4 text-danger border-b !border-danger">
                                    Below Shows Danger Border
                                </div>
                                <div
                                    class="p-4 bg-info/10 border !border-info  !border-s-0 rounded-e-md mb-1">
                                    Customizing borders with background colors
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="mb-4"&gt;
    &lt;label for="exampleFormControlInput1" class="form-label"&gt;Email
        address&lt;/label&gt;
    &lt;input type="email" class="form-control w-full !rounded-md !border-success"
        id="exampleFormControlInput1" placeholder="name@example.com"&gt;
&lt;/div&gt;
&lt;div class="h4 pb-4 mb-4 text-danger border-b !border-danger"&gt;
    Below Shows Danger Border
&lt;/div&gt;
&lt;div
    class="p-4 bg-info/10 border !border-info  !border-s-0 rounded-e-md mb-1"&gt;
    Customizing borders with background colors
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

            </div>
        </div>
        <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection