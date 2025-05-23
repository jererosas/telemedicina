@extends('layouts.master')

@section('styles')
  

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
                                  <li class="breadcrumb-item active" aria-current="page">Navbar</li>
                              </ol>
                          </nav>
                          <h1 class="page-title font-medium text-lg mb-0">Navbar</h1>
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
                  <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Basic Mega Menu</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-transparent text-sm py-4 sm:py-0">
                            <nav class=" w-full mx-auto px-4" aria-label="Global">
                              <div class="relative sm:flex sm:items-center">
                                <div class="flex items-center justify-between">
                                  <a href="{{url('index')}}" class="header-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                    <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                  </a>
                                  <div class="sm:hidden">
                                    <button type="button"
                                      class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-white/10 dark:text-white dark:hover:!bg-light dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                      data-hs-collapse="#navbar-basic-usage" aria-controls="navbar-basic-usage"
                                      aria-label="Toggle navigation">
                                      <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="3" x2="21" y1="6" y2="6" />
                                        <line x1="3" x2="21" y1="12" y2="12" />
                                        <line x1="3" x2="21" y1="18" y2="18" />
                                      </svg>
                                      <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18" />
                                        <path d="m6 6 12 12" />
                                      </svg>
                                    </button>
                                  </div>
                                </div>
                                <div id="navbar-basic-usage"
                                  class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                  <div
                                    class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                    <a class="font-medium text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                      href="javascript:void(0);" aria-current="page">Active</a>
                                    <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]">
                                      <button type="button"
                                        class="flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-white/70 dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent">
                                        Mega Menu
                                        <svg class="ms-2 flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <path d="m6 9 6 6 6-6" />
                                        </svg>
                                      </button>
                                      <div
                                        class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full start-0 min-w-60 bg-white sm:shadow-md rounded-lg py-2 sm:px-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute">
                                        <div class="sm:grid sm:grid-cols-3">
                                          <div class="flex flex-col">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-light dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              About
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-light dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Services
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-light dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Customer Story
                                            </a>
                                          </div>
                                          <div class="flex flex-col">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-light dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-light dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers: Overview
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-light dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers: Apply
                                            </a>
                                          </div>
                                          <div class="flex flex-col">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-light dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Log In
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-light dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Sign Up
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <a class="font-medium text-gray-600 hover:text-muted dark:text-white/70 dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                      href="javascript:void(0);">Project</a>
                                  </div>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Mega Menu With Hover Event</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-collapse="#navbar-collapse-basic1" aria-controls="navbar-collapse-basic1"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
          
                              <div id="navbar-collapse-basic1" class="hidden basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Active</a>
          
                                  <div
                                    class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                    <button id="hs-mega-menu-basic-dr3" type="button"
                                      class="flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-white/70 dark:hover:text-white/70 ">
                                      Dropdown
                                      <svg class="ms-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                      </svg>
                                    </button>
          
                                    <div
                                      class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-sm p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        About
                                      </a>
                                      <div
                                        class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                        <button type="button"
                                          class="w-full flex justify-between items-center text-sm text-gray-800 rounded-sm py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300">
                                          Sub Menu
                                          <svg
                                            class="sm:-rotate-90 ms-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70 rtl:rotate-90"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                              stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                          </svg>
                                        </button>
          
                                        <div
                                          class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-sm p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute sm:border before:-end-5 before:top-0 before:h-full before:w-5 top-0 end-full !mx-[10px]">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            About
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Downloads
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Team Account
                                          </a>
                                        </div>
                                      </div>
          
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        Downloads
                                      </a>
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        Team Account
                                      </a>
                                    </div>
                                  </div>
          
                                  <div
                                    class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                    <button type="button"
                                      class="flex items-center w-full text-gray-600  hover:text-muted font-medium dark:text-white/70 dark:hover:text-white/70">
                                      Mega Menu
                                      <svg class="ms-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                      </svg>
                                    </button>
          
                                    <div
                                      class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full start-0 min-w-[15rem] bg-white sm:shadow-md rounded-sm p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute before:-top-5 before:start-0 before:w-full before:h-5">
                                      <div class="sm:grid sm:grid-cols-3">
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            About
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Services
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Customer Story
                                          </a>
                                        </div>
          
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Careers
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Careers: Overview
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Careers: Apply
                                          </a>
                                        </div>
          
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Log In
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Sign Up
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
          
                                  <a class="font-medium text-gray-600 hover:text-muted dark:text-white/70 dark:hover:text-white/70"
                                    href="javascript:void(0);">Link</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Mega Menu Slide Up Animation</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-collapse="#navbar-collapse-basic2" aria-controls="navbar-collapse-basic2"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
          
                              <div id="navbar-collapse-basic2" class="hidden basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Active</a>
          
                                  <div
                                    class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                    <button id="hs-mega-menu-basic-dr" type="button"
                                      class="flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-white/70 dark:hover:text-white/70 ">
                                      Dropdown
                                      <svg class="ms-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                      </svg>
                                    </button>
          
                                    <div
                                      class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-3 bg-white sm:shadow-md rounded-sm p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        About
                                      </a>
                                      <div
                                        class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                        <button type="button"
                                          class="w-full flex justify-between items-center text-sm text-gray-800 rounded-sm py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300">
                                          Sub Menu
                                          <svg
                                            class="sm:-rotate-90 ms-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70 rtl:rotate-90"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                              stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                          </svg>
                                        </button>
          
                                        <div
                                          class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-3 bg-white sm:shadow-md rounded-sm p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute sm:border before:-end-5 before:top-0 before:h-full before:w-5 top-0 end-full !mx-[10px]">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            About
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Downloads
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Team Account
                                          </a>
                                        </div>
                                      </div>
          
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        Downloads
                                      </a>
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        Team Account
                                      </a>
                                    </div>
                                  </div>
          
                                  <div
                                    class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                    <button type="button"
                                      class="flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-white/70 dark:hover:text-white/70">
                                      Mega Menu
                                      <svg class="ms-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                      </svg>
                                    </button>
          
                                    <div
                                      class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 sm:mt-3 top-full start-0 min-w-[15rem] bg-white sm:shadow-md rounded-sm p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute before:-top-5 before:start-0 before:w-full before:h-5">
                                      <div class="sm:grid sm:grid-cols-3">
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            About
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Services
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Customer Story
                                          </a>
                                        </div>
          
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Careers
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Careers: Overview
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Careers: Apply
                                          </a>
                                        </div>
          
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Log In
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Sign Up
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
          
                                  <a class="font-medium text-gray-600 hover:text-muted dark:text-white/70 dark:hover:text-white/70"
                                    href="javascript:void(0);">Link</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Mega Menu With Auto Close Behavior</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 sm:py-0 dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-defaultborder/10 dark:text-white dark:hover:!bg-light dark:focus:outline-none  "
                                    data-hs-collapse="#navbar-auto-close-behavior" aria-controls="navbar-auto-close-behavior"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <line x1="3" x2="21" y1="6" y2="6" />
                                      <line x1="3" x2="21" y1="12" y2="12" />
                                      <line x1="3" x2="21" y1="18" y2="18" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="M18 6 6 18" />
                                      <path d="m6 6 12 12" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <div id="navbar-auto-close-behavior"
                                class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-blue-500 dark:focus:outline-none  "
                                    href="javascript:void(0);" aria-current="page">Active</a>
          
                                  <div
                                    class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] [--auto-close:false]">
                                    <button type="button"
                                      class="sm:py-4 flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none">
                                      Mega Menu
                                      <svg class="ms-2 flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                      </svg>
                                    </button>
          
                                    <div
                                      class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 sm:mt-3 top-full start-0 min-w-60 bg-white sm:shadow-md rounded-lg py-2 sm:px-2 dark:bg-bodybg sm:dark:border dark:border-white/10 before:absolute">
                                      <div class="sm:grid sm:grid-cols-3">
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 !rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300 dark:focus:outline-none  "
                                            href="javascript:void(0);">
                                            About
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 !rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300 dark:focus:outline-none  "
                                            href="javascript:void(0);">
                                            Services
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 !rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300 dark:focus:outline-none  "
                                            href="javascript:void(0);">
                                            Customer Story
                                          </a>
                                        </div>
          
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 !rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300 dark:focus:outline-none  "
                                            href="javascript:void(0);">
                                            Careers
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 !rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300 dark:focus:outline-none  "
                                            href="javascript:void(0);">
                                            Careers: Overview
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 !rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300 dark:focus:outline-none  "
                                            href="javascript:void(0);">
                                            Careers: Apply
                                          </a>
                                        </div>
          
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 !rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300 dark:focus:outline-none  "
                                            href="javascript:void(0);">
                                            Log In
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 !rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300 dark:focus:outline-none  "
                                            href="javascript:void(0);">
                                            Sign Up
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
          
                                  <a class="font-medium text-gray-600 hover:text-muted dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none  "
                                    href="javascript:void(0);">Project</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Mega Menu With Columns</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-transparent text-sm py-4 sm:py-0">
                            <nav class="w-full mx-auto px-4" aria-label="Global">
                              <div class="relative sm:flex sm:items-center">
                                <div class="flex items-center justify-between">
                                  <a href="{{url('index')}}" class="header-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                    <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                  </a>
                                  <div class="sm:hidden">
                                    <button type="button"
                                      class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-white/10 dark:text-white dark:hover:!bg-light dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                      data-hs-collapse="#navbar-collapse-columns-1" aria-controls="navbar-collapse-columns-1"
                                      aria-label="Toggle navigation">
                                      <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="3" x2="21" y1="6" y2="6" />
                                        <line x1="3" x2="21" y1="12" y2="12" />
                                        <line x1="3" x2="21" y1="18" y2="18" />
                                      </svg>
                                      <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18" />
                                        <path d="m6 6 12 12" />
                                      </svg>
                                    </button>
                                  </div>
                                </div>
          
                                <div id="navbar-collapse-columns-1"
                                  class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                  <div
                                    class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                    <div
                                      class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                      <button type="button"
                                        class="sm:py-3 flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-white/70 dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent">
                                        1 Col
                                        <svg class="ms-1 flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <path d="m6 9 6 6 6-6" />
                                        </svg>
                                      </button>
          
                                      <div
                                        class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 top-full sm:w-48 bg-white sm:shadow-md rounded-lg py-2 sm:px-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10">
                                        <div class="flex flex-col">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                            href="javascript:void(0);">
                                            About
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                            href="javascript:void(0);">
                                            Services
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                            href="javascript:void(0);">
                                            Customer Story
                                          </a>
                                        </div>
                                      </div>
                                    </div>
          
                                    <div
                                      class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                      <button type="button"
                                        class="sm:py-3 flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-white/70 dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent">
                                        2 Cols
                                        <svg class="ms-1 flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <path d="m6 9 6 6 6-6" />
                                        </svg>
                                      </button>
          
                                      <div
                                        class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 top-full end-0 sm:w-96 bg-white sm:shadow-md rounded-lg py-2 sm:px-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10">
                                        <div class="sm:grid sm:grid-cols-2">
                                          <div class="flex flex-col">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              About
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Services
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Customer Story
                                            </a>
                                          </div>
          
                                          <div class="flex flex-col">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers: Overview
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers: Apply
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
          
                                    <div
                                      class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                      <button type="button"
                                        class="sm:py-3 flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-white/70 dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent">
                                        3 Cols
                                        <svg class="ms-1 flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <path d="m6 9 6 6 6-6" />
                                        </svg>
                                      </button>
          
                                      <div
                                        class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 top-full end-0 sm:w-[30rem] bg-white sm:shadow-md rounded-lg py-2 sm:px-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-white/10">
                                        <div class="sm:grid sm:grid-cols-3">
                                          <div class="flex flex-col">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              About
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Services
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Customer Story
                                            </a>
                                          </div>
          
                                          <div class="flex flex-col">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers: Overview
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Careers: Apply
                                            </a>
                                          </div>
          
                                          <div class="flex flex-col">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Log In
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-white/70 dark:hover:bg-bodybg dark:hover:text-white dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-transparent"
                                              href="javascript:void(0);">
                                              Sign Up
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Basic Navbar</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                            <nav class=" w-full mx-auto sm:px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <a href="{{url('index')}}" class="header-logo">
                                <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                              </a>
                              <div class="flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 sm:ps-5">
                                <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Account</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Work</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Blog</a>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Navbar With horizontal scroll</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 xxl:flex xxl:items-center xxl:justify-between" aria-label="Global">
                              <a href="{{url('index')}}" class="header-logo">
                                <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                              </a>
                              <div
                                class="flex flex-row items-center gap-5 mt-5 pb-2 overflow-x-auto xxl:justify-end xxl:mt-0 sm:ps-5 xxl:pb-0 xxl:overflow-x-visible">
                                <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Dashboard</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Widgets</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Components</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Advanced Ui</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Basic Ui</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Elements</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Forms</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Pages</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Authentication</a>
                                <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                  href="javascript:void(0);">Maps</a>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Navbar With collapse</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 text-textmuted dark:text-textmuted/50 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-collapse="#navbar-with-collapse" aria-controls="navbar-with-collapse"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <div id="navbar-with-collapse" class="hidden basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Account</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Work</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Blog</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Navbar Collapse with animation</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 text-textmuted dark:text-textmuted/50 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-collapse="#navbar-collapse-with-animation"
                                    aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <div id="navbar-collapse-with-animation"
                                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Account</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Work</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Blog</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Navbar with Image</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 text-textmuted dark:text-textmuted/50 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-collapse="#navbar-image-2" aria-controls="navbar-image-2"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <div id="navbar-image-2"
                                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Account</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Work</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Blog</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Navbar with Alignment</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 text-textmuted dark:text-textmuted/50 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-collapse="#navbar-alignment" aria-controls="navbar-alignment"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <div id="navbar-alignment"
                                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Account</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Work</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Blog</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Navbar with MegaMenu</h5>
                        </div>
                        <div class="box-body">
                          <header
                            class="relative flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="dark:hidden block">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 text-textmuted dark:text-textmuted/50 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-collapse="#navbar-with-mega-menu" aria-controls="navbar-with-mega-menu"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <div id="navbar-with-mega-menu"
                                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Account</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Work</a>
                                  <a class="font-medium text-gray-600 hover:text-muted text-textmuted dark:text-textmuted/50 dark:hover:text-gray-500 whitespace-nowrap"
                                    href="javascript:void(0);">Blog</a>
                                  <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                                    <button id="hs-mega-menu-basic-dr1" type="button" class="flex items-center w-full text-gray-600 hover:text-muted font-medium dark:text-white/70 dark:hover:text-gray-500">
                                      Dropdown
                                      <svg class="ms-1 flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"></path></svg>
                                    </button>
                          
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-defaultborder/10 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5 hidden">
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300" href="javascript:void(0);">
                                        About
                                      </a>
                                      <div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]">
                                        <button type="button" class="w-full flex justify-between items-center text-sm text-gray-800 focus:ring-none  rounded-lg py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300">
                                          Sub Menu
                                          <svg class="sm:-rotate-90 rtl:rotate-90 ms-2 flex-shrink-0 size-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"></path></svg>
                                        </button>
                          
                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-defaultborder/10 dark:divide-gray-700 before:absolute sm:border before:-end-5 before:top-0 before:h-full before:w-5 top-0 end-full mt-[4px] !mx-[10px]">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300" href="javascript:void(0);">
                                            About
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300" href="javascript:void(0);">
                                            Downloads
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300" href="javascript:void(0);">
                                            Team Account
                                          </a>
                                        </div>
                                      </div>
                          
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300" href="javascript:void(0);">
                                        Downloads
                                      </a>
                                      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-transparent dark:text-gray-400 dark:hover:bg-light dark:hover:text-gray-300" href="javascript:void(0);">
                                        Team Account
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="box">
                        <div class="box-header">
                          <h5 class="box-title">Navbar with Color variants</h5>
                        </div>
                        <div class="box-body space-y-4">
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-primary text-sm py-4 rounded-sm">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="logo" class="block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border border-white/[.25] font-medium bg-primary text-white shadow-sm align-middle hover:bg-primary focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white/10 focus:ring-transparent transition-all text-sm dark:bg-transparent dark:hover:bg-primary dark:border-white/10 text-textmuted dark:text-textmuted/50 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-collapse="#navbar-primary" aria-controls="navbar-primary"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <div id="navbar-primary"
                                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-white" href="javascript:void(0);" aria-current="page">Landing</a>
                                  <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Account</a>
                                  <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Work</a>
                                  <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Blog</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                          <header
                            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-secondary text-sm py-4 rounded-sm">
                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                              <div class="flex items-center justify-between">
                                <a href="{{url('index')}}" class="header-logo">
                                  <img src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="logo" class="block">
                                </a>
                                <div class="sm:hidden">
                                  <button type="button"
                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border border-white/[.25] font-medium bg-secondary text-white shadow-sm align-middle hover:bg-white/[.15] focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-secondary focus:ring-white transition-all text-sm"
                                    data-hs-collapse="#navbar-secondary" aria-controls="navbar-secondary"
                                    aria-label="Toggle navigation">
                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                      viewBox="0 0 16 16">
                                      <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <div id="navbar-secondary"
                                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                                  <a class="font-medium text-white" href="javascript:void(0);" aria-current="page">Landing</a>
                                  <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Account</a>
                                  <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Work</a>
                                  <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Blog</a>
                                </div>
                              </div>
                            </nav>
                          </header>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End::row-1 -->

                </div>
            </div>
            <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')
            

@endsection