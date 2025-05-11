@extends('layouts.master')

@section('styles')

        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1 flex-wrap">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Date & Time Pickers</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Date & Time Pickers</h1>
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
                                <div class="box-header">
                                    <div class="box-title">
                                        Basic Date picker
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="date" placeholder="Choose date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Date picker With Time
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="datetime" placeholder="Choose date with time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Human Friendly dates
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="humanfrienndlydate" placeholder="Human friendly dates">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Date range picker
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="daterange" placeholder="Date range picker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Basic Time picker
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="timepikcr" placeholder="Choose time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Time Picker with 24hr Format
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="timepickr1" placeholder="Choose time in 24hr format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Time Picker with Limits
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="limittime" placeholder="choose time min 16:00 to max 22:30">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        DateTimePicker with Limited Time Range
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="limitdatetime" placeholder="date with time limit from 16:00 to 22:00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Date Picker with week numbers
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="weeknum" placeholder="Choose date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Inline Time Picker
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" id="inlinetime" placeholder="Choose time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Preloading time
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-text !text-textmuted dark:text-textmuted/50 !border-defaultborder dark:!border-defaultborder/10"> <i class="ri-time-line"></i> </div>
                                                    <input type="text" class="form-control" id="pretime" placeholder="Preloading time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Inline Calendar
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group overflow-auto">
                                        <input type="text" class="form-control" id="inlinecalendar" placeholder="Choose date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Date & Time Picker JS -->
        @vite('resources/assets/js/date&time-pickers.js')
        

@endsection