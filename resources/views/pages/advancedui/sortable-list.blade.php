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
                                    <li class="breadcrumb-item active" aria-current="page">Sortable JS</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Sortable JS</h1>
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
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        SIMPLE LIST
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ol class="ti-list-group !p-0 !border-0 sortable-list list-group-numbered" id="simple-list">
                                        <li class="ti-list-group-item">Design logo for fictional company</li>
                                        <li class="ti-list-group-item">Draft 300-word blog post</li>
                                        <li class="ti-list-group-item">Create project plan with milestones</li>
                                        <li class="ti-list-group-item">Develop sample interview questions</li>
                                        <li class="ti-list-group-item">Generate customer feedback for product.</li>
                                        <li class="ti-list-group-item">Write email template for newsletter.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-8 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">SHARED LISTS</div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="xl:col-span-6 col-span-12">
                                            <ol class="ti-list-group !p-0 !border-0 sortable-list list-group-numbered" id="shared-left">
                                                <li class="ti-list-group-item">Sketch a website homepage</li>
                                                <li class="ti-list-group-item">Plan team-building activity.</li>
                                                <li class="ti-list-group-item">Summarize meeting minutes.</li>
                                                <li class="ti-list-group-item">Code a simple webpage.</li>
                                                <li class="ti-list-group-item">Create survey questions.</li>
                                                <li class="ti-list-group-item">Schedule team meeting.</li>
                                            </ol>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <ol class="ti-list-group !p-0 !border-0 sortable-list list-group-numbered" id="shared-right">
                                                <li class="ti-list-group-item">Edit product description.</li>
                                                <li class="ti-list-group-item">Brainstorm marketing ideas.</li>
                                                <li class="ti-list-group-item">Write slogan for brand.</li>
                                                <li class="ti-list-group-item">Update contact information.</li>
                                                <li class="ti-list-group-item">Proofread blog post.</li>
                                                <li class="ti-list-group-item">Analyze sales data.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                <!-- Start:: row-2 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    CLONING
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="grid grid-cols-12 sm:gap-x-6">
                                    <div class="xl:col-span-6 col-span-12">
                                        <ul class="ti-list-group !p-0 !border-0 sortable-list" id="cloning-left">
                                            <li class="ti-list-group-item">Update social media profiles.</li>
                                            <li class="ti-list-group-item">Draft project budget.</li>
                                            <li class="ti-list-group-item">Brainstorm domain names.</li>
                                            <li class="ti-list-group-item">Revise resume content.</li>
                                            <li class="ti-list-group-item">Test website functionality.</li>
                                            <li class="ti-list-group-item">Edit meeting agenda.</li>
                                        </ul>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <ul class="ti-list-group !p-0 !border-0 sortable-list" id="cloning-right">
                                            <li class="ti-list-group-item">Create mood board.</li>
                                            <li class="ti-list-group-item">Design event flyer.</li>
                                            <li class="ti-list-group-item">Research industry trends.</li>
                                            <li class="ti-list-group-item">Format spreadsheet cells.</li>
                                            <li class="ti-list-group-item">Outline marketing strategy.</li>
                                            <li class="ti-list-group-item">Compile data report.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    DISABLING SORTING
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="grid grid-cols-12 sm:gap-x-6">
                                    <div class="xl:col-span-6 col-span-12">
                                        <ul class="ti-list-group !p-0 !border-0 sortable-list" id="disabling-sorting-left">
                                            <li class="ti-list-group-item">Write customer service script.</li>
                                            <li class="ti-list-group-item">Schedule team training.</li>
                                            <li class="ti-list-group-item">Edit presentation slides.</li>
                                            <li class="ti-list-group-item">Generate weekly schedule.</li>
                                            <li class="ti-list-group-item">Review expense reports.</li>
                                            <li class="ti-list-group-item">Create product catalog.</li>
                                        </ul>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <ul class="ti-list-group !p-0 !border-0 sortable-list" id="disabling-sorting-right">
                                            <li class="ti-list-group-item">Brainstorm blog topics.</li>
                                            <li class="ti-list-group-item">Draft press release.</li>
                                            <li class="ti-list-group-item">Update employee handbook.</li>
                                            <li class="ti-list-group-item">Design event tickets.</li>
                                            <li class="ti-list-group-item">Summarize research findings.</li>
                                            <li class="ti-list-group-item">Plan office layout.</li>
                                        </ul>
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
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    SORTING WITH HANDLE
                                </div>
                            </div>
                            <div class="box-body">
                                <ol class="ti-list-group !p-0 !border-0 sortable-list list-item-numbered" id="sorting-with-handle">
                                    <li class="ti-list-group-item"><i class="ri-drag-move-2-fill me-2 text-dark text-[1rem] handle leading-none"></i>Analyze market trends.</li>
                                    <li class="ti-list-group-item"><i class="ri-drag-move-2-fill me-2 text-dark text-[1rem] handle leading-none"></i>Edit video content.</li>
                                    <li class="ti-list-group-item"><i class="ri-drag-move-2-fill me-2 text-dark text-[1rem] handle leading-none"></i>Plan social media calendar.</li>
                                    <li class="ti-list-group-item"><i class="ri-drag-move-2-fill me-2 text-dark text-[1rem] handle leading-none"></i>Update company policies.</li>
                                    <li class="ti-list-group-item"><i class="ri-drag-move-2-fill me-2 text-dark text-[1rem] handle leading-none"></i>Compile sales reports.</li>
                                    <li class="ti-list-group-item"><i class="ri-drag-move-2-fill me-2 text-dark text-[1rem] handle leading-none"></i>Schedule client calls.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    SORTING WITH FILTER
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="ti-list-group !p-0 !border-0 sortable-list" id="sorting-with-filter">
                                    <li class="ti-list-group-item">Analyze market trends.</li>
                                    <li class="ti-list-group-item">Edit video content.</li>
                                    <li class="ti-list-group-item">Plan social media calendar.</li>
                                    <li class="ti-list-group-item filtered">Update company policies.</li>
                                    <li class="ti-list-group-item">Compile sales reports.</li>
                                    <li class="ti-list-group-item">Schedule client calls.</li>
                                </ul>
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
                                <div class="box-title">
                                    SORTABLE GRID
                                </div>
                            </div>
                            <div class="box-body" id="sortable-grid">
                                <div class="grid-square">
                                    <span class="font-medium">Item-1</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-2</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-3</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-4</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-5</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-6</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-7</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-8</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-9</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-10</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-11</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-12</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-13</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-14</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-15</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-16</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-17</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-18</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-19</span>
                                </div>
                                <div class="grid-square">
                                    <span class="font-medium">Item-20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    NESTED SORTABLE
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="nestedSortables" class="ti-list-group !p-0 !border-0 col nested-sortable">
                                    <div class="ti-list-group-item nested-1 rounded-tl-md rounded-tr-md">Item 1.1
                                        <div class="list-group nested-sortable">
                                            <div class="ti-list-group-item nested-2 rounded-tl-md rounded-tr-md">Item 2.1</div>
                                            <div class="ti-list-group-item nested-2">Item 2.2
                                                <div class="list-group nested-sortable">
                                                    <div class="ti-list-group-item nested-3  rounded-tl-md rounded-tr-md" draggable="false">Item 3.3</div><div class="ti-list-group-item nested-3">Item 3.1</div>
                                                    <div class="ti-list-group-item nested-3">Item 3.2</div>
                                                    
                                                    <div class="ti-list-group-item nested-3  rounded-bl-md rounded-br-md">Item 3.4</div>
                                                </div>
                                            </div>
                                            <div class="ti-list-group-item nested-2">Item 2.3</div>
                                            <div class="ti-list-group-item nested-2  rounded-bl-md rounded-br-md">Item 2.4</div>
                                        </div>
                                    </div>
                                    <div class="ti-list-group-item nested-1">Item 1.2</div>
                                    <div class="ti-list-group-item nested-1">Item 1.3</div>
                                    <div class="ti-list-group-item nested-1">Item 1.4
                                        <div class="list-group nested-sortable">
                                            <div class="ti-list-group-item nested-2  rounded-tl-md rounded-tr-md" draggable="false">Item 2.4</div><div class="ti-list-group-item nested-2">Item 2.1</div>
                                            <div class="ti-list-group-item nested-2">Item 2.2</div>
                                            <div class="ti-list-group-item nested-2  rounded-bl-md rounded-br-md">Item 2.3</div>
                                        </div>
                                    </div>
                                    <div class="ti-list-group-item nested-1  rounded-bl-md rounded-br-md">Item 1.5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            MULTIPLE DRAG
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="ti-list-group !p-0 !border-0 sortable-list" id="multiple-drag">
                                            <li class="ti-list-group-item">Update website images.</li>
                                            <li class="ti-list-group-item">Create marketing banners.</li>
                                            <li class="ti-list-group-item">Revise product descriptions.</li>
                                            <li class="ti-list-group-item">Set up client meetings.</li>
                                            <li class="ti-list-group-item">Check email for urgent messages.</li>
                                            <li class="ti-list-group-item">Proofread customer communications.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            SWAP
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="ti-list-group !p-0 !border-0 sortable-list" id="sortable-swap">
                                            <li class="ti-list-group-item">Test software functionality.</li>
                                            <li class="ti-list-group-item">Brainstorm team-building activities.</li>
                                            <li class="ti-list-group-item">Format spreadsheet cells.</li>
                                            <li class="ti-list-group-item">Plan virtual team event.</li>
                                            <li class="ti-list-group-item">Edit meeting agenda.</li>
                                            <li class="ti-list-group-item">Compile weekly progress report.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Sortable JS -->
        <script src="{{asset('build/assets/libs/sortablejs/Sortable.min.js')}}"></script>

        <!-- Internal Sortable JS -->
        @vite('resources/assets/js/sortable.js')
        

@endsection