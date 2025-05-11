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
                                <li class="breadcrumb-item active" aria-current="page">Button Group</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Button Group</h1>
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

                <!--ROW-START-->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Basic example
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="inline-flex rounded-md shadow-sm me-5">
                                    <button type="button"
                                        class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                        Year
                                    </button>
                                    <button type="button"
                                        class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                        Month
                                    </button>
                                    <button type="button"
                                        class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                        Date
                                    </button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="inline-flex rounded-md shadow-sm me-5"&gt;
    &lt;button type="button"
        class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Year
    &lt;/button&gt;
    &lt;button type="button"
        class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Month
    &lt;/button&gt;
    &lt;button type="button"
        class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Date
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Mixed style
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-group !gap-0 !p-0" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="ti-btn-group py-3 px-4 border !border-danger ti-btn-danger btn-wave">Year</button>
                                    <button type="button" class="ti-btn-group py-3 px-4 border !border-warning ti-btn-warning btn-wave">Month</button>
                                    <button type="button" class="ti-btn-group py-3 px-4 border !border-success ti-btn-success btn-wave">Date</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-group" role="group" aria-label="Basic mixed styles example"&gt;
    &lt;button type="button" class="ti-btn ti-btn-danger btn-wave"&gt;Year&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-warning btn-wave"&gt;Month&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-success btn-wave"&gt;Date&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <h5 class="box-title">Button group break</h5>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="flex flex-col md:inline-flex md:flex-row rounded-sm shadow-sm">
                                    <button type="button"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px -ms-px first:rounded-t-sm last:rounded-b-sm sm:first:rounded-s-sm sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-sm border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                        Item 1
                                    </button>
                                    <button type="button"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px -ms-px first:rounded-t-sm last:rounded-b-sm sm:first:rounded-s-sm sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-sm border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                        Item 2
                                    </button>
                                    <button type="button"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px -ms-px first:rounded-t-sm last:rounded-b-sm sm:first:rounded-s-sm sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-sm border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                        Item 3
                                    </button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="flex flex-col md:inline-flex md:flex-row rounded-sm shadow-sm"&gt;
    &lt;button type="button"
        class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px -ms-px first:rounded-t-sm last:rounded-b-sm sm:first:rounded-s-sm sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-sm border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Item 1
    &lt;/button&gt;
    &lt;button type="button"
        class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px -ms-px first:rounded-t-sm last:rounded-b-sm sm:first:rounded-s-sm sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-sm border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Item 2
    &lt;/button&gt;
    &lt;button type="button"
        class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px -ms-px first:rounded-t-sm last:rounded-b-sm sm:first:rounded-s-sm sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-sm border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Item 3
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-6 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Sizing
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button"
                                                class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                                Code<i
                                                    class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body space-y-2">
                                        <div class="inline-flex rounded-md shadow-sm me-6">
                                            <button type="button"
                                                class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                                Small
                                            </button>
                                            <button type="button"
                                                class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                                Small
                                            </button>
                                            <button type="button"
                                                class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                                Small
                                            </button>
                                        </div>

                                        <div class="inline-flex rounded-md shadow-sm me-6">
                                            <button type="button"
                                                class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  sm:p-4 p-3">
                                                Default
                                            </button>
                                            <button type="button"
                                                class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  sm:p-4 p-3">
                                                Default
                                            </button>
                                            <button type="button"
                                                class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  sm:p-4 p-3">
                                                Default
                                            </button>
                                        </div>

                                        <div class="inline-flex rounded-md shadow-sm">
                                            <button type="button"
                                                class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  p-[1.3125rem]">
                                                Large
                                            </button>
                                            <button type="button"
                                                class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  p-[1.3125rem]">
                                                Large
                                            </button>
                                            <button type="button"
                                                class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  p-[1.3125rem]">
                                                Large
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="inline-flex rounded-md shadow-sm me-6"&gt;
    &lt;button type="button"
        class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Small
    &lt;/button&gt;
    &lt;button type="button"
        class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Small
    &lt;/button&gt;
    &lt;button type="button"
        class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
        Small
    &lt;/button&gt;
&lt;/div&gt;

&lt;div class="inline-flex rounded-md shadow-sm me-6"&gt;
    &lt;button type="button"
        class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  sm:p-4 p-3"&gt;
        Default
    &lt;/button&gt;
    &lt;button type="button"
        class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  sm:p-4 p-3"&gt;
        Default
    &lt;/button&gt;
    &lt;button type="button"
        class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  sm:p-4 p-3"&gt;
        Default
    &lt;/button&gt;
&lt;/div&gt;

&lt;div class="inline-flex rounded-md shadow-sm"&gt;
    &lt;button type="button"
        class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  p-[1.3125rem]"&gt;
        Large
    &lt;/button&gt;
    &lt;button type="button"
        class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  p-[1.3125rem]"&gt;
        Large
    &lt;/button&gt;
    &lt;button type="button"
        class="ti-btn-group bg-white dark:bg-bodybg border  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10  p-[1.3125rem]"&gt;
        Large
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                                        <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Vertical variation
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button"
                                                class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                                Code<i
                                                    class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="max-w-xs flex flex-col rounded-sm shadow-sm">
                                            <button type="button"
                                                class="focus-visible:outline-none focus:!outline-none py-2 px-3 inline-flex justify-center items-center gap-2 rounded-t-md border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                                Item 1
                                            </button>
                                            <button type="button"
                                                class="-mt-px focus-visible:outline-none focus:!outline-none py-2 px-3 inline-flex justify-center items-center gap-2 border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                                Item 2
                                            </button>
                                            <button type="button"
                                                class="-mt-px focus-visible:outline-none focus:!outline-none py-2 px-3 inline-flex justify-center items-center gap-2 rounded-b-md border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                                Item 3
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="max-w-xs flex flex-col rounded-sm shadow-sm"&gt;
&lt;button type="button"
    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-t-md border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
    Item 1
&lt;/button&gt;
&lt;button type="button"
    class="-mt-px py-2 px-3 inline-flex justify-center items-center gap-2 border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
    Item 2
&lt;/button&gt;
&lt;button type="button"
    class="-mt-px py-2 px-3 inline-flex justify-center items-center gap-2 rounded-b-md border font-medium bg-white dark:bg-bodybg  align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
    Item 3
&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                        <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                  <h5 class="box-title">Basic Button Group</h5>
                                  <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                                </div>
                                <div class="box-body">
                                  <div class="inline-flex rounded-md shadow-sm mb-5 me-5">
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                      Year
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                      Month
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 ">
                                      Date
                                    </button>
                                  </div>
                                  <div class="inline-flex rounded-md shadow-sm mb-5 me-5">
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-primary border-white/10 dark:border-white/10">
                                      Year
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-primary border-white/10 dark:border-white/10">
                                      Month
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-primary border-white/10 dark:border-white/10">
                                      Date
                                    </button>
                                  </div>
                                  <div class="inline-flex rounded-md shadow-sm mb-5 me-5">
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-secondary border-white/10 dark:border-white/10">
                                      Year
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-secondary border-white/10 dark:border-white/10">
                                      Month
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-secondary border-white/10 dark:border-white/10">
                                      Date
                                    </button>
                                  </div>
                                  <div class="inline-flex rounded-md shadow-sm mb-5 me-5">
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-warning border-white/10 dark:border-white/10">
                                      Year
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-warning border-white/10 dark:border-white/10">
                                      Month
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-warning border-white/10 dark:border-white/10">
                                      Date
                                    </button>
                                  </div>
                                  <div class="inline-flex rounded-md shadow-sm mb-5 me-5">
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-danger border-white/10 dark:border-white/10">
                                      Year
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-danger border-white/10 dark:border-white/10">
                                      Month
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-danger border-white/10 dark:border-white/10">
                                      Date
                                    </button>
                                  </div>
                                  <div class="inline-flex rounded-md shadow-sm mb-5 me-5">
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-info border-white/10 dark:border-white/10">
                                      Year
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-info border-white/10 dark:border-white/10">
                                      Month
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-info border-white/10 dark:border-white/10">
                                      Date
                                    </button>
                                  </div>
                                  <div class="inline-flex rounded-md shadow-sm mb-0">
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-success border-white/10 dark:border-white/10">
                                      Year
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-success border-white/10 dark:border-white/10">
                                      Month
                                    </button>
                                    <button type="button" class="ti-btn-group btn-wave py-3 px-4 border ti-btn-success border-white/10 dark:border-white/10">
                                      Date
                                    </button>
                                  </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="inline-flex rounded-md shadow-sm mb-5 me-5"&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
    Year
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
    Month
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg  hover:bg-gray-50 focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 "&gt;
    Date
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="inline-flex rounded-md shadow-sm mb-5 me-5"&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary border-white/10 dark:border-white/10"&gt;
    Year
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary border-white/10 dark:border-white/10"&gt;
    Month
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary border-white/10 dark:border-white/10"&gt;
    Date
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="inline-flex rounded-md shadow-sm mb-5 me-5"&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary border-white/10 dark:border-white/10"&gt;
    Year
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary border-white/10 dark:border-white/10"&gt;
    Month
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary border-white/10 dark:border-white/10"&gt;
    Date
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="inline-flex rounded-md shadow-sm mb-5 me-5"&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning border-white/10 dark:border-white/10"&gt;
    Year
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning border-white/10 dark:border-white/10"&gt;
    Month
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning border-white/10 dark:border-white/10"&gt;
    Date
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="inline-flex rounded-md shadow-sm mb-5 me-5"&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger border-white/10 dark:border-white/10"&gt;
    Year
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger border-white/10 dark:border-white/10"&gt;
    Month
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger border-white/10 dark:border-white/10"&gt;
    Date
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="inline-flex rounded-md shadow-sm mb-5 me-5"&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info border-white/10 dark:border-white/10"&gt;
    Year
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info border-white/10 dark:border-white/10"&gt;
    Month
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info border-white/10 dark:border-white/10"&gt;
    Date
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="inline-flex rounded-md shadow-sm mb-0"&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success border-white/10 dark:border-white/10"&gt;
    Year
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success border-white/10 dark:border-white/10"&gt;
    Month
&lt;/button&gt;
&lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success border-white/10 dark:border-white/10"&gt;
    Date
&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                     <!-- Prism Code -->
                    </div>
                </div>
                        </div>
                   </div>
                </div>
                <!--ROW-END-->
            </div>
        </div>
        <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection