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
                                <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Buttons</h1>
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
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Default Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button" class="ti-btn ti-btn-primary btn-wave ">Primary</button>
                                    <button type="button" class="ti-btn ti-btn-secondary btn-wave ">Secondary</button>
                                    <button type="button" class="ti-btn ti-btn-success btn-wave ">Success</button>
                                    <button type="button" class="ti-btn ti-btn-danger btn-wave ">Danger</button>
                                    <button type="button" class="ti-btn ti-btn-warning btn-wave ">Warning</button>
                                    <button type="button" class="ti-btn ti-btn-info btn-wave ">Info</button>
                                    <button type="button" class="ti-btn ti-btn-light btn-wave ">Light</button>
                                    <button type="button" class="ti-btn ti-btn-dark btn-wave  text-white">Dark</button>
                                    <button type="button" class="ti-btn ti-btn-link btn-wave ">Link</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary btn-wave "&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary btn-wave "&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success btn-wave "&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger btn-wave "&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning btn-wave "&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info btn-wave "&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-light btn-wave "&gt;Light&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-dark btn-wave  text-white"&gt;Dark&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-link btn-wave "&gt;Link&lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Rounded Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button"
                                        class="ti-btn ti-btn-primary !rounded-full btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-secondary !rounded-full btn-wave ">Secondary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-success !rounded-full btn-wave ">Success</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-danger !rounded-full btn-wave ">Danger</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-warning !rounded-full btn-wave ">Warning</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-info !rounded-full btn-wave ">Info</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-light !text-default !rounded-full btn-wave ">Light</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-dark !rounded-full btn-wave  text-white">Dark</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-link !rounded-full btn-wave ">Link</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-primary !rounded-full btn-wave "&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-secondary !rounded-full btn-wave "&gt;Secondary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-success !rounded-full btn-wave "&gt;Success&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-danger !rounded-full btn-wave "&gt;Danger&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-warning !rounded-full btn-wave "&gt;Warning&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-info !rounded-full btn-wave "&gt;Info&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-light !rounded-full btn-wave "&gt;Light&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-dark !rounded-full btn-wave  text-white"&gt;Dark&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-link !rounded-full btn-wave "&gt;Link&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Light Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button" class="ti-btn ti-btn-soft-primary btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-soft-secondary btn-wave ">Secondary</button>
                                    <button type="button" class="ti-btn ti-btn-soft-success btn-wave ">Success</button>
                                    <button type="button" class="ti-btn ti-btn-soft-danger btn-wave ">Danger</button>
                                    <button type="button" class="ti-btn ti-btn-soft-warning btn-wave ">Warning</button>
                                    <button type="button" class="ti-btn ti-btn-soft-info btn-wave ">Info</button>
                                    <button type="button" class="ti-btn ti-btn-soft-purple btn-wave ">purple</button>
                                    <button type="button" class="ti-btn ti-btn-soft-teal btn-wave ">teal</button>
                                    <button type="button" class="ti-btn ti-btn-soft-orange btn-wave ">orange</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-primary btn-wave "&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-secondary btn-wave "&gt;Secondary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-success btn-wave "&gt;Success&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-danger btn-wave "&gt;Danger&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-warning btn-wave "&gt;Warning&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-info btn-wave "&gt;Info&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-purple btn-wave "&gt;purple&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-teal btn-wave "&gt;teal&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-soft-orange btn-wave "&gt;orange&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Light Rounded Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-primary btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-secondary btn-wave ">Secondary</button>
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-success btn-wave ">Success</button>
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-danger btn-wave ">Danger</button>
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-warning btn-wave ">Warning</button>
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-info btn-wave ">Info</button>
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-purple btn-wave ">purple</button>
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-teal btn-wave ">teal</button>
                                    <button type="button"
                                        class="ti-btn !rounded-full ti-btn-soft-orange btn-wave ">orange</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-primary btn-wave "&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-secondary btn-wave "&gt;Secondary&lt;/button&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-success btn-wave "&gt;Success&lt;/button&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-danger btn-wave "&gt;Danger&lt;/button&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-warning btn-wave "&gt;Warning&lt;/button&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-info btn-wave "&gt;Info&lt;/button&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-purple btn-wave "&gt;purple&lt;/button&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-teal btn-wave "&gt;teal&lt;/button&gt;
    &lt;button type="button" class="ti-btn !rounded-full ti-btn-soft-orange btn-wave "&gt;orange&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Outline Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-primary btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-secondary btn-wave ">Secondary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-success btn-wave ">Success</button>
                                    <button type="button" class="ti-btn ti-btn-outline-danger btn-wave ">Danger</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-warning btn-wave ">Warning</button>
                                    <button type="button" class="ti-btn ti-btn-outline-info btn-wave ">Info</button>
                                    <button type="button" class="ti-btn ti-btn-outline-light btn-wave ">Light</button>
                                    <button type="button" class="ti-btn ti-btn-outline-dark btn-wave ">Dark</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-primary btn-wave "&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-secondary btn-wave "&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-success btn-wave "&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-danger btn-wave "&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-warning btn-wave "&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-info btn-wave "&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-light btn-wave "&gt;Light&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-dark btn-wave "&gt;Dark&lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Rounded Outline Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-primary !rounded-full btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-secondary !rounded-full btn-wave ">Secondary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-success !rounded-full btn-wave ">Success</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-danger !rounded-full btn-wave ">Danger</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-warning !rounded-full btn-wave ">Warning</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-info !rounded-full btn-wave ">Info</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-light !rounded-full btn-wave ">Light</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-outline-dark !rounded-full btn-wave ">Dark</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-primary !rounded-full btn-wave "&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-secondary !rounded-full btn-wave "&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-success !rounded-full btn-wave "&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-danger !rounded-full btn-wave "&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-warning !rounded-full btn-wave "&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-info !rounded-full btn-wave "&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-light !rounded-full btn-wave "&gt;Light&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-dark !rounded-full btn-wave "&gt;Dark&lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Gradient Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button"
                                        class="ti-btn ti-btn-primary-gradient btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-secondary-gradient btn-wave ">Secondary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-success-gradient btn-wave ">Success</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-danger-gradient btn-wave ">Danger</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-warning-gradient btn-wave ">Warning</button>
                                    <button type="button" class="ti-btn ti-btn-info-gradient btn-wave ">Info</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-orange-gradient btn-wave ">Orange</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-purple-gradient btn-wave ">Purple</button>
                                    <button type="button" class="ti-btn ti-btn-teal-gradient btn-wave ">Teal</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary-gradient btn-wave "&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary-gradient btn-wave "&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success-gradient btn-wave "&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger-gradient btn-wave "&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning-gradient btn-wave "&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info-gradient btn-wave "&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-orange-gradient btn-wave "&gt;Orange&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-purple-gradient btn-wave "&gt;Purple&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-teal-gradient btn-wave "&gt;Teal&lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Rounded Gradient Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button"
                                        class="ti-btn ti-btn-primary-gradient !rounded-full btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-secondary-gradient !rounded-full btn-wave ">Secondary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-success-gradient !rounded-full btn-wave ">Success</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-danger-gradient !rounded-full btn-wave ">Danger</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-warning-gradient !rounded-full btn-wave ">Warning</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-info-gradient !rounded-full btn-wave ">Info</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-orange-gradient !rounded-full btn-wave ">Orange</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-purple-gradient !rounded-full btn-wave ">Purple</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-teal-gradient !rounded-full btn-wave ">Teal</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-primary-gradient !rounded-full btn-wave "&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-secondary-gradient !rounded-full btn-wave "&gt;Secondary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-success-gradient !rounded-full btn-wave "&gt;Success&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-danger-gradient !rounded-full btn-wave "&gt;Danger&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-warning-gradient !rounded-full btn-wave "&gt;Warning&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-info-gradient !rounded-full btn-wave "&gt;Info&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-orange-gradient !rounded-full btn-wave "&gt;Orange&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-purple-gradient !rounded-full btn-wave "&gt;Purple&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-teal-gradient !rounded-full btn-wave "&gt;Teal&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Ghost Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button" class="ti-btn ti-btn-ghost-primary btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-secondary btn-wave ">Secondary</button>
                                    <button type="button" class="ti-btn ti-btn-ghost-success btn-wave ">Success</button>
                                    <button type="button" class="ti-btn ti-btn-ghost-danger btn-wave ">Danger</button>
                                    <button type="button" class="ti-btn ti-btn-ghost-warning btn-wave ">Warning</button>
                                    <button type="button" class="ti-btn ti-btn-ghost-info btn-wave ">Info</button>
                                    <button type="button" class="ti-btn ti-btn-ghost-orange btn-wave ">Orange</button>
                                    <button type="button" class="ti-btn ti-btn-ghost-purple btn-wave ">Purple</button>
                                    <button type="button" class="ti-btn ti-btn-ghost-teal btn-wave ">Teal</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-primary btn-wave "&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-secondary btn-wave "&gt;Secondary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-success btn-wave "&gt;Success&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-danger btn-wave "&gt;Danger&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-warning btn-wave "&gt;Warning&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-info btn-wave "&gt;Info&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-orange btn-wave "&gt;Orange&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-purple btn-wave "&gt;Purple&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-teal btn-wave "&gt;Teal&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Rounded Ghost Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-primary !rounded-full btn-wave ">Primary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-secondary !rounded-full btn-wave ">Secondary</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-success !rounded-full btn-wave ">Success</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-danger !rounded-full btn-wave ">Danger</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-warning !rounded-full btn-wave ">Warning</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-info !rounded-full btn-wave ">Info</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-orange !rounded-full btn-wave ">Orange</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-purple !rounded-full btn-wave ">Purple</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-ghost-teal !rounded-full btn-wave ">Teal</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-primary !rounded-full btn-wave "&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-secondary !rounded-full btn-wave "&gt;Secondary&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-success !rounded-full btn-wave "&gt;Success&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-danger !rounded-full btn-wave "&gt;Danger&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-warning !rounded-full btn-wave "&gt;Warning&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-info !rounded-full btn-wave "&gt;Info&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-orange !rounded-full btn-wave "&gt;Orange&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-purple !rounded-full btn-wave "&gt;Purple&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-teal !rounded-full btn-wave "&gt;Teal&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Button tags
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <a class="ti-btn ti-btn-primary btn-wave " href="javascript:void(0);">Link</a>
                                    <button class="ti-btn ti-btn-secondary btn-wave " type="submit">Button</button>
                                    <input class="ti-btn ti-btn-info" type="button" value="Input">
                                    <input class="ti-btn ti-btn-warning" type="button" value="Submit">
                                    <input class="ti-btn ti-btn-success" type="button" value="Reset">
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;a class="ti-btn ti-btn-primary btn-wave " href="javascript:void(0);"&gt;Link&lt;/a&gt;
    &lt;button class="ti-btn ti-btn-secondary btn-wave " type="submit"&gt;Button&lt;/button&gt;
    &lt;input class="ti-btn ti-btn-info" type="button" value="Input"&gt;
    &lt;input class="ti-btn ti-btn-warning" type="button" value="Submit"&gt;
    &lt;input class="ti-btn ti-btn-success" type="button" value="Reset"&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    disabled state with anchor tags
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list sm:flex">
                                    <div class="mb-4">
                                        <button type="button" class="ti-btn ti-btn-primary ti-btn-disabled">Primary
                                            button</button>
                                        <button type="button"
                                            class="ti-btn ti-btn-secondary ti-btn-disabled">Button</button>
                                        <button type="button"
                                            class="ti-btn ti-btn-outline-primary ti-btn-disabled">Primary
                                            button</button>
                                        <button type="button"
                                            class="ti-btn ti-btn-outline-secondary ti-btn-disabled">Button</button>
                                    </div>

                                    <div>
                                        <a class="ti-btn ti-btn-primary ti-btn-disabled" aria-disabled="true">Primary
                                            link</a>
                                        <a class="ti-btn ti-btn-secondary ti-btn-disabled" aria-disabled="true">Link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list flex"&gt;
        &lt;div class="mb-4"&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary ti-btn-disabled"&gt;Primary
                button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-secondary ti-btn-disabled"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-outline-primary ti-btn-disabled"&gt;Primary
                button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-outline-secondary ti-btn-disabled"&gt;Button&lt;/button&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;a class="ti-btn ti-btn-primary ti-btn-disabled" aria-disabled="true"&gt;Primary
                link&lt;/a&gt;
            &lt;a class="ti-btn ti-btn-secondary ti-btn-disabled" aria-disabled="true"&gt;Link&lt;/a&gt;
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
                                    Loading Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list md:flex flex-wrap">
                                    <button type="button" class="ti-btn ti-btn-primary ti-btn-loader m-2">
                                        <span class="me-2">Loading</span>
                                        <span class="loading"><i
                                                class="ri-loader-2-fill text-[1rem] animate-spin"></i></span>
                                    </button>
                                    <button type="button" class="ti-btn ti-btn-outline-secondary ti-btn-loader m-2">
                                        <span class="me-2">Loading</span>
                                        <span class="loading"><i
                                                class="ri-loader-2-fill text-[1rem] animate-spin"></i></span>
                                    </button>
                                    <button type="button" class="ti-btn bg-info/10 text-info ti-btn-loader m-2">
                                        <span class="me-2">Loading</span>
                                        <span class="loading"><i
                                                class="ri-loader-4-line text-[1rem] animate-spin"></i></span>
                                    </button>
                                    <button type="button" class="ti-btn bg-warning/10 text-warning ti-btn-loader m-2">
                                        <span class="me-2">Loading</span>
                                        <span class="loading"><i
                                                class="ri-loader-5-line text-[1rem] animate-spin"></i></span>
                                    </button>
                                    <button type="button"
                                        class="ti-btn ti-btn-success ti-btn-loader ti-btn-disabled m-2">
                                        <span class="me-2">Disabled</span>
                                        <span class="loading"><i
                                                class="ri-refresh-line text-[1rem] animate-spin"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list md:flex flex-wrap"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary ti-btn-loader m-2"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-2-fill text-[1rem] animate-spin"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-secondary ti-btn-loader m-2"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-2-fill text-[1rem] animate-spin"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn bg-info/10 text-info ti-btn-loader m-2"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-4-line text-[1rem] animate-spin"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn bg-warning/10 text-warning ti-btn-loader m-2"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-5-line text-[1rem] animate-spin"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success ti-btn-loader ti-btn-disabled m-2"&gt;
            &lt;span class="me-2"&gt;Disabled&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-refresh-line text-[1rem] animate-spin"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">Icon Buttons</div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list md:flex block gap-x-6">
                                    <div class="md:mb-0 mb-2">
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon ti-btn-primary btn-wave ">
                                            <i class="ri-bank-fill"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon ti-btn-info btn-wave ">
                                            <i class="ri-medal-line"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon ti-btn-danger btn-wave ">
                                            <i class="ri-archive-line"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon ti-btn-warning btn-wave  me-5">
                                            <i class="ri-calendar-2-line"></i>
                                        </button>
                                    </div>
                                    <div class="md:mb-0 mb-2">
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon bg-primary/10 text-primary !border hover:bg-primary hover:text-white !rounded-full btn-wave ">
                                            <i class="ri-home-smile-line"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon bg-secondary/10 text-secondary hover:bg-secondary hover:text-white !rounded-full btn-wave ">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon bg-success/10 text-success hover:bg-success hover:text-white !rounded-full btn-wave ">
                                            <i class="ri-notification-3-line"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon bg-danger/10 text-danger hover:bg-danger hover:text-white !rounded-full btn-wave  me-5">
                                            <i class="ri-chat-settings-line"></i>
                                        </button>
                                    </div>
                                    <div class="">
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon ti-btn-outline-primary !rounded-full btn-wave ">
                                            <i class="ri-phone-line"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon ti-btn-outline-teal !border-tealmain !text-tealmain !rounded-full btn-wave ">
                                            <i class="ri-customer-service-2-line"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon ti-btn-outline-success !rounded-full btn-wave ">
                                            <i class="ri-live-line"></i>
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-icon ti-btn-outline-secondary !rounded-full btn-wave ">
                                            <i class="ri-save-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list md:flex block"&gt;
        &lt;div class="md:mb-0 mb-2"&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-primary btn-wave "&gt;
                &lt;i class="ri-bank-fill"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-info btn-wave "&gt;
                &lt;i class="ri-medal-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-danger btn-wave "&gt;
                &lt;i class="ri-archive-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-warning btn-wave  me-5"&gt;
                &lt;i class="ri-calendar-2-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="md:mb-0 mb-2"&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon bg-primary/10 text-primary !border hover:bg-primary hover:text-white !rounded-full btn-wave "&gt;
                &lt;i class="ri-home-smile-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon bg-secondary/10 text-secondary hover:bg-secondary hover:text-white !rounded-full btn-wave "&gt;
                &lt;i class="ri-delete-bin-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon bg-success/10 text-success hover:bg-success hover:text-white !rounded-full btn-wave "&gt;
                &lt;i class="ri-notification-3-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon bg-danger/10 text-danger hover:bg-danger hover:text-white !rounded-full btn-wave  me-5"&gt;
                &lt;i class="ri-chat-settings-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=""&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-outline-primary !rounded-full btn-wave "&gt;
                &lt;i class="ri-phone-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-outline-teal !border-tealmain !text-tealmain !rounded-full btn-wave "&gt;
                &lt;i class="ri-customer-service-2-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-outline-success !rounded-full btn-wave "&gt;
                &lt;i class="ri-live-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-outline-secondary !rounded-full btn-wave "&gt;
                &lt;i class="ri-save-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
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
                                    Social Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <button type="button" aria-label="button"
                                        class="ti-btn ti-btn-icon ti-btn-facebook btn-wave ">
                                        <i class="ri-facebook-line"></i>
                                    </button>
                                    <button type="button" aria-label="button"
                                        class="ti-btn ti-btn-icon ti-btn-twitter btn-wave ">
                                        <i class="ri-twitter-x-line"></i>
                                    </button>
                                    <button type="button" aria-label="button"
                                        class="ti-btn ti-btn-icon ti-btn-instagram btn-wave ">
                                        <i class="ri-instagram-line"></i>
                                    </button>
                                    <button type="button" aria-label="button"
                                        class="ti-btn ti-btn-icon ti-btn-github btn-wave ">
                                        <i class="ri-github-line"></i>
                                    </button>
                                    <button type="button" aria-label="button"
                                        class="ti-btn ti-btn-icon ti-btn-youtube btn-wave ">
                                        <i class="ri-youtube-line"></i>
                                    </button>
                                    <button type="button" aria-label="button"
                                        class="ti-btn ti-btn-icon ti-btn-google btn-wave ">
                                        <i class="ri-google-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
        &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-facebook btn-wave "&gt;
            &lt;i class="ri-facebook-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-twitter btn-wave "&gt;
            &lt;i class="ri-twitter-x-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-instagram btn-wave "&gt;
            &lt;i class="ri-instagram-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-github btn-wave "&gt;
            &lt;i class="ri-github-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-youtube btn-wave "&gt;
            &lt;i class="ri-youtube-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-google btn-wave "&gt;
            &lt;i class="ri-google-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Sizes
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button"
                                                class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                                Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                            <button type="button"
                                                class="ti-btn ti-btn-primary !py-1 !px-2 btn-wave ">Small
                                                button</button>
                                            <button type="button" class="ti-btn ti-btn-secondary btn-wave ">Default
                                                button</button>
                                            <button type="button"
                                                class="ti-btn ti-btn-success ti-btn-lg btn-wave ">Large
                                                button</button>
                                        </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-primary !py-1 !px-2 btn-wave "&gt;Small
        button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-secondary btn-wave "&gt;Default
        button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-success ti-btn-lg btn-wave "&gt;Large
        button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                        <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Button Widths
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button"
                                                class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                                Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                            <button type="button"
                                                class="ti-btn ti-btn-primary ti-btn-w-xs btn-wave ">XS</button>
                                            <button type="button"
                                                class="ti-btn ti-btn-secondary ti-btn-w-sm btn-wave ">SM</button>
                                            <button type="button"
                                                class="ti-btn ti-btn-warning ti-btn-w-md btn-wave ">MD</button>
                                            <button type="button"
                                                class="ti-btn ti-btn-info ti-btn-w-lg btn-wave ">LG</button>
                                        </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-primary ti-btn-w-xs btn-wave "&gt;XS&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-secondary ti-btn-w-sm btn-wave "&gt;SM&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-warning ti-btn-w-md btn-wave "&gt;MD&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-info ti-btn-w-lg btn-wave "&gt;LG&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                        <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Buttons With Different Shadows
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list flex">
                                    <div class="me-[3rem]">
                                        <button type="button"
                                            class="ti-btn ti-btn-primary shadow-sm btn-wave ">Button</button>
                                        <button type="button"
                                            class="ti-btn ti-btn-primary shadow btn-wave ">Button</button>
                                        <button type="button"
                                            class="ti-btn ti-btn-primary shadow-lg btn-wave ">Button</button>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="ti-btn ti-btn-secondary !py-1 !px-2 shadow-sm btn-wave ">Button</button>
                                        <button type="button"
                                            class="ti-btn ti-btn-info shadow btn-wave ">Button</button>
                                        <button type="button"
                                            class="ti-btn ti-btn-lg ti-btn-success shadow-lg btn-wave ">Button</button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list flex"&gt;
        &lt;div class="me-[3rem]"&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary shadow-sm btn-wave "&gt;Button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary shadow btn-wave "&gt;Button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary shadow-lg btn-wave "&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;button type="button" class="ti-btn ti-btn-secondary-full !py-1 !px-2 shadow-sm btn-wave "&gt;Button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-info-full shadow btn-wave "&gt;Button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-lg ti-btn-success-full shadow-lg btn-wave "&gt;Button&lt;/button&gt;
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
                                    Different Colored Buttons With Shadows
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button"
                                        class="ti-btn ti-btn-primary shadow-primary btn-wave ">Button</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-secondary shadow-secondary btn-wave ">Button</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-success shadow-success btn-wave ">Button</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-info shadow-info btn-wave ">Button</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-warning shadow-warning btn-wave ">Button</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-danger shadow-danger btn-wave ">Button</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-purple shadow-purple btn-wave ">Button</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-orange shadow-orange btn-wave ">Button</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-primary shadow-primary btn-wave "&gt;Button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-secondary shadow-secondary btn-wave "&gt;Button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-success shadow-success btn-wave "&gt;Button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-info shadow-info btn-wave "&gt;Button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-warning shadow-warning btn-wave "&gt;Button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-danger shadow-danger btn-wave "&gt;Button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-purple shadow-purple btn-wave "&gt;Button&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-orange shadow-orange btn-wave "&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Label Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse"> <button type="button"
                                        class="ti-btn ti-btn-primary label-ti-btn"> <i
                                            class="ri-chat-smile-line label-ti-btn-icon  me-2"></i> Primary </button>
                                    <button type="button" class="ti-btn ti-btn-secondary label-ti-btn"> <i
                                            class="ri-settings-4-line label-ti-btn-icon me-2"></i> Secondary </button>
                                    <button type="button" class="ti-btn ti-btn-warning label-ti-btn !rounded"> <i
                                            class="ri-spam-2-line label-ti-btn-icon me-2 !rounded"></i> Warning
                                    </button> <button type="button" class="ti-btn ti-btn-info label-ti-btn !rounded"> <i
                                            class="ri-phone-line label-ti-btn-icon me-2 !rounded"></i> Info </button>
                                    <button type="button" class="ti-btn ti-btn-success label-ti-btn label-end"> <i
                                            class="ri-thumb-up-line label-ti-btn-icon ms-2"></i> Success </button>
                                    <button type="button" class="ti-btn ti-btn-danger label-ti-btn label-end !rounded">
                                        <i class="ri-close-line label-ti-btn-icon ms-2 !rounded"></i> Cancel </button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary label-ti-btn"&gt;
            &lt;i class="ri-chat-smile-line label-ti-btn-icon  me-2"&gt;&lt;/i&gt;
            Primary
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary-full label-ti-btn"&gt;
            &lt;i class="ri-settings-4-line label-ti-btn-icon me-2"&gt;&lt;/i&gt;
            Secondary
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning-full label-ti-btn !rounded"&gt;
            &lt;i class="ri-spam-2-line label-ti-btn-icon me-2 !rounded"&gt;&lt;/i&gt;
            Warning
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info-full label-ti-btn !rounded"&gt;
            &lt;i class="ri-phone-line label-ti-btn-icon me-2 !rounded"&gt;&lt;/i&gt;
            Info
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success-full label-ti-btn label-end"&gt;
            &lt;i class="ri-thumb-up-line label-ti-btn-icon ms-2"&gt;&lt;/i&gt;
            Success
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger-full label-ti-btn label-end !rounded"&gt;
            &lt;i class="ri-close-line label-ti-btn-icon ms-2 !rounded"&gt;&lt;/i&gt;
            Cancel
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <button type="button" class="ti-btn ti-btn-info custom-button label-ti-btn !rounded-full">
                                        <span class="custom-ti-btn-icons"><i
                                                class="ri-twitter-x-line text-info"></i></span>
                                        Twitter
                                    </button>
                                    <button type="button"
                                        class="ti-btn ti-btn-soft-teal ti-btn-border-down border-0">Border</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-soft-secondary ti-btn-border-start">Border</button>
                                    <button type="button" class="ti-btn ti-btn-soft-purple ti-btn-border-end">Border</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-soft-warning ti-btn-border-top">Border</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-danger ti-btn-hover ti-btn-hover-animate">Like</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-success ti-btn-darken-hover">Hover</button>
                                    <button type="button"
                                        class="ti-btn ti-btn-orange ti-btn-custom-border">Hover</button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
    &lt;button type="button" class="ti-btn ti-btn-info custom-button !rounded-full"&gt;
        &lt;span class="custom-ti-btn-icons"&gt;&lt;i class="ri-twitter-x-line text-info"&gt;&lt;/i&gt;&lt;/span&gt;
        Twitter
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-teal ti-btn-border-down border-0"&gt;Border&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-secondary ti-btn-border-start"&gt;Border&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-purple ti-btn-border-end"&gt;Border&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-warning ti-btn-border-top"&gt;Border&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-danger ti-btn-hover ti-btn-hover-animate"&gt;Like&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-success ti-btn-darken-hover"&gt;Hover&lt;/button&gt;
    &lt;button type="button" class="ti-btn ti-btn-orange ti-btn-custom-border"&gt;Hover&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Block buttons
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list space-x-2 rtl:space-x-reverse">
                                    <div class="grid  gap-2 mb-6">
                                        <button class="ti-btn ti-btn-primary btn-wave " type="button">Button</button>
                                        <button class="ti-btn ti-btn-secondary btn-wave "
                                            type="button">Button</button>
                                    </div>
                                    <div class="grid gap-2 md:block">
                                        <button class="ti-btn ti-btn-info btn-wave " type="button">Button</button>
                                        <button class="ti-btn ti-btn-success btn-wave "
                                            type="button">Button</button>
                                    </div>
                                    <div class="grid !mx-auto gap-2 w-[50%] ">
                                        <button class="ti-btn ti-btn-danger btn-wave "
                                            type="button">Button</button>
                                        <button class="ti-btn ti-btn-warning btn-wave "
                                            type="button">Button</button>
                                    </div>
                                    <div class="grid gap-2 md:flex md:justify-end">
                                        <button class="ti-btn ti-btn-teal md:me-2 btn-wave "
                                            type="button">Button</button>
                                        <button class="ti-btn ti-btn-purple btn-wave "
                                            type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list space-x-2 rtl:space-x-reverse"&gt;
        &lt;div class="grid  gap-2 mb-6"&gt;
            &lt;button class="ti-btn ti-btn-primary btn-wave " type="button"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-secondary btn-wave " type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="grid gap-2 md:block"&gt;
            &lt;button class="ti-btn ti-btn-info btn-wave " type="button"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-success btn-wave " type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="grid !mx-auto gap-2 w-[50%] "&gt;
            &lt;button class="ti-btn ti-btn-danger btn-wave " type="button"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-warning btn-wave " type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="grid gap-2 md:flex md:justify-end"&gt;
            &lt;button class="ti-btn ti-btn-teal md:me-2 btn-wave " type="button"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-purple btn-wave " type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
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