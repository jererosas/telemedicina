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
                                    <li class="breadcrumb-item active" aria-current="page">Pagination</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Pagination</h1>
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
                    <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Basic Pagination
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <nav class="overflow-auto">
                                    <ul class="ti-pagination">
                                        <li><a class="page-link disabled" href="javascript:void(0);"> Previous </a></li>
                                        <li><a class="page-link" href="javascript:void(0);" aria-current="page">1</a>
                                        </li>
                                        <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li><a class="page-link" href="javascript:void(0);"> Next </a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="Page navigation"&gt;
        &lt;ul class="ti-pagination  mb-0"&gt;
            &lt;li class="page-item disabled"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;Previous&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;Next&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination With Icons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <nav aria-label="Page navigation">
                                    <ul class="ti-pagination mb-0">
                                        <li class="page-item">
                                            <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"
                                                aria-label="Previous">
                                                <span aria-hidden="true"><i
                                                        class="rtl:rotate-180 bx bx-chevron-left"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link  px-3 py-[0.375rem]" href="javascript:void(0);"
                                                aria-label="Next">
                                                <span aria-hidden="true"><i
                                                        class="rtl:rotate-180 bx bx-chevron-right"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="Page navigation"&gt;
        &lt;ul class="ti-pagination mb-0"&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);" aria-label="Previous"&gt;
                    &lt;span aria-hidden="true"&gt;&lt;i class="rtl:rotate-180 bx bx-chevron-left"&gt;&lt;/i&gt;&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link  px-3 py-[0.375rem]" href="javascript:void(0);" aria-label="Next"&gt;
                    &lt;span aria-hidden="true"&gt;&lt;i class="rtl:rotate-180 bx bx-chevron-right"&gt;&lt;/i&gt;&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Sizing
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap justify-between gap-2">
                                <nav aria-label="...">
                                    <ul class="ti-pagination pagination-sm mb-0">
                                        <li class="page-item " aria-current="page">
                                            <span class="page-link  active px-3 py-[0.375rem]">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">3</a></li>
                                    </ul>
                                </nav>
                                <nav aria-label="...">
                                    <ul class="ti-pagination mb-0">
                                        <li class="page-item " aria-current="page">
                                            <span class="page-link  active px-3 py-[0.375rem]">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">3</a></li>
                                    </ul>
                                </nav>
                                <nav aria-label="...">
                                    <ul class="ti-pagination pagination-lg mb-0">
                                        <li class="page-item " aria-current="page">
                                            <span class="page-link active px-3 py-[0.375rem]">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">3</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="..."&gt;
        &lt;ul class="ti-pagination pagination-sm mb-0"&gt;
            &lt;li class="page-item " aria-current="page"&gt;
                &lt;span class="page-link  active px-3 py-[0.375rem]"&gt;1&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
    &lt;nav aria-label="..."&gt;
        &lt;ul class="ti-pagination mb-0"&gt;
            &lt;li class="page-item " aria-current="page"&gt;
                &lt;span class="page-link  active px-3 py-[0.375rem]"&gt;1&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
    &lt;nav aria-label="..."&gt;
        &lt;ul class="ti-pagination pagination-lg mb-0"&gt;
            &lt;li class="page-item " aria-current="page"&gt;
                &lt;span class="page-link active px-3 py-[0.375rem]"&gt;1&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2  -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Center &amp; Right Aligned Pagination
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <nav aria-label="Page navigation" class="mb-4">
                                    <ul class="ti-pagination justify-center">
                                        <li class="page-item disabled">
                                            <a class="page-link px-3 py-[0.375rem]">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav aria-label="Page navigation">
                                    <ul class="ti-pagination sm:justify-end justify-center mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link px-3 py-[0.375rem]">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="Page navigation" class="mb-4"&gt;
        &lt;ul class="ti-pagination justify-center"&gt;
            &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link px-3 py-[0.375rem]"&gt;Previous&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
    &lt;nav aria-label="Page navigation"&gt;
        &lt;ul class="ti-pagination sm:justify-end justify-center mb-0"&gt;
            &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link px-3 py-[0.375rem]"&gt;Previous&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Active and disabled states
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap">
                                <nav aria-label="..." class="me-4 sm:mb-0 mb-2">
                                    <ul class="ti-pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link px-3 py-[0.375rem]">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item " aria-current="page">
                                            <a class="page-link active px-3 py-[0.375rem]"
                                                href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav aria-label="...">
                                    <ul class="ti-pagination">
                                        <li class="page-item disabled">
                                            <span class="page-link px-3 py-[0.375rem]">Previous</span>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item " aria-current="page">
                                            <span class="page-link px-3 active py-[0.375rem]">2</span>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="..." class="me-4"&gt;
        &lt;ul class="ti-pagination"&gt;
            &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link px-3 py-[0.375rem]"&gt;Previous&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item " aria-current="page"&gt;
                &lt;a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);"&gt;2&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
    &lt;nav aria-label="..."&gt;
        &lt;ul class="ti-pagination"&gt;
            &lt;li class="page-item disabled"&gt;
                &lt;span class="page-link px-3 py-[0.375rem]"&gt;Previous&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item " aria-current="page"&gt;
                &lt;span class="page-link px-3 active py-[0.375rem]"&gt;2&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);"&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2  -->

                <!-- Start:: row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style-1
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <nav aria-label="Page navigation" class="pagination-style-1">
                                    <ul class="ti-pagination mb-0">
                                        <li class="page-item disabled rtl:rotate-180">
                                            <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                <i class="ri-arrow-left-s-line align-middle"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item "><a class="page-link active"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">21</a>
                                        </li>
                                        <li class="page-item rtl:rotate-180">
                                            <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                <i class="ri-arrow-right-s-line align-middle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="Page navigation" class="pagination-style-1"&gt;
        &lt;ul class="ti-pagination mb-0"&gt;
            &lt;li class="page-item disabled rtl:rotate-180"&gt;
                &lt;a aria-label="anchor" class="page-link" href="javascript:void(0);"&gt;
                    &lt;i class="ri-arrow-left-s-line align-middle"&gt;&lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item "&gt;&lt;a class="page-link active" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a aria-label="anchor" class="page-link" href="javascript:void(0);"&gt;
                    &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;21&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item rtl:rotate-180"&gt;
                &lt;a aria-label="anchor" class="page-link" href="javascript:void(0);"&gt;
                    &lt;i class="ri-arrow-right-s-line align-middle"&gt;&lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style-2
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <nav aria-label="Page navigation" class="pagination-style-2">
                                    <ul class="ti-pagination mb-0 flex-wrap">
                                        <li class="page-item disabled">
                                            <a class="page-link px-3 py-[0.375rem] !border-0"
                                                href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active px-3 py-[0.375rem] !border-0"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem] !border-0"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a aria-label="anchor" class="page-link px-3 py-[0.375rem] !border-0"
                                                href="javascript:void(0);">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem] !border-0"
                                                href="javascript:void(0);">17</a></li>
                                        <li class="page-item">
                                            <a class="page-link px-3 py-[0.375rem] !text-primary !border-0"
                                                href="javascript:void(0);">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="Page navigation" class="pagination-style-2"&gt;
        &lt;ul class="ti-pagination mb-0 flex-wrap"&gt;
            &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link px-3 py-[0.375rem] !border-0" href="javascript:void(0);"&gt;
                    Prev
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item active"&gt;&lt;a class="page-link px-3 py-[0.375rem] !border-0" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem] !border-0" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a aria-label="anchor" class="page-link px-3 py-[0.375rem] !border-0" href="javascript:void(0);"&gt;
                    &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link px-3 py-[0.375rem] !border-0" href="javascript:void(0);"&gt;17&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link px-3 py-[0.375rem] !text-primary !border-0" href="javascript:void(0);"&gt;
                    next
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style-3
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <nav aria-label="Page navigation" class="pagination-style-3">
                                    <ul class="ti-pagination mb-0 flex-wrap">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item "><a class="page-link active"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link !text-primary" href="javascript:void(0);">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="Page navigation" class="pagination-style-3"&gt;
        &lt;ul class="ti-pagination mb-0 flex-wrap"&gt;
            &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link" href="javascript:void(0);"&gt;
                    Prev
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item "&gt;&lt;a class="page-link active" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a aria-label="anchor" class="page-link" href="javascript:void(0);"&gt;
                    &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;16&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link !text-primary" href="javascript:void(0);"&gt;
                    next
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style-4
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="ti-pagination mb-0 flex-wrap">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item "><a class="page-link active"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link !text-primary" href="javascript:void(0);">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav aria-label="Page navigation" class="pagination-style-4"&gt;
        &lt;ul class="ti-pagination mb-0 flex-wrap"&gt;
            &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link" href="javascript:void(0);"&gt;
                    Prev
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item "&gt;&lt;a class="page-link active" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a aria-label="anchor" class="page-link" href="javascript:void(0);"&gt;
                    &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;16&lt;/a&gt;&lt;/li&gt;
            &lt;li class="page-item"&gt;
                &lt;a class="page-link !text-primary" href="javascript:void(0);"&gt;
                    next
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:!col-span-6 md:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 5
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination -->
                                <nav class="flex items-center gap-x-1">
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                        <span aria-hidden="true" class="sr-only">Previous</span>
                                    </button>
                                    <div class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                    </div>
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <span aria-hidden="true" class="sr-only">Next</span>
                                        <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                    </button>
                                </nav>
                                <!-- End Pagination -->

                                <!-- Pagination -->
                                <nav class="flex items-center gap-x-1">
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                        <span aria-hidden="true" class="sr-only">Previous</span>
                                    </button>
                                    <div class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"
                                            aria-current="page">1</button>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                    </div>
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <span aria-hidden="true" class="sr-only">Next</span>
                                        <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                    </button>
                                </nav>
                                <!-- End Pagination -->

                                <!-- Pagination -->
                                <nav class="flex items-center -space-x-px">
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                        <span aria-hidden="true" class="sr-only">Previous</span>
                                    </button>
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                        aria-current="page">1</button>
                                    <div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                        <button type="button"
                                            class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                            <span class="group-hover:hidden text-xs">•••</span>
                                            <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m6 17 5-5-5-5" />
                                                <path d="m13 17 5-5-5-5" />
                                            </svg>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                role="tooltip">
                                                Next 4 pages
                                            </span>
                                        </button>
                                    </div>
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <span aria-hidden="true" class="sr-only">Next</span>
                                        <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                    </button>
                                </nav>
                                <!-- End Pagination -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;nav class="flex items-center gap-x-1"&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="m15 18-6-6 6-6" /&gt;
    &lt;/svg&gt;
    &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
&lt;/button&gt;
&lt;div class="flex items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
        aria-current="page"&gt;1&lt;/button&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
    &lt;div class="hs-tooltip ti-main-tooltip"&gt;
        &lt;button type="button"
            class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
            &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
            &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"&gt;
                &lt;path d="m6 17 5-5-5-5" /&gt;
                &lt;path d="m13 17 5-5-5-5" /&gt;
            &lt;/svg&gt;
            &lt;span
                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                role="tooltip"&gt;
                Next 4 pages
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
&lt;/div&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
    &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="m9 18 6-6-6-6" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;
&lt;/nav&gt;
&lt;nav class="flex items-center gap-x-1"&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="m15 18-6-6 6-6" /&gt;
    &lt;/svg&gt;
    &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
&lt;/button&gt;
&lt;div class="flex items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"
        aria-current="page"&gt;1&lt;/button&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
    &lt;div class="hs-tooltip ti-main-tooltip"&gt;
        &lt;button type="button"
            class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
            &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
            &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"&gt;
                &lt;path d="m6 17 5-5-5-5" /&gt;
                &lt;path d="m13 17 5-5-5-5" /&gt;
            &lt;/svg&gt;
            &lt;span
                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                role="tooltip"&gt;
                Next 4 pages
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
&lt;/div&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
    &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="m9 18 6-6-6-6" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;
&lt;/nav&gt;
&lt;nav class="flex items-center -space-x-px"&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="m15 18-6-6 6-6" /&gt;
    &lt;/svg&gt;
    &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
    aria-current="page"&gt;1&lt;/button&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
&lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
    &lt;button type="button"
        class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
        &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
        &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;path d="m6 17 5-5-5-5" /&gt;
            &lt;path d="m13 17 5-5-5-5" /&gt;
        &lt;/svg&gt;
        &lt;span
            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
            role="tooltip"&gt;
            Next 4 pages
        &lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
&lt;button type="button"
    class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
    &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
    &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;path d="m9 18 6-6-6-6" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;
&lt;/nav&gt;                                    
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 md:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 6
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination Wrapper -->
                                <div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->

                                    <!-- Go To Page -->
                                    <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                        <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                            Go to
                                        </span>
                                        <input type="number"
                                            class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                            page
                                        </span>
                                    </div>
                                    <!-- End Go To Page -->
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1">
                                    <!-- Pagination -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->

                                    <!-- Go To Page -->
                                    <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                        <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                            Go to
                                        </span>
                                        <input type="number"
                                            class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                            page
                                        </span>
                                    </div>
                                    <!-- End Go To Page -->
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1">
                                    <!-- Pagination -->
                                    <nav class="flex items-center -space-x-px">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div
                                            class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->

                                    <!-- Go To Page -->
                                    <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                        <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                            Go to
                                        </span>
                                        <input type="number"
                                            class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                            page
                                        </span>
                                    </div>
                                    <!-- End Go To Page -->
                                </div>
                                <!-- End Pagination Wrapper -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1"&gt;
&lt;nav class="flex items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="flex items-center gap-x-1"&gt;
        &lt;button&gt; type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button&gt; type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button&gt; type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span&gt;
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button&gt; type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;

&lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
    &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
        Go to
    &lt;/span&gt;
    &lt;input type="number"
        class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
        &gt;
    &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
        page
    &lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1"&gt;
&lt;nav class="flex items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="flex items-center gap-x-1"&gt;
        &lt;button&gt; type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button&gt; type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button&gt; type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span&gt;
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button&gt; type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;

&lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
    &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
        Go to
    &lt;/span&gt;
    &lt;input type="number"
        class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
        &gt;
    &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
        page
    &lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1"&gt;
&lt;nav class="flex items-center -space-x-px"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
        aria-current="page"&gt;1&lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
    &lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
        &lt;button type="button"
            class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
            &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
            &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"&gt;
                &lt;path d="m6 17 5-5-5-5" /&gt;
                &lt;path d="m13 17 5-5-5-5" /&gt;
            &lt;/svg&gt;
            &lt;span&gt;
                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                role="tooltip"&gt;
                Next 4 pages
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;button&gt; type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;

&lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
    &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
        Go to
    &lt;/span&gt;
    &lt;input type="number"
        class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
        &gt;
    &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
        page
    &lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
                                    </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 md:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 7
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination Wrapper -->
                                <div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->

                                    <!-- Dropdown -->
                                    <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                        <button id="hs-pagination-dropdown" type="button"
                                            class="hs-dropdown-toggle !py-1.5 !px-2 ti-dropdown-toggle">
                                            5 page
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="hs-pagination-dropdown">
                                            <button type="button" class="ti-dropdown-item w-full justify-between">
                                                5 page
                                                <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                            </button>
                                            <button type="button" class="ti-dropdown-item w-full">
                                                8 page
                                            </button>
                                            <button type="button" class="ti-dropdown-item w-full">
                                                10 page
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Dropdown -->
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1">
                                    <!-- Pagination -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->

                                    <!-- Dropdown -->
                                    <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                        <button id="hs-pagination-dropdown2" type="button"
                                            class="hs-dropdown-toggle !py-1.5 !px-2 ti-dropdown-toggle">
                                            5 page
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="hs-pagination-dropdown2">
                                            <button type="button" class="ti-dropdown-item w-full justify-between">
                                                5 page
                                                <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                            </button>
                                            <button type="button" class="ti-dropdown-item w-full">
                                                8 page
                                            </button>
                                            <button type="button" class="ti-dropdown-item w-full">
                                                10 page
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Dropdown -->
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1">
                                    <!-- Pagination -->
                                    <nav class="flex items-center -space-x-px">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div
                                            class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->

                                    <!-- Dropdown -->
                                    <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                        <button id="hs-pagination-dropdown3" type="button"
                                            class="hs-dropdown-toggle !py-1.5 !px-2 ti-dropdown-toggle">
                                            5 page
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="hs-pagination-dropdown3">
                                            <button type="button" class="ti-dropdown-item w-full justify-between">
                                                5 page
                                                <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                            </button>
                                            <button type="button" class="ti-dropdown-item w-full">
                                                8 page
                                            </button>
                                            <button type="button" class="ti-dropdown-item w-full">
                                                10 page
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Dropdown -->
                                </div>
                                <!-- End Pagination Wrapper -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;

    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown" type="button" class="hs-dropdown-toggle !py-1.5 !px-2 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;

    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown2" type="button" class="hs-dropdown-toggle !py-1.5 !px-2 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown2"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="grid justify-center sm:flex sm:justify-between sm:items-center gap-1"&gt;

    &lt;nav class="flex items-center -space-x-px"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;

    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown3" type="button" class="hs-dropdown-toggle !py-1.5 !px-2 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown3"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                    </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 md:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 8
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination -->
                                <nav class="flex justify-between items-center gap-x-1">
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                        <span aria-hidden="true" class="hidden sm:block">Previous</span>
                                    </button>
                                    <div class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">2</button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">3</button>
                                    </div>
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <span aria-hidden="true" class="hidden sm:block">Next</span>
                                        <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                    </button>
                                </nav>
                                <!-- End Pagination -->

                                <!-- Pagination -->
                                <nav class="flex justify-between items-center gap-x-1">
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                        <span aria-hidden="true" class="hidden sm:block">Previous</span>
                                    </button>
                                    <div class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"
                                            aria-current="page">1</button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">2</button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">3</button>
                                    </div>
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <span aria-hidden="true" class="hidden sm:block">Next</span>
                                        <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                    </button>
                                </nav>
                                <!-- End Pagination -->

                                <!-- Pagination -->
                                <nav class="flex justify-between items-center gap-x-1">
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                        <span aria-hidden="true" class="hidden sm:block">Previous</span>
                                    </button>
                                    <div class="flex items-center gap-x-1">
                                        <span
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10">1</span>
                                        <span
                                            class="min-h-[38px] flex justify-center items-center text-gray-500 py-2 px-1.5 text-sm dark:text-white">of</span>
                                        <span
                                            class="min-h-[38px] flex justify-center items-center text-gray-500 py-2 px-1.5 text-sm dark:text-white">3</span>
                                    </div>
                                    <button type="button"
                                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                        <span aria-hidden="true" class="hidden sm:block">Next</span>
                                        <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                    </button>
                                </nav>
                                <!-- End Pagination -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;nav class="flex justify-between items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span aria-hidden="true" class="hidden sm:block"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span aria-hidden="true" class="hidden sm:block"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;

&lt;nav class="flex justify-between items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span aria-hidden="true" class="hidden sm:block"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-transparent text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span aria-hidden="true" class="hidden sm:block"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;

&lt;nav class="flex justify-between items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span aria-hidden="true" class="hidden sm:block"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="flex items-center gap-x-1"&gt;
        &lt;span
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-2 px-3 text-sm rounded-md focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-white/10"&gt;1&lt;/span&gt;
        &lt;span
            class="min-h-[38px] flex justify-center items-center text-gray-500 py-2 px-1.5 text-sm dark:text-white"&gt;of&lt;/span&gt;
        &lt;span
            class="min-h-[38px] flex justify-center items-center text-gray-500 py-2 px-1.5 text-sm dark:text-white"&gt;3&lt;/span&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span aria-hidden="true" class="hidden sm:block"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;
                                    </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 9
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[32px] min-w-8 flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[32px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-basic" type="button"
                                                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-basic">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>

                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-basic1" type="button"
                                                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-basic1">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>

                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[46px] min-w-[46px] flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                                aria-current="page">1</button>

                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-basic2" type="button"
                                                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-basic2">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>

                                </div>
                                <!-- End Pagination Wrapper -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button&gt; type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[32px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span&gt;
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button&gt; type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-basic" type="button"
                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-basic"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button&gt; type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span&gt;
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button&gt; type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-basic1" type="button"
                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-basic1"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;/div&gt;

    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button&gt; type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span&gt;
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button&gt; type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-basic2" type="button"
                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-basic2"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;/div&gt;

                                    </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 10
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[32px] min-w-8 flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[32px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-rounded" type="button"
                                                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-rounded">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-rounded1" type="button"
                                                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-rounded1">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[46px] min-w-[46px] flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-rounded2" type="button"
                                                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-rounded2">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[32px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-rounded" type="button"
                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-rounded"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;

    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-rounded1" type="button"
                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-rounded1"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center bg-primary text-white py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:text-white dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-rounded2" type="button"
                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-rounded2"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
                                    </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 11
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[32px] min-w-8 flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[32px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered" type="button"
                                                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered1" type="button"
                                                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered1">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered2" type="button"
                                                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered2">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button&gt; type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[32px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span&gt;
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button&gt; type="button"
                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-bordered" type="button"
                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-bordered"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button&gt; type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span&gt;
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button&gt; type="button"
                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-bordered1" type="button"
                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-bordered1"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;nav class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="flex items-center gap-x-1"&gt;
            &lt;button&gt; type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                aria-current="page"&gt;1&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
            &lt;button&gt; type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
            &lt;div class="hs-tooltip ti-main-tooltip"&gt;
                &lt;button type="button"
                    class="hs-tooltip-toggle group min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                    &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                    &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"&gt;
                        &lt;path d="m6 17 5-5-5-5" /&gt;
                        &lt;path d="m13 17 5-5-5-5" /&gt;
                    &lt;/svg&gt;
                    &lt;span&gt;
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                        role="tooltip"&gt;
                        Next 4 pages
                    &lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;button&gt; type="button"
                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-bordered2" type="button"
                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-pagination-dropdown-bordered2"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
                                    </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 12
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[32px] min-w-8 flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[32px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-round" type="button"
                                                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-round">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-round1" type="button"
                                                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-round1">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center gap-x-1">
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <div class="flex items-center gap-x-1">
                                            <button type="button"
                                                class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
                                                aria-current="page">1</button>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle group min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                    <span class="group-hover:hidden text-xs">•••</span>
                                                    <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 17 5-5-5-5" />
                                                        <path d="m13 17 5-5-5-5" />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                        role="tooltip">
                                                        Next 4 pages
                                                    </span>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-round2" type="button"
                                                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-round2">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
&lt;nav class="flex items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[32px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[32px] min-w-8 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;
&lt;div class="flex justify-center items-center gap-x-5"&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown-bordered-round" type="button"
            class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="hs-pagination-dropdown-bordered-round"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
        &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            Go to
        &lt;/span&gt;
        &lt;input type="number"
            class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
            &gt;
        &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            page
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
&lt;nav class="flex items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;
&lt;div class="flex justify-center items-center gap-x-5"&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown-bordered-round1" type="button"
            class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="hs-pagination-dropdown-bordered-round1"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
        &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            Go to
        &lt;/span&gt;
        &lt;input type="number"
            class="min-h-[38px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
            &gt;
        &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            page
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
&lt;nav class="flex items-center gap-x-1"&gt;
    &lt;button type="button"
        class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="flex items-center gap-x-1"&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-primary text-primary py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:border-primary dark:text-primary dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm rounded-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button"
        class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;
&lt;div class="flex justify-center items-center gap-x-5"&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown-bordered-round2" type="button"
            class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="hs-pagination-dropdown-bordered-round2"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
        &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            Go to
        &lt;/span&gt;
        &lt;input type="number"
            class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
            &gt;
        &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            page
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 13
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">
                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center -space-x-px">
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-1 px-2 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 flex justify-center items-center bg-primary text-white border border-gray-200 py-1 px-2.5 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div
                                            class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[30px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary py-1 px-2.5 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-1 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-group" type="button"
                                                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-group">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center -space-x-px">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div
                                            class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-group1" type="button"
                                                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-group1">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[32px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>

                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center -space-x-px">
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div
                                            class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[44px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px]py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-group2" type="button"
                                                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-group2">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>

                                </div>
                                <!-- End Pagination Wrapper -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
&lt;nav class="flex items-center -space-x-px"&gt;
    &lt;button type="button"
        class="min-h-[32px] min-w-8 py-2 px-2 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[32px] min-w-8 flex justify-center items-center bg-primary text-white border border-gray-200 py-1 px-2.5 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
        aria-current="page"&gt;1&lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
    &lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
        &lt;button type="button"
            class="hs-tooltip-toggle group min-h-[30px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary py-1 px-2.5 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
            &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
            &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"&gt;
                &lt;path d="m6 17 5-5-5-5" /&gt;
                &lt;path d="m13 17 5-5-5-5" /&gt;
            &lt;/svg&gt;
            &lt;span&gt;
                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                role="tooltip"&gt;
                Next 4 pages
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;button&gt; type="button"
        class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;button type="button"
        class="min-h-[32px] min-w-8 py-1 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;
&lt;div class="flex justify-center items-center gap-x-5"&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown-bordered-group" type="button"
            class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="hs-pagination-dropdown-bordered-group"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
        &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            Go to
        &lt;/span&gt;
        &lt;input type="number"
            class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
            &gt;
        &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            page
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
&lt;nav class="flex items-center -space-x-px"&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
        aria-current="page"&gt;1&lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
    &lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
        &lt;button type="button"
            class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
            &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
            &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"&gt;
                &lt;path d="m6 17 5-5-5-5" /&gt;
                &lt;path d="m13 17 5-5-5-5" /&gt;
            &lt;/svg&gt;
            &lt;span&gt;
                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                role="tooltip"&gt;
                Next 4 pages
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;button&gt; type="button"
        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;button type="button"
        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;
&lt;div class="flex justify-center items-center gap-x-5"&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown-bordered-group1" type="button"
            class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="hs-pagination-dropdown-bordered-group1"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
        &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            Go to
        &lt;/span&gt;
        &lt;input type="number"
            class="min-h-[32px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
            &gt;
        &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            page
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
&lt;nav class="flex items-center -space-x-px"&gt;
    &lt;button type="button"
        class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m15 18-6-6 6-6" /&gt;
        &lt;/svg&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[46px] min-w-[46px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
        aria-current="page"&gt;1&lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
    &lt;button&gt; type="button"
        class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
    &lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
        &lt;button type="button"
            class="hs-tooltip-toggle group min-h-[44px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
            &lt;span&gt; class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
            &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"&gt;
                &lt;path d="m6 17 5-5-5-5" /&gt;
                &lt;path d="m13 17 5-5-5-5" /&gt;
            &lt;/svg&gt;
            &lt;span&gt;
                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                role="tooltip"&gt;
                Next 4 pages
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;button&gt; type="button"
        class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-md last:rounded-e-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
    &lt;button type="button"
        class="min-h-[46px] min-w-[46px]py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-md last:rounded-e-md border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
        &lt;span&gt; aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
        &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"&gt;
            &lt;path d="m9 18 6-6-6-6" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
&lt;/nav&gt;
&lt;div class="flex justify-center items-center gap-x-5"&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
        &lt;button id="hs-pagination-dropdown-bordered-group2" type="button"
            class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle"&gt;
            5 page
            &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m6 9 6 6 6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="hs-pagination-dropdown-bordered-group2"&gt;
            &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                5 page
                &lt;i&gt; class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                8 page
            &lt;/button&gt;
            &lt;button&gt; type="button" class="ti-dropdown-item w-full"&gt;
                10 page
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
        &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            Go to
        &lt;/span&gt;
        &lt;input type="number"
            class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
            &gt;
        &lt;span&gt; class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
            page
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                                </code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:!col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pagination Style 14
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-5">

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center -space-x-px">
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-1 px-2 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 flex justify-center items-center bg-primary text-white border border-gray-200 py-1 px-2.5 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div
                                            class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[30px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary py-1 px-2.5 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        <button type="button"
                                            class="min-h-[32px] min-w-8 py-1 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-group-round" type="button"
                                                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-group-round">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center -space-x-px">
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div
                                            class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        <button type="button"
                                            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-group-round1" type="button"
                                                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-group-round1">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[32px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>

                                </div>
                                <!-- End Pagination Wrapper -->

                                <!-- Pagination Wrapper -->
                                <div
                                    class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap">
                                    <!-- Pagination Wrapper -->
                                    <nav class="flex items-center -space-x-px">
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            <span aria-hidden="true" class="sr-only">Previous</span>
                                        </button>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
                                            aria-current="page">1</button>
                                        <div
                                            class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10">
                                            <button type="button"
                                                class="hs-tooltip-toggle group min-h-[44px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10">
                                                <span class="group-hover:hidden text-xs">•••</span>
                                                <svg class="group-hover:block hidden flex-shrink-0 size-5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 17 5-5-5-5" />
                                                    <path d="m13 17 5-5-5-5" />
                                                </svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                                                    role="tooltip">
                                                    Next 4 pages
                                                </span>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">8</button>
                                        <button type="button"
                                            class="min-h-[46px] min-w-[46px]py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                            <span aria-hidden="true" class="sr-only">Next</span>
                                            <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                        </button>
                                    </nav>
                                    <!-- End Pagination -->
                                    <div class="flex justify-center items-center gap-x-5">
                                        <!-- Dropdown -->
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-pagination-dropdown-bordered-group-round2" type="button"
                                                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle">
                                                5 page
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="hs-pagination-dropdown-bordered-group-round2">
                                                <button type="button" class="ti-dropdown-item w-full justify-between">
                                                    5 page
                                                    <i class="ri-check-line text-primary flex-shrink-0 size-4"></i>
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    8 page
                                                </button>
                                                <button type="button" class="ti-dropdown-item w-full">
                                                    10 page
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->

                                        <!-- Go To Page -->
                                        <div class="flex justify-center sm:justify-start items-center gap-x-2">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                Go to
                                            </span>
                                            <input type="number"
                                                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600">
                                            <span class="text-sm text-gray-800 whitespace-nowrap dark:text-white">
                                                page
                                            </span>
                                        </div>
                                        <!-- End Go To Page -->
                                    </div>
                                </div>
                                <!-- End Pagination Wrapper -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Pagination Wrapper --&gt;
&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;!-- Pagination Wrapper --&gt;
    &lt;nav class="flex items-center -space-x-px"&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 py-2 px-2 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 flex justify-center items-center bg-primary text-white border border-gray-200 py-1 px-2.5 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[30px] min-w-8 flex justify-center items-center text-gray-400 hover:text-primary py-1 px-2.5 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-1 px-2.5 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[32px] min-w-8 py-1 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;!-- End Pagination --&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;!-- Dropdown --&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-bordered-group-round" type="button"
                class="hs-dropdown-toggle !py-1 !px-2.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="hs-pagination-dropdown-bordered-group-round"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Dropdown --&gt;

        &lt;!-- Go To Page --&gt;
        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[32px] py-1 px-2.5  block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;!-- End Go To Page --&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Pagination Wrapper --&gt;

&lt;!-- Pagination Wrapper --&gt;
&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;!-- Pagination Wrapper --&gt;
    &lt;nav class="flex items-center -space-x-px"&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[36px] min-w-[36px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;!-- End Pagination --&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;!-- Dropdown --&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-bordered-group-round1" type="button"
                class="hs-dropdown-toggle !py-2 !px-2.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="hs-pagination-dropdown-bordered-group-round1"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Dropdown --&gt;

        &lt;!-- Go To Page --&gt;
        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[32px] py-2 px-2.5 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;!-- End Go To Page --&gt;
    &lt;/div&gt;

&lt;/div&gt;
&lt;!-- End Pagination Wrapper --&gt;

&lt;!-- Pagination Wrapper --&gt;
&lt;div class="grid justify-center sm:flex sm:justify-start sm:items-center gap-2 flex-wrap"&gt;
    &lt;!-- Pagination Wrapper --&gt;
    &lt;nav class="flex items-center -space-x-px"&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m15 18-6-6 6-6" /&gt;
            &lt;/svg&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] flex justify-center items-center bg-primary text-white border border-gray-200 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-primary dark:border-white/10 dark:text-white dark:focus:bg-gray-500"
            aria-current="page"&gt;1&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;2&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;3&lt;/button&gt;
        &lt;div class="hs-tooltip ti-main-tooltip border border-gray-200 dark:border-white/10"&gt;
            &lt;button type="button"
                class="hs-tooltip-toggle group min-h-[44px] min-w-[46px] flex justify-center items-center text-gray-400 hover:text-primary p-2 text-sm focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-primary dark:focus:bg-white/10"&gt;
                &lt;span class="group-hover:hidden text-xs"&gt;•••&lt;/span&gt;
                &lt;svg class="group-hover:block hidden flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"&gt;
                    &lt;path d="m6 17 5-5-5-5" /&gt;
                    &lt;path d="m13 17 5-5-5-5" /&gt;
                &lt;/svg&gt;
                &lt;span
                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-bodybg"
                    role="tooltip"&gt;
                    Next 4 pages
                &lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-full last:rounded-e-full focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;8&lt;/button&gt;
        &lt;button type="button"
            class="min-h-[46px] min-w-[46px]py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-full last:rounded-e-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-white/10 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"&gt;
            &lt;span aria-hidden="true" class="sr-only"&gt;Next&lt;/span&gt;
            &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"&gt;
                &lt;path d="m9 18 6-6-6-6" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/nav&gt;
    &lt;!-- End Pagination --&gt;
    &lt;div class="flex justify-center items-center gap-x-5"&gt;
        &lt;!-- Dropdown --&gt;
        &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
            &lt;button id="hs-pagination-dropdown-bordered-group-round2" type="button"
                class="hs-dropdown-toggle !py-3 !px-3.5 ti-dropdown-toggle"&gt;
                5 page
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"&gt;
                    &lt;path d="m6 9 6 6 6-6" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="hs-pagination-dropdown-bordered-group-round2"&gt;
                &lt;button type="button" class="ti-dropdown-item w-full justify-between"&gt;
                    5 page
                    &lt;i class="ri-check-line text-primary flex-shrink-0 size-4"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    8 page
                &lt;/button&gt;
                &lt;button type="button" class="ti-dropdown-item w-full"&gt;
                    10 page
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Dropdown --&gt;

        &lt;!-- Go To Page --&gt;
        &lt;div class="flex justify-center sm:justify-start items-center gap-x-2"&gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                Go to
            &lt;/span&gt;
            &lt;input type="number"
                class="min-h-[46px] p-3 block w-12 border-gray-200 rounded-md text-sm text-center focus:border-primary focus:ring-primary [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-gray-400 dark:focus:ring-gray-600"
                &gt;
            &lt;span class="text-sm text-gray-800 whitespace-nowrap dark:text-white"&gt;
                page
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;!-- End Go To Page --&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Pagination Wrapper --&gt;
                                </code></pre>
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