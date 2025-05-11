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
                                <li class="breadcrumb-item active" aria-current="page">Advanced Select</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Advanced Select</h1>
                    </div>
                    <div class="btn-list">
                        <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave">
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
                                    Basic Select
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <div class="relative">
                                    <select data-hs-select='{
                                        "placeholder": "Select option...",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 dark:hover:bg-light rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                    }' class="hidden">
                                        <option value="">Choose</option>
                                        <option>Name</option>
                                        <option>Email address</option>
                                        <option>Description</option>
                                        <option>User ID</option>
                                    </select>
                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
    &lt;select data-hs-select='{
                                        "placeholder": "Select option...",
                                        "toggleTag": "&lt;button type=\"button\"&gt;&lt;/button&gt;",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
                                    }' class="hidden"&gt;
        &lt;option value=""&gt;Choose&lt;/option&gt;
        &lt;option&gt;Name&lt;/option&gt;
        &lt;option&gt;Email address&lt;/option&gt;
        &lt;option&gt;Description&lt;/option&gt;
        &lt;option&gt;User ID&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
        &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;path d="m7 15 5 5 5-5" /&gt;
            &lt;path d="m7 9 5-5 5 5" /&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Select With Placeholder
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <div class="relative">
                                    <select data-hs-select='{
                                        "placeholder": "<span class=\"inline-flex items-center\"><svg class=\"flex-shrink-0 size-3.5 me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polygon points=\"22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3\"/></svg> Filter</span>",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                    }' class="hidden">
                                        <option value="">Choose</option>
                                        <option>Name</option>
                                        <option>Email address</option>
                                        <option>Description</option>
                                        <option>User ID</option>
                                    </select>
                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
    &lt;select data-hs-select='{
            "placeholder": "&lt;span class=\"inline-flex items-center\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polygon points=\"22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3\"/&gt;&lt;/svg&gt; Filter&lt;/span&gt;",
            "toggleTag": "&lt;button type=\"button\"&gt;&lt;/button&gt;",
            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
            "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
            "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
        }' class="hidden"&gt;
        &lt;option value=""&gt;Choose&lt;/option&gt;
        &lt;option&gt;Name&lt;/option&gt;
        &lt;option&gt;Email address&lt;/option&gt;
        &lt;option&gt;Description&lt;/option&gt;
        &lt;option&gt;User ID&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
        &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;path d="m7 15 5 5 5-5" /&gt;
            &lt;path d="m7 9 5-5 5 5" /&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Multiple Select
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <div class="relative">
                                    <select multiple data-hs-select='{
                                        "placeholder": "Select multiple options...",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                    }' class="hidden">
                                        <option value="">Choose</option>
                                        <option>Name</option>
                                        <option>Email address</option>
                                        <option>Description</option>
                                        <option>User ID</option>
                                    </select>

                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
    &lt;select multiple data-hs-select='{
                                        "placeholder": "Select multiple options...",
                                        "toggleTag": "&lt;button&gt; type=\"button\"&gt;&lt;/button&gt;",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span&gt; data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
                                    }' class="hidden"&gt;
        &lt;option&gt; value=""&gt;Choose&lt;/option&gt;
        &lt;option&gt;Name&lt;/option&gt;
        &lt;option&gt;Email address&lt;/option&gt;
        &lt;option&gt;Description&lt;/option&gt;
        &lt;option&gt;User ID&lt;/option&gt;
    &lt;/select&gt;

    &lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
        &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;path d="m7 15 5 5 5-5" /&gt;
            &lt;path d="m7 9 5-5 5 5" /&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Multiple Select with counter
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <div class="relative">
                                    <select multiple data-hs-select='{
                                        "placeholder": "Select multiple options...",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                        "toggleCountText": "selected",
                                        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                    }' class="hidden">
                                        <option value="">Choose</option>
                                        <option>Name</option>
                                        <option>Email address</option>
                                        <option>Description</option>
                                        <option>User ID</option>
                                    </select>

                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
    &lt;select multiple data-hs-select='{
        "placeholder": "Select multiple options...",
        "toggleTag": "&lt;button&gt; type=\"button\"&gt;&lt;/button&gt;",
        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
        "toggleCountText": "selected",
        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
        "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span&gt; data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
    }' class="hidden"&gt;
    &lt;option value=""&gt;Choose&lt;/option&gt;
    &lt;option&gt;Name&lt;/option&gt;
    &lt;option&gt;Email address&lt;/option&gt;
    &lt;option&gt;Description&lt;/option&gt;
    &lt;option&gt;User ID&lt;/option&gt;
    &lt;/select&gt;

    &lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
    &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m7 15 5 5 5-5"/&gt;&lt;path d="m7 9 5-5 5 5"/&gt;&lt;/svg&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Select Search inside dropdown
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <div class="relative">
                                    <select data-hs-select='{
                                      "hasSearch": true,
                                      "searchPlaceholder": "Search...",
                                      "searchClasses": "block w-full text-sm border-inputborder rounded-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary py-2 px-3 dark:placeholder:text-white/50",
                                      "searchWrapperClasses": "bg-white p-2 -mx-1 sticky top-0 dark:bg-bodybg",
                                      "placeholder": "Select country...",
                                      "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                      "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-20 w-full bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                      "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-gray-200\" data-title></div></div></div>"
                                    }' class="hidden">
                                        <option value="">Choose</option>
                                        <option value="Us"
                                            data-hs-select-option='{
                                      "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/us_flag.jpg')}}\" alt=\"USA\" />"}'>
                                            USA
                                        </option>
                                        <option value="ar"
                                            data-hs-select-option='{
                                      "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/argentina_flag.jpg')}}\" alt=\"Argentina\" />"}'>
                                            Argentina
                                        </option>
                                        <option value="ca"
                                            data-hs-select-option='{
                                      "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/canada_flag.jpg')}}\" alt=\"Canada\" />"}'>
                                            Canada
                                        </option>
                                        <option value="fr"
                                            data-hs-select-option='{
                                      "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/french_flag.jpg')}}\" alt=\"India\" />"}'>
                                        French
                                        </option>
                                        <option value="gr"
                                            data-hs-select-option='{
                                      "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/germany_flag.jpg')}}\" alt=\"Germany\" />"}'>
                                            Germany
                                        </option>
                                        <option value="it"
                                            data-hs-select-option='{
                                      "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/italy_flag.jpg')}}\" alt=\"Italy\" />"}'>
                                            Italy
                                        </option>
                                    </select>
                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="box-body"&gt;
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
    &lt;select data-hs-select='{
        "hasSearch": true,
        "searchPlaceholder": "Search...",
        "searchClasses": "block w-full text-sm border-inputborder rounded-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary py-2 px-3 dark:placeholder:text-white/50",
        "searchWrapperClasses": "bg-white p-2 -mx-1 sticky top-0 dark:bg-bodybg",
        "placeholder": "Select country...",
        "toggleTag": "&lt;button type=\"button\"&gt;&lt;span&gt; class=\"me-2\" data-icon&gt;&lt;/span&gt;&lt;span&gt; class=\"text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/span&gt;&lt;/button&gt;",
        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
        "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-20 w-full bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
        "optionTemplate": "&lt;div&gt;&lt;div class=\"flex items-center\"&gt;&lt;div&gt; class=\"me-2\" data-icon&gt;&lt;/div&gt;&lt;div&gt; class=\"text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
    }' class="hidden"&gt;
    &lt;option&gt; value=""&gt;Choose&lt;/option&gt;
    &lt;option&gt; value="Us" data-hs-select-option='{
        "icon": "&lt;img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/us_flag.jpg')}}\" alt=\"USA\" /&gt;"}'&gt;
        USA
    &lt;/option&gt;
    &lt;option&gt; value="ar" data-hs-select-option='{
        "icon": "&lt;img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/argentina_flag.jpg')}}\" alt=\"Argentina\" /&gt;"}'&gt;
        Argentina
    &lt;/option&gt;
    &lt;option&gt; value="ca" data-hs-select-option='{
        "icon": "&lt;img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/canada_flag.jpg')}}\" alt=\"Canada\" /&gt;"}'&gt;
        Canada
    &lt;/option&gt;
    &lt;option&gt; value="fr" data-hs-select-option='{
        "icon": "&lt;img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/french_flag.jpg')}}\" alt=\"India\" /&gt;"}'&gt;
        French
    &lt;/option&gt;
    &lt;option&gt; value="gr" data-hs-select-option='{
        "icon": "&lt;img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/germany_flag.jpg')}}\" alt=\"Germany\" /&gt;"}'&gt;
        Germany
    &lt;/option&gt;
    &lt;option&gt; value="it" data-hs-select-option='{
        "icon": "&lt;img class=\"inline-block size-4 rounded-full\" src=\"{{asset('build/assets/images/flags/italy_flag.jpg')}}\" alt=\"Italy\" /&gt;"}'&gt;
        Italy
    &lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
    &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m7 15 5 5 5-5"/&gt;&lt;path d="m7 9 5-5 5 5"/&gt;&lt;/svg&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;
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
                                    Select Tags
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <select multiple="" data-hs-select='{
                                    "placeholder": "Select option...",
                                    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-defaultborder dark:border-defaultborder/10 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-bodybg",
                                    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 dark:bg-bodybg dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                    "mode": "tags",
                                    "wrapperClasses": "relative ps-0.5 pe-9 min-h-[46px] !bg-white dark:!bg-bodybg flex items-center flex-wrap text-nowrap w-full border border-defaultborder dark:border-defaultborder/10 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-bodybg dark:border-defaultborder/10dark:text-neutral-400",
                                    "tagsItemTemplate": "<div class=\"flex flex-nowrap items-center relative z-10 bg-white border border-defaultborder dark:border-defaultborder/10 rounded-full p-1 m-1 dark:bg-bodybg dark:border-defaultborder/10\"><div class=\"size-6 me-1\" data-icon></div><div class=\"whitespace-nowrap text-gray-800 dark:text-neutral-200 \" data-title></div><div class=\"inline-flex shrink-0 justify-center items-center size-5 ms-2 rounded-full text-gray-800 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 text-sm dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer\" data-remove><svg class=\"shrink-0 size-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M18 6 6 18\"/><path d=\"m6 6 12 12\"/></svg></div></div>",
                                    "tagsInputClasses": "py-3 w-full border-0 px-2 order-1 text-sm bg-white dark:bg-bodybg",
                                    "optionTemplate": "<div class=\"flex items-center\"><div class=\"size-8 me-2\" data-icon></div><div><div class=\"text-sm font-semibold text-gray-800 dark:text-neutral-200 \" data-title></div><div class=\"text-xs text-gray-500 dark:text-neutral-500 \" data-description></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>",
                                    "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                  }' class="hidden">
                                    <option value="">Choose</option>
                                    <option selected="" value="1" data-hs-select-option='{
                                        "description": "chris",
                                        "icon": "<img class=\"inline-block rounded-full\" src=\"https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80\" />"
                                      }'>Christina</option>
                                    <option value="2" data-hs-select-option='{
                                        "description": "david",
                                        "icon": "<img class=\"inline-block rounded-full\" src=\"https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80\" />"
                                      }'>David</option>
                                    <option value="3" disabled="" data-hs-select-option='{
                                        "description": "alex27",
                                        "icon": "<img class=\"inline-block rounded-full\" src=\"https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80\" />"
                                      }'>Alex</option>
                                    <option value="4" data-hs-select-option='{
                                        "description": "samia_samia",
                                        "icon": "<img class=\"inline-block rounded-full\" src=\"https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80\" />"
                                      }'>Samia</option>
                                  </select>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="relative"&gt;
&lt;select multiple data-hs-select='{
                                "placeholder": "Select option...",
                                "toggleTag": "&lt;button type=\"button\"&gt;&lt;/button&gt;",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                "mode": "tags",
                                "tagsClasses": "relative ps-0.5 pe-9 min-h-[46px] flex items-center flex-wrap text-nowrap w-full border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                "tagsItemTemplate": "&lt;div class=\"flex flex-nowrap items-center relative z-10 bg-white border border-inputborder rounded-full p-1 m-1 dark:bg-bodybg dark:border-white/10\"&gt;&lt;div class=\"size-6 me-1\" data-icon&gt;&lt;/div&gt;&lt;div class=\"whitespace-nowrap\" data-title&gt;&lt;/div&gt;&lt;div class=\"inline-flex flex-shrink-0 justify-center items-center size-5 ms-2 rounded-full text-gray-800 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-white/70 text-sm dark:bg-bodybg/50 dark:hover:bg-bodybg dark:text-white/70 cursor-pointer\" data-remove&gt;&lt;svg class=\"flex-shrink-0 size-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;path d=\"M18 6 6 18\"/&gt;&lt;path d=\"m6 6 12 12\"/&gt;&lt;/svg&gt;&lt;/div&gt;&lt;/div&gt;",
                                "tagsInputClasses": "absolute inset-0 w-full py-3 px-4 pe-9 flex-1 text-sm rounded-sm focus-visible:ring-0 !border-0 dark:bg-bodybg dark:text-white/70 dark:placeholder:text-white/50",
                                "optionTemplate": "&lt;div class=\"flex items-center\"&gt;&lt;div class=\"size-8 me-2\" data-icon&gt;&lt;/div&gt;&lt;div&gt;&lt;div class=\"text-sm font-semibold text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/div&gt;&lt;div class=\"text-xs text-gray-500 dark:text-white/70\" data-description&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=\"ms-auto\"&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"&gt;&lt;path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;"
                            }' class="hidden"&gt;
&lt;option value=""&gt;Choose&lt;/option&gt;
&lt;option selected value="1" data-hs-select-option='{
                                "description": "chris",
                                "icon": "&lt;img class=\"inline-block rounded-full\" src=\"{{asset('build/assets/images/faces/1.jpg')}}\" /&gt;"
                                }'&gt;Christina&lt;/option&gt;
&lt;option value="2" data-hs-select-option='{
                                "description": "david",
                                "icon": "&lt;img class=\"inline-block rounded-full\" src=\"{{asset('build/assets/images/faces/9.jpg')}}\" /&gt;"
                                }'&gt;David&lt;/option&gt;
&lt;option value="3" data-hs-select-option='{
                                "description": "alex27",
                                "icon": "&lt;img class=\"inline-block rounded-full\" src=\"{{asset('build/assets/images/faces/10.jpg')}}\" /&gt;"
                                }'&gt;Alex&lt;/option&gt;
&lt;option value="4" data-hs-select-option='{
                                "description": "samia_samia",
                                "icon": "&lt;img class=\"inline-block rounded-full\" src=\"{{asset('build/assets/images/faces/2.jpg')}}\" /&gt;"
                                }'&gt;Samia&lt;/option&gt;
&lt;/select&gt;

&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m7 15 5 5 5-5" /&gt;&lt;path d="m7 9 5-5 5 5" /&gt;&lt;/svg&gt;
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
                                    Select Custom template with icons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <div class="relative">
                                    <select data-hs-select='{
                                      "placeholder": "Select option...",
                                      "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex items-center text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                      "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                      "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"font-semibold text-gray-800 dark:text-gray-200\" data-title></div></div><div class=\"mt-1.5 text-sm text-gray-500 dark:text-white/70\" data-description></div></div>"
                                    }' class="hidden">
                                        <option value="">Choose</option>
                                        <option value="1" selected data-hs-select-option='{
                                        "description": "Visible to anyone who van view your content.",
                                        "icon": "<svg class=\"flex-shrink-0 size-4 text-gray-800 dark:text-gray-200\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-globe-2\"><path d=\"M21.54 15H17a2 2 0 0 0-2 2v4.54\"/><path d=\"M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17\"/><path d=\"M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05\"/><circle cx=\"12\" cy=\"12\" r=\"10\"/></svg>"
                                      }'>Anyone</option>

                                        <option value="2" data-hs-select-option='{
                                        "description": "Only visible to you.",
                                        "icon": "<svg class=\"flex-shrink-0 size-4 text-gray-800 dark:text-gray-200\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-lock\"><rect width=\"18\" height=\"11\" x=\"3\" y=\"11\" rx=\"2\" ry=\"2\"/><path d=\"M7 11V7a5 5 0 0 1 10 0v4\"/></svg>"
                                      }'>Only you</option>
                                    </select>

                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="relative"&gt;
&lt;select data-hs-select='{
                                "placeholder": "Select option...",
                                "toggleTag": "&lt;button type=\"button\"&gt;&lt;span&gt; class=\"me-2\" data-icon&gt;&lt;/span&gt;&lt;span&gt; class=\"text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/span&gt;&lt;/button&gt;",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex items-center text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                "optionTemplate": "&lt;div&gt;&lt;div class=\"flex items-center\"&gt;&lt;div&gt; class=\"me-2\" data-icon&gt;&lt;/div&gt;&lt;div&gt; class=\"font-semibold text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/div&gt;&lt;/div&gt;&lt;div&gt; class=\"mt-1.5 text-sm text-gray-500 dark:text-white/70\" data-description&gt;&lt;/div&gt;&lt;/div&gt;"
                            }' class="hidden"&gt;
&lt;option&gt; value=""&gt;Choose&lt;/option&gt;
&lt;option&gt; value="1" selected data-hs-select-option='{
                                "description": "Visible to anyone who van view your content.",
                                "icon": "&lt;svg class=\"flex-shrink-0 size-4 text-gray-800 dark:text-gray-200\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-globe-2\"&gt;&lt;path d=\"M21.54 15H17a2 2 0 0 0-2 2v4.54\"/&gt;&lt;path d=\"M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17\"/&gt;&lt;path d=\"M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05\"/&gt;&lt;circle cx=\"12\" cy=\"12\" r=\"10\"/&gt;&lt;/svg&gt;"
                                }'&gt;Anyone&lt;/option&gt;

&lt;option&gt; value="2" data-hs-select-option='{
                                "description": "Only visible to you.",
                                "icon": "&lt;svg class=\"flex-shrink-0 size-4 text-gray-800 dark:text-gray-200\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-lock\"&gt;&lt;rect width=\"18\" height=\"11\" x=\"3\" y=\"11\" rx=\"2\" ry=\"2\"/&gt;&lt;path d=\"M7 11V7a5 5 0 0 1 10 0v4\"/&gt;&lt;/svg&gt;"
                                }'&gt;Only you&lt;/option&gt;
&lt;/select&gt;

&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
    stroke-linecap="round" stroke-linejoin="round"&gt;
    &lt;path d="m7 15 5 5 5-5" /&gt;
    &lt;path d="m7 9 5-5 5 5" /&gt;
&lt;/svg&gt;
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
                                    Select Custom template with avatars
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <div class="relative">
                                    <select data-hs-select='{
                                      "placeholder": "Select assignee",
                                      "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none items-center hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                      "dropdownClasses": "mt-2 max-h-72 p-1 space-y-0.5 z-20 w-full bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                      "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                      "optionTemplate": "<div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div><div class=\"hs-selected:font-semibold text-sm text-gray-800 dark:text-gray-200\" data-title></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>"
                                    }' class="hidden">
                                        <option value="">Choose</option>
                                        <option selected value="1"
                                            data-hs-select-option='{
                                        "icon": "<img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/10.jpg')}}\" alt=\"James Collins\" />"}'>
                                            James Collins
                                        </option>

                                        <option value="2"
                                            data-hs-select-option='{
                                        "icon": "<img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/1.jpg')}}\" alt=\"Amanda Harvey\" />"}'>
                                            Amanda Harvey
                                        </option>

                                        <option value="3"
                                            data-hs-select-option='{
                                        "icon": "<img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/11.jpg')}}\" alt=\"Costa Quinn\" />"}'>
                                            Costa Quinn
                                        </option>
                                    </select>

                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="relative"&gt;
&lt;select data-hs-select='{
                                "placeholder": "Select assignee",
                                "toggleTag": "&lt;button type=\"button\"&gt;&lt;span class=\"me-2\" data-icon&gt;&lt;/span&gt;&lt;span class=\"text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/span&gt;&lt;/button&gt;",
                                "toggleClasses": "hs-select-disabled:pointer-events-none items-center hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                "dropdownClasses": "mt-2 max-h-72 p-1 space-y-0.5 z-20 w-full bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                "optionTemplate": "&lt;div class=\"flex items-center\"&gt;&lt;div class=\"me-2\" data-icon&gt;&lt;/div&gt;&lt;div&gt;&lt;div class=\"hs-selected:font-semibold text-sm text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=\"ms-auto\"&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"&gt;&lt;path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;"
                            }' class="hidden"&gt;
&lt;option value=""&gt;Choose&lt;/option&gt;
&lt;option selected value="1"
    data-hs-select-option='{
                                "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/10.jpg')}}\" alt=\"James Collins\" /&gt;"}'&gt;
    James Collins
&lt;/option&gt;

&lt;option value="2"
    data-hs-select-option='{
                                "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/1.jpg')}}\" alt=\"Amanda Harvey\" /&gt;"}'&gt;
    Amanda Harvey
&lt;/option&gt;

&lt;option value="3"
    data-hs-select-option='{
                                "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/11.jpg')}}\" alt=\"Costa Quinn\" /&gt;"}'&gt;
    Costa Quinn
&lt;/option&gt;
&lt;/select&gt;

&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
    stroke-linecap="round" stroke-linejoin="round"&gt;
    &lt;path d="m7 15 5 5 5-5" /&gt;
    &lt;path d="m7 9 5-5 5 5" /&gt;
&lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Select Sizes
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="space-y-3">
                                    <!-- Select -->
                                    <div class="relative">
                                        <select data-hs-select='{
                                            "placeholder": "Select option...",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 px-3 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                            "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                        }' class="hidden">
                                            <option value="">Choose</option>
                                            <option>Name</option>
                                            <option>Email address</option>
                                            <option>Description</option>
                                            <option>User ID</option>
                                        </select>
                                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5" />
                                                <path d="m7 9 5-5 5 5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- End Select -->

                                    <!-- Select -->
                                    <div class="relative">
                                        <select data-hs-select='{
                                            "placeholder": "Select option...",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                            "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                            }' class="hidden">
                                            <option value="">Choose</option>
                                            <option>Name</option>
                                            <option>Email address</option>
                                            <option>Description</option>
                                            <option>User ID</option>
                                        </select>
                                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5" />
                                                <path d="m7 9 5-5 5 5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- End Select -->

                                    <!-- Select -->
                                    <div class="relative">
                                        <select data-hs-select='{
                                            "placeholder": "Select option...",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative sm:p-5 p-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                            "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                            }' class="hidden">
                                            <option value="">Choose</option>
                                            <option>Name</option>
                                            <option>Email address</option>
                                            <option>Description</option>
                                            <option>User ID</option>
                                        </select>
                                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5" />
                                                <path d="m7 9 5-5 5 5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- End Select -->
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="space-y-3"&gt;
&lt;div class="relative"&gt;
&lt;select data-hs-select='{
    "placeholder": "Select option...",
    "toggleTag": "&lt;button&gt; type=\"button\"&gt;&lt;/button&gt;",
    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 px-3 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
    "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
    "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span&gt; data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
}' class="hidden"&gt;
&lt;option&gt; value=""&gt;Choose&lt;/option&gt;
&lt;option&gt;Name&lt;/option&gt;
&lt;option&gt;Email address&lt;/option&gt;
&lt;option&gt;Description&lt;/option&gt;
&lt;option&gt;User ID&lt;/option&gt;
&lt;/select&gt;
&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m7 15 5 5 5-5"/&gt;&lt;path d="m7 9 5-5 5 5"/&gt;&lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;

&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
&lt;select data-hs-select='{
    "placeholder": "Select option...",
    "toggleTag": "&lt;button&gt; type=\"button\"&gt;&lt;/button&gt;",
    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
    "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
    "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span&gt; data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
    }' class="hidden"&gt;
    &lt;option&gt; value=""&gt;Choose&lt;/option&gt;
    &lt;option&gt;Name&lt;/option&gt;
    &lt;option&gt;Email address&lt;/option&gt;
    &lt;option&gt;Description&lt;/option&gt;
    &lt;option&gt;User ID&lt;/option&gt;
&lt;/select&gt;
&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
    &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m7 15 5 5 5-5"/&gt;&lt;path d="m7 9 5-5 5 5"/&gt;&lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;

&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
&lt;select data-hs-select='{
    "placeholder": "Select option...",
    "toggleTag": "&lt;button&gt; type=\"button\"&gt;&lt;/button&gt;",
    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative sm:p-5 p-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
    "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
    "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span&gt; data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
    }' class="hidden"&gt;
    &lt;option&gt; value=""&gt;Choose&lt;/option&gt;
    &lt;option&gt;Name&lt;/option&gt;
    &lt;option&gt;Email address&lt;/option&gt;
    &lt;option&gt;Description&lt;/option&gt;
    &lt;option&gt;User ID&lt;/option&gt;
&lt;/select&gt;
&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
    &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m7 15 5 5 5-5"/&gt;&lt;path d="m7 9 5-5 5 5"/&gt;&lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Select Disabled
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Select -->
                                <div class="relative">
                                    <select data-hs-select='{
                                      "placeholder": "Select option...",
                                      "toggleTag": "<button type=\"button\"></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                      "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                      "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                    }' class="hidden" disabled>
                                        <option value="">Choose</option>
                                        <option>Name</option>
                                        <option>Email address</option>
                                        <option>Description</option>
                                        <option>User ID</option>
                                    </select>

                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="relative"&gt;
&lt;select data-hs-select='{
"placeholder": "Select option...",
"toggleTag": "&lt;button type=\"button\"&gt;&lt;/button&gt;",
"toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
"dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
"optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
"optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
}' class="hidden" disabled&gt;
&lt;option value=""&gt;Choose&lt;/option&gt;
&lt;option&gt;Name&lt;/option&gt;
&lt;option&gt;Email address&lt;/option&gt;
&lt;option&gt;Description&lt;/option&gt;
&lt;option&gt;User ID&lt;/option&gt;
&lt;/select&gt;

&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m7 15 5 5 5-5"/&gt;&lt;path d="m7 9 5-5 5 5"/&gt;&lt;/svg&gt;
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
                                    Select Validation states
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-4">
                                <div>
                                    <!-- Select -->
                                    <div class="relative">
                                        <select data-hs-select='{
                                        "placeholder": "Select option...",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-danger rounded-sm text-start text-sm focus:border-danger focus:ring-danger before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:text-white/70 dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-primary",
                                        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                        }' class="hidden">
                                            <option value="">Choose</option>
                                            <option>Name</option>
                                            <option>Email address</option>
                                            <option>Description</option>
                                            <option>User ID</option>
                                        </select>

                                        <div class="absolute top-1/2 end-8 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-4 text-danger"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10" />
                                                <line x1="12" x2="12" y1="8" y2="12" />
                                                <line x1="12" x2="12.01" y1="16" y2="16" />
                                            </svg>
                                        </div>

                                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5" />
                                                <path d="m7 9 5-5 5 5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- End Select -->
                                    <p class="text-xs text-danger mt-2">Please select a valid state.</p>
                                </div>

                                <div>
                                    <!-- Select -->
                                    <div class="relative">
                                        <select data-hs-select='{
                                        "placeholder": "Select option...",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-success rounded-sm text-start text-sm focus:border-success focus:ring-success before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:text-white/70 dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-primary",
                                        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                        }' class="hidden">
                                            <option value="">Choose</option>
                                            <option>Name</option>
                                            <option>Email address</option>
                                            <option>Description</option>
                                            <option>User ID</option>
                                        </select>

                                        <div class="absolute inset-y-0 end-8 flex items-center pointer-events-none">
                                            <svg class="flex-shrink-0 size-4 text-success"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12" />
                                            </svg>
                                        </div>

                                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5" />
                                                <path d="m7 9 5-5 5 5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- End Select -->
                                    <p class="text-xs text-success mt-2">Looks good!</p>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
&lt;select data-hs-select='{
        "placeholder": "Select option...",
        "toggleTag": "&lt;button type=\"button\"&gt;&lt;/button&gt;",
        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-danger rounded-sm text-start text-sm focus:border-danger focus:ring-danger before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
        "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
        }' class="hidden"&gt;
    &lt;option value=""&gt;Choose&lt;/option&gt;
    &lt;option&gt;Name&lt;/option&gt;
    &lt;option&gt;Email address&lt;/option&gt;
    &lt;option&gt;Description&lt;/option&gt;
    &lt;option&gt;User ID&lt;/option&gt;
&lt;/select&gt;

&lt;div class="absolute top-1/2 end-8 -translate-y-1/2"&gt;
    &lt;svg class="flex-shrink-0 size-4 text-danger" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;circle cx="12" cy="12" r="10" /&gt;
        &lt;line x1="12" x2="12" y1="8" y2="12" /&gt;
        &lt;line x1="12" x2="12.01" y1="16" y2="16" /&gt;
    &lt;/svg&gt;
&lt;/div&gt;

&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
    &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round"&gt;
        &lt;path d="m7 15 5 5 5-5" /&gt;
        &lt;path d="m7 9 5-5 5 5" /&gt;
    &lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;
&lt;p class="text-xs text-danger mt-2"&gt;Please select a valid state.&lt;/p&gt;
&lt;/div&gt;

&lt;div&gt;
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
    &lt;select data-hs-select='{
        "placeholder": "Select option...",
        "toggleTag": "&lt;button type=\"button\"&gt;&lt;/button&gt;",
        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-success rounded-sm text-start text-sm focus:border-success focus:ring-success before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
        "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
        "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
        }' class="hidden"&gt;
        &lt;option value=""&gt;Choose&lt;/option&gt;
        &lt;option&gt;Name&lt;/option&gt;
        &lt;option&gt;Email address&lt;/option&gt;
        &lt;option&gt;Description&lt;/option&gt;
        &lt;option&gt;User ID&lt;/option&gt;
    &lt;/select&gt;

    &lt;div class="absolute inset-y-0 end-8 flex items-center pointer-events-none"&gt;
        &lt;svg class="flex-shrink-0 size-4 text-success" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;polyline points="20 6 9 17 4 12" /&gt;
        &lt;/svg&gt;
    &lt;/div&gt;

    &lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
        &lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;path d="m7 15 5 5 5-5" /&gt;
            &lt;path d="m7 9 5-5 5 5" /&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;
&lt;p class="text-xs text-success mt-2"&gt;Looks good!&lt;/p&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Select Validation states
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="max-w-sm">
                                    <!-- Select -->
                                    <select id="hs-select-with-dynamic-options" data-hs-select='{
                                      "placeholder": "Select assignee",
                                      "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-neutral-200 \" data-title></span></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                                      "dropdownClasses": "mt-2 max-h-72 p-1 space-y-0.5 z-20 w-full bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                      "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                      "optionTemplate": "<div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div><div class=\"hs-selected:font-semibold text-sm text-gray-800 dark:text-neutral-200 \" data-title></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>",
                                      "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                    }' class="hidden">
                                      <option value="">Choose</option>
                                      <option value="1" data-hs-select-option='{
                                        "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80\" alt=\"James Collins\" />"}'>
                                        James Collins
                                      </option>
                                      <option value="2" data-hs-select-option='{
                                        "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80\" alt=\"Amanda Harvey\" />"}'>
                                        Amanda Harvey
                                      </option>
                                      <option value="3" data-hs-select-option='{
                                        "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"https://images.unsplash.com/photo-1601935111741-ae98b2b230b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2.5&w=320&h=320&q=80\" alt=\"Costa Quinn\" />"}'>
                                        Costa Quinn
                                      </option>
                                    </select>
                                    <!-- End Select -->
                                  </div>
                                  
                                  <div class="flex flex-wrap gap-2">
                                    <button type="button" id="add-option" class="py-1 px-2 inline-flex my-2 bg-primary/10 text-primary items-center gap-x-1 text-sm rounded-md border border-transparent  disabled:opacity-50 disabled:pointer-events-none">
                                      <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                      </svg>
                                      Add one option
                                    </button>
                                    <button type="button" id="add-options" class="py-1 px-2 my-2 bg-primary/10 text-primary inline-flex items-center gap-x-1 text-sm rounded-md border border-transparent disabled:opacity-50 disabled:pointer-events-none">
                                      <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                      </svg>
                                      Add three options
                                    </button>
                                  </div>
                                  
                                  <div class="flex flex-wrap gap-2">
                                    <button type="button" id="remove-option" class="py-2 px-2 inline-flex items-center gap-x-1 text-sm rounded-md border border-gray-200 bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-800">
                                      <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                      </svg>
                                      Remove value 4
                                    </button>
                                    <button type="button" id="remove-options" class="py-2 px-2 inline-flex items-center gap-x-1 text-sm rounded-md border border-gray-200 bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-800">
                                      <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                      </svg>
                                      Remove values 5, 6, 7
                                    </button>
                                  </div>
                                  
                                  <div id="add-remove-options-tab-preview-js-markup">
                                    <script>
                                      window.addEventListener('load', () => requestAnimationFrame(() => {
                                        const addOptionBtn = document.querySelector('#add-option');
                                        const addOptionsBtn = document.querySelector('#add-options');
                                        const removeOptionBtn = document.querySelector('#remove-option');
                                        const removeOptionsBtn = document.querySelector('#remove-options');
                                        const select = window.HSSelect.getInstance('#hs-select-with-dynamic-options');
                                  
                                        addOptionBtn.addEventListener('click', () => {
                                          select.addOption({
                                            title: "Jannete Atkinson",
                                            val: "4",
                                            selected: true,
                                            options: {
                                              icon: `<img class="inline-block size-4 rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Jannete Atkinson" />`
                                            }
                                          });
                                        });
                                  
                                        addOptionsBtn.addEventListener('click', () => {
                                          select.addOption([
                                            {
                                              title: "Kyle Peterson",
                                              val: "5",
                                              options: {
                                                icon: `<img class="inline-block size-4 rounded-full" src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Kyle Peterson" />`
                                              }
                                            },
                                            {
                                              title: "Brad Cooper",
                                              val: "6",
                                              selected: true,
                                              options: {
                                                icon: `<img class="inline-block size-4 rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Brad Cooper" />`
                                              }
                                            },
                                            {
                                              title: "Linette Johnson",
                                              val: "7"
                                            }
                                          ]);
                                        });
                                  
                                        removeOptionBtn.addEventListener('click', () => {
                                          select.removeOption("4");
                                        });
                                  
                                        removeOptionsBtn.addEventListener('click', () => {
                                          select.removeOption(["5", "6", "7"]);
                                        });
                                      }));
                                    </script>
                                  </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="max-w-sm space-y-3"&gt;
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
&lt;select id="hs-select-with-dynamic-options" data-hs-select='{
    "placeholder": "Select assignee",
    "toggleTag": "&lt;button type=\"button\"&gt;&lt;span class=\"me-2\" data-icon&gt;&lt;/span&gt;&lt;span class=\"text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/span&gt;&lt;/button&gt;",
    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
    "dropdownClasses": "mt-2 max-h-72 p-1 space-y-0.5 z-20 w-full bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
    "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
    "optionTemplate": "&lt;div class=\"flex items-center\"&gt;&lt;div class=\"me-2\" data-icon&gt;&lt;/div&gt;&lt;div&gt;&lt;div class=\"hs-selected:font-semibold text-sm text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=\"ms-auto\"&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"&gt;&lt;path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;"
    }' class="hidden"&gt;
&lt;option value=""&gt;Choose&lt;/option&gt;
&lt;option value="1"
    data-hs-select-option='{
    "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/1.jpg')}}\" alt=\"James Collins\" /&gt;"}'&gt;
    James Collins
&lt;/option&gt;
&lt;option value="2"
    data-hs-select-option='{
    "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/2.jpg')}}\" alt=\"Amanda Harvey\" /&gt;"}'&gt;
    Amanda Harvey
&lt;/option&gt;
&lt;option value="3"
    data-hs-select-option='{
    "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/10.jpg')}}\" alt=\"Costa Quinn\" /&gt;"}'&gt;
    Costa Quinn
&lt;/option&gt;
&lt;/select&gt;
&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
    stroke-linecap="round" stroke-linejoin="round"&gt;
    &lt;path d="m7 15 5 5 5-5" /&gt;
    &lt;path d="m7 9 5-5 5 5" /&gt;
&lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;

&lt;div class="flex flex-wrap gap-2"&gt;
&lt;button type="button" id="add-option"
class="py-1 px-2 text-sm font-medium rounded-md border border-success/30 bg-success/10 dark:bg-success/25 text-success dark:text-success hover:bg-success/20 dark:hover:bg-success/50"&gt;
Add Option
&lt;/button&gt;
&lt;button type="button" id="add-options"
class="py-1 px-2 text-sm font-medium rounded-md border border-success/30 bg-success/10 dark:bg-success/25 text-success dark:text-success hover:bg-success/20 dark:hover:bg-success/50"&gt;
Add three Options
&lt;/button&gt;
&lt;button type="button" id="remove-option"
class="py-1 px-2 text-sm font-medium rounded-md border dark:border-white/10 bg-gray-100 dark:bg-gray-800/25 text-gray-600 dark:text-white hover:bg-gray-200 dark:hover:bg-bodybg/50"&gt;
Remove Option with value 4
&lt;/button&gt;
&lt;button type="button" id="remove-options"
class="py-1 px-2 text-sm font-medium rounded-md border dark:border-white/10 bg-gray-100 dark:bg-gray-800/25 text-gray-600 dark:text-white hover:bg-gray-200 dark:hover:bg-bodybg/50"&gt;
Remove Options with values 5, 6, 7
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
                                    Select Validation states
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="space-y-3">
                                    <div id="validation-target" class="mb-4">
                                        <!-- Select -->
                                        <div class="relative">
                                            <select data-hs-select='{
                                            "placeholder": "Select option...",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border hs-error:border-danger hs-success:border-success rounded-sm text-start text-sm hs-error:focus:border-danger hs-success:focus:border-success hs-error:focus:ring-danger hs-success:focus:ring-success before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:border-white/10 dark:focus:ring-primary",
                                            "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                            }' class="hidden">
                                                <option value="">Choose</option>
                                                <option>Name</option>
                                                <option>Email address</option>
                                                <option>Description</option>
                                                <option>User ID</option>
                                            </select>
                                            <div class="hidden hs-error:block absolute top-1/2 end-8 -translate-y-1/2">
                                                <svg class="flex-shrink-0 size-4 text-danger"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <line x1="12" x2="12" y1="8" y2="12" />
                                                    <line x1="12" x2="12.01" y1="16" y2="16" />
                                                </svg>
                                            </div>
                                            <div
                                                class="hidden hs-success:flex absolute inset-y-0 end-8 items-center pointer-events-none">
                                                <svg class="flex-shrink-0 size-4 text-success"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="20 6 9 17 4 12" />
                                                </svg>
                                            </div>
                                            <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                                <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m7 15 5 5 5-5" />
                                                    <path d="m7 9 5-5 5 5" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- End Select -->
                                        <p class="hidden hs-error:block text-sm text-danger mt-2">Please select a valid
                                            state.</p>
                                        <p class="hidden hs-success:flex text-sm text-success mt-2">Looks good!</p>
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <button type="button" id="trigger-success"
                                            class="py-1 px-2 text-sm font-medium rounded-md border border-success/30 bg-success/10 dark:bg-success/25 text-success dark:text-success hover:bg-success/20 dark:hover:bg-success/50">
                                            Success
                                        </button>
                                        <button type="button" id="trigger-error"
                                            class="py-1 px-2 text-sm font-medium rounded-md border border-danger/30 bg-danger/10 dark:bg-danger/25 text-danger dark:text-danger hover:bg-danger/20 dark:hover:bg-danger/50">
                                            Error
                                        </button>
                                        <button type="button" id="trigger-clear"
                                            class="py-1 px-2 text-sm font-medium rounded-md border dark:border-white/10 bg-gray-100 dark:bg-gray-800/25 text-gray-600 dark:text-white hover:bg-gray-200 dark:hover:bg-bodybg/50">
                                            Clear
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="space-y-3"&gt;
&lt;div id="validation-target" class="mb-4"&gt;
&lt;div class="relative"&gt;
&lt;select data-hs-select='{
                            "placeholder": "Select option...",
                            "toggleTag": "&lt;button&gt; type=\"button\"&gt;&lt;/button&gt;",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border hs-error:border-danger hs-success:border-success rounded-sm text-start text-sm hs-error:focus:border-danger hs-success:focus:border-success hs-error:focus:ring-danger hs-success:focus:ring-success before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:border-white/10 dark:focus:ring-primary",
                            "dropdownClasses": "mt-2 z-40 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                            "optionTemplate": "&lt;div class=\"flex justify-between items-center w-full\"&gt;&lt;span&gt; data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-primary\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"&gt;&lt;polyline points=\"20 6 9 17 4 12\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
                            }' class="hidden"&gt;
&lt;option&gt; value=""&gt;Choose&lt;/option&gt;
&lt;option&gt;Name&lt;/option&gt;
&lt;option&gt;Email address&lt;/option&gt;
&lt;option&gt;Description&lt;/option&gt;
&lt;option&gt;User ID&lt;/option&gt;
&lt;/select&gt;
&lt;div class="hidden hs-error:block absolute top-1/2 end-8 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-4 text-danger" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
    stroke-linejoin="round"&gt;
    &lt;circle cx="12" cy="12" r="10" /&gt;
    &lt;line x1="12" x2="12" y1="8" y2="12" /&gt;
    &lt;line x1="12" x2="12.01" y1="16" y2="16" /&gt;
&lt;/svg&gt;
&lt;/div&gt;
&lt;div class="hidden hs-success:flex absolute inset-y-0 end-8 items-center pointer-events-none"&gt;
&lt;svg class="flex-shrink-0 size-4 text-success" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
    stroke-linejoin="round"&gt;
    &lt;polyline points="20 6 9 17 4 12" /&gt;
&lt;/svg&gt;
&lt;/div&gt;
&lt;div class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
    stroke-linecap="round" stroke-linejoin="round"&gt;
    &lt;path d="m7 15 5 5 5-5" /&gt;
    &lt;path d="m7 9 5-5 5 5" /&gt;
&lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt; class="hidden hs-error:block text-sm text-danger mt-2"&gt;Please select a valid state.&lt;/p&gt;
&lt;p&gt; class="hidden hs-success:flex text-sm text-success mt-2"&gt;Looks good!&lt;/p&gt;
&lt;/div&gt;
&lt;div class="flex flex-wrap gap-2"&gt;
&lt;button&gt; type="button" id="trigger-success"
class="py-1 px-2 text-sm font-medium rounded-md border border-success/30 bg-success/10 dark:bg-success/25 text-success dark:text-success hover:bg-success/20 dark:hover:bg-success/50"&gt;
Success
&lt;/button&gt;
&lt;button&gt; type="button" id="trigger-error"
class="py-1 px-2 text-sm font-medium rounded-md border border-danger/30 bg-danger/10 dark:bg-danger/25 text-danger dark:text-danger hover:bg-danger/20 dark:hover:bg-danger/50"&gt;
Error
&lt;/button&gt;
&lt;button&gt; type="button" id="trigger-clear"
class="py-1 px-2 text-sm font-medium rounded-md border dark:border-white/10 bg-gray-100 dark:bg-gray-800/25 text-gray-600 dark:text-white hover:bg-gray-200 dark:hover:bg-bodybg/50"&gt;
Clear
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
                                    Destroy/Reinitialize Select
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="max-w-sm space-y-3">
                                    <!-- Select -->
                                    <div class="relative">
                                        <select id="hs-select-temporary" data-hs-select='{
                                            "placeholder": "Select assignee",
                                            "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                            "dropdownClasses": "mt-2 max-h-72 p-1 space-y-0.5 z-20 w-full bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                            "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                            "optionTemplate": "<div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div><div class=\"hs-selected:font-semibold text-sm text-gray-800 dark:text-gray-200\" data-title></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>"
                                            }' class="hidden">
                                            <option value="">Choose</option>
                                            <option value="1"
                                                data-hs-select-option='{
                                            "icon": "<img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/1.jpg')}}\" alt=\"James Collins\" />"}'>
                                                James Collins
                                            </option>
                                            <option value="2"
                                                data-hs-select-option='{
                                            "icon": "<img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/2.jpg')}}\" alt=\"Amanda Harvey\" />"}'>
                                                Amanda Harvey
                                            </option>
                                            <option value="3"
                                                data-hs-select-option='{
                                            "icon": "<img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/10.jpg')}}\" alt=\"Costa Quinn\" />"}'>
                                                Costa Quinn
                                            </option>
                                        </select>
                                        <div id="hs-select-temporary-toggle-icon"
                                            class="absolute top-1/2 end-3 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5" />
                                                <path d="m7 9 5-5 5 5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- End Select -->
                                    <div class="flex flex-wrap gap-2">
                                        <button type="button" id="destroy"
                                            class="py-1 px-2 text-sm font-medium rounded-md border border-danger/30 bg-danger/10 dark:bg-danger/25 text-danger dark:text-danger hover:bg-danger/20 dark:hover:bg-danger/50">
                                            Destroy Select
                                        </button>
                                        <button type="button" id="reinit"
                                            class="py-1 px-2 text-sm font-medium rounded-md border dark:border-white/10 bg-gray-100 dark:bg-gray-800/25 text-gray-600 dark:text-white hover:bg-gray-200 dark:hover:bg-bodybg/50">
                                            Reinitialize Select
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="max-w-sm space-y-3"&gt;
&lt;!-- Select --&gt;
&lt;div class="relative"&gt;
&lt;select id="hs-select-temporary" data-hs-select='{
    "placeholder": "Select assignee",
    "toggleTag": "&lt;button type=\"button\"&gt;&lt;span&gt; class=\"me-2\" data-icon&gt;&lt;/span&gt;&lt;span&gt; class=\"text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/span&gt;&lt;/button&gt;",
    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
    "dropdownClasses": "mt-2 max-h-72 p-1 space-y-0.5 z-20 w-full bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
    "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
    "optionTemplate": "&lt;div class=\"flex items-center\"&gt;&lt;div&gt; class=\"me-2\" data-icon&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt; class=\"hs-selected:font-semibold text-sm text-gray-800 dark:text-gray-200\" data-title&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=\"ms-auto\"&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"&gt;&lt;path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;"
    }' class="hidden"&gt;
&lt;option&gt; value=""&gt;Choose&lt;/option&gt;
&lt;option&gt; value="1"
    data-hs-select-option='{
    "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/1.jpg')}}\" alt=\"James Collins\" /&gt;"}'&gt;
    James Collins
&lt;/option&gt;
&lt;option&gt; value="2"
    data-hs-select-option='{
    "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/2.jpg')}}\" alt=\"Amanda Harvey\" /&gt;"}'&gt;
    Amanda Harvey
&lt;/option&gt;
&lt;option&gt; value="3"
    data-hs-select-option='{
    "icon": "&lt;img class=\"inline-block size-6 rounded-full\" src=\"{{asset('build/assets/images/faces/10.jpg')}}\" alt=\"Costa Quinn\" /&gt;"}'&gt;
    Costa Quinn
&lt;/option&gt;
&lt;/select&gt;
&lt;div id="hs-select-temporary-toggle-icon" class="absolute top-1/2 end-3 -translate-y-1/2"&gt;
&lt;svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
    stroke-linecap="round" stroke-linejoin="round"&gt;
    &lt;path d="m7 15 5 5 5-5" /&gt;
    &lt;path d="m7 9 5-5 5 5" /&gt;
&lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Select --&gt;
&lt;div class="flex flex-wrap gap-2"&gt;
&lt;button&gt; type="button" id="destroy"
class="py-1 px-2 text-sm font-medium rounded-md border border-danger/30 bg-danger/10 dark:bg-danger/25 text-danger dark:text-danger hover:bg-danger/20 dark:hover:bg-danger/50"&gt;
Destroy Select
&lt;/button&gt;
&lt;button&gt; type="button" id="reinit"
class="py-1 px-2 text-sm font-medium rounded-md border dark:border-white/10 bg-gray-100 dark:bg-gray-800/25 text-gray-600 dark:text-white hover:bg-gray-200 dark:hover:bg-bodybg/50"&gt;
Reinitialize Select
&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
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
        

        <!-- Select JS -->
        @vite('resources/assets/js/select.js')

  
@endsection