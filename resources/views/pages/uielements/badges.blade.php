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
                                <li class="breadcrumb-item active" aria-current="page">Badge</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Badge</h1>
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
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Buttons With Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <button type="button" class="ti-btn bg-primary text-white my-1 me-2">
                                    Notifications <span class="badge ms-2 bg-primarytint1color">4</span>
                                </button>
                                <button type="button" class="ti-btn bg-primarytint1color text-white my-1 me-2">
                                    Notifications <span class="badge ms-2 bg-primary">4</span>
                                </button>
                                <button type="button" class="ti-btn bg-primarytint2color text-white my-1 me-2">
                                    Notifications <span class="badge ms-2 bg-warning">4</span>
                                </button>
                                <button type="button" class="ti-btn bg-primarytint3color text-white my-1 me-2">
                                    Notifications <span class="badge ms-2 bg-primarytint1color">4</span>
                                </button>
                                <button type="button" class="ti-btn bg-secondary text-white my-1 me-2">
                                    Notifications <span class="badge ms-2 bg-primary">7</span>
                                </button>
                                <button type="button" class="ti-btn bg-success text-white my-1 me-2">
                                    Notifications <span class="badge ms-2 bg-danger">12</span>
                                </button>
                                <button type="button" class="ti-btn bg-info text-white my-1 me-2">
                                    Notifications <span class="badge ms-2 bg-warning">32</span>
                                </button>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;button type="button" class="ti-btn bg-primary text-white my-1 me-2"&gt;
Notifications &lt;span class="badge ms-2 bg-secondary"&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="ti-btn bg-secondary text-white my-1 me-2"&gt;
Notifications &lt;span class="badge ms-2 bg-primary"&gt;7&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="ti-btn bg-success text-white my-1 me-2"&gt;
Notifications &lt;span class="badge ms-2 bg-danger"&gt;12&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="ti-btn bg-info text-white my-1 me-2"&gt;
Notifications &lt;span class="badge ms-2 bg-warning"&gt;32&lt;/span&gt;
&lt;/button&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Outline Button Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <button type="button" class="ti-btn ti-btn-outline-primary my-1 me-2">
                                    Notifications <span class="badge bg-primary ms-2 text-white">4</span>
                                </button>
                                <button type="button" class="ti-btn ti-btn-outline-secondary my-1 me-2">
                                    Notifications <span class="badge bg-secondary ms-2 text-white">7</span>
                                </button>
                                <button type="button" class="ti-btn ti-btn-outline-success my-1 me-2">
                                    Notifications <span class="badge bg-success ms-2 text-white">12</span>
                                </button>
                                <button type="button" class="ti-btn ti-btn-outline-info my-1 me-2">
                                    Notifications <span class="badge bg-info ms-2 text-white">32</span>
                                </button>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;button type="button" class="ti-btn ti-btn-outline-primary my-1 me-2"&gt;
Notifications &lt;span class="badge bg-primary ms-2 text-white"&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="ti-btn ti-btn-outline-secondary my-1 me-2"&gt;
    Notifications &lt;span class="badge bg-secondary ms-2 text-white"&gt;7&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="ti-btn ti-btn-outline-success my-1 me-2"&gt;
    Notifications &lt;span class="badge bg-success ms-2 text-white"&gt;12&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="ti-btn ti-btn-outline-info my-1 me-2"&gt;
    Notifications &lt;span class="badge bg-info ms-2 text-white"&gt;32&lt;/span&gt;
&lt;/button&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Light Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <span class="badge bg-primary/10 text-primary">Primary</span>
                                <span class="badge bg-secondary/10 text-secondary">Secondary</span>
                                <span class="badge bg-success/10 text-success">Success</span>
                                <span class="badge bg-danger/10 text-danger">Danger</span>
                                <span class="badge bg-warning/10 text-warning">Warning</span>
                                <span class="badge bg-info/10 text-info">Info</span>
                                <span class="badge bg-light/10 text-black dark:text-defaulttextcolor/80">Light</span>
                                <span class="badge bg-black/10 text-black dark:text-defaulttextcolor/80">Dark</span>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;span class="badge bg-primary/10 text-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge bg-secondary/10 text-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge bg-success/10 text-success"&gt;Success&lt;/span&gt;
&lt;span class="badge bg-danger/10 text-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge bg-warning/10 text-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge bg-info/10 text-info"&gt;Info&lt;/span&gt;
&lt;span class="badge bg-light/10 text-black dark:text-defaulttextcolor/80"&gt;Light&lt;/span&gt;
&lt;span class="badge bg-black/10 text-black dark:text-defaulttextcolor/80"&gt;Dark&lt;/span&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <span class="badge bg-primary text-white">Primary</span>
                                <span class="badge bg-secondary text-white">Secondary</span>
                                <span class="badge bg-success text-white">Success</span>
                                <span class="badge bg-danger text-white">Danger</span>
                                <span class="badge bg-warning text-white">Warning</span>
                                <span class="badge bg-info text-white">Info</span>
                                <span class="badge bg-light text-dark">Light</span>
                                <span class="badge bg-black text-white">Dark</span>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="badge bg-primary text-white"&gt;Primary&lt;/span&gt;
&lt;span class="badge bg-secondary text-white"&gt;Secondary&lt;/span&gt;
&lt;span class="badge bg-success text-white"&gt;Success&lt;/span&gt;
&lt;span class="badge bg-danger text-white"&gt;Danger&lt;/span&gt;
&lt;span class="badge bg-warning text-white"&gt;Warning&lt;/span&gt;
&lt;span class="badge bg-info text-white"&gt;Info&lt;/span&gt;
&lt;span class="badge bg-light text-dark"&gt;Light&lt;/span&gt;
&lt;span class="badge bg-black text-white"&gt;Dark&lt;/span&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-6 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">Positioned Badges</div>
                                        <div class="prism-toggle">
                                            <button type="button"
                                                class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                                Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body flex flex-wrap gap-4">
                                        <button type="button" class="ti-btn bg-primary text-white relative">
                                            Inbox
                                            <span
                                                class="absolute -top-2 start-[60%] translate-middle  badge !rounded-full bg-danger">
                                                99+
                                                <span class="hidden">unread messages</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn bg-secondary text-white relative">
                                            Profile
                                            <span
                                                class="absolute -top-2 start-[80%] translate-middle p-2 bg-success border border-light !rounded-full">
                                                <span class="hidden">New alerts</span>
                                            </span>
                                        </button>
                                        <span class="avatar relative">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img" class="!rounded-md">
                                            <span
                                                class="absolute -top-1 start-[80%] translate-middle p-1 bg-success border border-light !rounded-full">
                                                <span class="hidden">New alerts</span>
                                            </span>
                                        </span>
                                        <span class="avatar avatar-rounded relative">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            <span
                                                class="absolute top-0 start-[80%] translate-middle p-1 bg-success border border-light !rounded-full">
                                                <span class="hidden">New alerts</span>
                                            </span>
                                        </span>
                                        <span class="avatar avatar-rounded relative">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                            <span
                                                class="absolute -top-2 start-[60%] translate-middle badge bg-secondary !rounded-full shadow-lg text-white">1000+
                                                <span class="hidden">New alerts</span>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;button type="button" class="ti-btn bg-primary text-white relative"&gt;
Inbox
&lt;span
        class="absolute -top-2 start-[60%] translate-middle  badge !rounded-full bg-danger"&gt;
        99+
        &lt;span class="hidden"&gt;unread messages&lt;/span&gt;
    &lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="ti-btn bg-secondary text-white relative"&gt;
    Profile
    &lt;span
        class="absolute -top-2 start-[80%] translate-middle p-2 bg-success border border-light !rounded-full"&gt;
        &lt;span class="hidden"&gt;New alerts&lt;/span&gt;
    &lt;/span&gt;
&lt;/button&gt;
&lt;span class="avatar relative"&gt;
    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img" class="!rounded-md"&gt;
    &lt;span
        class="absolute -top-2 start-[80%] translate-middle p-1 bg-success border border-light !rounded-full"&gt;
        &lt;span class="hidden"&gt;New alerts&lt;/span&gt;
    &lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-rounded relative"&gt;
    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
    &lt;span
        class="absolute -top-2 start-[80%] translate-middle p-1 bg-success border border-light !rounded-full"&gt;
        &lt;span class="hidden"&gt;New alerts&lt;/span&gt;
    &lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-rounded relative"&gt;
    &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
    &lt;span
        class="absolute -top-2 start-[60%] translate-middle badge bg-secondary !rounded-full shadow-lg text-white"&gt;1000+
        &lt;span class="hidden"&gt;New alerts&lt;/span&gt;
    &lt;/span&gt;
&lt;/span&gt;</code></pre>
                                        <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">Custom Badges</div>
                                        <div class="prism-toggle">
                                            <button type="button"
                                                class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                                Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex items-center gap-5 flex-wrap">
                                            <div>
                                                <span
                                                    class="badge border bg-outline-secondary !font-semibold !text-[.9375rem] inline-flex items-center">
                                                    <i class="ti ti-flame me-1"></i>
                                                    Hot
                                                </span>
                                            </div>
                                            <div>
                                                <span class="relative">
                                                    <svg class="fill-textmuted dark:fill-textmuted/50 w-8 h-8 text-[2rem]"
                                                        xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path
                                                            d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="badge !rounded-full bg-success text-white absolute -end-2 top-0">14</span>
                                                </span>
                                            </div>
                                            <div>
                                                <span
                                                    class="badge border dark:border-light bg-light text-defaulttextcolor font-semibold font-[.7rem]"><i
                                                        class="fe fe-eye me-2 inline-block"></i>13.2k</span>
                                            </div>
                                            <div>
                                                <span class="text-badge relative">
                                                    <span class="text text-lg">Inbox</span>
                                                    <span class="badge !rounded-full bg-success text-white">32</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="flex items-center gap-5 flex-wrap"&gt;
&lt;div&gt;
    &lt;span class="badge bg-outline-secondary !font-semibold !text-[.9375rem] inline-flex items-center"&gt;
        &lt;i class="ti ti-flame me-1"&gt;&lt;/i&gt;
        Hot
    &lt;/span&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;span class="relative"&gt;
        &lt;svg class="fill-textmuted dark:fill-textmuted/50 w-8 h-8 text-[2rem]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;span class="badge !rounded-full bg-success text-white absolute -end-2 top-0"&gt;14&lt;/span&gt;
    &lt;/span&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;span class="badge border bg-light text-defaulttextcolor font-semibold font-[.7rem]"&gt;&lt;i class="fe fe-eye me-2 inline-block"&gt;&lt;/i&gt;13.2k&lt;/span&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;span class="text-badge relative"&gt;
        &lt;span class="text text-lg"&gt;Inbox&lt;/span&gt;
        &lt;span class="badge !rounded-full bg-success text-white"&gt;32&lt;/span&gt;
    &lt;/span&gt;
&lt;/div&gt;
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
                                    Headings
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <h1 class="text-[2.5rem]">Example heading <span
                                        class="badge bg-primary text-white !text-[11px] leading-none">New</span></h1>
                                <h2 class="text-[2rem]">Example heading <span
                                        class="badge bg-primary text-white !text-[11px] leading-none">New</span></h2>
                                <h3 class="text-[1.75rem]">Example heading <span
                                        class="badge bg-primary text-white !text-[11px] leading-none">New</span></h3>
                                <h4 class="text-[1.5rem]">Example heading <span
                                        class="badge bg-primary text-white !text-[11px] leading-none">New</span></h4>
                                <h5 class="text-[1.25rem]">Example heading <span
                                        class="badge bg-primary text-white !text-[11px] leading-none">New</span></h5>
                                <h6 class="text-[1rem]">Example heading <span
                                        class="badge bg-primary text-white !text-[11px] leading-none">New</span></h6>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;h1 class="text-[2.5rem]"&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2 class="text-[2rem]"&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3 class="text-[1.75rem]"&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h3&gt;
&lt;h4 class="text-[1.5rem]"&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5 class="text-[1.25rem]"&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6 class="text-[1rem]"&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-6 -->

                <!-- Start::row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Gradient Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <span class="badge bg-primary-gradient">Primary</span>
                                <span class="badge bg-secondary-gradient">Secondary</span>
                                <span class="badge bg-success-gradient">Success</span>
                                <span class="badge bg-danger-gradient">Danger</span>
                                <span class="badge bg-warning-gradient">Warning</span>
                                <span class="badge bg-info-gradient">Info</span>
                                <span class="badge bg-orange-gradient">orange</span>
                                <span class="badge bg-purple-gradient">purple</span>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;span class="badge bg-primary-gradient"&gt;Primary&lt;/span&gt;
&lt;span class="badge bg-secondary-gradient"&gt;Secondary&lt;/span&gt;
&lt;span class="badge bg-success-gradient"&gt;Success&lt;/span&gt;
&lt;span class="badge bg-danger-gradient"&gt;Danger&lt;/span&gt;
&lt;span class="badge bg-warning-gradient"&gt;Warning&lt;/span&gt;
&lt;span class="badge bg-info-gradient"&gt;Info&lt;/span&gt;
&lt;span class="badge bg-orange-gradient"&gt;orange&lt;/span&gt;
&lt;span class="badge bg-purple-gradient"&gt;purple&lt;/span&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Gradient Pill Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <span class="badge rounded-full bg-primary-gradient">Primary</span>
                                <span class="badge rounded-full bg-secondary-gradient">Secondary</span>
                                <span class="badge rounded-full bg-success-gradient">Success</span>
                                <span class="badge rounded-full bg-danger-gradient">Danger</span>
                                <span class="badge rounded-full bg-warning-gradient">Warning</span>
                                <span class="badge rounded-full bg-info-gradient">Info</span>
                                <span class="badge rounded-full bg-orange-gradient">orange</span>
                                <span class="badge rounded-full bg-purple-gradient">purple</span>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">
&lt;span class="badge rounded-full bg-primary-gradient"&gt;Primary&lt;/span&gt;
&lt;span class="badge rounded-full bg-secondary-gradient"&gt;Secondary&lt;/span&gt;
&lt;span class="badge rounded-full bg-success-gradient"&gt;Success&lt;/span&gt;
&lt;span class="badge rounded-full bg-danger-gradient"&gt;Danger&lt;/span&gt;
&lt;span class="badge rounded-full bg-warning-gradient"&gt;Warning&lt;/span&gt;
&lt;span class="badge rounded-full bg-info-gradient"&gt;Info&lt;/span&gt;
&lt;span class="badge rounded-full bg-orange-gradient"&gt;orange&lt;/span&gt;
&lt;span class="badge rounded-full bg-purple-gradient"&gt;purple&lt;/span&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->

                <!-- Start::row-4 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Outline Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <span class="badge bg-outline-primary">Primary</span>
                                <span class="badge bg-outline-secondary">Secondary</span>
                                <span class="badge bg-outline-success">Success</span>
                                <span class="badge bg-outline-danger">Danger</span>
                                <span class="badge bg-outline-warning">Warning</span>
                                <span class="badge bg-outline-info">Info</span>
                                <span
                                    class="badge bg-outline-light !text-black dark:!text-defaulttextcolor/70">Light</span>
                                <span class="badge bg-outline-dark dark:!text-defaulttextcolor/70">Dark</span>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">
&lt;span class="badge bg-outline-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge bg-outline-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge bg-outline-success"&gt;Success&lt;/span&gt;
&lt;span class="badge bg-outline-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge bg-outline-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge bg-outline-info"&gt;Info&lt;/span&gt;
&lt;span class="badge bg-outline-light !text-black dark:!text-defaulttextcolor/70"&gt;Light&lt;/span&gt;
&lt;span class="badge bg-outline-dark dark:!text-defaulttextcolor/70"&gt;Dark&lt;/span&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Outline Pill Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <span class="badge !rounded-full bg-outline-primary">Primary</span>
                                <span class="badge !rounded-full bg-outline-secondary">Secondary</span>
                                <span class="badge !rounded-full bg-outline-success">Success</span>
                                <span class="badge !rounded-full bg-outline-danger">Danger</span>
                                <span class="badge !rounded-full bg-outline-warning">Warning</span>
                                <span class="badge !rounded-full bg-outline-info">Info</span>
                                <span
                                    class="badge !rounded-full bg-outline-light !text-black dark:!text-defaulttextcolor/70">Light</span>
                                <span
                                    class="badge !rounded-full bg-outline-dark  dark:!text-defaulttextcolor/70">Dark</span>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">
&lt;span class="badge !rounded-full bg-outline-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge !rounded-full bg-outline-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge !rounded-full bg-outline-success"&gt;Success&lt;/span&gt;
&lt;span class="badge !rounded-full bg-outline-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge !rounded-full bg-outline-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge !rounded-full bg-outline-info"&gt;Info&lt;/span&gt;
&lt;span class="badge !rounded-full bg-outline-light !text-black dark:!text-defaulttextcolor/70"&gt;Light&lt;/span&gt;
&lt;span class="badge !rounded-full bg-outline-dark  dark:!text-defaulttextcolor/70"&gt;Dark&lt;/span&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-4 -->

                <!-- Start::row-5 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Pill badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <span class="badge !rounded-full bg-primary text-white">Primary</span>
                                <span class="badge !rounded-full bg-secondary text-white">Secondary</span>
                                <span class="badge !rounded-full bg-success text-white">Success</span>
                                <span class="badge !rounded-full bg-danger text-white">Danger</span>
                                <span class="badge !rounded-full bg-warning text-white">Warning</span>
                                <span class="badge !rounded-full bg-info text-white">Info</span>
                                <span class="badge !rounded-full bg-light text-dark">Light</span>
                                <span class="badge !rounded-full bg-black text-white">Dark</span>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre
                                    class="language-html"><code class="language-html">&lt;span class="badge !rounded-full bg-primary text-white"&gt;Primary&lt;/span&gt;
&lt;span class="badge !rounded-full bg-secondary text-white"&gt;Secondary&lt;/span&gt;
&lt;span class="badge !rounded-full bg-success text-white"&gt;Success&lt;/span&gt;
&lt;span class="badge !rounded-full bg-danger text-white"&gt;Danger&lt;/span&gt;
&lt;span class="badge !rounded-full bg-warning text-white"&gt;Warning&lt;/span&gt;
&lt;span class="badge !rounded-full bg-info text-white"&gt;Info&lt;/span&gt;
&lt;span class="badge !rounded-full bg-light text-dark"&gt;Light&lt;/span&gt;
&lt;span class="badge !rounded-full bg-black text-white"&gt;Dark&lt;/span&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Light Pill Badges
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex flex-wrap gap-2">
                                <span class="badge !rounded-full bg-primary/10 text-primary">Primary</span>
                                <span class="badge !rounded-full bg-secondary/10 text-secondary">Secondary</span>
                                <span class="badge !rounded-full bg-success/10 text-success">Success</span>
                                <span class="badge !rounded-full bg-danger/10 text-danger">Danger</span>
                                <span class="badge !rounded-full bg-warning/10 text-warning">Warning</span>
                                <span class="badge !rounded-full bg-info/10 text-info">Info</span>
                                <span class="badge !rounded-full bg-light/10 text-dark">Light</span>
                                <span class="badge !rounded-full bg-black/10">Dark</span>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="badge !rounded-full bg-primary/10 text-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge !rounded-full bg-secondary/10 text-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge !rounded-full bg-success/10 text-success"&gt;Success&lt;/span&gt;
&lt;span class="badge !rounded-full bg-danger/10 text-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge !rounded-full bg-warning/10 text-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge !rounded-full bg-info/10 text-info"&gt;Info&lt;/span&gt;
&lt;span class="badge !rounded-full bg-light/10 text-dark"&gt;Light&lt;/span&gt;
&lt;span class="badge !rounded-full bg-black/10"&gt;Dark&lt;/span&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-5 -->
            </div>
        </div>
        <!--APP-CONTENT END-->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection