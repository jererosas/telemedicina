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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ribbons</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Ribbons</h1>
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
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    RIBBON STYLE 1
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box shadow-none mb-0 ribbon-card border border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body !p-6">
                                                <div class="ribbon ribbon-primary ribbon-top-left"><span>ribbon</span></div>
                                                <div class="card-subtitle font-semibold mb-2 text-end">Top Left Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box shadow-none mb-0 ribbon-card border border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body !p-6">
                                                <div class="ribbon ribbon-secondary ribbon-top-right"><span>ribbon</span></div>
                                                <div class="card-subtitle font-semibold mb-2 text-start">Top Right Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box shadow-none mb-0 ribbon-card border border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body !p-6">
                                                <div class="ribbon ribbon-success ribbon-bottom-left"><span>ribbon</span></div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle font-semibold mt-2 text-end">Bottom Left Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box shadow-none mb-0 ribbon-card border border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body !p-6">
                                                <div class="ribbon ribbon-orange ribbon-bottom-right"><span>ribbon</span></div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle font-semibold mt-2 text-start">Bottom Right Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start:: row-2 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    RIBBON STYLE 2
                                </div>
                            </div>
                            <div class="box-body !p-6">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box shadow-none mb-0 border border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body !p-6">
                                                <div class="ribbon-2 ribbon-primary ribbon-left">Congratulations</div>
                                                <span class="block pt-4">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle font-semibold mt-2 text-end">Left Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box shadow-none mb-0 border border-defaultborder dark:border-defaultborder/10">
                                            <div class="box-body !p-6">
                                                <div class="ribbon-2 ribbon-success ribbon-right">Congratulations</div>
                                                <span class="block pt-4">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle font-semibold mt-2 text-start">Right Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    RIBBON STYLE 3
                                </div>
                            </div>
                            <div class="box-body !p-6">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                    <div class="xl:col-span-3 col-span-12">
                                        <div class="box mb-0 border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <span class="ribbon-3 top-left ribbon-success">
                                                    <span><i class="fe fe-zap"></i></span>
                                                </span>
                                                <div class="card-subtitle font-semibold mb-2 text-end">Top Left Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <div class="box mb-0 border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <span class="ribbon-3 top-right ribbon-secondary">
                                                    <span><i class="fe fe-zap"></i></span>
                                                </span>
                                                <div class="card-subtitle font-semibold mb-2 text-start">Top Right Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <div class="box mb-0 border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <span class="ribbon-3 top-left ribbon-info">
                                                    <span><i class="fe fe-zap"></i></span>
                                                </span>
                                                <div class="card-subtitle font-semibold mb-2 text-end">Top Left Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <div class="box mb-0 border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <span class="ribbon-3 top-right ribbon-warning">
                                                    <span><i class="fe fe-zap"></i></span>
                                                </span>
                                                <div class="card-subtitle font-semibold mb-2 text-start">Top Right Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">RIBBON STYLE 4</div>
                            </div>
                            <div class="box-body">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box mb-0 border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <span class="ribbon-4 ribbon-primary top-left">
                                                    <span>May</span>
                                                </span>
                                                <div class="card-subtitle font-semibold mb-2 text-end">Top Left  Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box mb-0 border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <span class="ribbon-4 ribbon-secondary top-right">
                                                    <span>Jun</span>
                                                </span>
                                                <div class="card-subtitle font-semibold mb-2 text-start">Top Right  Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    RIBBON STYLE 5
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                    <div class="xl:col-span-3 col-span-12">
                                        <div class="box mb-0 overflow-hidden border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <div class="ribbon-5 ribbon-primary top-left">OFFER</div>
                                                <div class="card-subtitle font-semibold mb-2 text-end">Top Left Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <div class="box mb-0 overflow-hidden border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <div class="ribbon-5 ribbon-secondary top-right">OPEN</div>
                                                <div class="card-subtitle font-semibold mb-2 text-start">Top Right Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <div class="box mb-0 overflow-hidden border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <div class="ribbon-5 ribbon-success bottom-left">CLOSE</div>
                                                <span class="block mb-2">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                                <div class="card-subtitle font-semibold text-end">Bottom Left Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-3 col-span-12">
                                        <div class="box mb-0 overflow-hidden border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <div class="ribbon-5 ribbon-orange bottom-right">SALE</div>
                                                <span class="block mb-2">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                                <div class="card-subtitle font-semibold text-start">Bottom Right Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start:: row-6 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">RIBBON STYLE 6</div>
                            </div>
                            <div class="box-body">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box mb-0 border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <div class="ribbon-6 ribbon-left ribbon-primary">Service</div>
                                                <div class="card-subtitle font-semibold mb-2 text-end">Top Left  Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div class="box mb-0 border border-defaultborder dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body !p-6">
                                                <div class="ribbon-6 ribbon-right ribbon-secondary">Offer</div>
                                                <div class="card-subtitle font-semibold mb-2 text-start">Top Right  Ribbon</div>
                                                <span class="block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-6 -->
                
                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            

@endsection