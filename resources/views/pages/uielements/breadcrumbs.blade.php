@extends('layouts.master')

@section('styles')
  
        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')

        <!--APP-CONTENT-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <nav>
                            <ol class="breadcrumb mb-1">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Breadcrumb</h1>
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
                    <div class="col-span-12">
                    <div class="box">
                        <div class="box-header justify-between">
                        <div class="box-title">
                            Basic Breadcrumb
                        </div>
                        <div class="prism-toggle">
                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 align-middle inline-block"></i></button>
                        </div>
                    </div>
                        <div class="box-body">
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                Home
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                App Center
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
                            <li class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate" aria-current="page">
                            Application
                            </li>
                        </ol>
                        </div>
                        <div class="box-footer border-t-0 hidden">
                        <!-- Prism Code -->
                        <pre class="language-html" tabindex="0"><code class="language-html">
        &lt;ol class="flex items-center whitespace-nowrap min-w-0"&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            Home
            &lt;svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            App Center
            &lt;svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate" aria-current="page"&gt;
            Application
        &lt;/li&gt;
        &lt;/ol&gt;
                        </code></pre>
                        <!-- Prism Code -->
                    </div>
                    </div>
                    </div>
                    <div class="col-span-12">
                    <div class="box">
                        <div class="box-header justify-between">
                        <div class="box-title">
                            Breadcrumb Style-1
                        </div>
                        <div class="prism-toggle">
                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 align-middle inline-block"></i></button>
                        </div>
                    </div>
                        <div class="box-body">
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                Home
                                <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-white/10 rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                App Center
                                <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-white/10 rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate" aria-current="page">
                            Application
                            </li>
                        </ol>
                        </div>
                        <div class="box-footer border-t-0 hidden">
                        <!-- Prism Code -->
                        <pre class="language-html" tabindex="0"><code class="language-html">
        &lt;ol class="flex items-center whitespace-nowrap min-w-0"&gt;
        &lt;li class="text-sm"&gt;
        &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            Home
            &lt;i&gt;
            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-white/10 rtl:rotate-180"&gt;&lt;/i&gt;
        &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="text-sm"&gt;
        &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            App Center
            &lt;i&gt;
            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-white/10 rtl:rotate-180"&gt;&lt;/i&gt;
        &lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt; class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate" aria-current="page"&gt;
        Application
        &lt;/li&gt;
        &lt;/ol&gt;
                        </code></pre>
                        <!-- Prism Code -->
                    </div>
                    </div>
                    </div>
                    <div class="col-span-12">
                    <div class="box">
                        <div class="box-header justify-between">
                        <div class="box-title">
                            Basic Breadcrumb-style-2
                        </div>
                        <div class="prism-toggle">
                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 align-middle inline-block"></i></button>
                        </div>
                    </div>
                        <div class="box-body">
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-smtext-primary hover:text-primary dark:text-primary">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                Home
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300 dark:text-white/10 mx-2" width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
        
                            <li class="text-smtext-primary hover:text-primary dark:text-primary">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                App Center
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300 dark:text-white/10 mx-2" width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
        
                            <li class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate" aria-current="page">
                            Application
                            </li>
                        </ol>
                        </div>
                        <div class="box-footer border-t-0 hidden">
                        <!-- Prism Code -->
                        <pre class="language-html" tabindex="0"><code class="language-html">
        &lt;ol class="flex items-center whitespace-nowrap min-w-0"&gt;
        &lt;li class="text-smtext-primary hover:text-primary dark:text-primary"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            Home
            &lt;svg class="flex-shrink-0 h-5 w-5 text-gray-300 dark:text-white/10 mx-2" width="16" height="16"
                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                &lt;path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        
        &lt;li class="text-smtext-primary hover:text-primary dark:text-primary"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            App Center
            &lt;svg class="flex-shrink-0 h-5 w-5 text-gray-300 dark:text-white/10 mx-2" width="16" height="16"
                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                &lt;path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        
        &lt;li class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate" aria-current="page"&gt;
            Application
        &lt;/li&gt;
        &lt;/ol&gt;
                        </code></pre>
                        <!-- Prism Code -->
                    </div>
                    </div>
                    </div>
                    <div class="col-span-12">
                    <div class="box">
                        <div class="box-header justify-between">
                        <div class="box-title">
                            Breadcrumb With Icons
                        </div>
                        <div class="prism-toggle">
                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 align-middle inline-block"></i></button>
                        </div>
                    </div>
                        <div class="box-body">
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                <svg class="flex-shrink-0 me-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Home
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                App Center
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
                            <li class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate" aria-current="page">
                            Application
                            </li>
                        </ol>
                        </div>
                        <div class="box-footer border-t-0 hidden">
                        <!-- Prism Code -->
                        <pre class="language-html" tabindex="0"><code class="language-html">
        &lt;ol class="flex items-center whitespace-nowrap min-w-0"&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            &lt;svg class="flex-shrink-0 me-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16"&gt;
                &lt;path fill-rule="evenodd"
                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" /&gt;
                &lt;path fill-rule="evenodd"
                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" /&gt;
            &lt;/svg&gt;
            Home
            &lt;svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            App Center
            &lt;svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt; class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate" aria-current="page"&gt;
            Application
        &lt;/li&gt;
        &lt;/ol&gt;
                        </code></pre>
                        <!-- Prism Code -->
                    </div>
                    </div>
                    </div>
                    <div class="col-span-12">
                    <div class="box">
                        <div class="box-header justify-between">
                        <div class="box-title">
                            Breadcrumb-style-3
                        </div>
                        <div class="prism-toggle">
                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 align-middle inline-block"></i></button>
                        </div>
                    </div>
                        <div class="box-body">
                        <ol class="flex items-center whitespace-nowrap min-w-0 pb-2">
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                <svg class="flex-shrink-0 me-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Home
                            </a>
                            </li>
                        </ol>
                        <ol class="flex items-center whitespace-nowrap min-w-0 pb-2">
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                <svg class="flex-shrink-0 me-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Home
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
                            <li class="text-sm">
                            <a class="flex items-center text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary" href="javascript:void(0);">
                                Library
                            </a>
                            </li>
                        </ol>
                        <ol class="flex items-center whitespace-nowrap min-w-0 pb-2">
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                <svg class="flex-shrink-0 me-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Home
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
                            <li class="text-sm">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                Library
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            </li>
                            <li class="text-sm">
                            <a class="flex items-center text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary" href="javascript:void(0);">
                                Data
                            </a>
                            </li>
                        </ol>
                        </div>
                        <div class="box-footer border-t-0 hidden">
                        <!-- Prism Code -->
                        <pre class="language-html" tabindex="0"><code class="language-html">
        &lt;ol class="flex items-center whitespace-nowrap min-w-0 pb-2"&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            &lt;svg class="flex-shrink-0 me-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16"&gt;
                &lt;path fill-rule="evenodd"
                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" /&gt;
                &lt;path fill-rule="evenodd"
                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" /&gt;
            &lt;/svg&gt;
            Home
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;/ol&gt;
        &lt;ol class="flex items-center whitespace-nowrap min-w-0 pb-2"&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            &lt;svg class="flex-shrink-0 me-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16"&gt;
                &lt;path fill-rule="evenodd"
                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" /&gt;
                &lt;path fill-rule="evenodd"
                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" /&gt;
            &lt;/svg&gt;
            Home
            &lt;svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary" href="javascript:void(0);"&gt;
            Library
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;/ol&gt;
        &lt;ol class="flex items-center whitespace-nowrap min-w-0 pb-2"&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            &lt;svg class="flex-shrink-0 me-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16"&gt;
                &lt;path fill-rule="evenodd"
                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" /&gt;
                &lt;path fill-rule="evenodd"
                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" /&gt;
            &lt;/svg&gt;
            Home
            &lt;svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);"&gt;
            Library
            &lt;svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="text-sm"&gt;
            &lt;a class="flex items-center text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary" href="javascript:void(0);"&gt;
            Data
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;/ol&gt;
                        </code></pre>
                        <!-- Prism Code -->
                    </div>
                    </div>
                    </div>
                </div>  
            <!-- End::row-1 -->

            </div>
        </div>
        <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')
                
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection