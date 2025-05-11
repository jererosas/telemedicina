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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Avatars</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Avatars</h1>
                    </div>
                    <div class="ti-btn-list">
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
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-12 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Avatars
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body py-4">
                                <span class="avatar me-2 avatar-radius-0">
                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                </span>
                                <span class="avatar me-2">
                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                </span>
                                <span class="avatar me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                </span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="avatar me-2 avatar-radius-0"&gt;
    &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar me-2"&gt;
    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-12 col-sm-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Avatar With Icons
                                    <p class="subtitle text-textmuted dark:text-textmuted/50 text-xs font-normal">
                                        Avatar contains icons to perform respective action.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="avatar avatar-xs me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    <a href="javascript:void(0);" class="badge bg-success rounded-full avatar-badge"><i class="fe fe-camera !text-[0.5rem]"></i></a>
                                </span>
                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                    <a href="javascript:void(0);" class="badge rounded-full bg-secondary avatar-badge"><i class="fe fe-edit !text-[0.5rem]"></i></a>
                                </span>
                                <span class="avatar avatar-md me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                    <a href="javascript:void(0);" class="badge rounded-full bg-warning avatar-badge"><i class="fe fe-plus !text-[0.5rem]"></i></a>
                                </span>
                                <span class="avatar avatar-lg me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                    <a href="javascript:void(0);" class="badge rounded-full bg-info avatar-badge"><i class="fe fe-edit !text-[0.625rem]"></i></a>
                                </span>
                                <span class="avatar avatar-xl me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                    <a href="javascript:void(0);" class="badge rounded-full bg-success avatar-badge"><i class="fe fe-camera !text-[0.625rem]"></i></a>
                                </span>
                                <span class="avatar avatar-xxl me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                    <a href="javascript:void(0);" class="badge rounded-full bg-danger avatar-badge"><i class="fe fe-plus !text-[0.625rem]"></i></a>
                                </span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge bg-success rounded-full avatar-badge"&gt;&lt;i class="fe fe-camera"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-full bg-secondary avatar-badge"&gt;&lt;i class="fe fe-edit"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-full bg-warning avatar-badge"&gt;&lt;i class="fe fe-plus"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-full bg-info avatar-badge"&gt;&lt;i class="fe fe-edit"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-full bg-success avatar-badge"&gt;&lt;i class="fe fe-camera"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-full bg-danger avatar-badge"&gt;&lt;i class="fe fe-plus"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-12 col-sm-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Avatar Sizes
                                    <p class="subtitle text-textmuted dark:text-textmuted/50 text-xs font-normal">
                                        Avatars of different sizes
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="avatar avatar-xs me-2">
                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-sm me-2">
                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-md me-2">
                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-lg me-2">
                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-xl me-2">
                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-xxl me-2">
                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                </span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2"&gt;
    &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm me-2"&gt;
    &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2"&gt;
    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2"&gt;
    &lt;img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2"&gt;
    &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2"&gt;
    &lt;img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img"&gt;
&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-12 col-sm-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Avatar With Online Status Indicators
                                    <p class="subtitle text-textmuted dark:text-textmuted/50 text-xs font-normal">
                                        avatars having online status indicator.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="avatar avatar-xs me-2 online avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-sm online me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-md me-2 online avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-lg me-2 online avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-xl me-2 online avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-xxl me-2 online avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                </span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm online me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 online avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 online avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 online avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 online avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-12 col-sm-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Avatar With Offline Status Indicators
                                    <p class="subtitle text-textmuted dark:text-textmuted/50 text-xs font-normal">
                                        avatars having a offline status indicator.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="avatar avatar-xs me-2 offline avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-sm offline me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-md me-2 offline avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-lg me-2 offline avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-xl me-2 offline avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                </span>
                                <span class="avatar avatar-xxl me-2 offline avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                </span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 offline avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm offline me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 offline avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 offline avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 offline avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 offline avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img"&gt;
&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-12 col-sm-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Avatars With Number Badges
                                    <p class="subtitle text-textmuted dark:text-textmuted/50 text-xs font-normal">
                                        Avatar numbers indicates the no. of unread notififactions/messages.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="avatar avatar-xs me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    <span class="badge rounded-full bg-primary avatar-badge">2</span>
                                </span>
                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                    <span class="badge rounded-full bg-secondary avatar-badge">5</span>
                                </span>
                                <span class="avatar avatar-md me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                    <span class="badge rounded-full bg-warning avatar-badge">1</span>
                                </span>
                                <span class="avatar avatar-lg me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                    <span class="badge rounded-full bg-info avatar-badge">7</span>
                                </span>
                                <span class="avatar avatar-xl me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                    <span class="badge rounded-full bg-success avatar-badge">3</span>
                                </span>
                                <span class="avatar avatar-xxl me-2 avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                    <span class="badge rounded-full bg-danger avatar-badge">9</span>
                                </span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
    &lt;span class="badge rounded-full bg-primary avatar-badge"&gt;2&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
    &lt;span class="badge rounded-full bg-secondary avatar-badge"&gt;5&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
    &lt;span class="badge rounded-full bg-warning avatar-badge"&gt;1&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
    &lt;span class="badge rounded-full bg-info avatar-badge"&gt;7&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
    &lt;span class="badge rounded-full bg-success avatar-badge"&gt;3&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 avatar-rounded"&gt;
    &lt;img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img"&gt;
    &lt;span class="badge rounded-full bg-danger avatar-badge"&gt;9&lt;/span&gt;
&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-12 col-sm-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Stacked Avatars
                                    <p class="subtitle text-textmuted dark:text-textmuted/50 text-xs font-normal">
                                        Group of avatars stacked together.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="avatar-list-stacked">
                                    <span class="avatar">
                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar">
                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar">
                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar">
                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar">
                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar">
                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                    </span>
                                    <a class="avatar bg-primary text-white" href="javascript:void(0);">
                                        +8
                                    </a>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="avatar-list-stacked"&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;a class="avatar bg-primary text-white" href="javascript:void(0);"&gt;
        +8
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 lg:col-span-6 md:col-span-12 col-sm-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Rounded Stacked Avatars
                                    <p class="subtitle text-textmuted dark:text-textmuted/50 text-xs font-normal">
                                        Group of avatars stacked together.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                    </span>
                                    <a class="avatar bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                        +8
                                    </a>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="avatar-list-stacked"&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;a class="avatar bg-primary avatar-rounded text-white" href="javascript:void(0);"&gt;
        +8
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 lg:col-span-6 md:col-span-12 col-sm-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Avatar With Initials
                                    <p class="subtitle text-textmuted dark:text-textmuted/50 text-xs font-normal">
                                        Avatar contains intials when user profile doesn't exist.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <span class="avatar avatar-xs m-2 bg-primary">
                                    xs
                                </span>
                                <span class="avatar avatar-sm m-2 bg-secondary">
                                    SM
                                </span>
                                <span class="avatar avatar-md m-2 bg-warning">
                                    MD
                                </span>
                                <span class="avatar avatar-lg m-2 bg-danger">
                                    LG
                                </span>
                                <span class="avatar avatar-xl m-2 bg-success">
                                    XL
                                </span>
                                <span class="avatar avatar-xxl m-2 bg-info">
                                    XXL
                                </span>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 bg-primary"&gt;
    xs
&lt;/span&gt;
&lt;span class="avatar avatar-sm me-2 bg-secondary"&gt;
    SM
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 bg-warning"&gt;
    MD
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 bg-danger"&gt;
    LG
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 bg-success"&gt;
    XL
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 bg-info"&gt;
    XXL
&lt;/span&gt;</code></pre>
<!-- Prism Code -->
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
        

@endsection