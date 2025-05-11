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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input Number</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Input Number</h1>
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
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Basic Input Number
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="py-2 px-3 bg-light rounded-sm dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10" data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-5">
                                        <div class="grow">
                                            <input
                                                class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                                type="text" value="1" data-hs-input-number-input>
                                        </div>
                                        <div class="flex justify-end items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-decrement>
                                                <i class="ri-subtract-line"></i>
                                            </button>
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-increment>
                                                <i class="ri-add-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="py-2 px-3 bg-light rounded-sm dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10" data-hs-input-number&gt;
&lt;div class="w-full flex justify-between items-center gap-x-5"&gt;
&lt;div&gt; class="grow"&gt;
    &lt;input
        class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
        type="text" value="1" data-hs-input-number-input&gt;
&lt;/div&gt;
&lt;div class="flex justify-end items-center gap-x-1.5"&gt;
    &lt;button type="button"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-decrement&gt;
        &lt;i&gt; class="ri-subtract-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button type="button"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-increment&gt;
        &lt;i&gt; class="ri-add-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Input style 01
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="py-2 px-3 bg-light rounded-sm dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10" data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-5">
                                        <div class="grow">
                                            <span class="block text-xs text-gray-500 dark:text-white/70">
                                                Select quantity
                                            </span>
                                            <input
                                                class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                                type="text" value="1" data-hs-input-number-input>
                                        </div>
                                        <div class="flex justify-end items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none  dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-decrement>
                                                <i class="ri-subtract-line"></i>
                                            </button>
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none  dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-increment>
                                                <i class="ri-add-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="py-2 px-3 bg-light rounded-sm dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10" data-hs-input-number&gt;
&lt;div class="w-full flex justify-between items-center gap-x-5"&gt;
&lt;div class="grow"&gt;
    &lt;span class="block text-xs text-gray-500 dark:text-white/70"&gt;
        Select quantity
    &lt;/span&gt;
    &lt;input
        class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
        type="text" value="1" data-hs-input-number-input&gt;
&lt;/div&gt;
&lt;div class="flex justify-end items-center gap-x-1.5"&gt;
    &lt;button type="button"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none  dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-decrement&gt;
        &lt;i class="ri-subtract-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button type="button"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none  dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-increment&gt;
        &lt;i class="ri-add-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Buttons vertically stacked
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
                                    data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-1 overflow-hidden">
                                        <div class="grow py-2 px-3">
                                            <span class="block text-xs text-gray-500 dark:text-white/70">
                                                Select quantity
                                            </span>
                                            <input
                                                class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                                type="text" value="1" data-hs-input-number-input>
                                        </div>
                                        <div
                                            class="flex flex-col -gap-y-px divide-y divide-gray-200 border-s border-inputborder dark:divide-white/10 dark:border-white/10">
                                            <button type="button"
                                                class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium .rounded-se-sm bg-gray-50 text-gray-800 hover:bg-light disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-decrement>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-sm bg-gray-50 text-gray-800 hover:bg-light disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
data-hs-input-number&gt;
&lt;div class="w-full flex justify-between items-center gap-x-1 overflow-hidden"&gt;
    &lt;div class="grow py-2 px-3"&gt;
        &lt;span&gt; class="block text-xs text-gray-500 dark:text-white/70"&gt;
            Select quantity
        &lt;/span&gt;
        &lt;input
            class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
            type="text" value="1" data-hs-input-number-input&gt;
    &lt;/div&gt;
    &lt;div
        class="flex flex-col -gap-y-px divide-y divide-gray-200 border-s border-inputborder dark:divide-white/10 dark:border-white/10"&gt;
        &lt;button type="button"
            class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium .rounded-se-sm bg-gray-50 text-gray-800 hover:bg-light disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
            data-hs-input-number-decrement&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="M5 12h14" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;button type="button"
            class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-sm bg-gray-50 text-gray-800 hover:bg-light disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
            data-hs-input-number-increment&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="M5 12h14" /&gt;
                &lt;path d="M12 5v14" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Buttons horizontally stacked
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
                                    data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-1 overflow-hidden">
                                        <div class="grow py-2 px-3">
                                            <input
                                                class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                                type="text" value="1" data-hs-input-number-input>
                                        </div>
                                        <div
                                            class="flex items-center -gap-y-px divide-x divide-gray-200 border-s border-inputborder dark:divide-white/10 dark:border-white/10">
                                            <button type="button"
                                                class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium last:rounded-e-sm bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-decrement>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium last:rounded-e-sm bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
data-hs-input-number&gt;
&lt;div class="w-full flex justify-between items-center gap-x-1 overflow-hidden"&gt;
&lt;div class="grow py-2 px-3"&gt;
    &lt;input
        class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
        type="text" value="1" data-hs-input-number-input&gt;
&lt;/div&gt;
&lt;div
    class="flex items-center -gap-y-px divide-x divide-gray-200 border-s border-inputborder dark:divide-white/10 dark:border-white/10"&gt;
    &lt;button type="button"
        class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium last:rounded-e-sm bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-decrement&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="M5 12h14" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
    &lt;button type="button"
        class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium last:rounded-e-sm bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bgdark/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-increment&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="M5 12h14" /&gt;
            &lt;path d="M12 5v14" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Mini Input
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="py-2 px-3 inline-block bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
                                    data-hs-input-number>
                                    <div class="flex items-center gap-x-1.5">
                                        <button type="button"
                                            class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none  dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                            data-hs-input-number-decrement>
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input
                                            class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white"
                                            type="text" value="0" data-hs-input-number-input>
                                        <button type="button"
                                            class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                            data-hs-input-number-increment>
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="py-2 px-3 inline-block bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
data-hs-input-number&gt;
&lt;div class="flex items-center gap-x-1.5"&gt;
&lt;button type="button"
    class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none  dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
    data-hs-input-number-decrement&gt;
    &lt;i&gt; class="ri-subtract-line"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;input
    class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white"
    type="text" value="0" data-hs-input-number-input&gt;
&lt;button type="button"
    class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
    data-hs-input-number-increment&gt;
    &lt;i&gt; class="ri-add-line"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pricing seats example
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="py-2 px-3 bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
                                    data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-3">
                                        <div>
                                            <span class="block font-medium text-sm text-gray-800 dark:text-white">
                                                Additional seats
                                            </span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">
                                                $39 monthly
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-decrement>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <input
                                                class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white"
                                                type="text" value="0" data-hs-input-number-input>
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="py-2 px-3 bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
data-hs-input-number&gt;
&lt;div class="w-full flex justify-between items-center gap-x-3"&gt;
&lt;div&gt;
    &lt;span class="block font-medium text-sm text-gray-800 dark:text-white"&gt;
        Additional seats
    &lt;/span&gt;
    &lt;span class="block text-xs text-gray-500 dark:text-white/70"&gt;
        $39 monthly
    &lt;/span&gt;
&lt;/div&gt;
&lt;div class="flex items-center gap-x-1.5"&gt;
    &lt;button type="button"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-decrement&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="M5 12h14" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
    &lt;input
        class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white"
        type="text" value="0" data-hs-input-number-input&gt;
    &lt;button type="button"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-inputborder bg-white dark:bg-bodybg text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-increment&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="M5 12h14" /&gt;
            &lt;path d="M12 5v14" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Input disabled
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="py-2 px-3 bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
                                    data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-3">
                                        <input
                                            class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                            type="text" value="10" data-hs-input-number-input disabled>
                                        <div class="flex justify-end items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-decrement>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="py-2 px-3 bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
data-hs-input-number&gt;
&lt;div class="w-full flex justify-between items-center gap-x-3"&gt;
&lt;input
class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
type="text" value="10" data-hs-input-number-input disabled&gt;
&lt;div class="flex justify-end items-center gap-x-1.5"&gt;
&lt;button type="button"
    class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
    data-hs-input-number-decrement&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="M5 12h14" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;
&lt;button type="button"
    class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
    data-hs-input-number-increment&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="M5 12h14" /&gt;
        &lt;path d="M12 5v14" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Button disabled
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="py-2 px-3 bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
                                    data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-3">
                                        <input
                                            class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                            type="text" value="10" data-hs-input-number-input disabled>
                                        <div class="flex justify-end items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-decrement disabled>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="py-2 px-3 bg-white border border-inputborder rounded-sm dark:bg-bodybg dark:border-white/10"
data-hs-input-number&gt;
&lt;div class="w-full flex justify-between items-center gap-x-3"&gt;
&lt;input
class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
type="text" value="10" data-hs-input-number-input disabled&gt;
&lt;div class="flex justify-end items-center gap-x-1.5"&gt;
&lt;button type="button"
    class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
    data-hs-input-number-decrement disabled&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="M5 12h14" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;
&lt;button type="button"
    class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
    data-hs-input-number-increment&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="M5 12h14" /&gt;
        &lt;path d="M12 5v14" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Validation states
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Number -->
                                <div class="py-2 px-3 bg-white border border-danger rounded-sm dark:bg-bodybg"
                                    data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-3">
                                        <div class="relative w-full">
                                            <input id="hs-validation-name-error"
                                                class="w-full p-0 pe-7 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                                type="text" value="10" data-hs-input-number-input
                                                aria-describedby="hs-validation-name-error-helper">
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none">
                                                <svg class="flex-shrink-0 size-4 text-danger"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <line x1="12" x2="12" y1="8" y2="12" />
                                                    <line x1="12" x2="12.01" y1="16" y2="16" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-end items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-decrement>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->

                                <p class="text-sm text-danger mt-2" id="hs-validation-name-error-helper">Out of limit
                                </p>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="py-2 px-3 bg-white border border-danger rounded-sm dark:bg-bodybg"
data-hs-input-number&gt;
&lt;div class="w-full flex justify-between items-center gap-x-3"&gt;
&lt;div class="relative w-full"&gt;
    &lt;input id="hs-validation-name-error"
        class="w-full p-0 pe-7 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
        type="text" value="10" data-hs-input-number-input
        aria-describedby="hs-validation-name-error-helper"&gt;
    &lt;div class="absolute inset-y-0 end-0 flex items-center pointer-events-none"&gt;
        &lt;svg class="flex-shrink-0 size-4 text-danger"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;circle cx="12" cy="12" r="10" /&gt;
            &lt;line x1="12" x2="12" y1="8" y2="12" /&gt;
            &lt;line x1="12" x2="12.01" y1="16" y2="16" /&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="flex justify-end items-center gap-x-1.5"&gt;
    &lt;button type="button"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-decrement&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="M5 12h14" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
    &lt;button type="button"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-inputborder bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bgdark/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
        data-hs-input-number-increment&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="M5 12h14" /&gt;
            &lt;path d="M12 5v14" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;p&gt; class="text-sm text-danger mt-2" id="hs-validation-name-error-helper"&gt;Out of limit
&lt;/p&gt;
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