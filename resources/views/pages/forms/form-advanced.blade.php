@extends('layouts.master')

@section('styles')

        <!-- intl-tel-input css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/intl-tel-input/build/css/intlTelInput.css')}}">

        <!-- Tagify CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/@yaireo/tagify/tagify.css')}}">

        <!-- Dragsort CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/@yaireo/dragsort/dragsort.css')}}">

        <!-- Dual ListBox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dual-listbox/dual-listbox.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Form Advanced</h1>
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

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        TAGIFY JS
                                    </div>
                                </div>
                                <div class="box-body basic-tagify">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="ti-form-label block">Basic Tagify</label>
                                            <input name='basic' value='tag1, tag2' autofocus class="form-control">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="ti-form-label block">Tagify With Custom Suggestions</label>
                                            <input name='input-custom-dropdown' class="form-control some_class_name" placeholder='write some tags' value='css, html, javascript'>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="ti-form-label block">Diasbled User Input</label>
                                            <input name='tags-disabled-user-input' placeholder='Select tags from the list' class="form-control">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="ti-form-label block">Drag & Sort</label>
                                            <input name='drag-sort' class="form-control" value='tag 1, tag 2, tag 3, tag 4, tag 5, tag 6' >
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="form-label d-block">Tagify With Users List</label>
                                            <input name='users-list-tags' value='abatisse2@nih.gov, Justinian Hattersley' class="form-control">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="ti-form-label block">Tagify Single-Value Select</label>
                                            <input name='tags-select-mode' class='selectMode form-control' placeholder="Please select" >
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="ti-form-label block">Readonly Tags</label>
                                            <input name='tags4' class="form-control" readonly value='tag1, tag 2, another tag'>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="ti-form-label block">Readonly Mix</label>
                                            <input name='tags-readonly-mix'  type="text" class='readonlyMix form-control' placeholder="Type something" value='[
                                                {
                                                    "value"    : "foo",
                                                    "readonly" : true,
                                                    "title"    : "read-only tag"
                                                },
                                                {
                                                    "value"    : "bar"
                                                },
                                                {
                                                    "value"    : "Locked tag",
                                                    "readonly" : true,
                                                    "title"    : "Another readonly tag"
                                                }
                                            ]'>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label class="ti-form-label block">Tagify With Mix Text & Tags</label>
                                            <textarea name='mix' class="form-control">[[{"id":200, "value":"cartman", "title":"Eric Cartman"}]] and [[kyle]] do not know [[{"value":"homer simpson", "readonly":true}]] because he's a relic.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        TELEPHONE INPUT
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="phone" class="ti-form-label block">Basic Telephone Input</label>
                                            <input class="form-control" id="phone" type="tel">
                                        </div>
                                        <div class="xl:col-span-5 col-span-12">
                                            <label for="phone-validation" class="ti-form-label block">Telephone Input with valdation</label>
                                            <input id="phone-validation" type="tel" class="form-control">
                                            <button id="btn" type="button" class="ti-btn ti-btn-primary btn-wave telephone-input-btn ms-2">Validate</button>
                                            <span id="valid-msg" class="hide">✓ Valid</span>
                                            <span id="error-msg" class="hide"></span>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <label for="phone-only-countries" class="ti-form-label block">Telephone Input With Only Countries</label>
                                            <input id="phone-only-countries" type="tel" class="form-control">
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <label for="phone-only-countries" class="ti-form-label block">Telephone Input With Only Countries</label>
                                            <form id="form">
                                                <p id="message" class="mb-1"></p>
                                                <input id="phone-hidden-input" type="tel" class="form-control">
                                                <button type="submit" class="ti-btn ti-btn-primary btn-wave telephone-input-btn ms-2">Submit</button>
                                            </form>    
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <label for="phone-existing-number" class="ti-form-label block">Display Existing Number</label>
                                            <input class="form-control" id="phone-existing-number" type="tel" value="+447733312345">
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <label for="phone-show-selected-dial-code" class="ti-form-label block">With Selected Dial Code</label>
                                            <input class="form-control" id="phone-show-selected-dial-code" type="tel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">AUTO COMPLETE</div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                        <div class="xl:col-span-4 col-span-12">
                                            <label for="autoComplete" class="ti-form-label">Search Results Of Food & Drinks Combo</label>
                                            <input type="search" class="form-control" id="autoComplete" placeholder="Placeholder" spellcheck=false autocomplete="off" autocapitalize="off">
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <label for="autoComplete-color" class="ti-form-label">Advanced Search Results For Colors</label>
                                            <input type="search" class="form-control" id="autoComplete-color" spellcheck=false autocomplete="off" autocapitalize="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 sm:gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">DUAL LIST BOX</div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="xl:col-span-6 col-span-12">
                                            <h6>Select by class :</h6>
                                            <select class="select1" multiple>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="6">Six</option>
                                                <option value="7">Seven</option>
                                                <option value="8">Eight</option>
                                                <option value="9">Nine</option>
                                                <option value="10">Ten</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <h6>Add options and add eventListeners :</h6>
                                            <select class="select2" multiple>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <h6 class="mb-4">Remove all the buttons from being rendered :</h6>
                                            <select class="select3" multiple>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- intl-tel-input JS -->
        <script src="{{asset('build/assets/libs/intl-tel-input/build/js/intlTelInput.min.js')}}"></script>

        <!-- Tagify JS -->
        <script src="{{asset('build/assets/libs/@yaireo/tagify/tagify.js')}}"></script>

        <!-- Dragsort JS -->
        <script src="{{asset('build/assets/libs/@yaireo/dragsort/dragsort.js')}}"></script>

        <!-- Dual ListBox JS -->
        <script src="{{asset('build/assets/libs/dual-listbox/dual-listbox.js')}}"></script>

        <!-- Internal Advanced Forms JS -->
        @vite('resources/assets/js/form-advanced.js')


        <!-- Internal Tagify JS -->
        @vite('resources/assets/js/tagify.js')
        

@endsection