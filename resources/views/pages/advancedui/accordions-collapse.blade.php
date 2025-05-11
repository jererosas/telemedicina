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
                <li class="breadcrumb-item active" aria-current="page">Accordions</li>
              </ol>
            </nav>
            <h1 class="page-title font-medium text-lg mb-0">Accordions</h1>
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
                  Basic Accordion
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div class="hs-accordion active" id="hs-basic-heading-one">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-collapse-one">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #1
                    </button>
                    <div id="hs-basic-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-heading-one">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-heading-two">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-collapse-two">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #2
                    </button>
                    <div id="hs-basic-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-heading-two">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-heading-three">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-collapse-three">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #3
                    </button>
                    <div id="hs-basic-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
                              
  &lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion active" id="hs-basic-heading-one"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-collapse-one"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #1
    &lt;/button&gt;
    &lt;div id="hs-basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-heading-one"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="hs-accordion" id="hs-basic-heading-two"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-collapse-two"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #2
    &lt;/button&gt;
    &lt;div id="hs-basic-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-heading-two"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="hs-accordion" id="hs-basic-heading-three"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-collapse-three"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #3
    &lt;/button&gt;
    &lt;div id="hs-basic-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-heading-three"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
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
                  Always Open
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group" data-hs-accordion-always-open>
                  <div class="hs-accordion active" id="hs-basic-always-open-heading-one">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-always-open-collapse-one">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #1
                    </button>
                    <div id="hs-basic-always-open-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-always-open-heading-one">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-always-open-heading-two">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-always-open-collapse-two">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #2
                    </button>
                    <div id="hs-basic-always-open-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-always-open-heading-two">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-always-open-heading-three">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-always-open-collapse-three">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #3
                    </button>
                    <div id="hs-basic-always-open-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-always-open-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
  &lt;div class="hs-accordion-group" data-hs-accordion-always-open&gt;
  &lt;div class="hs-accordion active" id="hs-basic-always-open-heading-one"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-always-open-collapse-one"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #1
    &lt;/button&gt;
    &lt;div id="hs-basic-always-open-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-always-open-heading-one"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="hs-accordion" id="hs-basic-always-open-heading-two"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-always-open-collapse-two"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #2
    &lt;/button&gt;
    &lt;div id="hs-basic-always-open-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-always-open-heading-two"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="hs-accordion" id="hs-basic-always-open-heading-three"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-always-open-collapse-three"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #3
    &lt;/button&gt;
    &lt;div id="hs-basic-always-open-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-always-open-heading-three"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
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
                  Nested
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div class="hs-accordion active" id="hs-basic-nested-heading-one">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-nested-collapse-one">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #1
                    </button>
                    <div id="hs-basic-nested-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-nested-heading-one">
                      <div class="hs-accordion-group ps-6">
                        <div class="hs-accordion active" id="hs-basic-nested-sub-heading-one">
                          <button
                            class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                            aria-controls="hs-basic-nested-sub-collapse-one">
                            <svg class="hs-accordion-active:hidden block size-3" width="16" height="16"
                              viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                              <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            </svg>
                            <svg class="hs-accordion-active:block hidden size-3" width="16" height="16"
                              viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            </svg>
                            Sub accordion #1
                          </button>
                          <div id="hs-basic-nested-sub-collapse-one"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="hs-basic-nested-sub-heading-one">
                            <p class="text-gray-800 dark:text-gray-200">
                              <em>This is the third item's accordion body.</em> It is hidden by default, until the
                              collapse plugin adds the appropriate classes that we use to style each element. These
                              classes control the overall appearance, as well as the showing and hiding via CSS
                              transitions.
                            </p>
                          </div>
                        </div>

                        <div class="hs-accordion" id="hs-basic-nested-sub-heading-two">
                          <button
                            class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                            aria-controls="hs-basic-nested-sub-collapse-two">
                            <svg class="hs-accordion-active:hidden block size-3" width="16" height="16"
                              viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                              <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            </svg>
                            <svg class="hs-accordion-active:block hidden size-3" width="16" height="16"
                              viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            </svg>
                            Sub accordion #2
                          </button>
                          <div id="hs-basic-nested-sub-collapse-two"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="hs-basic-nested-sub-heading-two">
                            <p class="text-gray-800 dark:text-gray-200">
                              <em>This is the second item's accordion body.</em> It is hidden by default, until the
                              collapse plugin adds the appropriate classes that we use to style each element. These
                              classes control the overall appearance, as well as the showing and hiding via CSS
                              transitions.
                            </p>
                          </div>
                        </div>

                        <div class="hs-accordion" id="hs-basic-nested-sub-heading-three">
                          <button
                            class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                            aria-controls="hs-basic-nested-sub-collapse-three">
                            <svg class="hs-accordion-active:hidden block size-3" width="16" height="16"
                              viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                              <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            </svg>
                            <svg class="hs-accordion-active:block hidden size-3" width="16" height="16"
                              viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            </svg>
                            Sub accordion #3
                          </button>
                          <div id="hs-basic-nested-sub-collapse-three"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="hs-basic-nested-sub-heading-three">
                            <p class="text-gray-800 dark:text-gray-200">
                              <em>This is the first item's accordion body.</em> It is hidden by default, until the
                              collapse plugin adds the appropriate classes that we use to style each element. These
                              classes control the overall appearance, as well as the showing and hiding via CSS
                              transitions.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-nested-heading-two">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-nested-collapse-two">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #2
                    </button>
                    <div id="hs-basic-nested-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-nested-heading-two">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-nested-heading-three">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-nested-collapse-three">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #3
                    </button>
                    <div id="hs-basic-nested-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-nested-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion active" id="hs-basic-nested-heading-one"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-nested-collapse-one"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #1
    &lt;/button&gt;
    &lt;div id="hs-basic-nested-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-heading-one"&gt;
      &lt;div class="hs-accordion-group ps-6"&gt;
        &lt;div class="hs-accordion active" id="hs-basic-nested-sub-heading-one"&gt;
          &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-nested-sub-collapse-one"&gt;
            &lt;svg class="hs-accordion-active:hidden block size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
              &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
              &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
            &lt;/svg&gt;
            &lt;svg class="hs-accordion-active:block hidden size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
              &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
            &lt;/svg&gt;
            Sub accordion #1
          &lt;/button&gt;
          &lt;div id="hs-basic-nested-sub-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-sub-heading-one"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200"&gt;
              &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
            &lt;/p&gt;
          &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="hs-accordion" id="hs-basic-nested-sub-heading-two"&gt;
          &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-nested-sub-collapse-two"&gt;
            &lt;svg class="hs-accordion-active:hidden block size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
              &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
              &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
            &lt;/svg&gt;
            &lt;svg class="hs-accordion-active:block hidden size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
              &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
            &lt;/svg&gt;
            Sub accordion #2
          &lt;/button&gt;
          &lt;div id="hs-basic-nested-sub-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-sub-heading-two"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200"&gt;
              &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
            &lt;/p&gt;
          &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="hs-accordion" id="hs-basic-nested-sub-heading-three"&gt;
          &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-nested-sub-collapse-three"&gt;
            &lt;svg class="hs-accordion-active:hidden block size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
              &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
              &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
            &lt;/svg&gt;
            &lt;svg class="hs-accordion-active:block hidden size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
              &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/&gt;
            &lt;/svg&gt;
            Sub accordion #3
          &lt;/button&gt;
          &lt;div id="hs-basic-nested-sub-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-sub-heading-three"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200"&gt;
              &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
            &lt;/p&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="hs-accordion" id="hs-basic-nested-heading-two"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-nested-collapse-two"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #2
    &lt;/button&gt;
    &lt;div id="hs-basic-nested-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-heading-two"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="hs-accordion" id="hs-basic-nested-heading-three"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-nested-collapse-three"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #3
    &lt;/button&gt;
    &lt;div id="hs-basic-nested-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-heading-three"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
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
                  No arrow
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div class="hs-accordion active" id="hs-basic-no-arrow-heading-one">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-no-arrow-collapse-one">
                      Accordion #1
                    </button>
                    <div id="hs-basic-no-arrow-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-no-arrow-heading-one">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-no-arrow-heading-two">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-no-arrow-collapse-two">
                      Accordion #2
                    </button>
                    <div id="hs-basic-no-arrow-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-no-arrow-heading-two">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-no-arrow-heading-three">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-no-arrow-collapse-three">
                      Accordion #3
                    </button>
                    <div id="hs-basic-no-arrow-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-no-arrow-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-no-arrow-heading-four">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-no-arrow-collapse-three">
                      Accordion #4
                    </button>
                    <div id="hs-basic-no-arrow-collapse-four"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-no-arrow-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-no-arrow-heading-five">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-no-arrow-collapse-three">
                      Accordion #5
                    </button>
                    <div id="hs-basic-no-arrow-collapse-five"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-no-arrow-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-no-arrow-heading-six">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-no-arrow-collapse-three">
                      Accordion #6
                    </button>
                    <div id="hs-basic-no-arrow-collapse-six"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-no-arrow-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion active" id="hs-basic-no-arrow-heading-one"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-no-arrow-collapse-one"&gt;
        Accordion #1
      &lt;/button&gt;
      &lt;div id="hs-basic-no-arrow-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-no-arrow-heading-one"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class="hs-accordion" id="hs-basic-no-arrow-heading-two"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-no-arrow-collapse-two"&gt;
        Accordion #2
      &lt;/button&gt;
      &lt;div id="hs-basic-no-arrow-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-no-arrow-heading-two"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class="hs-accordion" id="hs-basic-no-arrow-heading-three"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-no-arrow-collapse-three"&gt;
        Accordion #3
      &lt;/button&gt;
      &lt;div id="hs-basic-no-arrow-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-no-arrow-heading-three"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                            </code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="xl:col-span-6 col-span-12">
            <div class="box custom-box">
              <div class="box-header justify-between">
                <div class="box-title">
                  With arrow
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div class="hs-accordion active" id="hs-basic-with-arrow-heading-one">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-with-arrow-collapse-one">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                      </svg>
                      Accordion #1
                    </button>
                    <div id="hs-basic-with-arrow-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-arrow-heading-one">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-with-arrow-heading-two">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-with-arrow-collapse-two">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                      </svg>
                      Accordion #2
                    </button>
                    <div id="hs-basic-with-arrow-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-arrow-heading-two">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-with-arrow-heading-three">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-with-arrow-collapse-three">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                      </svg>
                      Accordion #3
                    </button>
                    <div id="hs-basic-with-arrow-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-arrow-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion active" id="hs-basic-with-arrow-heading-one"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-one"&gt;
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
        Accordion #1
      &lt;/button&gt;
      &lt;div id="hs-basic-with-arrow-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-arrow-heading-one"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class="hs-accordion" id="hs-basic-with-arrow-heading-two"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-two"&gt;
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
        Accordion #2
      &lt;/button&gt;
      &lt;div id="hs-basic-with-arrow-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-arrow-heading-two"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class="hs-accordion" id="hs-basic-with-arrow-heading-three"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-three"&gt;
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
        Accordion #3
      &lt;/button&gt;
      &lt;div id="hs-basic-with-arrow-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-arrow-heading-three"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion active" id="hs-basic-with-arrow-heading-one"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-one"&gt;
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
        Accordion #1
      &lt;/button&gt;
      &lt;div id="hs-basic-with-arrow-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-arrow-heading-one"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class="hs-accordion" id="hs-basic-with-arrow-heading-two"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-two"&gt;
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
        Accordion #2
      &lt;/button&gt;
      &lt;div id="hs-basic-with-arrow-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-arrow-heading-two"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class="hs-accordion" id="hs-basic-with-arrow-heading-three"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-three"&gt;
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
        Accordion #3
      &lt;/button&gt;
      &lt;div id="hs-basic-with-arrow-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-arrow-heading-three"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
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
                  With title and arrow stretched
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div class="hs-accordion active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                      Accordion #1
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                      Accordion #2
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                      </svg>
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-three">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                      Accordion #3
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion active" id="hs-basic-with-title-and-arrow-stretched-heading-one"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one"&gt;
        Accordion #1
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
      &lt;/button&gt;
      &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-two"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two"&gt;
        Accordion #2
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
      &lt;/button&gt;
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
      &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-three"&gt;
      &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three"&gt;
        Accordion #3
        &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m6 9 6 6 6-6"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m18 15-6-6-6 6"/&gt;&lt;/svg&gt;
      &lt;/button&gt;
      &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
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
                  Bordered
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div
                    class="hs-accordion active bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10"
                    id="hs-bordered-heading-one">
                    <button
                      class="hs-accordion-toggle dark:bg-bodybg dark:border-white/10 rounded-md hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-bordered-collapse-one">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #1
                    </button>
                    <div id="hs-basic-bordered-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-bordered-heading-one">
                      <div class="pb-4 px-5 dark:bg-bodybg">
                        <p class="text-gray-800 dark:text-gray-200">
                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                          plugin adds the appropriate classes that we use to style each element. These classes control
                          the overall appearance, as well as the showing and hiding via CSS transitions.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div
                    class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg border-defaultborder dark:border-defaultborder/10"
                    id="hs-bordered-heading-two">
                    <button
                      class="hs-accordion-toggle dark:bg-bodybg  rounded-md hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-bordered-collapse-two">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #2
                    </button>
                    <div id="hs-basic-bordered-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-bordered-heading-two">
                      <div class="pb-4 px-5 dark:bg-bodybg">
                        <p class="text-gray-800 dark:text-gray-200">
                          <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                          plugin adds the appropriate classes that we use to style each element. These classes control
                          the overall appearance, as well as the showing and hiding via CSS transitions.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div
                    class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10"
                    id="hs-bordered-heading-three">
                    <button
                      class="hs-accordion-toggle  rounded-md dark:bg-bodybg hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-bordered-collapse-three">
                      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                      Accordion #3
                    </button>
                    <div id="hs-basic-bordered-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-bordered-heading-three">
                      <div class="pb-4 px-5 dark:bg-bodybg">
                        <p class="text-gray-800 dark:text-gray-200">
                          <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                          plugin adds the appropriate classes that we use to style each element. These classes control
                          the overall appearance, as well as the showing and hiding via CSS transitions.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion active bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-bodybg dark:border-white/10" id="hs-bordered-heading-one"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-bordered-collapse-one"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #1
    &lt;/button&gt;
    &lt;div id="hs-basic-bordered-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-bordered-heading-one"&gt;
      &lt;div class="pb-4 px-5"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-bodybg dark:border-white/10" id="hs-bordered-heading-two"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-bordered-collapse-two"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #2
    &lt;/button&gt;
    &lt;div id="hs-basic-bordered-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-bordered-heading-two"&gt;
      &lt;div class="pb-4 px-5"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-bodybg dark:border-white/10" id="hs-bordered-heading-three"&gt;
    &lt;button class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-bordered-collapse-three"&gt;
      &lt;svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
      &lt;svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
      Accordion #3
    &lt;/button&gt;
    &lt;div id="hs-basic-bordered-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-bordered-heading-three"&gt;
      &lt;div class="pb-4 px-5"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
          &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
      &lt;/div&gt;
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
                  Active Content Bordered
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div
                    class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-xl dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent"
                    id="hs-active-bordered-heading-one">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-active-bordered-collapse-one">
                      Accordion #1
                      <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-one"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-active-bordered-heading-one">
                      <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-gray-200">
                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                          plugin adds the appropriate classes that we use to style each element. These classes control
                          the overall appearance, as well as the showing and hiding via CSS transitions.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div
                    class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent"
                    id="hs-active-bordered-heading-two">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-active-bordered-collapse-two">
                      Accordion #2
                      <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-two"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-active-bordered-heading-two">
                      <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-gray-200">
                          <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                          plugin adds the appropriate classes that we use to style each element. These classes control
                          the overall appearance, as well as the showing and hiding via CSS transitions.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div
                    class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-xl dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent"
                    id="hs-active-bordered-heading-three">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                      aria-controls="hs-basic-active-bordered-collapse-three">
                      Accordion #3
                      <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                      </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-active-bordered-heading-three">
                      <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-gray-200">
                          <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                          plugin adds the appropriate classes that we use to style each element. These classes control
                          the overall appearance, as well as the showing and hiding via CSS transitions.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
&lt;div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-xl dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-one"&gt;
  &lt;button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-one"&gt;
    Accordion #1
    &lt;svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
    &lt;svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
  &lt;/button&gt;
  &lt;div id="hs-basic-active-bordered-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-one"&gt;
    &lt;div class="pb-4 px-5"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-two"&gt;
  &lt;button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-two"&gt;
    Accordion #2
    &lt;svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
    &lt;svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
  &lt;/button&gt;
  &lt;div id="hs-basic-active-bordered-collapse-two" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-two"&gt;
    &lt;div class="pb-4 px-5"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-xl dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-three"&gt;
  &lt;button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-three"&gt;
    Accordion #3
    &lt;svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
    &lt;svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
  &lt;/button&gt;
  &lt;div id="hs-basic-active-bordered-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-three"&gt;
    &lt;div class="pb-4 px-5"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
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
            <div class="box custom-box">
              <div class="box-header justify-between">
                <div class="box-title">
                  Basic Custom Accordion
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div class="hs-accordion accordion-item overflow-hidden !border-b-0" id="hs-basic-heading-custom-one">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-collapse-custom-one" type="button">
                      Accordion #1
                    </button>

                    <div id="hs-basic-collapse-custom-one"
                      class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-heading-custom-one">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by
                        default, until the collapse plugin adds the appropriate classes that we
                        use
                        to
                        style each element. These classes control the overall appearance, as
                        well as
                        the
                        showing and hiding via CSS transitions. You can modify any of this with
                        custom
                        CSS or overriding our default variables. It's also worth noting that
                        just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the
                        transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>

                  <div class="hs-accordion accordion-item !border-b-0" id="hs-basic-heading-custom-two">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-collapse-custom-two" type="button">
                      Accordion #2
                    </button>
                    <div id="hs-basic-collapse-custom-two"
                      class="hs-accordion-content hidden overflow-hidden w-full transition-[height] duration-300"
                      aria-labelledby="hs-basic-heading-custom-two">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is shown by
                        default, until the collapse plugin adds the appropriate classes that we
                        use
                        to
                        style each element. These classes control the overall appearance, as
                        well as
                        the
                        showing and hiding via CSS transitions. You can modify any of this with
                        custom
                        CSS or overriding our default variables. It's also worth noting that
                        just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the
                        transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>

                  <div class="hs-accordion accordion-item overflow-hidden" id="hs-basic-heading-custom-three">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-collapse-custom-three" type="button">
                      Accordion #3
                    </button>
                    <div id="hs-basic-collapse-custom-three"
                      class="hs-accordion-content  overflow-hidden  w-full hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-heading-custom-three">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is shown by
                        default, until the collapse plugin adds the appropriate classes that we
                        use
                        to
                        style each element. These classes control the overall appearance, as
                        well as
                        the
                        showing and hiding via CSS transitions. You can modify any of this with
                        custom
                        CSS or overriding our default variables. It's also worth noting that
                        just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the
                        transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion accordion-item  overflow-hidden  !border-b-0" id="hs-basic-heading-custom-one"&gt;
      &lt;button class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-basic-collapse-custom-one" type="button"&gt;
        Accordion #1
      &lt;/button&gt;
      &lt;div id="hs-basic-collapse-custom-one"
        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
        aria-labelledby="hs-basic-heading-custom-one"&gt;
        &lt;div class="accordion-body"&gt;
            &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
            default, until the collapse plugin adds the appropriate classes that we
            use
            to
            style each element. These classes control the overall appearance, as
            well as
            the
            showing and hiding via CSS transitions. You can modify any of this with
            custom
            CSS or overriding our default variables. It's also worth noting that
            just
            about
            any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
            transition
            does limit overflow.
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion accordion-item !border-b-0" id="hs-basic-heading-custom-two"&gt;
      &lt;button
        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-basic-collapse-custom-two" type="button"&gt;
        Accordion #2
      &lt;/button&gt;
      &lt;div id="hs-basic-collapse-custom-two"
        class="hs-accordion-content hidden overflow-hidden w-full transition-[height] duration-300"
        aria-labelledby="hs-basic-heading-custom-two"&gt;
        &lt;div class="accordion-body"&gt;
            &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is shown by
            default, until the collapse plugin adds the appropriate classes that we
            use
            to
            style each element. These classes control the overall appearance, as
            well as
            the
            showing and hiding via CSS transitions. You can modify any of this with
            custom
            CSS or overriding our default variables. It's also worth noting that
            just
            about
            any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
            transition
            does limit overflow.
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-heading-custom-three"&gt;
      &lt;button
        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-basic-collapse-custom-three" type="button"&gt;
        Accordion #3
      &lt;/button&gt;
      &lt;div id="hs-basic-collapse-custom-three"
        class="hs-accordion-content  overflow-hidden  w-full hidden transition-[height] duration-300"
        aria-labelledby="hs-basic-heading-custom-three"&gt;
        &lt;div class="accordion-body"&gt;
            &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is shown by
            default, until the collapse plugin adds the appropriate classes that we
            use
            to
            style each element. These classes control the overall appearance, as
            well as
            the
            showing and hiding via CSS transitions. You can modify any of this with
            custom
            CSS or overriding our default variables. It's also worth noting that
            just
            about
            any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
            transition
            does limit overflow.
        &lt;/div&gt;
      &lt;/div&gt;
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
                  Basic Accordion With Icon
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div class="hs-accordion accordion-item  overflow-hidden !border-b-0"
                    id="hs-basic-with-arrow1-heading-one">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-with-arrow1-collapse-one" type="button">
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      Accordion #1
                    </button>
                    <div id="hs-basic-with-arrow1-collapse-one"
                      class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-arrow1-heading-one">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by
                        default, until the collapse plugin adds the appropriate classes that we
                        use
                        to
                        style each element. These classes control the overall appearance, as
                        well as
                        the
                        showing and hiding via CSS transitions. You can modify any of this with
                        custom
                        CSS or overriding our default variables. It's also worth noting that
                        just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the
                        transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="hs-accordion accordion-item !border-b-0" id="hs-basic-with-arrow2-heading-two">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-with-arrow1-collapse-two" type="button">
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      Accordion #2
                    </button>
                    <div id="hs-basic-with-arrow1-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-arrow2-heading-two">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by
                        default, until the collapse plugin adds the appropriate classes that we
                        use
                        to
                        style each element. These classes control the overall appearance, as
                        well as
                        the
                        showing and hiding via CSS transitions. You can modify any of this with
                        custom
                        CSS or overriding our default variables. It's also worth noting that
                        just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the
                        transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="hs-accordion accordion-item  overflow-hidden" id="hs-basic-with-arrow3-heading-three">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-with-arrow1-collapse-three" type="button">
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      Accordion #3
                    </button>
                    <div id="hs-basic-with-arrow1-collapse-three"
                      class="hs-accordion-content hidden overflow-hidden w-full transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-arrow3-heading-three">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden
                        by
                        default, until the collapse plugin adds the appropriate classes that we
                        use
                        to
                        style each element. These classes control the overall appearance, as
                        well as
                        the
                        showing and hiding via CSS transitions. You can modify any of this with
                        custom
                        CSS or overriding our default variables. It's also worth noting that
                        just
                        about
                        any HTML can go within the <code>.accordion-body</code>, though the
                        transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
  &lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-with-arrow-heading-one"&gt;
    &lt;button
      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-basic-with-arrow-collapse-one" type="button"&gt;
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      Accordion #1
    &lt;/button&gt;
    &lt;div id="hs-basic-with-arrow-collapse-one"
      class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-basic-with-arrow-heading-one"&gt;
      &lt;div class="accordion-body"&gt;
          &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
          default, until the collapse plugin adds the appropriate classes that we
          use
          to
          style each element. These classes control the overall appearance, as
          well as
          the
          showing and hiding via CSS transitions. You can modify any of this with
          custom
          CSS or overriding our default variables. It's also worth noting that
          just
          about
          any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
          transition
          does limit overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion accordion-item !border-b-0" id="hs-basic-with-arrow-heading-two"&gt;
    &lt;button
      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-basic-with-arrow-collapse-two" type="button"&gt;
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      Accordion #2
    &lt;/button&gt;
    &lt;div id="hs-basic-with-arrow-collapse-two"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-basic-with-arrow-heading-two"&gt;
      &lt;div class="accordion-body"&gt;
          &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
          default, until the collapse plugin adds the appropriate classes that we
          use
          to
          style each element. These classes control the overall appearance, as
          well as
          the
          showing and hiding via CSS transitions. You can modify any of this with
          custom
          CSS or overriding our default variables. It's also worth noting that
          just
          about
          any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
          transition
          does limit overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-with-arrow-heading-three"&gt;
    &lt;button
      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-basic-with-arrow-collapse-three" type="button"&gt;
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      Accordion #3
    &lt;/button&gt;
    &lt;div id="hs-basic-with-arrow-collapse-three"
      class="hs-accordion-content hidden overflow-hidden w-full transition-[height] duration-300"
      aria-labelledby="hs-basic-with-arrow-heading-three"&gt;
      &lt;div class="accordion-body"&gt;
          &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
          by
          default, until the collapse plugin adds the appropriate classes that we
          use
          to
          style each element. These classes control the overall appearance, as
          well as
          the
          showing and hiding via CSS transitions. You can modify any of this with
          custom
          CSS or overriding our default variables. It's also worth noting that
          just
          about
          any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
          transition
          does limit overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;/div&gt;
  </code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-2 -->

        <!-- Start:: row-3 -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="xl:col-span-12 col-span-12">
            <div class="box custom-box">
              <div class="box-header justify-between">
                <div class="box-title">
                  Accordin Arrow Streched
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body p-0">
                <div class="hs-accordion-group">
                  <div class="hs-accordion accordion-item  overflow-hidden !border-b-0"
                    id="hs-basic-with-title-and-arrow1-stretched-heading-one">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-with-title-and-arrow1-stretched-collapse-one" type="button">
                      Accordion #1
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow1-stretched-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow1-stretched-heading-one">
                      <p class="text-gray-800 !py-3 !px-4 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div class="hs-accordion accordion-item !border-b-0"
                    id="hs-basic-with-title-and-arrow1-stretched-heading-two">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-with-title-and-arrow1-stretched-collapse-two" type="button">
                      Accordion #2
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow1-stretched-collapse-two"
                      class="hs-accordion-content accordion-body hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow1-stretched-heading-two">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div class="hs-accordion accordion-item  overflow-hidden"
                    id="hs-basic-with-title-and-arrow1-stretched-heading-three">
                    <button
                      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-basic-with-title-and-arrow1-stretched-collapse-three" type="button">
                      Accordion #3
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow1-stretched-collapse-three"
                      class="hs-accordion-content accordion-body hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow1-stretched-heading-three">
                      <p class="text-gray-800 dark:text-gray-200">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-with-title-and-arrow-stretched-heading-one"&gt;
    &lt;button
      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one" type="button"&gt;
      Accordion #1
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one"&gt;
      &lt;p class="text-gray-800 !py-3 !px-4 dark:text-gray-200"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion accordion-item !border-b-0" id="hs-basic-with-title-and-arrow-stretched-heading-two"&gt;
    &lt;button
      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two" type="button"&gt;
      Accordion #2
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
      class="hs-accordion-content accordion-body hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion accordion-item  overflow-hidden" id="hs-basic-with-title-and-arrow-stretched-heading-three"&gt;
    &lt;button
      class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three" type="button"&gt;
      Accordion #3
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
      class="hs-accordion-content accordion-body hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-3 -->

        <!-- Start:: row-4 -->
        <h6 class="mb-3 !text-defaulttextcolor">Light Colors:</h6>
        <div class="grid grid-cols-12 gap-x-6">
          <div class="xl:col-span-6 col-span-12">
            <div class="box custom-box">
              <div class="box-header justify-between">
                <div class="box-title">
                  Primary Soft Color
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div
                    class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-accordion-heading-1">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-accordion-collapse-1" type="button">
                      Accordion #1
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-accordion-collapse-1"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-accordion-heading-1">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div
                    class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-accordion-heading-2">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-accordion-collapse-2" type="button">
                      Accordion #2
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-accordion-collapse-2"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-accordion-heading-2">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div
                    class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-accordion-heading-3">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-accordion-collapse-3" type="button">
                      Accordion #3
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-accordion-collapse-3"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-accordion-heading-3">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-1"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-accordion-collapse-1" type="button"&gt;
      Accordion #1
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-1"
      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-accordion-heading-1"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-2"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-accordion-collapse-2" type="button"&gt;
      Accordion #2
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-2"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-accordion-heading-2"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-3"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-accordion-collapse-3" type="button"&gt;
      Accordion #3
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-3"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-accordion-heading-3"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
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
                  Secondary Soft Color
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div
                    class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-accordion-heading-1-primary">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-accordion-collapse-1-primary" type="button">
                      Accordion #1
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-accordion-collapse-1-primary"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-accordion-heading-1-primary">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div
                    class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-accordion-heading-2-primary">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-accordion-collapse-1-primary" type="button">
                      Accordion #2
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-accordion-collapse-2-primary"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-accordion-heading-2-primary">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div
                    class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-accordion-heading-3-primary">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-accordion-collapse-1-primary" type="button">
                      Accordion #3
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-accordion-collapse-3-primary"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-accordion-heading-3-primary">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-1-primary"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-accordion-collapse-1-primary" type="button"&gt;
      Accordion #1
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-1-primary"
      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-accordion-heading-1-primary"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-2-primary"&gt;
    &lt;button
    class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
    aria-controls="hs-accordion-collapse-1-primary" type="button"&gt;
    Accordion #2
    &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
  &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-2-primary"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-accordion-heading-2-primary"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-3-primary"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-accordion-collapse-1-primary" type="button"&gt;
      Accordion #3
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-3-primary"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-accordion-heading-3-primary"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-4 -->

        <!-- Start:: row-5 -->
        <h6 class="mb-3 !text-defaulttextcolor">Solid Colors:</h6>
        <div class="grid grid-cols-12 gap-x-6">
          <div class="xl:col-span-6 col-span-12">
            <div class="box custom-box">
              <div class="box-header justify-between">
                <div class="box-title">
                  Primary
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div
                    class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-primary-heading-1">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-primary-collapse-1" type="button">
                      Accordion #1
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-primary-collapse-1"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-primary-heading-1">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div
                    class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-primary-heading-2">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-primary-collapse-2" type="button">
                      Accordion #2
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-primary-collapse-2"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-primary-heading-2">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div
                    class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-primary-heading-3">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-primary-collapse-3" type="button">
                      Accordion #3
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-primary-collapse-3"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-primary-heading-3">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-primary-heading-1"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-primary-collapse-1" type="button"&gt;
      Accordion #1
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-primary-collapse-1"
      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-primary-heading-1"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-primary-heading-2"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-primary-collapse-2" type="button"&gt;
      Accordion #2
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-primary-collapse-2"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-primary-heading-2"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-primary-heading-3"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-primary-collapse-3" type="button"&gt;
      Accordion #3
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-primary-collapse-3"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-primary-heading-3"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
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
                  Secondary
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="hs-accordion-group">
                  <div
                    class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-secondary-heading-1">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-secondary-collapse-1" type="button">
                      Accordion #1
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-secondary-collapse-1"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-secondary-heading-1">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div
                    class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-secondary-heading-2">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-secondary-collapse-2" type="button">
                      Accordion #2
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-secondary-collapse-2"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-secondary-heading-2">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                  <div
                    class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10"
                    id="hs-secondary-heading-3">
                    <button
                      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                      aria-controls="hs-secondary-collapse-3" type="button">
                      Accordion #3
                      <svg
                        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      <svg
                        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                    <div id="hs-secondary-collapse-3"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-secondary-heading-3">
                      <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
  &lt;div class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-secondary-heading-1"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-secondary-collapse-1" type="button"&gt;
      Accordion #1
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-secondary-collapse-1"
      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-secondary-heading-1"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-secondary-heading-2"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-secondary-collapse-2" type="button"&gt;
      Accordion #2
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-secondary-collapse-2"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-secondary-heading-2"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-secondary-heading-3"&gt;
    &lt;button
      class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
      aria-controls="hs-secondary-collapse-3" type="button"&gt;
      Accordion #3
      &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
      &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
      &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-secondary-collapse-3"
      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
      aria-labelledby="hs-secondary-heading-3"&gt;
      &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-5 -->

        <!-- Start:: row-6 -->
        <h6 class="mb-3 !text-defaulttextcolor">Colored Borders:</h6>
        <div class="grid grid-cols-12 gap-x-6">
          <div class="xl:col-span-6 col-span-12">
            <div class="box custom-box">
              <div class="box-header justify-between">
                <div class="box-title">
                  Primary
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="accordion accordion-border-primary accordions-items-seperate"
                  id="accordionprimaryborderExample">
                  <div class="hs-accordion-group">
                    <div class="hs-accordion  accordion-item active" id="hs-basic-heading1">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between  gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse1" type="button">
                        Accordion Item #1
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse1"
                        class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300"
                        aria-labelledby="hs-basic-heading1">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="hs-accordion  accordion-item" id="hs-basic-heading2">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group  inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse2" type="button">
                        Accordion Item #2
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse2"
                        class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
                        aria-labelledby="hs-basic-heading2">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="hs-accordion  accordion-item" id="hs-basic-heading-tree">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group  inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse-tree" type="button">
                        Accordion Item #3
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse-tree"
                        class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                        aria-labelledby="hs-basic-heading-two">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-border-primary accordions-items-seperate"
id="accordionprimaryborderExample"&gt;
&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion  accordion-item" id="hs-basic-heading1"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group  inline-flex items-center justify-between  gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse1" type="button"&gt;
            Accordion Item #1
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
          &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse1"
            class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300"
            aria-labelledby="hs-basic-heading1"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion  accordion-item" id="hs-basic-heading2"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group  inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse2" type="button"&gt;
            Accordion Item #2
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
          &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse2"
            class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
            aria-labelledby="hs-basic-heading2"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion  accordion-item" id="hs-basic-heading-tree"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group  inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse-tree" type="button"&gt;
            Accordion Item #3
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
          &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse-tree"
            class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-heading-two"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
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
                  Success
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="accordion accordion-border-success accordions-items-seperate"
                  id="accordionsuccessborderExample">
                  <div class="hs-accordion-group">
                    <div class="hs-accordion  accordion-item active" id="hs-basic-heading11">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse11" type="button">
                        Accordion Item #1
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse11"
                        class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300"
                        aria-labelledby="hs-basic-heading11">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="hs-accordion  accordion-item" id="hs-basic-heading12">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group  inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse12" type="button">
                        Accordion Item #2
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse12"
                        class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
                        aria-labelledby="hs-basic-heading12">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="hs-accordion accordion-item" id="hs-basic-heading13">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group  inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse13" type="button">
                        Accordion Item #3
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse13"
                        class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                        aria-labelledby="hs-basic-heading13">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-border-success accordions-items-seperate"
id="accordionsuccessborderExample"&gt;
&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion  accordion-item" id="hs-basic-heading11"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse11" type="button"&gt;
            Accordion Item #1
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
          &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse11"
            class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300"
            aria-labelledby="hs-basic-heading11"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion  accordion-item" id="hs-basic-heading12"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group  inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse12" type="button"&gt;
            Accordion Item #2
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
          &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse12"
            class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
            aria-labelledby="hs-basic-heading12"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion accordion-item" id="hs-basic-heading13"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse13" type="button"&gt;
            Accordion Item #3
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
          &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
          &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse13"
            class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-heading13"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
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
        <!-- End:: row-6 -->

        <!-- Start:: row-7 -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="xl:col-span-6 col-span-12">
            <div class="box custom-box">
              <div class="box-header justify-between">
                <div class="box-title">
                  Left Aligned Icons
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="accordion accordionicon-left accordions-items-seperate" id="accordioniconLeftExample">
                  <div class="hs-accordion-group">
                    <div class="hs-accordion  accordion-item" id="hs-basic-heading21">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse21" type="button">
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Accordion Item #1
                      </button>
                      <div id="hs-basic-collapse21"
                        class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                        aria-labelledby="hs-basic-heading21">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="hs-accordion  accordion-item" id="hs-basic-heading22">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse22" type="button">
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Accordion Item #2
                      </button>
                      <div id="hs-basic-collapse22"
                        class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
                        aria-labelledby="hs-basic-heading22">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="hs-accordion  accordion-item" id="hs-basic-heading23">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse23" type="button">
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Accordion Item #3
                      </button>
                      <div id="hs-basic-collapse23"
                        class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                        aria-labelledby="hs-basic-heading23">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordionicon-left accordions-items-seperate"
id="accordioniconLeftExample"&gt;
&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion  accordion-item" id="hs-basic-heading21"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse21" type="button"&gt;
    &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
            Accordion Item #1
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse21"
            class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-heading21"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion  accordion-item" id="hs-basic-heading22"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse22" type="button"&gt;
            &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
            Accordion Item #2
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse22"
            class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
            aria-labelledby="hs-basic-heading22"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion  accordion-item" id="hs-basic-heading23"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse23" type="button"&gt;
            &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
            Accordion Item #3
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse23"
            class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-heading23"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
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
                  Custom Accordion
                </div>
                <div class="prism-toggle">
                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium">Show
                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="accordion customized-accordion accordions-items-seperate" id="customizedAccordion">
                  <div class="hs-accordion-group">
                    <div class="hs-accordion  accordion-item custom-accordion-primary" id="hs-basic-heading31">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse31" type="button">
                        Accordion Item #1
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse31"
                        class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                        aria-labelledby="hs-basic-heading31">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="hs-accordion  accordion-item custom-accordion-secondary" id="hs-basic-heading32">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse32" type="button">
                        Accordion Item #2
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse32"
                        class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
                        aria-labelledby="hs-basic-heading32">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="hs-accordion  accordion-item custom-accordion-danger" id="hs-basic-heading33">
                      <button
                        class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                        aria-controls="hs-basic-collapse33" type="button">
                        Accordion Item #3
                        <svg
                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg
                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </button>
                      <div id="hs-basic-collapse33"
                        class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                        aria-labelledby="hs-basic-heading33">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by
                          default, until the collapse plugin adds the appropriate classes that we
                          use to style each element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions. You can modify
                          any of this with custom CSS or overriding our default variables. It's
                          also worth noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="accordion customized-accordion accordions-items-seperate"
id="customizedAccordion"&gt;
&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion  accordion-item custom-accordion-primary" id="hs-basic-heading31"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse31" type="button"&gt;
            Accordion Item #1
            &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse31"
            class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-heading31"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion  accordion-item custom-accordion-secondary" id="hs-basic-heading32"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse32" type="button"&gt;
            Accordion Item #2
            &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse32"
            class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
            aria-labelledby="hs-basic-heading32"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-accordion  accordion-item custom-accordion-danger" id="hs-basic-heading33"&gt;
        &lt;button
            class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
            aria-controls="hs-basic-collapse33" type="button"&gt;
            Accordion Item #3
            &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-[#8c9097] dark:text-white/50"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-basic-collapse33"
            class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-heading33"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
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