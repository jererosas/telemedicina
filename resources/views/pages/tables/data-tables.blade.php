@extends('layouts.master')

@section('styles')
        
        <!-- Tabulator Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Data Tables</h1>
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
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">Basic DataTable</h5>
                            </div>
                            <div class="box-body">
                            <div class="overflow-auto table-bordered">
                                <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
            
                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">Sortable DataTable</h5>
                            </div>
                            <div class="box-body space-y-3">
                            <div class="sortable-data">
                                <div class="sm:grid grid-cols-12 gap-6 space-y-2 sm:space-y-0">
                                <div class="col-span-12 lg:!col-span-2 sm:col-span-3">
                                    <select id="sort-field" class="ti-form-select " data-trigger>
                                    <option value="name" selected>Name</option>
                                    <option value="progress">Position</option>
                                    <option value="gender">Office</option>
                                    <option value="rating">Age</option>
                                    <option value="col">Salary</option>
                                    </select>
                                </div>
                                <div class="col-span-12 lg:!col-span-2 sm:col-span-3">
                                    <select id="sort-direction" class="ti-form-select" data-trigger>
                                    <option value="asc" selected>asc</option>
                                    <option value="desc">desc</option>
                                    </select>
                                </div>
                                <button type="button" class="ti-btn ti-btn-primary py-2 col-span-12 xl:!col-span-2 sm:col-span-3" id="sort-trigger">Trigger Sort</button>
                                </div>
                            </div>
                            <div class="overflow-hidden table-bordered">
                                <div id="sort-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->
            
                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">Reactivity DataTable</h5>
                            </div>
                            <div class="box-body space-y-3">
                            <div class="reactivity-data">
                                <button type="button" class="ti-btn ti-btn-primary" id="reactivity-add">Add New Row</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="reactivity-delete">Remove Row</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="clear">Empty the table</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="reset">Reset</button>
                            </div>
                            <div class="overflow-hidden table-bordered">
                                <div id="reactivity-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->
            
                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">Download DataTable</h5>
                            </div>
                            <div class="box-body space-y-3">
                            <div class="download-data">
                                <button type="button" class="ti-btn ti-btn-primary" id="download-csv">Download CSV</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="download-json">Download JSON</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="download-xlsx">Download XLSX</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="download-pdf">Download PDF</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="download-html">Download HTML</button>
                            </div>
                            <div class="overflow-hidden table-bordered">
                                <div id="download-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Tabulator JS -->
        <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

        <!-- XLXS JS -->
        <script src="{{asset('build/assets/libs/xlsx/xlsx.full.min.js')}}"></script>

        <!-- JSPDF JS -->
        <script src="{{asset('build/assets/libs/jspdf/jspdf.umd.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/jspdf-autotable/jspdf.plugin.autotable.min.js')}}"></script>

        <!-- Internal Datatables JS -->
        @vite('resources/assets/js/datatables.js')
        
            
@endsection