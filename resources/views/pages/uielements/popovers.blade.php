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
                                <li class="breadcrumb-item active" aria-current="page">Popovers</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Popovers</h1>
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
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Default Popovers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-mediumt">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                  <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                    <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);">Popover Right
                                        <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                            <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                            <h6>Popover Right</h6>
                                            </div>
                                            <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">And here's some amazing content. It's very engaging. Right?</p>
                                        </div>
                                      </a>
                                  </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);">Popover Top
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Popover Top</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">And here's some amazing content. It's very engaging. Right?</p>
                                            </div>
                                          </a>
                                      </div>
                                      <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);">Popover Bottom
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Popover Bottom</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">And here's some amazing content. It's very engaging. Right?</p>
                                            </div>
                                          </a>
                                      </div>
                                      <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);">Popover Left
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Popover Left</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">And here's some amazing content. It's very engaging. Right?</p>
                                            </div>
                                          </a>
                                      </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list"&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);"&gt;Header Primary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
        &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);"&gt;Header Primary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
        &lt;/div&gt;
        &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);"&gt;Header Primary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
        &lt;/div&gt;
        &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);"&gt;Header Primary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Colored Headers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="hs-tooltip ti-main-tooltip  [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);">Header Primary
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-primary !rounded-t-sm !py-2  !px-4 text-white border-defaultborder text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor  !text-[0.8rem] !py-4 !px-4 text-start">Popover With Primary Header</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-secondary" href="javascript:void(0);">Header Secondary
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-secondary !py-2 !rounded-t-sm !px-4 text-white border-defaultborder text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With Secondary Header</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-info" href="javascript:void(0);">Header Info
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-info !py-2 !px-4 !rounded-t-sm text-white border-defaultborder text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With Info Header</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-warning" href="javascript:void(0);">Header warning
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-warning !py-2 !px-4 !rounded-t-sm text-white border-defaultborder text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With warning Header</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-success" href="javascript:void(0);">Header succuss
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-success !py-2 !px-4 text-white !rounded-t-sm border-defaultborder text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With succuss Header</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-danger" href="javascript:void(0);">Header danger
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-danger !py-2 !px-4 text-white border-defaultborder !rounded-t-sm text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With danger Header</p>
                                            </div>
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list"&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-primary" href="javascript:void(0);"&gt;Header Primary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-primary !rounded-t-md !py-2  !px-4 text-white border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor  !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-secondary" href="javascript:void(0);"&gt;Header Secondary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-secondary !py-2 !rounded-t-md !px-4 text-white border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Secondary Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-info" href="javascript:void(0);"&gt;Header Info
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-info !py-2 !px-4 !rounded-t-md text-white border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Info Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-warning" href="javascript:void(0);"&gt;Header warning
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-warning !py-2 !px-4 !rounded-t-md text-white border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With warning Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-success" href="javascript:void(0);"&gt;Header succuss
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-success !py-2 !px-4 text-white !rounded-t-md border-defaultborder text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With succuss Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-outline-danger" href="javascript:void(0);"&gt;Header danger
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-danger !py-2 !px-4 text-white border-defaultborder !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color Header&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With danger Header&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                 <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Colored Popovers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="hs-tooltip ti-main-tooltip  [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-primary" href="javascript:void(0);">Primary
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-primary !z-[1000] !p-0 !max-w-[276px] " role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-white/10 !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Primary Color background</h6>
                                                </div>
                                                <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With primary background</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-secondary" href="javascript:void(0);">Secondary
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !z-[1000] !bg-secondary !p-0 !max-w-[276px] " role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-white/10 !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Secondary Color background</h6>
                                                </div>
                                                <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With secondary background</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-info" href="javascript:void(0);">Info
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-secondary  !p-0 !max-w-[276px]  " role="tooltip">
                                                <div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Info Color background</h6>
                                                </div>
                                                <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With info background</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-warning" href="javascript:void(0);">Warning
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-warning  !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Warning Color background</h6>
                                                </div>
                                                <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With warning background</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-success" href="javascript:void(0);">Success
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-success  !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Success Color background</h6>
                                                </div>
                                                <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With success background</p>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-danger" href="javascript:void(0);">Danger
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-danger  !p-0 !max-w-[276px] " role="tooltip">
                                                <div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                <h6 class="!text-white">Danger Color background</h6>
                                                </div>
                                                <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With danger background</p>
                                            </div>
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list"&gt;
      &lt;div class="hs-tooltip ti-main-tooltip  [--trigger:click] [--placement:top]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-primary" href="javascript:void(0);"&gt;Primary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-primary !z-[1000] !p-0 !max-w-[276px] " role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-white/10 !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Primary Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With primary background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-secondary" href="javascript:void(0);"&gt;Secondary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-secondary !p-0 !max-w-[276px] " role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid dark:border-white/10 !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Secondary Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With secondary background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-info" href="javascript:void(0);"&gt;Info
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-secondary  !p-0 !max-w-[276px]  " role="tooltip"&gt;
                  &lt;div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Info Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With info background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-warning" href="javascript:void(0);"&gt;Warning
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-warning  !p-0 !max-w-[276px] " role="tooltip"&gt;
                  &lt;div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Warning Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With warning background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-success" href="javascript:void(0);"&gt;Success
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-success  !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Success Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With success background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-danger" href="javascript:void(0);"&gt;Danger
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-danger  !p-0 !max-w-[276px] " role="tooltip"&gt;
                  &lt;div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Danger Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With danger background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                 <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Light Popovers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top] ">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-soft-primary" href="javascript:void(0);">Primary
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                <div class="!bg-primary/10 !m-0">
                                                    <div  class="!border-b !border-solid !py-2 !px-4  text-primary !border-primary/20 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6 class="text-primary dark:!text-primary">Color background</h6>
                                                    </div>
                                                    <p class="!text-primary !text-[0.8rem] !py-4 !px-4 text-start">Popover With primary background</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-soft-secondary" href="javascript:void(0);">Secondary
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                <div class="!bg-secondary/10 !m-0">
                                                    <div  class="!border-b !border-solid !py-2 !px-4  text-secondary !border-secondary/20 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6 class="text-secondary dark:!text-secondary">Color background</h6>
                                                    </div>
                                                    <p class="!text-secondary !text-[0.8rem] !py-4 !px-4 text-start">Popover With secondary background</p>

                                                </div>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-soft-info" href="javascript:void(0);">Info
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                <div class="!bg-info/10 !m-0">
                                                    <div  class="!border-b !border-solid !py-2 !px-4  text-info !border-info/20 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6 class="text-info dark:!text-info">Color background</h6>
                                                    </div>
                                                    <p class="!text-info !text-[0.8rem] !py-4 !px-4 text-start">Popover With info background</p>

                                                </div>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-soft-warning" href="javascript:void(0);">Warning
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                <div class="!bg-warning/10 !m-0">
                                                    <div  class="!border-b !border-solid !py-2 !px-4  text-warning !border-warning/20 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6 class="text-warning dark:!text-warning">Color background</h6>
                                                    </div>
                                                    <p class="!text-warning !text-[0.8rem] !py-4 !px-4 text-start">Popover With warning background</p>
                                                </div>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-soft-success" href="javascript:void(0);">Success
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                <div class="!bg-success/10 !m-0">
                                                    <div  class="!border-b !border-solid !py-2 !px-4  text-success !border-success/20 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6 class="text-success dark:!text-success">Color background</h6>
                                                    </div>
                                                    <p class="!text-success !text-[0.8rem] !py-4 !px-4 text-start">Popover With success background</p>

                                                </div>
                                            </div>
                                          </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-soft-danger" href="javascript:void(0);">danger
                                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                <div class="!bg-danger/10 !m-0">
                                                    <div  class="!border-b !border-solid !py-2 !px-4  text-danger !border-danger/20 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6 class="text-danger dark:!text-danger">Color background</h6>
                                                    </div>
                                                    <p class="!text-danger !text-[0.8rem] !py-4 !px-4 text-start">Popover With danger background</p>

                                                </div>
                                            </div>
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="ti-btn-list"&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top] "&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-soft-primary" href="javascript:void(0);"&gt;Primary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-primary/10 !z-[1000] !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid !py-2 !px-4 text-primary !border-primary/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-primary !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With primary background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-secondary" href="javascript:void(0);"&gt;Secondary
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-secondary/10 !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid !py-2 !px-4 text-secondary !border-secondary/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-secondary !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With secondary background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-info" href="javascript:void(0);"&gt;Info
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-info/10  !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid !py-2 !px-4 text-info !border-info/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-info !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With info background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-warning" href="javascript:void(0);"&gt;Warning
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-warning/10  !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid !py-2 !px-4 text-warning !border-warning/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-warning !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With warning background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-success" href="javascript:void(0);"&gt;Success
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-success/10  !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid !py-2 !px-4 text-success !border-success/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-success !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With success background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
          &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-danger" href="javascript:void(0);"&gt;danger
              &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-danger/10  !p-0 !max-w-[276px]" role="tooltip"&gt;
                  &lt;div  class="!border-b !border-solid !py-2 !px-4 text-danger !border-danger/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                  &lt;h6&gt;Color background&lt;/h6&gt;
                  &lt;/div&gt;
                  &lt;p class="!text-danger !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With danger background&lt;/p&gt;
              &lt;/div&gt;
            &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                 <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Disabled Popover
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                    <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-primary opacity-60" href="javascript:void(0);">
                                        Disabled button
                                      <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 dark:bg-bodybg bg-white " role="tooltip">
                                       Disabled Popover
                                      </div>
                                    </a>
                                  </div>
                               </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn btn-wave  ti-btn-primary opacity-60" href="javascript:void(0);"&gt;
        Disabled button
      &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10" role="tooltip"&gt;
       Diabled Popover
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Icon Popovers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body flex">
                                <div class="hs-tooltip ti-main-tooltip me-6 !max-w-[276px] [--trigger:click] [--placement:top]">
                                    <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-primary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg>
                                      <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white" role="tooltip">
                                       <p>The Icon Popover</p>
                                      </div>
                                    </a>
                               </div>
                               <div class="hs-tooltip ti-main-tooltip !max-w-[276px] [--trigger:click] [--placement:left]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-secondary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                    <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-secondary !text-white !py-4 !px-4" role="tooltip">
                                        <p>The Icon Popover</p>
                                  </div>
                                </a>
                              </div>
                           </div>
                            <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="hs-tooltip ti-main-tooltip me-6 !max-w-[276px] [--trigger:click] [--placement:top]"&gt;
      &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);"&gt;
          &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/&gt;&lt;/svg&gt;
        &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !py-4 !px-4 !bg-primary !text-white" role="tooltip"&gt;
         &lt;p&gt;The Icon Popover&lt;/p&gt;
        &lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="hs-tooltip ti-main-tooltip !max-w-[276px] [--trigger:click] [--placement:left]"&gt;
    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);"&gt;
      &lt;svg xmlns="http://www.w3.org/2000/svg" class="fill-secondary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/&gt;&lt;/svg&gt;
      &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !bg-secondary !text-white !py-4 !px-4" role="tooltip"&gt;
          &lt;p&gt;The Icon Popover&lt;/p&gt;
    &lt;/div&gt;
    &lt;/a&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 --> 
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header justify-between">
                              <div class="box-title">
                                Popover With Four Directions
                              </div>
                              <div class="prism-toggle">
                                  <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                              </div>
                          </div>
                          <div class="box-body">
                            <div class="flex justify-center gap-4">
                              <div class="hs-tooltip ti-main-tooltip [--trigger:click]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;">
                                  <span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white">
                                    <i class="ri-arrow-up-s-line"></i>
                                  </span>
                                  <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10" role="tooltip" data-popper-placement="top" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(327px, -338px);">
                                    Top popover
                                  </div>
                                </a>
                              </div>
                
                              <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;">
                                  <span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white">
                                    <i class="ri-arrow-left-s-line"></i>
                                  </span>
                                  <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 hidden" role="tooltip" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-1501px, 469px);" data-popper-placement="left">
                                    Left popover
                                  </div>
                                </a>
                              </div>
                
                              <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right] rtl:[--placement:left]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;">
                                  <span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white">
                                    <i class="ri-arrow-right-s-line"></i>
                                  </span>
                                  <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 hidden" role="tooltip" style="position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate(533px, 469px);" data-popper-placement="right">
                                    Right popover
                                  </div>
                                </a>
                              </div>
                
                              <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]">
                                <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;">
                                  <span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white">
                                    <i class="ri-arrow-down-s-line"></i>
                                  </span>
                                  <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 hidden" role="tooltip" style="position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate(496px, 521px);" data-popper-placement="bottom">
                                    Bottom popover
                                  </div>
                                </a>
                              </div>
                
                            </div>
                          </div>
                          <div class="box-footer hidden border-t-0">
                            <!-- Prism Code -->
                            <pre class="language-html" tabindex="0"><code class="language-html">
&lt;div class="flex justify-center gap-4"&gt;
&lt;div class="hs-tooltip ti-main-tooltip [--trigger:click]"&gt;
    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;"&gt;
        &lt;span
            class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white"&gt;
            &lt;i&gt; class="ri-arrow-up-s-line"&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;div&gt; class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10" role="tooltip" data-popper-placement="top"
            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(327px, -338px);"&gt;
            Top popover
        &lt;/div&gt;
    &lt;/a&gt;
&lt;/div&gt;

&lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]"&gt;
    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;"&gt;
        &lt;span
            class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white"&gt;
            &lt;i&gt; class="ri-arrow-left-s-line"&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;div&gt; class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 hidden" role="tooltip"
            style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-1501px, 469px);"
            data-popper-placement="left"&gt;
            Left popover
        &lt;/div&gt;
    &lt;/a&gt;
&lt;/div&gt;

&lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;"&gt;
        &lt;span
            class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white"&gt;
            &lt;i&gt; class="ri-arrow-right-s-line"&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;div&gt; class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 hidden" role="tooltip"
            style="position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate(533px, 469px);"
            data-popper-placement="right"&gt;
            Right popover
        &lt;/div&gt;
    &lt;/a&gt;
&lt;/div&gt;

&lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]"&gt;
    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;"&gt;
        &lt;span
            class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white"&gt;
            &lt;i&gt; class="ri-arrow-down-s-line"&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;div&gt; class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 hidden" role="tooltip"
            style="position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate(496px, 521px);"
            data-popper-placement="bottom"&gt;
            Bottom popover
        &lt;/div&gt;
    &lt;/a&gt;
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
                            Popover With Focus event
                          </div>
                          <div class="prism-toggle">
                              <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                  Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                          </div>
                      </div>
                        <div class="box-body">
                          <div class="flex justify-center">
                            <div class="hs-tooltip ti-main-tooltip [--trigger:focus]">
                              <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;">
                                <span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white">
                                  <i class="ri-arrow-up-s-line"></i>
                                </span>
                                <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(835px, -490px);" data-popper-placement="top">
                                  Focus me
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="box-footer hidden border-t-0">
                          <!-- Prism Code -->
                          <pre class="language-html" tabindex="0"><code class="language-html">
&lt;div class="flex justify-center"&gt;
&lt;div class="hs-tooltip ti-main-tooltip [--trigger:focus]"&gt;
  &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;"&gt;
    &lt;span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white"&gt;
      &lt;i class="ri-arrow-up-s-line"&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(835px, -490px);" data-popper-placement="top"&gt;
      Focus me
    &lt;/div&gt;
  &lt;/a&gt;
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
                            Popover With Content
                          </div>
                          <div class="prism-toggle">
                              <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                  Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                          </div>
                      </div>
                        <div class="box-body">
                          <div class="flex justify-center">
                            <div class="hs-tooltip ti-main-tooltip [--trigger:click]">
                              <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;">
                                <span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white">
                                  <i class="ri-arrow-up-s-line"></i>
                                </span>
                                <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !p-0 max-w-xs border-gray-200 text-start rounded-sm hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1132px, -490px);" data-popper-placement="top">
                                  <span class="pt-3 px-4 block text-lg font-bold text-gray-800 dark:text-white">Overview</span>
                                  <div class="py-2 px-3 text-sm text-gray-600 dark:text-white/70">
                                    <img class="rounded-sm mb-3" src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="Image Description">
                                    <p>This is a popover body with supporting text below as a natural lead-in to additional content.</p>
                                    <dl class="mt-3">
                                      <dt class="font-bold pt-3 first:pt-0 dark:text-white">Assigned to:</dt>
                                      <dd class="m-0 text-gray-600 dark:text-white/70">Mark Welson</dd>
                                      <dt class="font-bold pt-3 first:pt-0 dark:text-white">Due:</dt>
                                      <dd class="m-0 text-gray-600 dark:text-white/70">December 21, 2021</dd>
                                    </dl>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="box-footer hidden border-t-0">
                          <!-- Prism Code -->
                          <pre class="language-html" tabindex="0"><code class="language-html">
  &lt;div class="flex justify-center"&gt;
  &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click]"&gt;
    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;"&gt;
      &lt;span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white"&gt;
        &lt;i&gt; class="ri-arrow-up-s-line"&gt;&lt;/i&gt;
      &lt;/span&gt;
      &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !p-0 max-w-xs border-gray-200 text-start rounded-sm hidden" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1132px, -490px);" data-popper-placement="top"&gt;
        &lt;span&gt; class="pt-3 px-4 block text-lg font-bold text-gray-800 dark:text-white"&gt;Overview&lt;/span&gt;
        &lt;div class="py-2 px-3 text-sm text-gray-600 dark:text-white/70"&gt;
          &lt;img class="rounded-sm mb-3" src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="Image Description"&gt;
          &lt;p&gt;This is a popover body with supporting text below as a natural lead-in to additional content.&lt;/p&gt;
          &lt;dl class="mt-3"&gt;
            &lt;dt&gt; class="font-bold pt-3 first:pt-0 dark:text-white"&gt;Assigned to:&lt;/dt&gt;
            &lt;dd&gt; class="m-0 text-gray-600 dark:text-white/70"&gt;Mark Welson&lt;/dd&gt;
            &lt;dt&gt; class="font-bold pt-3 first:pt-0 dark:text-white"&gt;Due:&lt;/dt&gt;
            &lt;dd&gt; class="m-0 text-gray-600 dark:text-white/70"&gt;December 21, 2021&lt;/dd&gt;
          &lt;/dl&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/a&gt;
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
                            Popover With Hover event
                          </div>
                          <div class="prism-toggle">
                              <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                  Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                          </div>
                      </div>
                        <div class="box-body">
                          <div class="flex justify-center">
                            <div class="hs-tooltip ti-main-tooltip [--trigger:hover]">
                              <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;">
                                <span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white">
                                  <i class="ri-arrow-up-s-line"></i>
                                </span>
                                <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(427px, -319px);" data-popper-placement="top">
                                  Hover me
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="box-footer hidden border-t-0">
                          <!-- Prism Code -->
                          <pre class="language-html" tabindex="0"><code class="language-html">
    &lt;div class="flex justify-center"&gt;
    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:hover]"&gt;
      &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:;"&gt;
        &lt;span class="w-10 h-10 ti-btn btn-wave  p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white"&gt;
          &lt;i&gt; class="ri-arrow-up-s-line"&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;div&gt; class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(427px, -319px);" data-popper-placement="top"&gt;
          Hover me
        &lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                          </code></pre>
                          <!-- Prism Code -->
                      </div>
                      </div>
                    </div>
                  </div>
                <!-- End:: row-5 --> 

                <!-- Start:: row-6 --> 
                <div class="grid grid-cols-12 gap-6">
                  <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                    <div class="box">
                      <div class="box-header justify-between">
                        <div class="box-title">
                          Review popover
                        </div>
                        <div class="prism-toggle">
                            <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                        </div>
                    </div>
                      <div class="box-body">
                        <!-- Popover -->
                        <div class="hs-tooltip ti-main-tooltip [--trigger:click]">
                          <div class="hs-tooltip-toggle ti-main-tooltip-toggle">
                            <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary hover:text-primary/80 disabled:opacity-50 disabled:pointer-events-none dark:text-primary dark:hover:text-primary/80 dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-primary">
                              Preline review
                              <i class="ri-arrow-up-s-line"></i>
                            </button>
                
                            <div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 max-w-xs w-full hidden !z-[105]" role="tooltip" style="position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate(533px, 469px);" data-popper-placement="right">
                              <div class="p-4">
                                <!-- Header -->
                                <div class="mb-3 flex justify-between items-center gap-x-3">
                                  <div class="flex items-center gap-x-2">
                                    <h4 class="font-semibold text-gray-800 dark:text-white">
                                      5.0
                                    </h4>
                
                                    <!-- Rating -->
                                    <div class="flex">
                                      <i class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                      <i class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                      <i class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                      <i class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                      <i class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                    </div>
                                    <!-- End Rating -->
                                  </div>
                
                                  <a class="inline-flex items-center gap-x-1 text-xs text-primary decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-0 dark:focus:shadow-none dark:focus:ring-primary" href="#">
                                    See all (4)
                                  </a>
                                </div>
                                <!-- End Header -->
                
                                <div class="mb-3">
                                  <!-- Progress -->
                                  <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">5 star</span>
                                    </div>
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg2" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600" style="width: 78%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">78%</span>
                                    </div>
                                  </div>
                                  <!-- End Progress -->
                
                                  <!-- Progress -->
                                  <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">4 star</span>
                                    </div>
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600" style="width: 20%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">20%</span>
                                    </div>
                                  </div>
                                  <!-- End Progress -->
                
                                  <!-- Progress -->
                                  <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">3 star</span>
                                    </div>
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg2" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600" style="width: 6%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">6%</span>
                                    </div>
                                  </div>
                                  <!-- End Progress -->
                
                                  <!-- Progress -->
                                  <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">2 star</span>
                                    </div>
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600" style="width: 2%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">2%</span>
                                    </div>
                                  </div>
                                  <!-- End Progress -->
                
                                  <!-- Progress -->
                                  <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">1 star</span>
                                    </div>
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600" style="width: 0%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">0%</span>
                                    </div>
                                  </div>
                                  <!-- End Progress -->
                                </div>
                
                                <a class="inline-flex items-center gap-x-1 text-xs text-gray-600 decoration-2 hover:underline dark:text-white/70 dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-gray-400" href="#">
                                  How reviews and ratings work
                                  <i class="ri-arrow-right-s-line rtl:rotate-180"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Popover -->
                      </div>
                      <div class="box-footer hidden border-t-0">
                        <!-- Prism Code -->
                        <pre class="language-html" tabindex="0"><code class="language-html">
&lt;!-- Popover --&gt;
&lt;div class="hs-tooltip ti-main-tooltip [--trigger:click]"&gt;
  &lt;div class="hs-tooltip-toggle ti-main-tooltip-toggle"&gt;
      &lt;button type="button"
          class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary hover:text-primary/80 disabled:opacity-50 disabled:pointer-events-none dark:text-primary dark:hover:text-primary/80 dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-primary"&gt;
          Preline review
          &lt;i class="ri-arrow-up-s-line"&gt;&lt;/i&gt;
      &lt;/button&gt;

      &lt;div class="hs-tooltip-content ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 max-w-xs w-full hidden" role="tooltip"
          style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1433px, -490px);"
          data-popper-placement="top"&gt;
          &lt;div class="p-4"&gt;
              &lt;!-- Header --&gt;
              &lt;div class="mb-3 flex justify-between items-center gap-x-3"&gt;
                  &lt;div class="flex items-center gap-x-2"&gt;
                      &lt;h4 class="font-semibold text-gray-800 dark:text-white"&gt;
                          5.0
                      &lt;/h4&gt;

                      &lt;!-- Rating --&gt;
                      &lt;div class="flex"&gt;
                          &lt;i class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                          &lt;i class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                          &lt;i class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                          &lt;i class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                          &lt;i class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                      &lt;/div&gt;
                      &lt;!-- End Rating --&gt;
                  &lt;/div&gt;

                  &lt;a class="inline-flex items-center gap-x-1 text-xs text-primary decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-0 dark:focus:shadow-none dark:focus:ring-primary"
                      href="#"&gt;
                      See all (4)
                  &lt;/a&gt;
              &lt;/div&gt;
              &lt;!-- End Header --&gt;

              &lt;div class="mb-3"&gt;
                  &lt;!-- Progress --&gt;
                  &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;5 star&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg"
                          role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"&gt;
                          &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                              style="width: 78%"&gt;&lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;78%&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Progress --&gt;

                  &lt;!-- Progress --&gt;
                  &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;4 star&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg"
                          role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
                          &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                              style="width: 20%"&gt;&lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;20%&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Progress --&gt;

                  &lt;!-- Progress --&gt;
                  &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;3 star&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg"
                          role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"&gt;
                          &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                              style="width: 6%"&gt;&lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;6%&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Progress --&gt;

                  &lt;!-- Progress --&gt;
                  &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;2 star&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg"
                          role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
                          &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                              style="width: 2%"&gt;&lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;2%&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Progress --&gt;

                  &lt;!-- Progress --&gt;
                  &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;1 star&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bodybg"
                          role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"&gt;
                          &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                              style="width: 0%"&gt;&lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="w-10 text-end"&gt;
                          &lt;span class="text-sm text-gray-800 dark:text-white"&gt;0%&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Progress --&gt;
              &lt;/div&gt;

              &lt;a class="inline-flex items-center gap-x-1 text-xs text-gray-600 decoration-2 hover:underline dark:text-white/70 dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-gray-400"
                  href="#"&gt;
                  How reviews and ratings work
                  &lt;i class="ri-arrow-right-s-line"&gt;&lt;/i&gt;
              &lt;/a&gt;
          &lt;/div&gt;
      &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Popover --&gt;
                        </code></pre>
                        <!-- Prism Code -->
                    </div>
                    </div>
                  </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                      <div class="box">
                        <div class="box-header justify-between">
                          <div class="box-title">
                            User popover example
                          </div>
                          <div class="prism-toggle">
                              <button type="button" class="ti-btn btn-wave  !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                                  Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                          </div>
                      </div>
                        <div class="box-body">
                          <!-- User -->
                          <div class="hs-tooltip inline-block [--trigger:hover] sm:[--placement:right]">
                            <div class="hs-tooltip-toggle max-w-xs p-3 flex items-center gap-x-3 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-bodybg dark:border-white/10">
                              <img class="inline-block size-9 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                              <!-- User Content -->
                              <div class="grow">
                                <h4 class="font-semibold text-sm text-gray-800 dark:text-white">
                                  Amanda Harvey
                                </h4>
                                <p class="text-sm text-gray-800 md:text-gray-500 dark:text-white md:dark:text-white/70">
                                  amanda@email.com
                                </p>
                              </div>
                              <!-- End User Content -->
                              <!-- Popover Content -->
                              <div class="hs-tooltip-content overflow-hidden ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !p-0 max-w-xs w-full after:absolute after:top-0 after:-start-4 after:w-4 after:h-full hidden" role="tooltip" style="position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate(929px, 563px);" data-popper-placement="right">
                                <!-- Header -->
                                <div class="py-3 px-4 border-b border-gray-200 dark:border-white/10">
                                  <div class="flex items-center gap-x-3">
                                    <img class="flex-shrink-0 inline-block size-10 rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    <div class="grow">
                                      <h6 class="font-semibold text-gray-800 dark:text-white">
                                        Amanda Harvey
                                        <span class="ms-0.5 inline-flex items-center align-middle gap-x-1.5 py-0.5 px-1.5 mt-1 rounded-md text-[11px] font-medium bg-gray-800 text-white dark:bg-bodybg dark:text-white">
                                          PRO
                                        </span>
                                      </h6>
                                      <p class="text-sm text-gray-500 dark:text-white/70">
                                        Storyteller
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Header -->
                                <!-- List -->
                                <ul class="py-3 px-4 space-y-1">
                                  <li>
                                    <div class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-white">
                                      <i class="ri-building-line text-gray-600 dark:text-white/70"></i>
                                      Pixeel Ltd.
                                    </div>
                                  </li>
                                  <li>
                                    <div class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-white">
                                      <i class="ri-smartphone-line text-gray-600 dark:text-white/70"></i>
                                      (892) 312-5483
                                    </div>
                                  </li>
                                  <li>
                                    <div class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-white">
                                      <i class="ri-mail-line text-gray-600 dark:text-white/70"></i>
                                      amanda@email.com
                                    </div>
                                  </li>
                                </ul>
                                <!-- End List -->
                                <!-- Footer -->
                                <div class="py-2 px-4 flex justify-between items-center bg-gray-100 dark:bg-bodybg">
                                  <a class="inline-flex items-center gap-x-1.5 text-xs text-gray-500 hover:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:text-white dark:focus:outline-none" href="javascript:void(0);">
                                    <i class="ri-flag-line"></i>
                                    Flag
                                  </a>
                                  <button type="button" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-primary text-white hover:bg-primary/80 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary">
                                    Follow
                                  </button>
                                </div>
                                <!-- End Footer -->
                              </div>
                              <!-- End Popover Content -->
                            </div>
                          </div>
                          <!-- End User -->
                        </div>
                        <div class="box-footer hidden border-t-0">
                          <!-- Prism Code -->
                          <pre class="language-html" tabindex="0"><code class="language-html">
&lt;!-- User --&gt;
&lt;div class="hs-tooltip inline-block [--trigger:hover] sm:[--placement:right]"&gt;
  &lt;div class="hs-tooltip-toggle max-w-xs p-3 flex items-center gap-x-3 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-bodybg dark:border-white/10"&gt;
    &lt;img class="inline-block size-9 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
    &lt;!-- User Content --&gt;
    &lt;div class="grow"&gt;
      &lt;h4&gt; class="font-semibold text-sm text-gray-800 dark:text-white"&gt;
        Amanda Harvey
      &lt;/h4&gt;
      &lt;p&gt; class="text-sm text-gray-800 md:text-gray-500 dark:text-white md:dark:text-white/70"&gt;
        amanda@email.com
      &lt;/p&gt;
    &lt;/div&gt;
    &lt;!-- End User Content --&gt;
    &lt;!-- Popover Content --&gt;
    &lt;div class="hs-tooltip-content overflow-hidden ti-main-tooltip-content border border-defaultborder dark:border-defaultborder/10 !p-0 max-w-xs w-full after:absolute after:top-0 after:-start-4 after:w-4 after:h-full hidden" role="tooltip" style="position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate(929px, 563px);" data-popper-placement="right"&gt;
      &lt;!-- Header --&gt;
      &lt;div class="py-3 px-4 border-b border-gray-200 dark:border-white/10"&gt;
        &lt;div class="flex items-center gap-x-3"&gt;
          &lt;img class="flex-shrink-0 inline-block size-10 rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
          &lt;div class="grow"&gt;
            &lt;h4 class="font-semibold text-gray-800 dark:text-white"&gt;
              Amanda Harvey
              &lt;span&gt; class="ms-0.5 inline-flex items-center align-middle gap-x-1.5 py-0.5 px-1.5 rounded-md text-[11px] font-medium bg-gray-800 text-white dark:bg-bodybg dark:text-white"&gt;
                PRO
              &lt;/span&gt;
            &lt;/h4&gt;
            &lt;p&gt; class="text-sm text-gray-500 dark:text-white/70"&gt;
              Storyteller
            &lt;/p&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;!-- End Header --&gt;
      &lt;!-- List --&gt;
      &lt;ul class="py-3 px-4 space-y-1"&gt;
        &lt;li&gt;
          &lt;div class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-white"&gt;
            &lt;i&gt; class="ri-building-line text-gray-600 dark:text-white/70"&gt;&lt;/i&gt;
            Pixeel Ltd.
          &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
          &lt;div class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-white"&gt;
            &lt;i&gt; class="ri-smartphone-line text-gray-600 dark:text-white/70"&gt;&lt;/i&gt;
            (892) 312-5483
          &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
          &lt;div class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-white"&gt;
            &lt;i&gt; class="ri-mail-line text-gray-600 dark:text-white/70"&gt;&lt;/i&gt;
            amanda@email.com
          &lt;/div&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;!-- End List --&gt;
      &lt;!-- Footer --&gt;
      &lt;div class="py-2 px-4 flex justify-between items-center bg-gray-100 dark:bg-bodybg"&gt;
        &lt;a class="inline-flex items-center gap-x-1.5 text-xs text-gray-500 hover:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:text-white dark:focus:outline-none" href="javascript:void(0);"&gt;
          &lt;i&gt; class="ri-flag-line"&gt;&lt;/i&gt;
          Flag
        &lt;/a&gt;
        &lt;button&gt; type="button" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-primary text-white hover:bg-primary/80 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary"&gt;
          Follow
        &lt;/button&gt;
      &lt;/div&gt;
      &lt;!-- End Footer --&gt;
    &lt;/div&gt;
    &lt;!-- End Popover Content --&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End User --&gt;
                          </code></pre>
                          <!-- Prism Code -->
                      </div>
                      </div>
                    </div>
                  </div>
                <!-- End:: row-6 -->

            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
        
@endsection

@section('scripts')
        
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection      