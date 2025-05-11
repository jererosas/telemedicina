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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Offcanvas</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Offcanvas</h1>
                    </div>
                    <div class="btn-list">
                        <button
                            class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
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
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Live demo
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn  btn-wave !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <button type="button" class="ti-btn  btn-wave ti-btn-primary"
                                    data-hs-overlay="#hs-overlay-example">
                                    Button
                                </button>
                                <div id="hs-overlay-example"
                                    class="hs-overlay hidden ti-offcanvas ti-offcanvas-left !z-[105]" tabindex="-1">
                                    <div class="ti-offcanvas-header">
                                        <h6 class="ti-offcanvas-title !text-[1.25rem] !font-medium">
                                            Notifications
                                        </h6>
                                        <button type="button"
                                            class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            data-hs-overlay="#hs-overlay-example">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="ti-offcanvas-body !h-[90%] !p-0">
                                        <div>
                                            <ul class="ti-list-group ti-list-group-flush mb-0">
                                                <li class="ti-list-group-item !border-t-0">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-primary !rounded-full text-white">
                                                                NW
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">New Website Created<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">20
                                                                    Nov 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>30
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Brenda New product
                                                                launching<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">1
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>7
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-secondary text-white !rounded-full">
                                                                M
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm
                                                                available<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">5
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                OL
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Olivia New schedule
                                                                release<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">6
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>45
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-warning text-white !rounded-full">
                                                                A
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin
                                                                launch<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">7
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>28
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for
                                                                dinner<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">10
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>14
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;button type="button" class="ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-overlay-example"&gt;
    Button
&lt;/button&gt;
&lt;div id="hs-overlay-example" class="hs-overlay hidden ti-offcanvas ti-offcanvas-left !z-[105]" tabindex="-1"&gt;
    &lt;div class="ti-offcanvas-header"&gt;
        &lt;h6 class="ti-offcanvas-title !text-[1.25rem] !font-medium"&gt;
          Notifications
        &lt;/h6&gt;
        &lt;button type="button" class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-example"&gt;
            &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
            &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
        &lt;div&gt;
            &lt;ul class="ti-list-group ti-list-group-flush mb-0"&gt;
                &lt;li class="ti-list-group-item !border-t-0"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-primary !rounded-full text-white"&gt;
                              NW
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                              CH
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                              S
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                              RC
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-secondary text-white !rounded-full"&gt;
                              M
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                              OL
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-warning text-white !rounded-full"&gt;
                              A
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                              CH
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                              S
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                              RC
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Body scrolling
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn  btn-wave !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <button type="button" class="m-1 ms-0 ti-btn  btn-wave ti-btn-primary"
                                    data-hs-overlay="#hs-overlay-body-scrolling">
                                    Enable body scrolling
                                </button>
                                <div id="hs-overlay-body-scrolling"
                                    class="hs-overlay ti-offcanvas ti-offcanvas-left hidden [--body-scroll:true] [--overlay-backdrop:false] !z-[105]"
                                    tabindex="-1">
                                    <div class="ti-offcanvas-header">
                                        <h6 class="ti-offcanvas-title !text-[1.25rem] !font-medium">
                                            Notifications
                                        </h6>
                                        <button type="button"
                                            class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            data-hs-overlay="#hs-overlay-body-scrolling">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="ti-offcanvas-body !h-[90%] !p-0">
                                        <div>
                                            <ul class="ti-list-group ti-list-group-flush mb-0">
                                                <li class="ti-list-group-item !border-t-0">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-primary !rounded-full text-white">
                                                                NW
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">New Website Created<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">20
                                                                    Nov 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>30
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Brenda New product
                                                                launching<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">1
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>7
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-secondary text-white !rounded-full">
                                                                M
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm
                                                                available<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">5
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                OL
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Olivia New schedule
                                                                release<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">6
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>45
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-warning text-white !rounded-full">
                                                                A
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin
                                                                launch<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">7
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>28
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for
                                                                dinner<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">10
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>14
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;button type="button" class="m-1 ms-0 ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-overlay-body-scrolling"&gt;
    Enable body scrolling
&lt;/button&gt;
&lt;div id="hs-overlay-body-scrolling" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden [--body-scroll:true] [--overlay-backdrop:false] !z-[105]"  tabindex="-1"&gt;
  &lt;div class="ti-offcanvas-header"&gt;
      &lt;h6 class="ti-offcanvas-title !text-[1.25rem] !font-medium"&gt;
        Notifications
      &lt;/h6&gt;
      &lt;button type="button" class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-body-scrolling"&gt;
          &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
          &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
          &lt;/svg&gt;
      &lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
    &lt;div&gt;
        &lt;ul class="ti-list-group ti-list-group-flush mb-0"&gt;
            &lt;li class="ti-list-group-item !border-t-0"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-primary !rounded-full text-white"&gt;
                          NW
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                          CH
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                          S
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md !rounded-full"&gt;
                          &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                          RC
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md !rounded-full"&gt;
                          &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-secondary text-white !rounded-full"&gt;
                          M
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                          OL
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-warning text-white !rounded-full"&gt;
                          A
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md !rounded-full"&gt;
                          &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                          CH
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                          S
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md !rounded-full"&gt;
                          &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                          RC
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Enable backdrop
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn  btn-wave !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <button type="button" class="m-1 ms-0 ti-btn  btn-wave ti-btn-primary"
                                    data-hs-overlay="#hs-overlay-backdrop-default">
                                    Enable backdrop
                                </button>

                                <div id="hs-overlay-backdrop-default"
                                    class="hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105]" tabindex="-1">
                                    <div class="ti-offcanvas-header">
                                        <h6 class="ti-offcanvas-title !text-[1.25rem] !font-medium">
                                            Notifications
                                        </h6>
                                        <button type="button"
                                            class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            data-hs-overlay="#hs-overlay-backdrop-default">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="ti-offcanvas-body !h-[90%] !p-0">
                                        <div>
                                            <ul class="ti-list-group ti-list-group-flush mb-0">
                                                <li class="ti-list-group-item !border-t-0">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-primary !rounded-full text-white">
                                                                NW
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">New Website Created<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">20
                                                                    Nov 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>30
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Brenda New product
                                                                launching<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">1
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>7
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-secondary text-white !rounded-full">
                                                                M
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm
                                                                available<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">5
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                OL
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Olivia New schedule
                                                                release<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">6
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>45
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-warning text-white !rounded-full">
                                                                A
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin
                                                                launch<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">7
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>28
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for
                                                                dinner<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">10
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>14
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;button type="button" class="m-1 ms-0 ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-overlay-backdrop-default"&gt;
    Enable backdrop
 &lt;/button&gt;

 &lt;div id="hs-overlay-backdrop-default" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105]" tabindex="-1"&gt;
   &lt;div class="ti-offcanvas-header"&gt;
       &lt;h6 class="ti-offcanvas-title !text-[1.25rem] !font-medium"&gt;
         Notifications
       &lt;/h6&gt;
       &lt;button type="button" class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-backdrop-default"&gt;
           &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
           &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
           &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
           &lt;/svg&gt;
       &lt;/button&gt;
   &lt;/div&gt;
   &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
     &lt;div&gt;
         &lt;ul class="ti-list-group ti-list-group-flush mb-0"&gt;
             &lt;li class="ti-list-group-item !border-t-0"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-primary !rounded-full text-white"&gt;
                           NW
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                           CH
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                           S
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md !rounded-full"&gt;
                           &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                           RC
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md !rounded-full"&gt;
                           &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-secondary text-white !rounded-full"&gt;
                           M
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                           OL
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-warning text-white !rounded-full"&gt;
                           A
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md !rounded-full"&gt;
                           &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                           CH
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                           S
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md !rounded-full"&gt;
                           &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li class="ti-list-group-item"&gt;
               &lt;div class="flex items-center"&gt;
                   &lt;div class="me-2"&gt;
                       &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                           RC
                       &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="flex-grow"&gt;
                       &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                       &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
         &lt;/ul&gt;
       &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Enable Body scrolling and backdrop
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn  btn-wave !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <button type="button" class="m-1 ms-0 ti-btn  btn-wave ti-btn-primary"
                                    data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
                                    Enable both scrolling &amp; backdrop
                                </button>

                                <div id="hs-overlay-backdrop-with-scrolling"
                                    class="hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105] [--body-scroll:true]"
                                    tabindex="-1" data-hs-overlay-scroll="true">
                                    <div class="ti-offcanvas-header">
                                        <h6 class="ti-offcanvas-title !text-[1.25rem] !font-medium">
                                            Notifications
                                        </h6>
                                        <button type="button"
                                            class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="ti-offcanvas-body !h-[90%] !p-0">
                                        <div>
                                            <ul class="ti-list-group ti-list-group-flush mb-0">
                                                <li class="ti-list-group-item !border-t-0">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-primary !rounded-full text-white">
                                                                NW
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">New Website Created<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">20
                                                                    Nov 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>30
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Brenda New product
                                                                launching<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">1
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>7
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-secondary text-white !rounded-full">
                                                                M
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm
                                                                available<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">5
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                OL
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Olivia New schedule
                                                                release<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">6
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>45
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-warning text-white !rounded-full">
                                                                A
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin
                                                                launch<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">7
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>28
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for
                                                                dinner<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">10
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>14
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;button type="button" class="m-1 ms-0 ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-overlay-backdrop-with-scrolling"&gt;
    Enable both scrolling &amp; backdrop
&lt;/button&gt;

&lt;div id="hs-overlay-backdrop-with-scrolling" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105] [--body-scroll:true]" tabindex="-1" data-hs-overlay-scroll="true"&gt;
  &lt;div class="ti-offcanvas-header"&gt;
      &lt;h6 class="ti-offcanvas-title !text-[1.25rem] !font-medium"&gt;
        Notifications
      &lt;/h6&gt;
      &lt;button type="button" class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-backdrop-with-scrolling"&gt;
          &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
          &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
          &lt;/svg&gt;
      &lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
    &lt;div&gt;
        &lt;ul class="ti-list-group ti-list-group-flush mb-0"&gt;
            &lt;li class="ti-list-group-item !border-t-0"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-primary !rounded-full text-white"&gt;
                          NW
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                          CH
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                          S
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md !rounded-full"&gt;
                          &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                          RC
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md !rounded-full"&gt;
                          &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-secondary text-white !rounded-full"&gt;
                          M
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                          OL
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-warning text-white !rounded-full"&gt;
                          A
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md !rounded-full"&gt;
                          &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                          CH
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                          S
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md !rounded-full"&gt;
                          &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class="ti-list-group-item"&gt;
              &lt;div class="flex items-center"&gt;
                  &lt;div class="me-2"&gt;
                      &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                          RC
                      &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow"&gt;
                      &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                      &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Backdrop color
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn  btn-wave !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <button type="button"
                                    class="m-1 ms-0 ti-btn  btn-wave ti-btn-primary disabled:pointer-events-none"
                                    aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-offcanvas-custom-backdrop-color"
                                    data-hs-overlay="#hs-offcanvas-custom-backdrop-color">
                                    Open offcanvas
                                </button>

                                <div id="hs-offcanvas-custom-backdrop-color"
                                    class="!max-w-[27.5rem] hs-overlay-backdrop-open:bg-primary/50  hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105] dark:hs-overlay-backdrop-open:bg-primary/50"
                                    role="dialog" tabindex="-1"
                                    aria-labelledby="hs-offcanvas-custom-backdrop-color-label">
                                    <div
                                        class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                        <h6 id="hs-offcanvas-custom-backdrop-color-label"
                                            class="font-bold text-gray-800 dark:text-white">
                                            Notifications
                                        </h6>
                                        <button type="button"
                                            class="ti-btn inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent text-gray-500  focus:outline-none  disabled:opacity-50 disabled:pointer-events-none  dark:text-neutral-400 dark:focus:bg-neutral-600"
                                            aria-label="Close" data-hs-overlay="#hs-offcanvas-custom-backdrop-color">
                                            <span class="sr-only">Close</span>
                                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="ti-offcanvas-body !p-0">
                                        <div>
                                            <ul class="ti-list-group ti-list-group-flush mb-0">
                                                <li class="ti-list-group-item !border-t-0">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-primary !rounded-full text-white">
                                                                NW
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">New Website Created<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">20
                                                                    Nov 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>30
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Brenda New product
                                                                launching<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">1
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>7
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-secondary text-white !rounded-full">
                                                                M
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm
                                                                available<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">5
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                OL
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Olivia New schedule
                                                                release<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">6
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>45
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-warning text-white !rounded-full">
                                                                A
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin
                                                                launch<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">7
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>28
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for
                                                                dinner<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">10
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>14
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html" tabindex="0"><code class="language-html">&lt;button type="button"
    class="m-1 ms-0 ti-btn  btn-wave ti-btn-primary disabled:pointer-events-none"
    aria-haspopup="dialog" aria-expanded="false"
    aria-controls="hs-offcanvas-custom-backdrop-color"
    data-hs-overlay="#hs-offcanvas-custom-backdrop-color"&gt;
    Open offcanvas
&lt;/button&gt;

&lt;div id="hs-offcanvas-custom-backdrop-color"
    class="hs-overlay hs-overlay-open:translate-x-0 !z-[105] !max-w-[27.5rem] hs-overlay-backdrop-open:bg-blue-950/90 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full bg-white border-e dark:bg-neutral-800 dark:border-neutral-700 dark:hs-overlay-backdrop-open:bg-blue-950/90"
    role="dialog" tabindex="-1"
    aria-labelledby="hs-offcanvas-custom-backdrop-color-label"&gt;
    &lt;div
        class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700"&gt;
        &lt;h6 id="hs-offcanvas-custom-backdrop-color-label"
            class="font-bold text-gray-800 dark:text-white"&gt;
            Notifications
        &lt;/h6&gt;
        &lt;button type="button"
            class="ti-btn inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent text-gray-500  focus:outline-none  disabled:opacity-50 disabled:pointer-events-none  dark:text-neutral-400 dark:focus:bg-neutral-600"
            aria-label="Close" data-hs-overlay="#hs-offcanvas-custom-backdrop-color"&gt;
            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
            &lt;svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
                &lt;path d="M18 6 6 18"&gt;&lt;/path&gt;
                &lt;path d="m6 6 12 12"&gt;&lt;/path&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="ti-offcanvas-body !p-0"&gt;
        &lt;div&gt;
            &lt;ul class="ti-list-group ti-list-group-flush mb-0"&gt;
                &lt;li class="ti-list-group-item !border-t-0"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-primary !rounded-full text-white"&gt;
                                NW
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;20
                                    Nov 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30
                                mins ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                                CH
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Prepare for the new
                                project&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3
                                    Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                                S
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Decide the live
                                discussion&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17
                                    Feb 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md !rounded-full"&gt;
                                &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                    class="!rounded-full"&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29
                                    Dec 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                                RC
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31
                                    Dec 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md !rounded-full"&gt;
                                &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt=""
                                    class="!rounded-full"&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Brenda New product
                                launching&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;1
                                    Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-secondary text-white !rounded-full"&gt;
                                M
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm
                                available&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;5
                                    Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                                OL
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Olivia New schedule
                                release&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;6
                                    Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45
                                mins ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-warning text-white !rounded-full"&gt;
                                A
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin
                                launch&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;7
                                    Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28
                                mins ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md !rounded-full"&gt;
                                &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                    class="!rounded-full"&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for
                                dinner&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;10
                                    Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                                CH
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Prepare for the new
                                project&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3
                                    Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                                S
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Decide the live
                                discussion&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17
                                    Feb 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md !rounded-full"&gt;
                                &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                    class="!rounded-full"&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29
                                    Dec 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span
                                class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                                RC
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span
                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31
                                    Dec 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span
                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i
                                    class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4
                                hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Placement
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn  btn-wave !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <button type="button" class="ti-btn  btn-wave ti-btn-primary"
                                    data-hs-overlay="#hs-overlay-top">
                                    Toggle top offcanvas
                                </button>


                                <div id="hs-overlay-top"
                                    class="hs-overlay hidden ti-offcanvas ti-offcanvas-top !z-[105]" tabindex="-1">
                                    <div class="ti-offcanvas-header">
                                        <h5 class="ti-offcanvas-title !text-[1.25rem] !font-medium">
                                            Offcanvas top
                                        </h5>
                                        <button type="button"
                                            class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            data-hs-overlay="#hs-overlay-top">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="ti-offcanvas-body !h-[90%] !p-4">
                                        <p class="text-gray-800 text-textmuted dark:text-textmuted/50">
                                            ...
                                        </p>
                                    </div>
                                </div>
                                <button type="button" class="ti-btn  btn-wave ti-btn-primary"
                                    data-hs-overlay="#hs-overlay-right">
                                    Toggle right offcanvas
                                </button>
                                <div id="hs-overlay-right" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right"
                                    tabindex="-1">
                                    <div class="ti-offcanvas-header">
                                        <h5 class="ti-offcanvas-title !text-[1.25rem] !font-medium">
                                            Notifications
                                        </h5>
                                        <button type="button"
                                            class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            data-hs-overlay="#hs-overlay-right">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="ti-offcanvas-body !h-[90%] !p-0">
                                        <div>
                                            <ul class="ti-list-group ti-list-group-flush mb-0">
                                                <li class="ti-list-group-item !border-t-0">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-primary !rounded-full text-white">
                                                                NW
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">New Website Created<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">20
                                                                    Nov 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>30
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Brenda New product
                                                                launching<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">1
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>7
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-secondary text-white !rounded-full">
                                                                M
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm
                                                                available<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">5
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                OL
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Olivia New schedule
                                                                release<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">6
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>45
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-warning text-white !rounded-full">
                                                                A
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin
                                                                launch<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">7
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>28
                                                                mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for
                                                                dinner<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">10
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>14
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-danger !rounded-full text-white">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for the new
                                                                project<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">3
                                                                    Jan 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>2
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-info !rounded-full text-white">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Decide the live
                                                                discussion<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">17
                                                                    Feb 2023</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>3
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                                    class="!rounded-full">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">29
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center">
                                                        <div class="me-2">
                                                            <span
                                                                class="avatar avatar-md bg-success text-white !rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span
                                                                    class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left">31
                                                                    Dec 2022</span></p>
                                                            <span
                                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50"><i
                                                                    class="ri-time-line align-middle me-1 inline-block"></i>4
                                                                hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="ti-btn  btn-wave ti-btn-primary"
                                    data-hs-overlay="#hs-overlay-bottom">
                                    Toggle bottom offcanvas
                                </button>

                                <div id="hs-overlay-bottom"
                                    class="hs-overlay hidden ti-offcanvas ti-offcanvas-bottom !z-[105]" tabindex="-1">
                                    <div class="ti-offcanvas-header">
                                        <h5 class="ti-offcanvas-title !text-[1.25rem] !font-medium">
                                            Offcanvas title
                                        </h5>
                                        <button type="button"
                                            class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            data-hs-overlay="#hs-overlay-bottom">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="ti-offcanvas-body !h-[90%] !p-4">
                                        <p class="text-gray-800 text-textmuted dark:text-textmuted/50">
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;button type="button" class="ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-overlay-top"&gt;
    Toggle top offcanvas
&lt;/button&gt;


&lt;div id="hs-overlay-top" class="hs-overlay hidden ti-offcanvas ti-offcanvas-top !z-[105]" tabindex="-1"&gt;
    &lt;div class="ti-offcanvas-header"&gt;
        &lt;h5 class="ti-offcanvas-title !text-[1.25rem] !font-medium"&gt;
        Offcanvas top
        &lt;/h5&gt;
        &lt;button type="button" class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-top"&gt;
        &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
        &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
        &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="ti-offcanvas-body !h-[90%]"&gt;
        &lt;p class="text-gray-800 text-textmuted dark:text-textmuted/50"&gt;
        ...
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;button type="button" class="ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-overlay-right"&gt;
Toggle right offcanvas
&lt;/button&gt;
&lt;div id="hs-overlay-right" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1"&gt;
    &lt;div class="ti-offcanvas-header"&gt;
        &lt;h5 class="ti-offcanvas-title !text-[1.25rem] !font-medium"&gt;
            Notifications
        &lt;/h5&gt;
        &lt;button type="button" class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-right"&gt;
            &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
            &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
        &lt;div&gt;
            &lt;ul class="ti-list-group ti-list-group-flush mb-0"&gt;
                &lt;li class="ti-list-group-item !border-t-0"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-primary !rounded-full text-white"&gt;
                                NW
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                                CH
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                                S
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md !rounded-full"&gt;
                                &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                                RC
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md !rounded-full"&gt;
                                &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-secondary text-white !rounded-full"&gt;
                                M
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                                OL
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-warning text-white !rounded-full"&gt;
                                A
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md !rounded-full"&gt;
                                &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-danger !rounded-full text-white"&gt;
                                CH
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-info !rounded-full text-white"&gt;
                                S
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md !rounded-full"&gt;
                                &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="ti-list-group-item"&gt;
                    &lt;div class="flex items-center"&gt;
                        &lt;div class="me-2"&gt;
                            &lt;span class="avatar avatar-md bg-success text-white !rounded-full"&gt;
                                RC
                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow"&gt;
                            &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] dark:text-white/50 ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                            &lt;span class="text-[0.75rem] text-[#8c9097] dark:text-white/50"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
            &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;button type="button" class="ti-btn  btn-wave ti-btn-primary" data-hs-overlay="#hs-overlay-bottom"&gt;
    Toggle bottom offcanvas
&lt;/button&gt;

&lt;div id="hs-overlay-bottom" class="hs-overlay hidden ti-offcanvas ti-offcanvas-bottom !z-[105]" tabindex="-1"&gt;
    &lt;div class="ti-offcanvas-header"&gt;
        &lt;h5 class="ti-offcanvas-title !text-[1.25rem] !font-medium"&gt;
        Offcanvas title
        &lt;/h5&gt;
        &lt;button type="button" class="ti-btn  btn-wave flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-bottom"&gt;
        &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
        &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
        &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="ti-offcanvas-body !h-[90%]"&gt;
        &lt;p class="text-gray-800 text-textmuted dark:text-textmuted/50"&gt;
        ...
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

            </div>
        </div>
        <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection