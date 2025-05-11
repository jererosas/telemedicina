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
                                    <li class="breadcrumb-item active" aria-current="page">Spinners</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Spinners</h1>
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
                     <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Border spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-spinner" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;div class="ti-spinner" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Growing spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-spinner !bg-black dark:!bg-light !animate-ping !border-transparent " role="status"
                                        aria-label="loading">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="ti-spinner !bg-black dark:!bg-light !animate-ping !border-transparent " role="status"
    aria-label="loading"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Colors
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-spinner text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-secondary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-success" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-danger" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-warning" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-light" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="ti-spinner text-primary" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-spinner text-secondary" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-spinner text-success" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-spinner text-danger" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-spinner text-warning" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-spinner text-info" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-spinner text-light" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-spinner" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Growing spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-x-6 space-y-4 rtl:space-x-reverse">
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-primary" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-secondary" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-warning" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-danger" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-success" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-info" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
                                            role="status" aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="space-x-6 space-y-4 rtl:space-x-reverse"&gt;
    &lt;div class="ti-spinner !animate-ping !border-transparent  bg-primary" role="status"
        aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner !animate-ping !border-transparent  bg-secondary" role="status"
        aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner !animate-ping !border-transparent  bg-warning" role="status"
        aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner !animate-ping !border-transparent  bg-danger" role="status"
        aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner !animate-ping !border-transparent  bg-success" role="status"
        aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner !animate-ping !border-transparent  bg-info" role="status"
        aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
        role="status" aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;

    &lt;div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
        aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Alignment Flex
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex justify-center mb-6">
                                        <div class="ti-spinner" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <strong>Loading...</strong>
                                        <div class="ti-spinner" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="flex justify-center mb-6"&gt;
    &lt;div class="ti-spinner" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="flex items-center justify-between"&gt;
    &lt;strong&gt;Loading...&lt;/strong&gt;
    &lt;div class="ti-spinner" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Alignment Float
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="clearfix mb-6">
                                        <div class="ti-spinner ltr:float-right rtl:float-left" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="ti-spinner ltr:float-left rtl:float-right" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="clearfix mb-6"&gt;
    &lt;div class="ti-spinner ltr:float-right rtl:float-left" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="clearfix"&gt;
    &lt;div class="ti-spinner ltr:float-left rtl:float-right" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Alignment Text center
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="text-center">
                                        <div class="ti-spinner" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;div class="ti-spinner" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Spinner Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex items-center">
                                    <div class="ti-spinner !w-[1rem] !h-[1rem] me-6" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner !w-[1rem] !h-[1rem] !bg-black dark:!bg-white !animate-ping !border-transparent me-6" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner me-6 w-12 h-12"
                                        role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner !bg-black dark:!bg-white !animate-ping !border-transparent w-8 h-8" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="flex items-center"&gt;
        &lt;div class="ti-spinner !w-[1rem] !h-[1rem] me-6" role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner !w-[1rem] !h-[1rem] !bg-black dark:!bg-white !animate-ping !border-transparent me-6" role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner me-6 w-12 h-12"
            role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner !bg-black dark:!bg-white !animate-ping !border-transparent w-8 h-8" role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Alignment Margin
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-spinner m-[3rem]" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="ti-spinner m-[3rem]" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Buttons</div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-soft-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="">
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-primary" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-primary" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-secondary" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-secondary" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-warning" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-warning" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-danger" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-danger" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-info" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-info" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-success" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-success" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;div class=""&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-primary" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-primary" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
        &lt;span&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-secondary" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-secondary" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
        &lt;span&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-warning" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-warning" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
        &lt;span&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-danger" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-danger" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
        &lt;span&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-info" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-info" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
        &lt;span&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-success" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-success" disabled&gt;
        &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
        &lt;span&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                </div>
            </div>
            <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')
      
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection