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
                                <li class="breadcrumb-item active" aria-current="page">Form switch</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Form switch</h1>
                    </div>
                    <div class="ti-btn-list">
                        <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                            <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                        </button>
                        <button class="ti-btn bg-primary text-white btn-wave me-0">
                            <i class="ri-share-forward-line me-1"></i> Share
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="col-span-12 lg:col-span-6">
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Default Toggle Switch
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <input type="checkbox" id="hs-basic-usage" class="ti-switch">
                  <label for="hs-basic-usage" class="sr-only">Toggle switch</label>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;input type="checkbox" id="hs-basic-usage" class="ti-switch"&gt;
  &lt;label&gt; for="hs-basic-usage" class="sr-only"&gt;Toggle switch&lt;/label&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Toggle Switch With Tooltip
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="hs-tooltip flex items-center">
                    <input type="checkbox" id="hs-tooltip-example" class="hs-tooltip-toggle ti-switch shrink-0">
                    <label for="hs-tooltip-example" class="text-sm text-gray-500 ms-3 dark:text-white/70">Allow push
                      notifications</label>
                    <div
                      class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                      role="tooltip">
                      Enable push notifications
                    </div>
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="hs-tooltip flex items-center"&gt;
  &lt;input type="checkbox" id="hs-tooltip-example" class="hs-tooltip-toggle ti-switch shrink-0"&gt;
  &lt;label for="hs-tooltip-example" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Allow push notifications&lt;/label&gt;
  &lt;div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700" role="tooltip"&gt;
      Enable push notifications
  &lt;/div&gt;
  &lt;/div&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
            </div>
          </div>
          <!-- End::row-1 -->
  
          <!-- Start::row-2 -->
          <div class="grid grid-cols-12 gap-x-6">
            <div class="col-span-12 lg:col-span-6">
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Toggle Switch With Description
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input type="checkbox" id="hs-basic-with-description-unchecked" class="ti-switch">
                      <label for="hs-basic-with-description-unchecked"
                        class="text-sm text-gray-500 ms-3 dark:text-white/70">Unchecked</label>
                    </div>
  
                    <div class="flex items-center">
                      <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked>
                      <label for="hs-basic-with-description-checked"
                        class="text-sm text-gray-500 ms-3 dark:text-white/70">Checked</label>
                    </div>
  
                    <div class="flex items-center">
                      <label class="text-sm text-gray-500 me-3 dark:text-white/70">On</label>
                      <input type="checkbox" id="hs-basic-with-description" class="ti-switch">
                      <label class="text-sm text-gray-500 ms-3 dark:text-white/70">Off</label>
                    </div>
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="space-y-4"&gt;
  &lt;div class="flex items-center"&gt;
      &lt;input type="checkbox" id="hs-basic-with-description-unchecked" class="ti-switch"&gt;
      &lt;label&gt; for="hs-basic-with-description-unchecked"
          class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Unchecked&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="flex items-center"&gt;
      &lt;input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked&gt;
      &lt;label&gt; for="hs-basic-with-description-checked"
          class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Checked&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="flex items-center"&gt;
      &lt;label&gt; class="text-sm text-gray-500 me-3 dark:text-white/70"&gt;On&lt;/label&gt;
      &lt;input type="checkbox" id="hs-basic-with-description" class="ti-switch"&gt;
      &lt;label&gt; class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Off&lt;/label&gt;
  &lt;/div&gt;
  &lt;/div&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Disabled Toggle Switch
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="space-y-4">
                    <div class="flex items-center opacity-70">
                      <input type="checkbox" id="hs-basic-disabled-with-description-unchecked"
                        class="ti-switch shrink-0 pointer-events-none" disabled>
                      <label for="hs-basic-disabled-with-description-unchecked"
                        class="text-sm text-gray-500 ms-3 dark:text-white/70">Unchecked</label>
                    </div>
  
                    <div class="flex items-center opacity-70">
                      <input type="checkbox" id="hs-basic-disabled-with-description-checked"
                        class="ti-switch shrink-0 pointer-events-none" checked disabled>
                      <label for="hs-basic-disabled-with-description-checked"
                        class="text-sm text-gray-500 ms-3 dark:text-white/70">Checked</label>
                    </div>
  
                    <div class="flex items-center opacity-70">
                      <label class="text-sm text-gray-500 me-3 dark:text-white/70">On</label>
                      <input type="checkbox" id="hs-basic-disabled-with-description"
                        class="ti-switch shrink-0 pointer-events-none" disabled>
                      <label class="text-sm text-gray-500 ms-3 dark:text-white/70">Off</label>
                    </div>
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="space-y-4"&gt;
  &lt;div class="flex items-center opacity-70"&gt;
      &lt;input type="checkbox" id="hs-basic-disabled-with-description-unchecked" class="ti-switch shrink-0 pointer-events-none" disabled&gt;
      &lt;label for="hs-basic-disabled-with-description-unchecked" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Unchecked&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="flex items-center opacity-70"&gt;
      &lt;input type="checkbox" id="hs-basic-disabled-with-description-checked" class="ti-switch shrink-0 pointer-events-none" checked disabled&gt;
      &lt;label for="hs-basic-disabled-with-description-checked" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Checked&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="flex items-center opacity-70"&gt;
      &lt;label class="text-sm text-gray-500 me-3 dark:text-white/70"&gt;On&lt;/label&gt;
      &lt;input type="checkbox" id="hs-basic-disabled-with-description" class="ti-switch shrink-0 pointer-events-none" disabled&gt;
      &lt;label class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Off&lt;/label&gt;
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
            <div class="col-span-12 lg:col-span-6 xl:col-span-6">
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Solid Color Variants
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="space-x-4 rtl:space-x-reverse">
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-xs-solid-switch"
                        class="ti-switch shrink-0 !w-[35px] !h-[21px] before:size-4">
                      <label for="hs-xs-solid-switch" class="sr-only">Extra small</label>
                    </div>
  
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-small-solid-switch"
                        class="ti-switch shrink-0 !w-11 !h-6 before:size-5">
                      <label for="hs-small-solid-switch" class="sr-only">Small</label>
                    </div>
  
  
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-medium-solid-switch" class="ti-switch shrink-0">
                      <label for="hs-medium-solid-switch" class="sr-only">Medium</label>
                    </div>
  
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-large-solid-switch"
                        class="ti-switch shrink-0 !w-[4.25rem] !h-9 before:w-8 before:h-8">
                      <label for="hs-large-solid-switch" class="sr-only">Large</label>
                    </div>
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="space-x-4"&gt;
  &lt;div class="relative inline-block"&gt;
      &lt;input type="checkbox" id="hs-xs-solid-switch" class="ti-switch shrink-0 !w-[35px] !h-[21px] before:size-4"&gt;
      &lt;label for="hs-xs-solid-switch"  class="sr-only"&gt;Extra small&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="relative inline-block"&gt;
      &lt;input type="checkbox" id="hs-small-solid-switch" class="ti-switch shrink-0 !w-11 !h-6 before:size-5"&gt;
      &lt;label for="hs-small-solid-switch"  class="sr-only"&gt;Small&lt;/label&gt;
  &lt;/div&gt;
  
  
  &lt;div class="relative inline-block"&gt;
      &lt;input type="checkbox" id="hs-medium-solid-switch" class="ti-switch shrink-0"&gt;
      &lt;label for="hs-medium-solid-switch"  class="sr-only"&gt;Medium&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="relative inline-block"&gt;
      &lt;input type="checkbox" id="hs-large-solid-switch" class="ti-switch shrink-0 !w-[4.25rem] !h-9 before:w-8 before:h-8"&gt;
      &lt;label for="hs-large-solid-switch"  class="sr-only"&gt;Large&lt;/label&gt;
  &lt;/div&gt;
  &lt;/div&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Solid Color With Icons
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="space-x-4 rtl:space-x-reverse">
                    <!-- Switch/Toggle -->
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-small-solid-switch-with-icons" class="peer relative shrink-0 w-11 h-6 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary checked:border-primary focus:checked:border-primary dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-gray-600
                    
                      before:inline-block before:size-5 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-white">
                      <label for="hs-small-solid-switch-with-icons" class="sr-only">switch</label>
                      <span class="peer-checked:text-white text-gray-500 dark:text-white/70 size-5 absolute top-[3px] start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                      </span>
                      <span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-5 absolute top-[3px] end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      </span>
                    </div>
                    <!-- End Switch/Toggle -->
  
                    <!-- Switch/Toggle -->
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-default-solid-switch-with-icons" class="peer relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary checked:border-primary focus:checked:border-primary dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-gray-600
                    
                      before:inline-block before:size-6 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-white">
                      <label for="hs-default-solid-switch-with-icons" class="sr-only">switch</label>
                      <span class="peer-checked:text-white text-gray-500 dark:text-white/70 size-6 absolute top-0.5 start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                      </span>
                      <span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-6 absolute top-0.5 end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      </span>
                    </div>
                    <!-- End Switch/Toggle -->
  
                    <!-- Switch/Toggle -->
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-large-solid-switch-with-icons" class="peer relative shrink-0 w-[4.25rem] h-9 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary checked:border-primary focus:checked:border-primary dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-gray-600
                    
                      before:inline-block before:w-8 before:h-8 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-white">
                      <label for="hs-large-solid-switch-with-icons" class="sr-only">switch</label>
                      <span class="peer-checked:text-white text-gray-500 dark:text-white/70 size-8 absolute top-0.5 start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                      </span>
                      <span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-8 absolute top-0.5 end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      </span>
                    </div>
                    <!-- End Switch/Toggle -->
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="space-x-4 rtl:space-x-reverse"&gt;
  &lt;!-- Switch/Toggle --&gt;
  &lt;div class="relative inline-block"&gt;
    &lt;input type="checkbox" id="hs-small-solid-switch-with-icons" class="peer relative shrink-0 w-11 h-6 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary checked:border-primary focus:checked:border-primary dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-gray-600
  
    before:inline-block before:size-5 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-white"&gt;
    &lt;label&gt; for="hs-small-solid-switch-with-icons" class="sr-only"&gt;switch&lt;/label&gt;
    &lt;span class="peer-checked:text-white text-gray-500 dark:text-white/70 size-5 absolute top-[3px] start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
    &lt;span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-5 absolute top-[3px] end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;polyline points="20 6 9 17 4 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;!-- End Switch/Toggle --&gt;
  
  &lt;!-- Switch/Toggle --&gt;
  &lt;div class="relative inline-block"&gt;
    &lt;input type="checkbox" id="hs-default-solid-switch-with-icons" class="peer relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary checked:border-primary focus:checked:border-primary dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-gray-600
  
    before:inline-block before:size-6 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-white"&gt;
    &lt;label&gt; for="hs-default-solid-switch-with-icons" class="sr-only"&gt;switch&lt;/label&gt;
    &lt;span class="peer-checked:text-white text-gray-500 dark:text-white/70 size-6 absolute top-0.5 start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
    &lt;span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-6 absolute top-0.5 end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;polyline points="20 6 9 17 4 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;!-- End Switch/Toggle --&gt;
  
  &lt;!-- Switch/Toggle --&gt;
  &lt;div class="relative inline-block"&gt;
    &lt;input type="checkbox" id="hs-large-solid-switch-with-icons" class="peer relative shrink-0 w-[4.25rem] h-9 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary checked:border-primary focus:checked:border-primary dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-gray-600
  
    before:inline-block before:w-8 before:h-8 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-white"&gt;
    &lt;label&gt; for="hs-large-solid-switch-with-icons" class="sr-only"&gt;switch&lt;/label&gt;
    &lt;span class="peer-checked:text-white text-gray-500 dark:text-white/70 size-8 absolute top-0.5 start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
    &lt;span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-8 absolute top-0.5 end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;polyline points="20 6 9 17 4 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;!-- End Switch/Toggle --&gt;
  &lt;/div&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6 xl:col-span-6">
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Soft Color Variants
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="space-x-4 rtl:space-x-reverse">
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-xs-soft-switch"
                        class="ti-switch checked:!bg-primary/10 checked:!text-primary/10 checked:!border-primary/20 focus:checked:!border-primary/10 checked:before:!bg-primary dark:checked:before:bg-primary shrink-0 !w-[35px] !h-[21px] before:size-4">
                      <label for="hs-xs-soft-switch" class="sr-only">Extra small</label>
                    </div>
  
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-small-soft-switch"
                        class="ti-switch checked:!bg-primary/10 checked:!text-primary/10 checked:!border-primary/20 focus:checked:!border-primary/10 checked:before:!bg-primary dark:checked:before:bg-primary shrink-0 !w-11 !h-6 before:size-5">
                      <label for="hs-small-soft-switch" class="sr-only">Small</label>
                    </div>
  
  
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-medium-soft-switch"
                        class="ti-switch checked:!bg-primary/10 checked:!text-primary/10 checked:!border-primary/20 focus:checked:!border-primary/10 checked:before:!bg-primary dark:checked:before:bg-primary shrink-0">
                      <label for="hs-medium-soft-switch" class="sr-only">Medium</label>
                    </div>
  
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-large-soft-switch"
                        class="ti-switch checked:!bg-primary/10 checked:!text-primary/10 checked:!border-primary/20 focus:checked:!border-primary/10 checked:before:!bg-primary dark:checked:before:bg-primary shrink-0 !w-[4.25rem] !h-9 before:w-8 before:h-8">
                      <label for="hs-large-soft-switch" class="sr-only">Large</label>
                    </div>
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="space-x-4"&gt;
  &lt;div class="relative inline-block"&gt;
      &lt;input type="checkbox" id="hs-xs-soft-switch" class="ti-switch checked:!bg-primary/10 checked:!text-primary/10 checked:!border-primary/20 focus:checked:!border-primary/10 checked:before:!bg-primary dark:checked:before:bg-primary shrink-0 !w-[35px] !h-[21px] before:size-4"&gt;
      &lt;label for="hs-xs-soft-switch"  class="sr-only"&gt;Extra small&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="relative inline-block"&gt;
      &lt;input type="checkbox" id="hs-small-soft-switch" class="ti-switch checked:!bg-primary/10 checked:!text-primary/10 checked:!border-primary/20 focus:checked:!border-primary/10 checked:before:!bg-primary dark:checked:before:bg-primary shrink-0 !w-11 !h-6 before:size-5"&gt;
      &lt;label for="hs-small-soft-switch"  class="sr-only"&gt;Small&lt;/label&gt;
  &lt;/div&gt;
  
  
  &lt;div class="relative inline-block"&gt;
      &lt;input type="checkbox" id="hs-medium-soft-switch" class="ti-switch checked:!bg-primary/10 checked:!text-primary/10 checked:!border-primary/20 focus:checked:!border-primary/10 checked:before:!bg-primary dark:checked:before:bg-primary shrink-0"&gt;
      &lt;label for="hs-medium-soft-switch"  class="sr-only"&gt;Medium&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="relative inline-block"&gt;
      &lt;input type="checkbox" id="hs-large-soft-switch" class="ti-switch checked:!bg-primary/10 checked:!text-primary/10 checked:!border-primary/20 focus:checked:!border-primary/10 checked:before:!bg-primary dark:checked:before:bg-primary shrink-0 !w-[4.25rem] !h-9 before:w-8 before:h-8"&gt;
      &lt;label for="hs-large-soft-switch"  class="sr-only"&gt;Large&lt;/label&gt;
  &lt;/div&gt;
  &lt;/div&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Soft Color With Icons
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="space-x-4 rtl:space-x-reverse">
                    <!-- Switch/Toggle -->
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-small-switch-soft-with-icons" class="peer relative shrink-0 w-11 h-6 p-px bg-gray-100 border border-gray-200 text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary/30 checked:border-primary/50 checked:hover:!bg-primary/10 checked:hover:!text-primary/10 checked:hover:!border-primary/30 checked:focus:!border-primary/30 checked:focus:!bg-primary/10 checked:focus:!text-primary/10 focus:checked:border-primary/50 dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary/30 dark:checked:border-primary dark:focus:ring-offset-gray-600
                      before:inline-block before:size-5 before:bg-white checked:before:bg-primary before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-primary">
                      <label for="hs-small-switch-soft-with-icons" class="sr-only">switch</label>
                      <span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-5 absolute top-[3px] start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                      </span>
                      <span class="peer-checked:text-white  size-5 absolute top-[3px] end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      </span>
                    </div>
                    <!-- End Switch/Toggle -->
  
                    <!-- Switch/Toggle -->
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-default-switch-soft-with-icons" class="peer relative w-[3.25rem] h-7 p-px bg-gray-100 border border-gray-200 text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary/30 checked:border-primary/50 checked:hover:!bg-primary/10 checked:hover:!text-primary/10 checked:hover:!border-primary/30 checked:focus:!border-primary/30 checked:focus:!bg-primary/10 checked:focus:!text-primary/10  focus:checked:border-primary/50 dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary/30 dark:checked:border-primary dark:focus:ring-offset-gray-600
                      before:inline-block before:size-6 before:bg-white checked:before:bg-primary before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-primary">
                      <label for="hs-default-switch-soft-with-icons" class="sr-only">switch</label>
                      <span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-6 absolute top-0.5 start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                      </span>
                      <span class="peer-checked:text-white size-6 absolute top-0.5 end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      </span>
                    </div>
                    <!-- End Switch/Toggle -->
  
                    <!-- Switch/Toggle -->
                    <div class="relative inline-block">
                      <input type="checkbox" id="hs-large-switch-soft-with-icons" class="peer relative shrink-0 w-[4.25rem] h-9 p-px bg-gray-100 border border-gray-200 text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary/30 checked:hover:!bg-primary/10 checked:hover:!text-primary/10 checked:hover:!border-primary/30 checked:focus:!border-primary/30 checked:focus:!bg-primary/10 checked:focus:!text-primary/10  checked:border-primary/50 focus:checked:border-primary/50 dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary/30 dark:checked:border-primary dark:focus:ring-offset-gray-600
                    
                      before:inline-block before:w-8 before:h-8 before:bg-white checked:before:bg-primary before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-primary">
                      <label for="hs-large-switch-soft-with-icons" class="sr-only">switch</label>
                      <span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-8 absolute top-0.5 start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                      </span>
                      <span class="peer-checked:text-white size-8 absolute top-0.5 end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      </span>
                    </div>
                    <!-- End Switch/Toggle -->
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="space-x-4 rtl:space-x-reverse"&gt;
  &lt;!-- Switch/Toggle --&gt;
  &lt;div class="relative inline-block"&gt;
    &lt;input type="checkbox" id="hs-small-switch-soft-with-icons" class="peer relative shrink-0 w-11 h-6 p-px bg-gray-100 border border-gray-200 text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary/30 checked:border-primary/50 focus:checked:border-primary/50 dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary/30 dark:checked:border-primary dark:focus:ring-offset-gray-600
    before:inline-block before:size-5 before:bg-white checked:before:bg-primary before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-primary"&gt;
    &lt;label for="hs-small-switch-soft-with-icons" class="sr-only"&gt;switch&lt;/label&gt;
    &lt;span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-5 absolute top-[3px] start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
    &lt;span class="peer-checked:text-white  size-5 absolute top-[3px] end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;polyline points="20 6 9 17 4 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;!-- End Switch/Toggle --&gt;
  
  &lt;!-- Switch/Toggle --&gt;
  &lt;div class="relative inline-block"&gt;
    &lt;input type="checkbox" id="hs-default-switch-soft-with-icons" class="peer relative w-[3.25rem] h-7 p-px bg-gray-100 border border-gray-200 text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary/30 checked:border-primary/50 focus:checked:border-primary/50 dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary/30 dark:checked:border-primary dark:focus:ring-offset-gray-600
    before:inline-block before:size-6 before:bg-white checked:before:bg-primary before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-primary"&gt;
    &lt;label for="hs-default-switch-soft-with-icons" class="sr-only"&gt;switch&lt;/label&gt;
    &lt;span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-6 absolute top-0.5 start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
    &lt;span class="peer-checked:text-white size-6 absolute top-0.5 end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;polyline points="20 6 9 17 4 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;!-- End Switch/Toggle --&gt;
  
  &lt;!-- Switch/Toggle --&gt;
  &lt;div class="relative inline-block"&gt;
    &lt;input type="checkbox" id="hs-large-switch-soft-with-icons" class="peer relative shrink-0 w-[4.25rem] h-9 p-px bg-gray-100 border border-gray-200 text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary/30 checked:border-primary/50 focus:checked:border-primary/50 dark:bg-bodybg dark:border-white/10 dark:checked:bg-primary/30 dark:checked:border-primary dark:focus:ring-offset-gray-600
  
    before:inline-block before:w-8 before:h-8 before:bg-white checked:before:bg-primary before:translate-x-0 checked:before:translate-x-full rtl:checked:before:-translate-x-full before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-black/20 dark:checked:before:bg-primary"&gt;
    &lt;label for="hs-large-switch-soft-with-icons" class="sr-only"&gt;switch&lt;/label&gt;
    &lt;span class="peer-checked:text-primary text-gray-500 dark:text-white/70 size-8 absolute top-0.5 start-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
    &lt;span class="peer-checked:text-white size-8 absolute top-0.5 end-0.5 flex justify-center items-center pointer-events-none transition-colors ease-in-out duration-200"&gt;
      &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;polyline points="20 6 9 17 4 12"/&gt;&lt;/svg&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;!-- End Switch/Toggle --&gt;
  &lt;/div&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6 xl:col-span-6">
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Toggle Switch Validation States
                  </div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input type="checkbox" id="hs-valid-toggle-switch" class="ti-switch shrink-0 checked:bg-none checked:bg-green-600 checked:hover:bg-green-600 checked:focus:bg-green-600 focus:border-green-600 focus:ring-green-600 dark:checked:bg-green-600
    
                                    checked:before:bg-green-200 dark:checked:before:bg-green-200" checked>
                      <label for="hs-valid-toggle-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70">Valid
                        toggle switch</label>
                    </div>
  
                    <div class="flex items-center">
                      <input type="checkbox" id="hs-invalid-toggle-switch" class="ti-switch shrink-0 checked:bg-none checked:bg-red-600 checked:hover:bg-red-600 checked:focus:bg-red-600 focus:border-red-600 focus:ring-red-600 dark:checked:bg-red-600
    
                                    checked:before:bg-red-200 dark:checked:before:bg-red-200" checked>
                      <label for="hs-invalid-toggle-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70">Invalid
                        toggle switch</label>
                    </div>
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="space-y-4"&gt;
  &lt;div class="flex items-center"&gt;
  &lt;input type="checkbox" id="hs-valid-toggle-switch" class="ti-switch shrink-0 checked:bg-none checked:bg-green-600 checked:hover:bg-green-600 checked:focus:bg-green-600 focus:border-green-600 focus:ring-green-600 dark:checked:bg-green-600
  
  checked:before:bg-green-200 dark:checked:before:bg-green-200" checked&gt;
  &lt;label for="hs-valid-toggle-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Valid toggle switch&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="flex items-center"&gt;
  &lt;input type="checkbox" id="hs-invalid-toggle-switch" class="ti-switch shrink-0 checked:bg-none checked:bg-red-600 checked:hover:bg-red-600 checked:focus:bg-red-600 focus:border-red-600 focus:ring-red-600 dark:checked:bg-red-600
  
  checked:before:bg-red-200 dark:checked:before:bg-red-200" checked&gt;
  &lt;label for="hs-invalid-toggle-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Invalid toggle switch&lt;/label&gt;
  &lt;/div&gt;
  &lt;/div&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6 xl:col-span-6">
              <div class="box">
                <div class="box-header justify-between">
                  <div class="box-title">
                    Toggle Switch With Sizes</div>
                  <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                      Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input type="checkbox" id="hs-xs-switch"
                        class="ti-switch shrink-0 !w-[35px] !h-[21px] before:size-4">
                      <label for="hs-xs-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70">Extra small</label>
                    </div>
  
                    <div class="flex items-center">
                      <input type="checkbox" id="hs-small-switch" class="ti-switch shrink-0 !w-11 !h-6 before:size-5">
                      <label for="hs-small-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70">Small</label>
                    </div>

                    <div class="flex items-center">
                      <input type="checkbox" id="hs-medium-switch" class="ti-switch shrink-0">
                      <label for="hs-medium-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70">Medium</label>
                    </div>
  
                    <div class="flex items-center">
                      <input type="checkbox" id="hs-large-switch"
                        class="ti-switch shrink-0 !w-[4.25rem] !h-9 before:w-8 before:h-8">
                      <label for="hs-large-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70">Large</label>
                    </div>
                  </div>
                </div>
                <div class="box-footer hidden border-t-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">
  &lt;div class="space-y-4"&gt;
  &lt;div class="flex items-center"&gt;
      &lt;input type="checkbox" id="hs-xs-switch" class="ti-switch shrink-0 !w-[35px] !h-[21px] before:size-4"&gt;
      &lt;label&gt; for="hs-xs-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Extra small&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="flex items-center"&gt;
      &lt;input type="checkbox" id="hs-small-switch" class="ti-switch shrink-0 !w-11 !h-6 before:size-5"&gt;
      &lt;label&gt; for="hs-small-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Small&lt;/label&gt;
  &lt;/div&gt;
  
  
  &lt;div class="flex items-center"&gt;
      &lt;input type="checkbox" id="hs-medium-switch" class="ti-switch shrink-0"&gt;
      &lt;label&gt; for="hs-medium-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Medium&lt;/label&gt;
  &lt;/div&gt;
  
  &lt;div class="flex items-center"&gt;
      &lt;input type="checkbox" id="hs-large-switch" class="ti-switch shrink-0 !w-[4.25rem] !h-9 before:w-8 before:h-8"&gt;
      &lt;label&gt; for="hs-large-switch" class="text-sm text-gray-500 ms-3 dark:text-white/70"&gt;Large&lt;/label&gt;
  &lt;/div&gt;
  &lt;/div&gt;
                                  </code></pre>
                  <!-- Prism Code -->
                </div>
              </div> 
            </div>
          </div>
          <!-- End::row-3-->

            </div>
        </div>
        <!-- End::app-content -->

@endsection

@section('scripts')
        
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection