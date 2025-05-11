@extends('layouts.master')

@section('styles')
  
        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Object Fit</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Object Fit</h1>
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
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Contain</div>
                            <div class="prism-toggle">
                                <button class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="object-contain border dark:border-defaultborder/10 !rounded-md"
                                alt="...">
                            </div>
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">
&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}" class="object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;
</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Cover</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="object-cover border dark:border-defaultborder/10 md:!rounded-md" alt="...">
                            </div>
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
    class="object-cover border dark:border-defaultborder/10 md:!rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Fill</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="object-fill border dark:border-defaultborder/10 !rounded-md" alt="...">
                            </div>
                           
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
class="object-fill border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Scale Down</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="object-scale-down border dark:border-defaultborder/10 !rounded-md" alt="...">
                            </div>
                           
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
 class="object-scale-down border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit None</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="object-none border dark:border-defaultborder/10 !rounded-md" alt="...">
                            </div>
                           
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
class="object-none border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Contain (SM - responsive)</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="sm:object-contain border dark:border-defaultborder/10 !rounded-md" alt="...">
                            </div>
                           
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
class="sm:object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Contain (MD - responsive)</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="md:object-contain border dark:border-defaultborder/10 !rounded-md" alt="...">
                            </div>
                            
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
    class="md:object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Contain (LG - responsive)</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="lg:object-contain border dark:border-defaultborder/10 !rounded-md" alt="...">
                            </div>
                           
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
    class="lg:object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Contain (XL - responsive)</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="xl:object-contain border dark:border-defaultborder/10 !rounded-md" alt="...">
                            </div>
                           
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
    class="xl:object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">Object Fit Contain (XXL - responsive)</div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                class="xxl:object-contain border dark:border-defaultborder/10 !rounded-md"
                                alt="...">
                            </div>
                            
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
    class="xxl:object-contain border dark:border-defaultborder/10 !rounded-md"
    alt="..."&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">
                                Object Fit Contain Video
                            </div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <video src="{{asset('build/assets/video/1.mp4')}}"
                                class="object-contain !rounded-md border dark:border-defaultborder/10"
                                autoplay loop muted></video>
                            </div>
                           
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
    class="object-contain !rounded-md border dark:border-defaultborder/10"
    autoplay loop muted&gt;&lt;/video&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">
                                Object Fit Cover Video
                            </div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <video src="{{asset('build/assets/video/1.mp4')}}"
                                class="object-cover !rounded-md border dark:border-defaultborder/10"
                                autoplay loop muted></video>
                            </div>
                           
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
    class="object-cover !rounded-md border dark:border-defaultborder/10"
    autoplay loop muted&gt;&lt;/video&gt;
</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">
                                Object Fit Fill Video
                            </div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <video src="{{asset('build/assets/video/1.mp4')}}"
                                class="object-fill !rounded-md border dark:border-defaultborder/10"
                                autoplay loop muted></video>
                            </div>
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
    class="object-fill !rounded-md border dark:border-defaultborder/10"
    autoplay loop muted&gt;&lt;/video&gt;</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">
                                Object Fit Scale Video
                            </div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <video src="{{asset('build/assets/video/1.mp4')}}"
                                class="object-scale-down !rounded-md border dark:border-defaultborder/10"
                                autoplay loop muted></video>
                            </div>
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
    class="object-scale-down !rounded-md border dark:border-defaultborder/10"
    autoplay loop muted&gt;&lt;/video&gt;
</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                            <div class="box-title">
                                Object Fit None Video
                            </div>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="object-fit-container">
                                <video src="{{asset('build/assets/video/1.mp4')}}"
                                class="object-none !rounded-md border dark:border-defaultborder/10"
                                autoplay loop muted></video>
                            </div>
                        </div>
                        <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
    class="object-none !rounded-md border dark:border-defaultborder/10"
    autoplay loop muted&gt;&lt;/video&gt;
</code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection