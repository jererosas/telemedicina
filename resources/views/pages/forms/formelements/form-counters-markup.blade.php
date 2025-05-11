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
                                <li class="breadcrumb-item active" aria-current="page">Counters & Markup</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Counters & Markup</h1>
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
                <h6 class="text-base mb-4">Counters:</h6>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xxl:col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Checkbox Toggle Count
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show Code<i
                                            class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Toggle -->
                                <div class="flex justify-end mb-3">
                                    <div id="toggle-count" class="p-0.5 inline-block bg-gray-100 rounded-sm dark:bg-bodybg2">
                                    <label for="toggle-count-monthly" class="relative inline-block py-2 px-3">
                                        <span class="inline-block relative z-10 text-sm font-medium text-gray-800 cursor-pointer dark:text-gray-200">
                                        Monthly
                                        </span>
                                        <input id="toggle-count-monthly" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent !border-0 !bg-transparent dark:bg-bodybg bg-none text-transparent rounded-sm cursor-pointer before:absolute before:inset-0 before:size-full before:rounded-sm focus:ring-offset-0 checked:before:bg-white checked:before:shadow-sm checked:bg-none focus:ring-transparent dark:checked:before:bg-bodybg dark:focus:ring-offset-transparent">
                                    </label>
                                    <label for="toggle-count-annual" class="relative inline-block py-2 px-3 dark:bg-bodybg2">
                                        <span class="inline-block relative z-10 text-sm font-medium text-gray-800 cursor-pointer dark:text-gray-200">
                                        Annual
                                        </span>
                                        <input id="toggle-count-annual" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent !border-0 !bg-transparent bg-none text-transparent rounded-sm cursor-pointer before:absolute before:inset-0 before:size-full before:rounded-sm focus:ring-offset-0 checked:before:bg-white checked:before:shadow-sm checked:bg-none focus:ring-transparent dark:checked:before:bg-bodybg dark:focus:ring-offset-transparent" checked>
                                    </label>
                                    </div>
                                </div>
                                <!-- End Toggle -->

                                <!-- Card Grid -->
                                <div class="grid sm:grid-cols-3 lg:items-center border border-inputborder rounded-sm dark:border-white/10">
                                    <!-- Card -->
                                    <div class="flex flex-col p-4">
                                    <h4 class="text-gray-800 mb-1 dark:text-white">Startup</h4>
                                    <div class="flex gap-x-1">
                                        <span class="text-xl font-normal text-gray-800 dark:text-white">$</span>
                                        <p data-hs-toggle-count='{
                                            "target": "#toggle-count",
                                            "min": 19,
                                            "max": 29
                                        }' class="text-gray-800 font-semibold text-3xl dark:text-white">
                                        19
                                        </p>
                                    </div>
                                    </div>
                                    <!-- End Card -->
                                
                                    <!-- Card -->
                                    <div class="flex flex-col p-4">
                                    <div class="flex justify-between">
                                        <h4 class="text-gray-800 mb-1 dark:text-gray-200">Team</h4>
                                    </div>
                                    <div class="flex gap-x-1">
                                        <span class="text-xl font-normal text-gray-800 dark:text-gray-200">$</span>
                                        <p data-hs-toggle-count='{
                                            "target": "#toggle-count",
                                            "min": 89,
                                            "max": 99
                                        }' class="text-gray-800 font-semibold text-3xl dark:text-gray-200">
                                        89
                                        </p>
                                    </div>
                                    </div>
                                    <!-- End Card -->
                                
                                    <!-- Card -->
                                    <div class="flex flex-col p-4">
                                    <h4 class="text-gray-800 mb-1 dark:text-gray-200">Enterprise</h4>
                                    <div class="flex gap-x-1">
                                        <span class="text-xl font-normal text-gray-800 dark:text-gray-200">$</span>
                                        <p data-hs-toggle-count='{
                                            "target": "#toggle-count",
                                            "min": 129,
                                            "max": 149
                                        }' class="text-gray-800 font-semibold text-3xl dark:text-gray-200">
                                        129
                                        </p>
                                    </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Card Grid -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Toggle --&gt;
&lt;div class="flex justify-end mb-3"&gt;
&lt;div id="toggle-count" class="p-0.5 inline-block bg-gray-100 rounded-sm dark:bg-bodybg2"&gt;
&lt;label for="toggle-count-monthly" class="relative inline-block py-2 px-3"&gt;
    &lt;span class="inline-block relative z-10 text-sm font-medium text-gray-800 cursor-pointer dark:text-gray-200"&gt;
    Monthly
    &lt;/span&gt;
    &lt;input id="toggle-count-monthly" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent bg-transparent dark:bg-bodybg bg-none text-transparent rounded-sm cursor-pointer before:absolute before:inset-0 before:size-full before:rounded-sm focus:ring-offset-0 checked:before:bg-white checked:before:shadow-sm checked:bg-none focus:ring-transparent dark:checked:before:bg-bodybg dark:focus:ring-offset-transparent"&gt;
&lt;/label&gt;
&lt;label for="toggle-count-annual" class="relative inline-block py-2 px-3 dark:bg-bodybg2"&gt;
    &lt;span class="inline-block relative z-10 text-sm font-medium text-gray-800 cursor-pointer dark:text-gray-200"&gt;
    Annual
    &lt;/span&gt;
    &lt;input id="toggle-count-annual" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent bg-transparent bg-none text-transparent rounded-sm cursor-pointer before:absolute before:inset-0 before:size-full before:rounded-sm focus:ring-offset-0 checked:before:bg-white checked:before:shadow-sm checked:bg-none focus:ring-transparent dark:checked:before:bg-bodybg2 dark:focus:ring-offset-transparent" checked&gt;
&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Toggle --&gt;

&lt;!-- Card Grid --&gt;
&lt;div class="grid grid-cols-3 lg:items-center border border-inputborder rounded-sm dark:border-white/10"&gt;
&lt;!-- Card --&gt;
&lt;div class="flex flex-col p-4"&gt;
&lt;h4 class="text-gray-800 mb-1 dark:text-white"&gt;Startup&lt;/h4&gt;
&lt;div class="flex gap-x-1"&gt;
    &lt;span class="text-xl font-normal text-gray-800 dark:text-white"&gt;$&lt;/span&gt;
    &lt;p data-hs-toggle-count='{
        "target": "#toggle-count",
        "min": 19,
        "max": 29
    }' class="text-gray-800 font-semibold text-3xl dark:text-white"&gt;
    19
    &lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Card --&gt;

&lt;!-- Card --&gt;
&lt;div class="flex flex-col p-4"&gt;
&lt;div class="flex justify-between"&gt;
    &lt;h4 class="text-gray-800 mb-1 dark:text-gray-200"&gt;Team&lt;/h4&gt;
&lt;/div&gt;
&lt;div class="flex gap-x-1"&gt;
    &lt;span class="text-xl font-normal text-gray-800 dark:text-gray-200"&gt;$&lt;/span&gt;
    &lt;p data-hs-toggle-count='{
        "target": "#toggle-count",
        "min": 89,
        "max": 99
    }' class="text-gray-800 font-semibold text-3xl dark:text-gray-200"&gt;
    89
    &lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Card --&gt;

&lt;!-- Card --&gt;
&lt;div class="flex flex-col p-4"&gt;
&lt;h4 class="text-gray-800 mb-1 dark:text-gray-200"&gt;Enterprise&lt;/h4&gt;
&lt;div class="flex gap-x-1"&gt;
    &lt;span class="text-xl font-normal text-gray-800 dark:text-gray-200"&gt;$&lt;/span&gt;
    &lt;p data-hs-toggle-count='{
        "target": "#toggle-count",
        "min": 129,
        "max": 149
    }' class="text-gray-800 font-semibold text-3xl dark:text-gray-200"&gt;
    129
    &lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Card --&gt;
&lt;/div&gt;
&lt;!-- End Card Grid --&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Switch Toggle Count
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show Code<i
                                            class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Toggle -->
                                <div class="flex justify-center mb-4">
                                    <div>
                                        <label for="toggle-count-switch" class="inline-block p-2">
                                            <span class="inline-block text-sm text-gray-800 cursor-pointer dark:text-white">
                                                Monthly
                                            </span>
                                        </label>
                                        <input id="toggle-count-switch" name="toggle-count-switch" type="checkbox" class="ti-switch">
                                        <label for="toggle-count-switch" class="inline-block p-2">
                                            <span class="inline-block text-sm text-gray-800 cursor-pointer dark:text-white">
                                                Annual
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <!-- End Toggle -->

                                <!-- Grid -->
                                <div class="grid sm:grid-cols-3 lg:items-center border border-inputborder rounded-sm dark:border-white/10">
                                    <!-- Card -->
                                    <div class="flex flex-col p-4">
                                        <h4 class="text-gray-800 mb-1 dark:text-white">Startup</h4>
                                        <div class="flex gap-x-1">
                                        <span class="text-xl font-normal text-gray-800 dark:text-white">$</span>
                                        <p data-hs-toggle-count='{
                                            "target": "#toggle-count-switch",
                                            "min": 19,
                                            "max": 29
                                            }' class="text-gray-800 font-semibold text-3xl dark:text-white">
                                            19
                                        </p>
                                        </div>
                                    </div>
                                    <!-- End Card -->

                                    <!-- Card -->
                                    <div class="flex flex-col p-4">
                                        <div class="flex justify-between">
                                        <h4 class="text-gray-800 mb-1 dark:text-white">Team</h4>
                                        </div>
                                        <div class="flex gap-x-1">
                                        <span class="text-xl font-normal text-gray-800 dark:text-white">$</span>
                                        <p data-hs-toggle-count='{
                                            "target": "#toggle-count-switch",
                                            "min": 89,
                                            "max": 99
                                            }' class="text-gray-800 font-semibold text-3xl dark:text-white">
                                            89
                                        </p>
                                        </div>
                                    </div>
                                    <!-- End Card -->

                                    <!-- Card -->
                                    <div class="flex flex-col p-4">
                                        <h4 class="text-gray-800 mb-1 dark:text-white">Enterprise</h4>
                                        <div class="flex gap-x-1">
                                        <span class="text-xl font-normal text-gray-800 dark:text-white">$</span>
                                        <p data-hs-toggle-count='{
                                            "target": "#toggle-count-switch",
                                            "min": 129,
                                            "max": 149
                                            }' class="text-gray-800 font-semibold text-3xl dark:text-white">
                                            129
                                        </p>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Grid -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Toggle --&gt;
&lt;div class="flex justify-center mb-4"&gt;
    &lt;div&gt;
        &lt;label for="toggle-count-switch" class="inline-block p-2"&gt;
            &lt;span&gt; class="inline-block text-sm text-gray-800 cursor-pointer dark:text-white"&gt;
                Monthly
            &lt;/span&gt;
        &lt;/label&gt;
        &lt;input id="toggle-count-switch" name="toggle-count-switch" type="checkbox" class="ti-switch"&gt;
        &lt;label for="toggle-count-switch" class="inline-block p-2"&gt;
            &lt;span&gt; class="inline-block text-sm text-gray-800 cursor-pointer dark:text-white"&gt;
                Annual
            &lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Toggle --&gt;

&lt;!-- Grid --&gt;
&lt;div class="grid grid-cols-3 lg:items-center border border-inputborder rounded-sm dark:border-white/10"&gt;
    &lt;!-- Card --&gt;
    &lt;div class="flex flex-col p-4"&gt;
        &lt;h4&gt; class="text-gray-800 mb-1 dark:text-white"&gt;Startup&lt;/h4&gt;
        &lt;div class="flex gap-x-1"&gt;
        &lt;span&gt; class="text-xl font-normal text-gray-800 dark:text-white"&gt;$&lt;/span&gt;
        &lt;p&gt; data-hs-toggle-count='{
            "target": "#toggle-count-switch",
            "min": 19,
            "max": 29
            }' class="text-gray-800 font-semibold text-3xl dark:text-white"&gt;
            19
        &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- End Card --&gt;

    &lt;!-- Card --&gt;
    &lt;div class="flex flex-col p-4"&gt;
        &lt;div class="flex justify-between"&gt;
        &lt;h4&gt; class="text-gray-800 mb-1 dark:text-white"&gt;Team&lt;/h4&gt;
        &lt;/div&gt;
        &lt;div class="flex gap-x-1"&gt;
        &lt;span&gt; class="text-xl font-normal text-gray-800 dark:text-white"&gt;$&lt;/span&gt;
        &lt;p&gt; data-hs-toggle-count='{
            "target": "#toggle-count-switch",
            "min": 89,
            "max": 99
            }' class="text-gray-800 font-semibold text-3xl dark:text-white"&gt;
            89
        &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- End Card --&gt;

    &lt;!-- Card --&gt;
    &lt;div class="flex flex-col p-4"&gt;
        &lt;h4&gt; class="text-gray-800 mb-1 dark:text-white"&gt;Enterprise&lt;/h4&gt;
        &lt;div class="flex gap-x-1"&gt;
        &lt;span&gt; class="text-xl font-normal text-gray-800 dark:text-white"&gt;$&lt;/span&gt;
        &lt;p&gt; data-hs-toggle-count='{
            "target": "#toggle-count-switch",
            "min": 129,
            "max": 149
            }' class="text-gray-800 font-semibold text-3xl dark:text-white"&gt;
            129
        &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- End Card --&gt;
&lt;/div&gt;
&lt;!-- End Grid --&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <h6 class="text-base mb-4">Markup:</h6>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Basic Markup
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show Code<i
                                            class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Input Group -->
                                <div id="hs-wrapper-for-copy" class="space-y-3">
                                    <input id="hs-content-for-copy" type="text" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-inputborder rounded-sm text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:ring-primary" placeholder="Enter Name">
                                </div>

                                <p class="mt-3 text-end">
                                    <button type="button" data-hs-copy-markup='{
                                        "targetSelector": "#hs-content-for-copy",
                                        "wrapperSelector": "#hs-wrapper-for-copy",
                                        "limit": 10
                                    }' id="hs-copy-content" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-inputborder bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-bgdark dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary">
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                    Add Name
                                    </button>
                                </p>
                                <!-- End Input Group -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Input Group --&gt;
&lt;div id="hs-wrapper-for-copy" class="space-y-3"&gt;
    &lt;input id="hs-content-for-copy" type="text" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-inputborder rounded-sm text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:ring-primary" placeholder="Enter Name"&gt;
&lt;/div&gt;

&lt;p class="mt-3 text-end"&gt;
    &lt;button type="button" data-hs-copy-markup='{
        "targetSelector": "#hs-content-for-copy",
        "wrapperSelector": "#hs-wrapper-for-copy",
        "limit": 10
    }' id="hs-copy-content" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-inputborder bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-bgdark dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary"&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
    Add Name
    &lt;/button&gt;
&lt;/p&gt;
&lt;!-- End Input Group --&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Select Markup
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show Code<i
                                            class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="hs-wrapper-select-for-copy" class="space-y-3">
                                    <!-- Select -->
                                    <div id="hs-content-select-for-copy" class="relative">
                                    <select data-hs-select='{
                                        "placeholder": "Select option...",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                        "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                        "optionClasses": "cursor-pointer py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:!bg-light dark:text-gray-200 dark:focus:bg-bodybg",
                                        "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
                                        }'>
                                        <option value="">Select Option ...</option>
                                        <option>Name</option>
                                        <option>Email address</option>
                                        <option>Description</option>
                                        <option>User ID</option>
                                    </select>

                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg>
                                    </div>
                                    </div>
                                    <!-- End Select -->
                                </div>
                                <p class="mt-3 text-end">
                                    <button type="button" data-hs-copy-markup='{
                                            "targetSelector": "#hs-content-select-for-copy",
                                            "wrapperSelector": "#hs-wrapper-select-for-copy",
                                            "limit": 3
                                        }' id="hs-copy-select-content" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-inputborder bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-bgdark dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary">
                                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                        Add Option
                                    </button>
                                </p>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div id="hs-wrapper-select-for-copy" class="space-y-3"&gt;
&lt;!-- Select --&gt;
&lt;div id="hs-content-select-for-copy" class="relative"&gt;
&lt;select data-hs-select='{
    "placeholder": "Select option...",
    "toggleTag": "&lt;button&gt; type=\"button\"&gt;&lt;/button&gt;",
    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-inputborder rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-inputborder rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
    "optionClasses": "cursor-pointer py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
    "optionTemplate": "&lt;div class=\"flex justify-between w-full\"&gt;&lt;span&gt; data-title&gt;&lt;/span&gt;&lt;span class=\"hidden hs-selected:block\"&gt;&lt;svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"&gt;&lt;path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;"
    }'&gt;
    &lt;option&gt; value=""&gt;&lt;/option&gt;
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
&lt;/div&gt;
&lt;p class="mt-3 text-end"&gt;
&lt;button type="button" data-hs-copy-markup='{
        "targetSelector": "#hs-content-select-for-copy",
        "wrapperSelector": "#hs-wrapper-select-for-copy",
        "limit": 3
    }' id="hs-copy-select-content" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-inputborder bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-bgdark dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary"&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
    Add Option
&lt;/button&gt;
&lt;/p&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

            </div>
        </div>                   
        <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')


        <!-- Markup JS -->
        @vite('resources/assets/js/markup.js')
        

@endsection