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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Images & Figures</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Images & Figures</h1>
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
                                    <div class="box-title">Image Center Align</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <img class="rounded-md mx-auto block" src="{{asset('build/assets/images/media/media-55.jpg')}}" alt="...">
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="rounded-md mx-auto block" src="{{asset('build/assets/images/media/media-55.jpg')}}" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Image Right Align</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <img class="rounded-md float-end" src="{{asset('build/assets/images/media/media-54.jpg')}}" alt="...">
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="rounded-md float-end" src="{{asset('build/assets/images/media/media-54.jpg')}}" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Image Left Align</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">Use <code>.float-start</code> class to <code>img</code> tag to get left align image.</p>
                                    <img class="rounded-md float-start" src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="...">
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="rounded-md float-start" src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Image With Radius
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">Use <code>.rounded</code> class along with <code>.img-fluid</code> to get border radius.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-49.jpg')}}" class="img-fluid rounded-md inline-flex" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-49.jpg')}}" class="img-fluid rounded-md" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Responsive image
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">Use <code> .img-fluid </code>class to the img tag to get responsive image.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-48.jpg')}}" class="img-fluid inline-flex" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-48.jpg')}}" class="img-fluid" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        rounded-md Image
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">Use <code>.rounded-full</code> class to <code>img</code> tag to get rounded-md image.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-50.jpg')}}" class="img-fluid rounded-full inline-flex" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-50.jpg')}}" class="img-fluid rounded-full" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                           </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Image Thumbnail
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">Use <code> .img-thumbnail </code>to give an image a rounded-md 1px border.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-51.jpg')}}" class="img-thumbnail inline-flex" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-51.jpg')}}" class="img-thumbnail" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        rounded-md Thumbnail
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">Use <code> .rounded-full </code>along with <code> .img-thummbnail </code> to get radius.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="img-thumbnail rounded-full inline-flex" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="img-thumbnail rounded-full" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Figures
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex justify-between gap-2">
                                    <figure class="figure">
                                        <img class="bd-placeholder-img figure-img img-fluid rounded-md card-img" src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="...">
                                        <figcaption class="figure-caption mt-2">A caption for the above image.
                                        </figcaption>
                                    </figure>
                                    <figure class="figure float-end">
                                        <img class="bd-placeholder-img figure-img img-fluid rounded-md card-img" src="{{asset('build/assets/images/media/media-57.jpg')}}" alt="...">
                                        <figcaption class="figure-caption text-end mt-2">A caption for the above image.
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;figure class="figure"&gt;
    &lt;img class="bd-placeholder-img figure-img img-fluid rounded-md card-img" src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="..."&gt;
    &lt;figcaption class="figure-caption"&gt;A caption for the above image.
    &lt;/figcaption&gt;
&lt;/figure&gt;
&lt;figure class="figure float-end"&gt;
    &lt;img class="bd-placeholder-img figure-img img-fluid rounded-md card-img" src="{{asset('build/assets/images/media/media-57.jpg')}}" alt="..."&gt;
    &lt;figcaption class="figure-caption text-end"&gt;A caption for the above image.
    &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->
                </div>
            </div>
            <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')
        
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        
@endsection