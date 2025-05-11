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
                                <li class="breadcrumb-item active" aria-current="page">Progress</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Progress</h1>
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
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Basic Progress
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress mb-4 !rounded-full" role="progressbar" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar w-0"></div>
                                </div>
                                <div class="progress mb-4 " role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !rounded-s-full w-1/4"></div>
                                </div>
                                <div class="progress mb-4 !rounded-full" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !rounded-s-full w-1/2"></div>
                                </div>
                                <div class="progress mb-4 !rounded-full" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !rounded-s-full w-3/4"></div>
                                </div>
                                <div class="progress mb-0 !rounded-full" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !rounded-s-full w-full"></div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="progress mb-4 !rounded-full" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar w-0"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 " role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar !rounded-s-full w-1/4"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 !rounded-full" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar !rounded-s-full w-1/2"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 !rounded-full" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar !rounded-s-full w-3/4"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-0 !rounded-full" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar !rounded-s-full w-full"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Striped Progress
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped w-[10%]">
                                    </div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped !bg-secondary !rounded-s-full w-1/4">
                                    </div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped !bg-success !rounded-s-full w-2/4">
                                    </div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped !bg-info !rounded-s-full w-3/4">
                                    </div>
                                </div>
                                <div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped !bg-warning !rounded-s-full w-full">
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar progress-bar-striped w-[10%]"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar progress-bar-striped !bg-secondary !rounded-s-full w-1/4"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar progress-bar-striped !bg-success !rounded-s-full w-2/4"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar progress-bar-striped !bg-info !rounded-s-full w-3/4"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0"
aria-valuemax="100"&gt;
&lt;div class="progress-bar progress-bar-striped !bg-warning !rounded-s-full w-full"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Different Colored Progress
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-secondary !rounded-s-full w-1/5"></div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-warning !rounded-s-full w-2/5"></div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-info !rounded-s-full w-3/5"></div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-success !rounded-s-full w-4/5"></div>
                                </div>
                                <div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-danger !rounded-s-full w-full"></div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0"
aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-secondary !rounded-s-full w-1/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4"
role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-warning !rounded-s-full w-2/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4"
role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-info !rounded-s-full w-3/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4"
role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-success !rounded-s-full w-4/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"
role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-danger !rounded-s-full w-full"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Progress Height
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress progress-xs mb-4" role="progressbar" aria-valuenow="10"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary !rounded-s-full w-[10%]">
                                    </div>
                                </div>
                                <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary !rounded-s-full w-1/4">
                                    </div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar bg-primary !rounded-s-full w-2/4">
                                    </div>
                                </div>
                                <div class="progress progress-lg mb-4" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary !rounded-s-full w-3/4">
                                    </div>
                                </div>
                                <div class="progress progress-xl" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary !rounded-s-full w-full"></div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="progress progress-xs mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-s-full w-[10%]"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-s-full w-1/4"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-s-full w-2/4"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg mb-4" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-s-full w-3/4"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl" role="progressbar" aria-valuenow="100" aria-valuemin="0"
        aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-s-full w-full"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Progress With Labels
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !rounded-s-full w-[10%]">10%</div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-secondary !rounded-s-full w-1/5">20%</div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-success !rounded-s-full w-2/5">40%</div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-info !rounded-s-full w-3/5">60%</div>
                                </div>
                                <div class="progress mb-0" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-warning !rounded-s-full w-4/5">80%</div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="progress mb-4"
role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !rounded-s-full w-[10%]"&gt;10%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4"
        role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-secondary !rounded-s-full w-1/5"&gt;20%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4"
role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-success !rounded-s-full w-2/5"&gt;40%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4"
role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-info !rounded-s-full w-3/5"&gt;60%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-0"
role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-warning !rounded-s-full w-4/5"&gt;80%&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Multiple bars With Sizes
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress-stacked progress-xs mb-4 flex">
                                    <div class="progress-bar w-[5%]" role="progressbar" aria-valuenow="5"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-secondary !rounded-none w-[10%]" role="progressbar"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-success !rounded-none w-[15%]" role="progressbar"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-stacked progress-sm mb-4 flex">
                                    <div class="progress-bar !bg-warning w-[10%]" role="progressbar" aria-valuenow="10"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-info !rounded-none w-[15%]" role="progressbar"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-danger !rounded-none w-[20%]" role="progressbar"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-stacked mb-4 flex">
                                    <div class="progress-bar !bg-info w-[15%]" role="progressbar" aria-valuenow="15"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-success !rounded-none w-1/5" role="progressbar"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !rounded-none w-1/4" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-stacked progress-lg mb-4 flex">
                                    <div class="progress-bar !bg-purplemain w-1/5" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-tealmain !rounded-none w-1/4" role="progressbar"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-orangemain !rounded-none w-[30%]" role="progressbar"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-stacked progress-xl mb-0 flex">
                                    <div class="progress-bar !bg-success w-1/4" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-danger !rounded-none w-[30%]" role="progressbar"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar !bg-warning !rounded-none w-[35%]" role="progressbar"
                                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="progress-stacked progress-xs mb-4 flex"&gt;
    &lt;div class="progress-bar w-[5%]" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-secondary !rounded-none w-[10%]" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-success !rounded-none w-[15%]" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-sm mb-4 flex"&gt;
    &lt;div class="progress-bar !bg-warning w-[10%]" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-info !rounded-none w-[15%]" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-danger !rounded-none w-[20%]" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked mb-4 flex"&gt;
    &lt;div class="progress-bar !bg-info w-[15%]"
        role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-success !rounded-none w-1/5"
        role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !rounded-none w-1/4"
        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-lg mb-4 flex"&gt;
    &lt;div class="progress-bar !bg-purplemain w-1/5"
        role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-tealmain !rounded-none w-1/4"
        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-orangemain !rounded-none w-[30%]"
        role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-xl mb-0 flex"&gt;
    &lt;div class="progress-bar !bg-success w-1/4"
        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-danger !rounded-none w-[30%]"
        role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-warning !rounded-none w-[35%]"
        role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row- -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Labels at The end
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4">
                                    <div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">25%</span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4">
                                    <div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4">
                                    <div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">75%</span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4">
                                    <div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">100%</span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4">
                                    <div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-danger text-xs text-white text-center"
                                            style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span
                                            class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-red-500 !text-white dark:text-white">
                                            <svg class="flex-shrink-0 size-3 !fill-white"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4">
                                    <div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-success text-xs text-white text-center"
                                            style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span
                                            class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white">
                                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4"&gt;
&lt;div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div class="ti-main-progress-bar bg-primary text-xs text-white text-center"  style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="w-10 text-end"&gt;
&lt;span class="text-sm text-gray-800 dark:text-white"&gt;25%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4"&gt;
&lt;div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div class="ti-main-progress-bar bg-primary text-xs text-white text-center"  style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="w-10 text-end"&gt;
&lt;span class="text-sm text-gray-800 dark:text-white"&gt;50%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4"&gt;
&lt;div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div class="ti-main-progress-bar bg-primary text-xs text-white text-center"  style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="w-10 text-end"&gt;
&lt;span class="text-sm text-gray-800 dark:text-white"&gt;75%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4"&gt;
&lt;div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div class="ti-main-progress-bar bg-primary text-xs text-white text-center"  style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="w-10 text-end"&gt;
&lt;span class="text-sm text-gray-800 dark:text-white"&gt;100%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4"&gt;
&lt;div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div class="ti-main-progress-bar bg-danger text-xs text-white text-center"  style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="w-10 text-end"&gt;
    &lt;span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-red-500 text-white"&gt;
        &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
        &lt;path d="M18 6 6 18"&gt;&lt;/path&gt;
        &lt;path d="m6 6 12 12"&gt;&lt;/path&gt;
        &lt;/svg&gt;
    &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full mb-4"&gt;
&lt;div class="ti-main-progress w-full progress bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div class="ti-main-progress-bar bg-success text-xs text-white text-center"  style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="w-10 text-end"&gt;
    &lt;span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white"&gt;
        &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
        &lt;polyline points="20 6 9 17 4 12"&gt;&lt;/polyline&gt;
        &lt;/svg&gt;
    &lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Progress With Title Label
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-4">
                                <!-- Progress -->
                                <div class="">
                                    <div class="mb-2 flex justify-between items-center">
                                        <h3 class="text-sm font-semibold text-gray-800 dark:text-white">Progress title
                                        </h3>
                                        <span class="text-sm text-gray-800 dark:text-white">25%</span>
                                    </div>
                                    <div class="ti-main-progress w-full h-2 bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Progress -->
                                <div class="">
                                    <div class="mb-2 flex justify-between items-center">
                                        <h3 class="text-sm font-semibold text-gray-800 dark:text-white">Progress title
                                        </h3>
                                        <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                    </div>
                                    <div class="ti-main-progress w-full h-2 bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Progress -->
                                <div class="">
                                    <div class="mb-2 flex justify-between items-center">
                                        <h3 class="text-sm font-semibold text-gray-800 dark:text-white">Progress title
                                        </h3>
                                        <span class="text-sm text-gray-800 dark:text-white">75%</span>
                                    </div>
                                    <div class="ti-main-progress w-full h-2 bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Progress -->
                                <div class="">
                                    <div class="mb-2 flex justify-between items-center">
                                        <h3 class="text-sm font-semibold text-gray-800 dark:text-white">Progress title
                                        </h3>
                                        <span class="text-sm text-gray-800 dark:text-white">100%</span>
                                    </div>
                                    <div class="ti-main-progress w-full h-2 bg-gray-200 dark:bg-bodybg">
                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Progress -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">

&lt;div class=""&gt;
&lt;div class="mb-2 flex justify-between items-center"&gt;
&lt;h3&gt; class="text-sm font-semibold text-gray-800 dark:text-white"&gt;Progress title&lt;/h3&gt;
&lt;span&gt; class="text-sm text-gray-800 dark:text-white"&gt;25%&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-main-progress w-full h-2 bg-gray-200 dark:bg-bodybg"&gt;
&lt;div&gt; class="ti-main-progress-bar bg-primary text-xs text-white text-center"  style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;


&lt;div class=""&gt;
&lt;div class="mb-2 flex justify-between items-center"&gt;
&lt;h3&gt; class="text-sm font-semibold text-gray-800 dark:text-white"&gt;Progress title&lt;/h3&gt;
&lt;span&gt; class="text-sm text-gray-800 dark:text-white"&gt;50%&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-main-progress w-full h-2 bg-gray-200 dark:bg-bodybg"&gt;
&lt;div&gt; class="ti-main-progress-bar bg-primary text-xs text-white text-center"  style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;


&lt;div class=""&gt;
&lt;div class="mb-2 flex justify-between items-center"&gt;
&lt;h3&gt; class="text-sm font-semibold text-gray-800 dark:text-white"&gt;Progress title&lt;/h3&gt;
&lt;span&gt; class="text-sm text-gray-800 dark:text-white"&gt;75%&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-main-progress w-full h-2 bg-gray-200 dark:bg-bodybg"&gt;
&lt;div&gt; class="ti-main-progress-bar bg-primary text-xs text-white text-center"  style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;


&lt;div class=""&gt;
&lt;div class="mb-2 flex justify-between items-center"&gt;
&lt;h3&gt; class="text-sm font-semibold text-gray-800 dark:text-white"&gt;Progress title&lt;/h3&gt;
&lt;span&gt; class="text-sm text-gray-800 dark:text-white"&gt;100%&lt;/span&gt;
&lt;/div&gt;
&lt;div class="ti-main-progress w-full h-2 bg-gray-200 dark:bg-bodybg"&gt;
&lt;div&gt; class="ti-main-progress-bar bg-primary text-xs text-white text-center"  style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row- -->

                <!-- Start:: row- -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Progress With Steps
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body space-y-4">
                                <!-- Step Progress -->
                                <div class="max-w-40 ti-main-progress !h-full items-center gap-x-1">
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div>
                                        <div class="w-10 text-end">
                                            <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Step Progress -->

                                <!-- Step Progress -->
                                <div class="ti-main-progress !h-full items-center gap-x-1">
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div>
                                        <div class="w-10 text-end">
                                            <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Step Progress -->

                                <!-- Step Progress -->
                                <div class="max-w-40 ti-main-progress !h-full items-center gap-x-1">
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-danger text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div>
                                        <div class="w-10 text-end">
                                            <span class="text-sm text-danger">25%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Step Progress -->

                                <!-- Step Progress -->
                                <div class="w-full ti-main-progress !h-full items-center gap-x-1">
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-danger text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div>
                                        <div class="w-10 text-end">
                                            <span class="text-sm text-danger">25%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Step Progress -->

                                <!-- Step Progress -->
                                <div class="max-w-40 ti-main-progress !h-full items-center gap-x-1">
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div>
                                        <div class="w-10 text-end">
                                            <span class="text-sm text-gray-800 dark:text-white">100%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Step Progress -->

                                <!-- Step Progress -->
                                <div class="ti-main-progress !h-full items-center gap-x-1">
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div>
                                        <div class="w-10 text-end">
                                            <span class="text-sm text-gray-800 dark:text-white">100%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Step Progress -->

                                <!-- Step Progress -->
                                <div class="max-w-[8.5rem] ti-main-progress !h-full items-center gap-x-1">
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="ms-1">
                                        <span
                                            class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white">
                                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!-- End Step Progress -->

                                <!-- Step Progress -->
                                <div class="ti-main-progress !h-full items-center gap-x-1">
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
                                        role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="ms-1">
                                        <span
                                            class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white">
                                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!-- End Step Progress -->
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="max-w-40 ti-main-progress !h-full items-center gap-x-1"&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div&gt;
&lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;50%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="ti-main-progress !h-full items-center gap-x-1"&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div&gt;
&lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;50%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="max-w-40 ti-main-progress !h-full items-center gap-x-1"&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div&gt;
&lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-danger"&gt;25%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="w-full ti-main-progress !h-full items-center gap-x-1"&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div&gt;
&lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-danger"&gt;25%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="max-w-40 ti-main-progress !h-full items-center gap-x-1"&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div&gt;
&lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;100%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="ti-main-progress !h-full items-center gap-x-1"&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div&gt;
&lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;100%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="max-w-[8.5rem] ti-main-progress !h-full items-center gap-x-1"&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="ms-1"&gt;
&lt;span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white"&gt;
    &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;polyline points="20 6 9 17 4 12"&gt;&lt;/polyline&gt;
    &lt;/svg&gt;
&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="ti-main-progress !h-full items-center gap-x-1"&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500"
 role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;div class="ms-1"&gt;
&lt;span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white"&gt;
    &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round"&gt;
        &lt;polyline points="20 6 9 17 4 12"&gt;&lt;/polyline&gt;
    &lt;/svg&gt;
&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Vertical Progress
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="flex space-x-8 rtl:space-x-reverse">
                                    <div
                                        class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg">
                                        <div class="bg-primary ti-main-progress-bar" style="height: 25%"
                                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div
                                        class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg">
                                        <div class="bg-secondary ti-main-progress-bar" style="height: 40%"
                                            role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div
                                        class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg">
                                        <div class="bg-warning ti-main-progress-bar" style="height: 60%"
                                            role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div
                                        class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg">
                                        <div class="bg-info ti-main-progress-bar" style="height: 80%" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div
                                        class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg">
                                        <div class="bg-danger ti-main-progress-bar" style="height: 100%"
                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="flex space-x-8 rtl:space-x-reverse"&gt;
&lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div&gt; class="bg-primary ti-main-progress-bar"  style="height: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div&gt; class="bg-secondary ti-main-progress-bar"  style="height: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div&gt; class="bg-warning ti-main-progress-bar"  style="height: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div&gt; class="bg-info ti-main-progress-bar"  style="height: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-[17rem] bg-gray-200 dark:bg-bodybg"&gt;
    &lt;div&gt; class="bg-danger ti-main-progress-bar"  style="height: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Circular progress
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="flex gap-x-5">
                                    <!-- Circular Progress -->
                                    <div class="relative size-40">
                                        <svg class="size-full" width="36" height="36" viewBox="0 0 36 36"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Background Circle -->
                                            <circle cx="18" cy="18" r="16" fill="none"
                                                class="stroke-current text-gray-200 dark:text-white/10"
                                                stroke-width="2"></circle>
                                            <!-- Progress Circle inside a group with rotation -->
                                            <g class="origin-center -rotate-90 transform">
                                                <circle cx="18" cy="18" r="16" fill="none"
                                                    class="stroke-current text-primary" stroke-width="2"
                                                    stroke-dasharray="100" stroke-dashoffset="75"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                    <!-- End Circular Progress -->

                                    <!-- Circular Progress -->
                                    <div class="relative size-40">
                                        <svg class="size-full" width="36" height="36" viewBox="0 0 36 36"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Background Circle -->
                                            <circle cx="18" cy="18" r="16" fill="none"
                                                class="stroke-current text-gray-200 dark:text-white/10"
                                                stroke-width="2"></circle>
                                            <!-- Progress Circle inside a group with rotation -->
                                            <g class="origin-center -rotate-90 transform">
                                                <circle cx="18" cy="18" r="16" fill="none"
                                                    class="stroke-current text-primary" stroke-width="2"
                                                    stroke-dasharray="100" stroke-dashoffset="75"></circle>
                                            </g>
                                        </svg>
                                        <!-- Percentage Text -->
                                        <div
                                            class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                            <span
                                                class="text-center text-2xl font-bold text-gray-800 dark:text-white">72%</span>
                                        </div>
                                    </div>
                                    <!-- End Circular Progress -->
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="flex gap-x-5"&gt;
&lt;!-- Circular Progress --&gt;
&lt;div class="relative size-40"&gt;
&lt;svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;!-- Background Circle --&gt;
&lt;circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-white/10" stroke-width="2"&gt;&lt;/circle&gt;
&lt;!-- Progress Circle inside a group with rotation --&gt;
&lt;g class="origin-center -rotate-90 transform"&gt;
    &lt;circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="75"&gt;&lt;/circle&gt;
&lt;/g&gt;
&lt;/svg&gt;
&lt;/div&gt;
&lt;!-- End Circular Progress --&gt;

&lt;!-- Circular Progress --&gt;
&lt;div class="relative size-40"&gt;
&lt;svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;!-- Background Circle --&gt;
&lt;circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-white/10" stroke-width="2"&gt;&lt;/circle&gt;
&lt;!-- Progress Circle inside a group with rotation --&gt;
&lt;g class="origin-center -rotate-90 transform"&gt;
    &lt;circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="75"&gt;&lt;/circle&gt;
&lt;/g&gt;
&lt;/svg&gt;
&lt;!-- Percentage Text --&gt;
&lt;div class="absolute top-1/2 start-1/2 transform -translate-y-1/2 -translate-x-1/2"&gt;
&lt;span class="text-center text-2xl font-bold text-gray-800 dark:text-white"&gt;72%&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Circular Progress --&gt;
&lt;/div&gt;
</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row- -->

                <!-- Start:: row-4 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Animated Stripped Progress
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated w-[10%]"></div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div
                                        class="progress-bar !bg-secondary progress-bar-striped progress-bar-animated w-1/5">
                                    </div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div
                                        class="progress-bar !bg-success progress-bar-striped progress-bar-animated w-2/5">
                                    </div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar !bg-info progress-bar-striped progress-bar-animated w-3/5">
                                    </div>
                                </div>
                                <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div
                                        class="progress-bar !bg-warning progress-bar-striped progress-bar-animated w-4/5">
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar progress-bar-striped progress-bar-animated w-[10%]"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated w-1/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-success progress-bar-striped progress-bar-animated w-2/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-info progress-bar-striped progress-bar-animated w-3/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-warning progress-bar-striped progress-bar-animated w-4/5"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Gradient Progress
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar bg-primary-gradient w-[10%]"></div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar bg-secondary-gradient w-1/5"></div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar bg-success-gradient w-2/5"></div>
                                </div>
                                <div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar bg-info-gradient w-3/5"></div>
                                </div>
                                <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar bg-warning-gradient w-4/5"></div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary-gradient w-[10%]"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary-gradient w-1/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success-gradient w-2/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info-gradient w-3/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning-gradient w-4/5"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Animated Progress
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="10"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary-gradient w-[10%]"></div>
                                </div>
                                <div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-secondary-gradient w-1/5"></div>
                                </div>
                                <div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success-gradient w-2/5"></div>
                                </div>
                                <div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info-gradient w-3/5"></div>
                                </div>
                                <div class="progress progress-animate" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning-gradient w-4/5"></div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary-gradient w-[10%]"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary-gradient w-1/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success-gradient w-2/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info-gradient w-3/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-animate" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning-gradient w-4/5"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Progress-1
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress progress-sm progress-custom mb-[3rem] progress-animate"
                                    role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <h6 class="progress-bar-title text-[0.69rem]">Mobiles</h6>
                                    <div class="progress-bar w-1/2">
                                        <div class="progress-bar-value !bg-primary">50%</div>
                                    </div>
                                </div>
                                <div class="progress progress-sm progress-custom mb-[3rem] progress-animate"
                                    role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <h6 class="progress-bar-title !bg-secondary text-[0.69rem] after:!border-s-secondary">
                                        Watches</h6>
                                    <div class="progress-bar progress-secondary w-3/5">
                                        <div class="progress-bar-value !bg-secondary">60%</div>
                                    </div>
                                </div>
                                <div class="progress progress-sm progress-custom progress-animate" role="progressbar"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <h6 class="progress-bar-title !bg-success text-[0.69rem] after:!border-s-success">
                                        Shirts</h6>
                                    <div class="progress-bar progress-success w-[70%]">
                                        <div class="progress-bar-value !bg-success">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class="progress progress-sm progress-custom mb-[3rem] progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;h6 class="progress-bar-title text-[1rem]"&gt;Mobiles&lt;/h6&gt;
&lt;div class="progress-bar w-1/2"&gt;
    &lt;div class="progress-bar-value !bg-primary"&gt;50%&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm progress-custom mb-[3rem] progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;h6 class="progress-bar-title !bg-secondary text-[1rem] after:!border-s-secondary"&gt;Watches&lt;/h6&gt;
&lt;div class="progress-bar progress-secondary w-3/5"&gt;
    &lt;div class="progress-bar-value !bg-secondary"&gt;60%&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm progress-custom progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;h6 class="progress-bar-title !bg-success text-[1rem] after:!border-s-success"&gt;Shirts&lt;/h6&gt;
&lt;div class="progress-bar progress-success w-[70%]"&gt;
    &lt;div class="progress-bar-value !bg-success"&gt;70%&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start:: row-6 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Progress-2
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-item-1 !bg-primary"></div>
                                    <div class="progress-item-2"></div>
                                    <div class="progress-item-3"></div>
                                    <div class="progress-bar w-1/2"></div>
                                </div>
                                <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-item-1 !bg-secondary"></div>
                                    <div class="progress-item-2 !bg-secondary"></div>
                                    <div class="progress-item-3"></div>
                                    <div class="progress-bar !bg-secondary w-3/5"></div>
                                </div>
                                <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-item-1 !bg-success"></div>
                                    <div class="progress-item-2 !bg-success"></div>
                                    <div class="progress-item-3"></div>
                                    <div class="progress-bar !bg-success w-[70%]"></div>
                                </div>
                                <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-item-1 !bg-info"></div>
                                    <div class="progress-item-2 !bg-info"></div>
                                    <div class="progress-item-3 !bg-info"></div>
                                    <div class="progress-bar !bg-info w-4/5"></div>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-item-1 !bg-warning"></div>
                                    <div class="progress-item-2 !bg-warning"></div>
                                    <div class="progress-item-3 !bg-warning"></div>
                                    <div class="progress-bar !bg-warning w-[90%]"></div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-item-1 !bg-primary"&gt;&lt;/div&gt;&lt;div class="progress-item-2"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
&lt;div class="progress-bar w-1/2"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-item-1 !bg-secondary"&gt;&lt;/div&gt;&lt;div class="progress-item-2 !bg-secondary"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
&lt;div class="progress-bar !bg-secondary w-3/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-item-1 !bg-success"&gt;&lt;/div&gt;&lt;div class="progress-item-2 !bg-success"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
&lt;div class="progress-bar !bg-success w-[70%]"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-item-1 !bg-info"&gt;&lt;/div&gt;&lt;div class="progress-item-2 !bg-info"&gt;&lt;/div&gt;&lt;div class="progress-item-3 !bg-info"&gt;&lt;/div&gt;
&lt;div class="progress-bar !bg-info w-4/5"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-item-1 !bg-warning"&gt;&lt;/div&gt;&lt;div class="progress-item-2 !bg-warning"&gt;&lt;/div&gt;&lt;div class="progress-item-3 !bg-warning"&gt;&lt;/div&gt;
&lt;div class="progress-bar !bg-warning w-[90%]"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Progress-3
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress progress-lg mb-[3rem] custom-progress-3 progress-animate"
                                    role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar w-1/2">
                                        <div class="progress-bar-value">50%</div>
                                    </div>
                                </div>
                                <div class="progress progress-lg mb-[3rem] custom-progress-3 progress-animate"
                                    role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !bg-secondary w-3/5">
                                        <div class="progress-bar-value secondary">60%</div>
                                    </div>
                                </div>
                                <div class="progress progress-lg custom-progress-3 progress-animate" role="progressbar"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !bg-success w-[70%]">
                                        <div class="progress-bar-value success">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="progress progress-lg mb-[3rem] custom-progress-3 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar w-1/2"&gt;
    &lt;div class="progress-bar-value"&gt;50%&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg mb-[3rem] custom-progress-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar !bg-secondary w-3/5"&gt;
    &lt;div class="progress-bar-value secondary"&gt;60%&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg custom-progress-3 progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar !bg-success w-[70%]"&gt;
    &lt;div class="progress-bar-value success"&gt;70%&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-6 -->

                <!-- Start:: row-7 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Progress-4
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="progress progress-xl mb-4 progress-animate custom-progress-4"
                                    role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary-gradient !rounded-sm w-[10%]"></div>
                                    <div class="progress-bar-label">10%</div>
                                </div>
                                <div class="progress progress-xl mb-4 progress-animate custom-progress-4 secondary"
                                    role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-secondary-gradient !rounded-sm w-1/5"></div>
                                    <div class="progress-bar-label">20%</div>
                                </div>
                                <div class="progress progress-xl mb-4 progress-animate custom-progress-4 success"
                                    role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success-gradient !rounded-sm w-2/5"></div>
                                    <div class="progress-bar-label">40%</div>
                                </div>
                                <div class="progress progress-xl mb-4 progress-animate custom-progress-4 info"
                                    role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info-gradient !rounded-sm w-3/5"></div>
                                    <div class="progress-bar-label">60%</div>
                                </div>
                                <div class="progress progress-xl mb-4 progress-animate custom-progress-4 warning"
                                    role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning-gradient !rounded-sm w-4/5"></div>
                                    <div class="progress-bar-label">80%</div>
                                </div>
                                <div class="progress progress-xl progress-animate custom-progress-4 danger"
                                    role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger-gradient !rounded-sm w-[85%]"></div>
                                    <div class="progress-bar-label">85%</div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-primary-gradient !rounded-sm w-[10%]"&gt;&lt;/div&gt;
&lt;div class="progress-bar-label"&gt;10%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4 secondary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-secondary-gradient !rounded-sm w-1/5"&gt;&lt;/div&gt;
    &lt;div class="progress-bar-label"&gt;20%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4 success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-success-gradient !rounded-sm w-2/5"&gt;&lt;/div&gt;
    &lt;div class="progress-bar-label"&gt;40%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4 info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-info-gradient !rounded-sm w-3/5"&gt;&lt;/div&gt;
    &lt;div class="progress-bar-label"&gt;60%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4 warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-warning-gradient !rounded-sm w-4/5"&gt;&lt;/div&gt;
    &lt;div class="progress-bar-label"&gt;80%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl progress-animate custom-progress-4 danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;
&lt;div class="progress-bar bg-danger-gradient !rounded-sm w-[90%]"&gt;&lt;/div&gt;
    &lt;div class="progress-bar-label"&gt;90%&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Progress-5
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !font-medium !text-[0.75rem] btn-wave">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <h6 class="font-semibold mb-2">Project Dependencies</h6>
                                <div class="progress-stacked progress-xl mb-[3rem] flex">
                                    <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">25%</div>
                                    <div class="progress-bar !bg-secondary !rounded-none w-[35%]" role="progressbar"
                                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                                    <div class="progress-bar !bg-danger !rounded-s-none !rounded-e-full w-2/5"
                                        role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 justify-center">
                                    <div class="xl:col-span-4 col-span-12"></div>
                                    <div class="xl:col-span-4 col-span-12">
                                        <div
                                            class="border border-defaultborder dark:border-defaultborder/10 p-4 rounded-md">
                                            <p
                                                class="text-[0.75rem] font-semibold mb-0 text-[#8c9097] dark:text-white/50">
                                                Html<span
                                                    class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">25%</span>
                                            </p>
                                            <div class="progress progress-xs mb-4 progress-animate" role="progressbar"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary w-1/2">
                                                </div>
                                            </div>
                                            <p
                                                class="text-[0.75rem] font-semibold mb-0 text-[#8c9097] dark:text-white/50">
                                                Css<span
                                                    class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">35%</span>
                                            </p>
                                            <div class="progress progress-xs mb-4 progress-animate " role="progressbar"
                                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar !rounded-none !bg-secondary w-[35%]">
                                                </div>
                                            </div>
                                            <p
                                                class="text-[0.75rem] font-semibold mb-0 text-[#8c9097] dark:text-white/50">
                                                Js<span
                                                    class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">40%</span>
                                            </p>
                                            <div class="progress progress-xs mb-0 progress-animate " role="progressbar"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar !rounded-e-full !bg-danger w-2/5">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-4 col-span-12"></div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> 
&lt;h6 class="font-semibold mb-2"&gt;Project Dependencies&lt;/h6&gt;
&lt;div class="progress-stacked progress-xl mb-[3rem] flex"&gt;
    &lt;div class="progress-bar w-1/2"
        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;25%&lt;/div&gt;
    &lt;div class="progress-bar !bg-secondary !rounded-none w-[35%]"
        role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;35%&lt;/div&gt;
    &lt;div class="progress-bar !bg-danger !rounded-s-none !rounded-e-full w-2/5"
        role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;40%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="grid grid-cols-12 justify-center"&gt;
    &lt;div class="xl:col-span-5 col-span-12"&gt;
        &lt;div class="border p-4"&gt;
            &lt;p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097] dark:text-white/50"&gt;Html&lt;span class="ltr:float-right rtl:float-left text-[0.625rem] font-normal"&gt;25%&lt;/span&gt;&lt;/p&gt;
            &lt;div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
                &lt;div class="progress-bar bg-primary w-1/2"&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097] dark:text-white/50"&gt;Css&lt;span class="ltr:float-right rtl:float-left text-[0.625rem] font-normal"&gt;35%&lt;/span&gt;&lt;/p&gt;
            &lt;div class="progress progress-xs mb-4 progress-animate " role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;
                &lt;div class="progress-bar !rounded-none !bg-secondary w-[35%]"&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097] dark:text-white/50"&gt;Js&lt;span class="ltr:float-right rtl:float-left text-[0.625rem] font-normal"&gt;40%&lt;/span&gt;&lt;/p&gt;
            &lt;div class="progress progress-xs mb-0 progress-animate " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
                &lt;div class="progress-bar !rounded-e-full !bg-danger w-2/5"&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-7 -->

            </div>
        </div>
        <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection