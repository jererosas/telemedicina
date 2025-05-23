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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Inputs</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Inputs</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Input Sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button"
                                            class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <input class="form-control form-control-sm mb-3" type="text"
                                        placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    <input class="form-control mb-3" type="text" placeholder="Default input"
                                        aria-label="default input example">
                                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"
                                        aria-label=".form-control-lg example">
                                </div>
                                <div class="box-footer hidden border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;input class="form-control form-control-sm mb-3" type="text"
        placeholder=".form-control-sm" aria-label=".form-control-sm example"&gt;
        &lt;input class="form-control mb-3" type="text" placeholder="Default input"
            aria-label="default input example"&gt;
        &lt;input class="form-control form-control-lg" type="text"
        placeholder=".form-control-lg" aria-label=".form-control-lg example"&gt;</code></pre>
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
                                        Input Types
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button"
                                            class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <!-- <p class="mb-2 text-muted"></p> -->
                                            <label for="input-label" class="ti-form-label">Basic Input:</label>
                                            <input type="text" class="form-control" id="input">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-label" class="ti-form-label">Form Input With Label</label>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-placeholder" class="ti-form-label">Form Input With
                                                Placeholder</label>
                                            <input type="text" class="form-control" id="input-placeholder"
                                                placeholder="Placeholder">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-text" class="ti-form-label">Type Text</label>
                                            <input type="text" class="form-control" id="input-text" placeholder="Text">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-number" class="ti-form-label">Type Number</label>
                                            <input type="number" class="form-control" id="input-number"
                                                placeholder="Number">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-password" class="ti-form-label">Type Password</label>
                                            <input type="password" class="form-control" id="input-password"
                                                placeholder="Password">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-email" class="ti-form-label">Type Email</label>
                                            <input type="email" class="form-control" id="input-email"
                                                placeholder="Email@xyz.com">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-tel" class="ti-form-label">Type Tel</label>
                                            <input type="tel" class="form-control" id="input-tel"
                                                placeholder="+1100-2031-1233">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-date" class="ti-form-label">Type Date</label>
                                            <input type="date" class="form-control" id="input-date">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-week" class="ti-form-label">Type Week</label>
                                            <input type="week" class="form-control" id="input-week">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-month" class="ti-form-label">Type Month</label>
                                            <input type="month" class="form-control" id="input-month">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-time" class="ti-form-label">Type Time</label>
                                            <input type="time" class="form-control" id="input-time">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-datetime-local" class="ti-form-label">Type datetime-local</label>
                                            <input type="datetime-local" class="form-control" id="input-datetime-local">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-search" class="ti-form-label">Type Search</label>
                                            <input type="search" class="form-control" id="input-search"
                                                placeholder="Search">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-submit" class="ti-form-label">Type Submit</label>
                                            <input type="submit" class="form-control ti-btn !py-3" id="input-submit"
                                                value="Submit">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-reset" class="ti-form-label">Type Reset</label>
                                            <input type="reset" class="form-control ti-btn !py-3" id="input-reset">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-button" class="ti-form-label">Type Button</label>
                                            <input type="button" class="ti-btn !text-white !bg-primary !w-full"
                                                id="input-button" value="Button">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="grid grid-cols-12 gap-6">
                                                <div class="xl:col-span-3 col-span-12 flex flex-col ">
                                                    <label class="ti-form-label">Type Color</label>
                                                    <input class="form-input-color !rounded-md" type="color"
                                                        value="#136bd0">
                                                </div>
                                                <div class="xl:col-span-5 col-span-12">
                                                    <div class="form-check">
                                                        <p class="mb-3 px-0 text-muted">Type Checkbox</p>
                                                        <input class="form-check-input ms-2" type="checkbox" value=""
                                                            checked>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="form-check">
                                                        <p class="mb-4 px-0 text-muted">Type Radio</p>
                                                        <input class="form-check-input ms-2" type="radio" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div>
                                                <label for="file-input"  class="ti-form-label">Type file</label>
                                                <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10
                                                     file:border-0
                                                    file:bg-gray-200 file:me-4
                                                    file:py-2 file:px-4
                                                    dark:file:bg-black/20 dark:file:text-white/50">
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label class="ti-form-label">Type Url</label>
                                            <input class="form-control" type="url" name="website"
                                                placeholder="http://example.com">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-disabled" class="ti-form-label">Type Disabled</label>
                                            <input type="text" id="input-disabled" class="form-control"
                                                placeholder="Disabled input" disabled>
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-readonlytext" class="ti-form-label">Input Readonly Text</label>
                                            <input type="text" readonly class="form-control-plaintext form-control"
                                                id="input-readonlytext" value="email@example.com">
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="disabled-readonlytext" class="ti-form-label">Disabled Readonly
                                                Input</label>
                                            <input class="form-control" type="text" value="Disabled readonly input"
                                                id="disabled-readonlytext" aria-label="Disabled input example" disabled
                                                readonly>
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label class="ti-form-label">Type Readonly Input</label>
                                            <input class="form-control" type="text" value="Readonly input here..."
                                                aria-label="readonly input example" readonly>
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="text-area" class="ti-form-label">Textarea</label>
                                            <textarea class="form-control" id="text-area" rows="1"></textarea>
                                        </div>
                                        <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-DataList" class="ti-form-label">Datalist example</label>
                                            <input class="form-control" type="text" list="datalistOptions"
                                                id="input-DataList" placeholder="Type to search...">
                                            <datalist id="datalistOptions">
                                                <option value="San Francisco">
                                                </option>
                                                <option value="New York">
                                                </option>
                                                <option value="Seattle">
                                                </option>
                                                <option value="Los Angeles">
                                                </option>
                                                <option value="Chicago">
                                                </option>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">
      
        &lt;div class="grid grid-cols-12 sm:gap-6"&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;p class="mb-2 text-muted"&gt;Basic Input:&lt;/p&gt;
            &lt;input type="text" class="form-control" id="input"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-label" class="ti-form-label"&gt;Form Input With Label&lt;/label&gt;
            &lt;input type="text" class="form-control" id="input-label"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-placeholder" class="ti-form-label"&gt;Form Input With Placeholder&lt;/label&gt;
            &lt;input type="text" class="form-control" id="input-placeholder" placeholder="Placeholder"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-text" class="ti-form-label"&gt;Type Text&lt;/label&gt;
            &lt;input type="text" class="form-control" id="input-text" placeholder="Text"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-number" class="ti-form-label"&gt;Type Number&lt;/label&gt;
            &lt;input type="number" class="form-control" id="input-number" placeholder="Number"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-password" class="ti-form-label"&gt;Type Password&lt;/label&gt;
            &lt;input type="password" class="form-control" id="input-password" placeholder="Password"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-email" class="ti-form-label"&gt;Type Email&lt;/label&gt;
            &lt;input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-tel" class="ti-form-label"&gt;Type Tel&lt;/label&gt;
            &lt;input type="tel" class="form-control" id="input-tel" placeholder="+1100-2031-1233"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-date" class="ti-form-label"&gt;Type Date&lt;/label&gt;
            &lt;input type="date" class="form-control" id="input-date"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-week" class="ti-form-label"&gt;Type Week&lt;/label&gt;
            &lt;input type="week" class="form-control" id="input-week"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-month" class="ti-form-label"&gt;Type Month&lt;/label&gt;
            &lt;input type="month" class="form-control" id="input-month"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-time" class="ti-form-label"&gt;Type Time&lt;/label&gt;
            &lt;input type="time" class="form-control" id="input-time"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-datetime-local" class="ti-form-label"&gt;Type datetime-local&lt;/label&gt;
            &lt;input type="datetime-local" class="form-control" id="input-datetime-local"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-search" class="ti-form-label"&gt;Type Search&lt;/label&gt;
            &lt;input type="search" class="form-control" id="input-search" placeholder="Search"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-submit" class="ti-form-label"&gt;Type Submit&lt;/label&gt;
            &lt;input type="submit" class="form-control ti-btn" id="input-submit" value="Submit"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-reset" class="ti-form-label"&gt;Type Reset&lt;/label&gt;
            &lt;input type="reset" class="form-control ti-btn" id="input-reset"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-button" class="ti-form-label"&gt;Type Button&lt;/label&gt;
            &lt;input type="button" class="form-control ti-btn !text-white !bg-primary" id="input-button"  value="Button"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;div class="grid grid-cols-12 gap-6"&gt;
                &lt;div class="xl:col-span-3 col-span-12 flex flex-col "&gt;
                    &lt;label class="ti-form-label"&gt;Type Color&lt;/label&gt;
                    &lt;input class="form-control form-input-color !rounded-md" type="color" value="#136bd0"&gt;
                &lt;/div&gt;
                &lt;div class="xl:col-span-5 col-span-12"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;p class="mb-3 px-0 text-muted"&gt;Type Checkbox&lt;/p&gt;
                        &lt;input class="form-check-input ms-2" type="checkbox" value="" checked&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="xl:col-span-4 col-span-12"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;p class="mb-4 px-0 text-muted"&gt;Type Radio&lt;/p&gt;
                        &lt;input class="form-check-input ms-2" type="radio" checked&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;div&gt;
                &lt;label for="file-input" class="sr-only"&gt;Type file&lt;/label&gt;
                &lt;input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10
                file:bg-transparent file:border-0
                file:bg-gray-200 file:me-4
                file:py-3 file:px-4
                dark:file:bg-black/20 dark:file:text-white/50"&gt;
              &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label class="ti-form-label"&gt;Type Url&lt;/label&gt;
            &lt;input class="form-control" type="url"  name="website" placeholder="http://example.com"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-disabled" class="ti-form-label"&gt;Type Disabled&lt;/label&gt;
            &lt;input type="text" id="input-disabled" class="form-control" placeholder="Disabled input" disabled&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-readonlytext" class="ti-form-label"&gt;Input Readonly Text&lt;/label&gt;
            &lt;input type="text" readonly class="form-control-plaintext" id="input-readonlytext" value="email@example.com"&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="disabled-readonlytext" class="ti-form-label"&gt;Disabled Readonly Input&lt;/label&gt;
            &lt;input class="form-control" type="text" value="Disabled readonly input" id="disabled-readonlytext" aria-label="Disabled input example" disabled readonly&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label class="ti-form-label"&gt;Type Readonly Input&lt;/label&gt;
            &lt;input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="text-area" class="ti-form-label"&gt;Textarea&lt;/label&gt;
            &lt;textarea class="form-control" id="text-area" rows="1"&gt;&lt;/textarea&gt;
        &lt;/div&gt;
        &lt;div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"&gt;
            &lt;label for="input-DataList" class="ti-form-label"&gt;Datalist example&lt;/label&gt;
            &lt;input class="form-control" type="text" list="datalistOptions" id="input-DataList" placeholder="Type to search..."&gt;
            &lt;datalist id="datalistOptions"&gt;
                &lt;option value="San Francisco"&gt;
                &lt;/option&gt;
                &lt;option value="New York"&gt;
                &lt;/option&gt;
                &lt;option value="Seattle"&gt;
                &lt;/option&gt;
                &lt;option value="Los Angeles"&gt;
                &lt;/option&gt;
                &lt;option value="Chicago"&gt;
                &lt;/option&gt;
            &lt;/datalist&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Input shapes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button"
                                            class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12 col-span-12">
                                            <label for="input-noradius" class="ti-form-label">Input With No Radius</label>
                                            <input type="text" class="form-control !rounded-none" id="input-noradius"
                                                placeholder="No Radius">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12 col-span-12">
                                            <label for="input-rounded" class="ti-form-label">Input With Radius</label>
                                            <input type="text" class="form-control" id="input-rounded"
                                                placeholder="Default Radius">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12 col-span-12">
                                            <label for="input-rounded-pill" class="ti-form-label">Rounded Input</label>
                                            <input type="text" class="form-control !rounded-full" id="input-rounded-pill"
                                                placeholder="Rounded">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">
        &lt;div class="grid grid-cols-12 gap-y-3"&gt;
            &lt;div class="xl:col-span-12 col-span-12 col-span-12"&gt;
                &lt;label for="input-noradius" class="ti-form-label"&gt;Input With No Radius&lt;/label&gt;
                &lt;input type="text" class="form-control !rounded-none" id="input-noradius" placeholder="No Radius"&gt;
            &lt;/div&gt;
            &lt;div class="xl:col-span-12 col-span-12 col-span-12"&gt;
                &lt;label for="input-rounded" class="ti-form-label"&gt;Input With Radius&lt;/label&gt;
                &lt;input type="text" class="form-control" id="input-rounded" placeholder="Default Radius"&gt;
            &lt;/div&gt;
            &lt;div class="xl:col-span-12 col-span-12 col-span-12"&gt;
                &lt;label for="input-rounded-pill" class="ti-form-label"&gt;Rounded Input&lt;/label&gt;
                &lt;input type="text" class="form-control !rounded-full" id="input-rounded-pill" placeholder="Rounded"&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Input border Styles
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button"
                                            class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12 col-span-12">
                                            <label for="input-rounded1" class="ti-form-label">Default</label>
                                            <input type="text" class="form-control" id="input-rounded1"
                                                placeholder="Default">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12 col-span-12">
                                            <label for="input-rounded2" class="ti-form-label">Dotted Input</label>
                                            <input type="text" class="form-control border border-defaultborder dark:border-defaultborder/10 border-dotted" id="input-rounded2"
                                                placeholder="Dotted">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12 col-span-12">
                                            <label for="input-rounded3" class="ti-form-label">Dashed Input</label>
                                            <input type="text" class="form-control border border-defaultborder dark:border-defaultborder/10 border-dashed" id="input-rounded3"
                                                placeholder="Dashed">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">
        &lt;div class="grid grid-cols-12 gap-y-3"&gt;
            &lt;div class="xl:col-span-12 col-span-12 col-span-12"&gt;
                &lt;label for="input-rounded1" class="ti-form-label"&gt;Default&lt;/label&gt;
                &lt;input type="text" class="form-control" id="input-rounded1" placeholder="Default"&gt;
            &lt;/div&gt;
            &lt;div class="xl:col-span-12 col-span-12 col-span-12"&gt;
                &lt;label for="input-rounded2" class="ti-form-label"&gt;Dotted Input&lt;/label&gt;
                &lt;input type="text" class="form-control border-dotted" id="input-rounded2" placeholder="Dotted"&gt;
            &lt;/div&gt;
            &lt;div class="xl:col-span-12 col-span-12 col-span-12"&gt;
                &lt;label for="input-rounded3" class="ti-form-label"&gt;Dashed Input&lt;/label&gt;
                &lt;input type="text" class="form-control border-dashed" id="input-rounded3" placeholder="Dashed"&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!--Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Disabled forms
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button"
                                            class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <form>
                                        <fieldset disabled>
                                            <legend class="text-2xl">Disabled fieldset example</legend>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="ti-form-label">Disabled
                                                    input</label>
                                                <input type="text" id="disabledTextInput" class="form-control !bg-light !opacity-100"
                                                    placeholder="Disabled input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledSelect" class="ti-form-label">Disabled select
                                                    menu</label>
                                                <select id="disabledSelect" class="form-select !opacity-100">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check !ps-0">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="disabledFieldsetCheck" disabled>
                                                    <label class="form-check-label ps-2" for="disabledFieldsetCheck">
                                                        Can't check this
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="ti-btn ti-btn-primary opacity-[0.6]">Submit</button>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">
        &lt;form&gt;
            &lt;fieldset disabled&gt;
                &lt;legend class="text-2xl"&gt;Disabled fieldset example&lt;/legend&gt;
                &lt;div class="mb-3"&gt;
                    &lt;label for="disabledTextInput" class="ti-form-label"&gt;Disabled
                        input&lt;/label&gt;
                    &lt;input type="text" id="disabledTextInput" class="form-control"
                        placeholder="Disabled input"&gt;
                &lt;/div&gt;
                &lt;div class="mb-3"&gt;
                    &lt;label for="disabledSelect" class="ti-form-label"&gt;Disabled select
                        menu&lt;/label&gt;
                    &lt;select id="disabledSelect" class="form-select"&gt;
                        &lt;option&gt;Disabled select&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
                &lt;div class="mb-3"&gt;
                    &lt;div class="form-check !ps-0"&gt;
                        &lt;input class="form-check-input" type="checkbox"
                            id="disabledFieldsetCheck" disabled&gt;
                        &lt;label class="form-check-label ps-2" for="disabledFieldsetCheck"&gt;
                            Can't check this
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;button type="submit" class="ti-btn ti-btn-primary opacity-[0.6]"&gt;Submit&lt;/button&gt;
            &lt;/fieldset&gt;
        &lt;/form&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Overview
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button"
                                            class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="ti-form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll
                                                never share your email
                                                with
                                                anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="ti-form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check !ps-0">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ps-2" for="exampleCheck1">Check
                                                me out</label>
                                        </div>
                                        <button type="submit" class="ti-btn ti-btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">
        &lt;form&gt;
            &lt;div class="mb-3"&gt;
                &lt;label for="exampleInputEmail1" class="ti-form-label"&gt;Email
                    address&lt;/label&gt;
                &lt;input type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp"&gt;
                &lt;div id="emailHelp" class="form-text"&gt;We'll
                    never share your email
                    with
                    anyone else.&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="mb-3"&gt;
                &lt;label for="exampleInputPassword1" class="ti-form-label"&gt;Password&lt;/label&gt;
                &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
            &lt;/div&gt;
            &lt;div class="mb-3 form-check !ps-0"&gt;
                &lt;input type="checkbox" class="form-check-input" id="exampleCheck1"&gt;
                &lt;label class="form-check-label ps-2" for="exampleCheck1"&gt;Check
                    me out&lt;/label&gt;
            &lt;/div&gt;
            &lt;button type="submit" class="ti-btn ti-btn-primary"&gt;Submit&lt;/button&gt;
        &lt;/form&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Form text
                                            </div>
                                            <div class="prism-toggle">
                                                <button type="button"
                                                    class="ti-btn !py-1 !px-2 ti-btn-soft-primary !text-[0.75rem] !font-medium btn-wave">Show
                                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <label for="inputPassword5" class="ti-form-label">Password</label>
                                            <input type="password" id="inputPassword5" class="form-control"
                                                aria-describedby="passwordHelpBlock">
                                            <div id="passwordHelpBlock" class="form-text">
                                                Your password must be 8-20 characters long, contain letters and
                                                numbers,
                                                and
                                                must not contain spaces, special characters, or emoji.
                                            </div>
                                        </div>
                                        <div class="box-footer hidden border-t-0">
                                            <!-- Prism Code -->
                                            <pre class="language-html"><code class="language-html">&lt;label for="inputPassword5" class="ti-form-label"&gt;Password&lt;/label&gt;
        &lt;input type="password" id="inputPassword5" class="form-control"
            aria-describedby="passwordHelpBlock"&gt;
        &lt;div id="passwordHelpBlock" class="form-text"&gt;
            Your password must be 8-20 characters long, contain letters and
            numbers,
            and
            must not contain spaces, special characters, or emoji.
        &lt;/div&gt;</code></pre>
                                            <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Inline text can use any typical inline HTML element with nothing more
                                                than
                                                the <span class="text-danger">.form-text</span> class.
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="ti-btn ti-btn-sm bg-primary/10 text-primary">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex flex-wrap gap-4 items-center">
                                                <div class="">
                                                    <label for="inputPassword6" class="form-label">Password</label>
                                                </div>
                                                <div class="">
                                                    <input type="password" id="inputPassword6" class="form-control"
                                                        aria-describedby="passwordHelpInline">
                                                </div>
                                                <div class="">
                                                    <span id="passwordHelpInline" class="form-text">
                                                        Must be 8-20 characters long.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="grid grid-cols-12 gap-x-6 g-3 items-center"&gt;
    &lt;div class="col-span-auto"&gt;
        &lt;label for="inputPassword6" class="form-label"&gt;Password&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="col-span-auto"&gt;
        &lt;input type="password" id="inputPassword6" class="form-control"
            aria-describedby="passwordHelpInline"&gt;
    &lt;/div&gt;
    &lt;div class="col-span-auto"&gt;
        &lt;span id="passwordHelpInline" class="form-text"&gt;
            Must be 8-20 characters long.
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End:: row-4 -->
                </div>
            </div>
            <!--APP-CONTENT CLOSE-->
     
@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection