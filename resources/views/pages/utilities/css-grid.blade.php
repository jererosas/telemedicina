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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Grid</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Grid</h1>
                        </div>
                        <div class="btn-list">
                            <button class="ti-btn ti-btn-white btn-wave">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                   <!-- Start::row-1 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Column In Grid</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-4 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light">01</div>
                                        <div class="p-4 rounded-sm  bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light">04</div>
                                        <div class="p-4 rounded-sm  bg-light">05</div>
                                        <div class="p-4 rounded-sm  bg-light">06</div>
                                        <div class="p-4 rounded-sm  bg-light">07</div>
                                        <div class="p-4 rounded-sm  bg-light">08</div>
                                        <div class="p-4 rounded-sm  bg-light">09</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Spanning Columns</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-3 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold">
                                        <div class="p-4 rounded-sm bg-light">01</div>
                                        <div class="p-4 rounded-sm bg-light">02</div>
                                        <div class="p-4 rounded-sm bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light col-span-2">04</div>
                                        <div class="p-4 rounded-sm bg-light">05</div>
                                        <div class="p-4 rounded-sm bg-light">06</div>
                                        <div class="p-4 rounded-sm  bg-light col-span-2">07</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Starting And Ending Lines</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-6 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold mb-2">
                                        <div class="p-4 rounded-sm"></div>
                                        <div class="p-4 rounded-sm  bg-light col-start-2 col-span-4">01</div>
                                        <div class="p-4 rounded-sm"></div>
                                        <div class="p-4 rounded-sm  bg-light col-start-1 col-end-3">02</div>
                                        <div class="p-4 rounded-sm"></div>
                                        <div class="p-4 rounded-sm"></div>
                                        <div class="p-4 rounded-sm  bg-light col-end-7 col-span-2">03</div>
                                        <div class="p-4 rounded-sm  bg-light col-start-1 col-end-7">04</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Spanning Rows</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-rows-3 grid-flow-col gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-span-3">01</div>
                                        <div class="p-4 rounded-sm bg-light sm:grid space-y-6 sm:space-y-0 place-content-center col-span-2">02</div>
                                        <div class="p-4 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-span-2 col-span-2">03</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Specifying Rows in A Grid</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-rows-4 grid-flow-col gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light">01</div>
                                        <div class="p-4 rounded-sm  bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light">04</div>
                                        <div class="p-4 rounded-sm  bg-light">05</div>
                                        <div class="p-4 rounded-sm  bg-light">06</div>
                                        <div class="p-4 rounded-sm  bg-light">07</div>
                                        <div class="p-4 rounded-sm  bg-light">08</div>
                                        <div class="p-4 rounded-sm  bg-light">09</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Starting And Ending Lines</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-rows-3 grid-flow-col gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 sm:p-12 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-start-2 row-span-2">01</div>
                                        <div class="p-4 sm:p-12 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-end-3 row-span-2">02</div>
                                        <div class="p-4 sm:p-12 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-start-1 row-end-4">03</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- End::row-3 -->

                <!-- Start::row-4 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Gap Between Elements</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-2 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light">01</div>
                                        <div class="p-4 rounded-sm  bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light">04</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Changing Rows And Columns Independently</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-3 gap-x-8 gap-y-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light">01</div>
                                        <div class="p-4 rounded-sm  bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light">04</div>
                                        <div class="p-4 rounded-sm  bg-light">05</div>
                                        <div class="p-4 rounded-sm  bg-light">06</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- End::row-4 -->

                <!-- Start::row-5 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">sm:grid space-y-6 sm:space-y-0 Element Placement</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-3 grid-rows-3 grid-flow-row-dense gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 col-span-2 rounded-sm bg-light">01</div>
                                        <div class="p-4 col-span-2 rounded-sm bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm bg-light">04</div>
                                        <div class="p-4 rounded-sm bg-light">05</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Equal Widths</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="col-span-12 sm:col-span-4 p-4 rounded-sm  bg-light">Column</div>
                                        <div class="col-span-12 sm:col-span-4 p-4 rounded-sm  bg-light">Column</div>
                                        <div class="col-span-12 sm:col-span-4 p-4 rounded-sm  bg-light">Column</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Sub grid</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                        <div class="grid grid-cols-4  gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                            <div class="p-4 rounded-sm  bg-light">01</div>
                                            <div class="p-4 rounded-sm  bg-light">02</div>
                                            <div class="p-4 rounded-sm  bg-light">03</div>
                                            <div class="p-4 rounded-sm  bg-light">04</div>
                                            <div class="p-4 rounded-sm  bg-light">05</div>
                                            <div class="grid grid-cols-subgrid gap-4 col-span-3">
                                                <div class="col-start-2 p-4 rounded-sm  bg-light">06</div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                 <!-- End::row-5 -->
               </div>
              <!-- Start::main-content -->
                    
                </div>
            </div>
            <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')
            

@endsection