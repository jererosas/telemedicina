@extends('layouts.master')

@section('styles')
  

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
                                <li class="breadcrumb-item active" aria-current="page">Input Masks</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Input Masks</h1>
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
                                    Date Format-1
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control date-format" placeholder="DD-MM-YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Date Format-2
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control date-format-1" placeholder="MM-DD-YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Date Format-3
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control date-format-2" placeholder="MM-YY">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Number Formatting
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control number-format" placeholder="Number Here">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Time Format-1
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control time-format-1" placeholder="hh:mm:ss">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Time Format-2
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control time-format-2" placeholder="hh:mm">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Formatting Into Blocks
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control formatting-blocks" placeholder="ABCD EFG HIJ KLMN">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Delimiter
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control delimiter" placeholder="ABC.DEF.GHi">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Delimiters
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control delimiters" placeholder="ABC/DEF/GHi-JK">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Prefix
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control prefix-element" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Phone Number Formatting
                                </div>
                            </div>
                            <div class="box-body">
                                <input class="form-control phone-number"  placeholder="US(+1)">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Cleave.js -->
        <script src="{{asset('build/assets/libs/cleave.js/cleave.min.js')}}"></script>

        <!-- Internal form-input-mask JS -->
        @vite('resources/assets/js/form-input-mask.js')
        

@endsection