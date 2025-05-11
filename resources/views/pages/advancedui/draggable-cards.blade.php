@extends('layouts.master')

@section('styles')
            
        <!-- Dragula CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">
    
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Draggable Cards</h1>
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
                    <div class="xl:col-span-6 col-span-12" id="draggable-left">
                        <div class="box box-bg-primary">
                            <a href="javascript:void(0);" class="card-anchor"></a>
                            <div class="box-body">
                              <blockquote class="blockquote mb-0 text-center">
                                <h6 class="text-white">The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart..</h6>
                                <footer class="blockquote-footer mt-3 text-[14px] !ps-0 !text-white opacity-70">Someone famous as <cite title="Source Title">-Helen Keller</cite></footer>
                              </blockquote>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Card With Close Button
                                </div>
                                <a href="javascript:void(0);" data-bs-toggle="box-remove">
                                    <i class="ri-close-line text-lg"></i>
                                </a>
                            </div>
                            <div class="box-body">
                                <h6 class="card-text font-medium">Closed Card</h6>
                                <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                            </div>
                            <div class="box-footer">
                                <button class="ti-btn ti-btn-primary">Read More</button>
                            </div>
                        </div>
                        <div class="box border border-info">
                            <a href="javascript:void(0);" class="card-anchor"></a>
                            <div class="box-body">
                                <div class="flex items-center">
                                    <div class="me-3">
                                        <span class="avatar avatar-xl">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                    <div>
                                        <p class="card-text text-info mb-1 text-[14px] font-medium">Jessica Sams.</p>
                                        <div class="box-title text-xs mb-1">Department Of Computers</div>
                                        <div class="box-title text-textmuted dark:text-textmuted/50 text-[11px] mb-0">23 Years, Female</div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="box overlay-card text-white">
                            <img src="{{asset('build/assets/images/media/media-35.jpg')}}" class="card-img !rounded-md" alt="...">
                            <div class="box-img-overlay flex flex-col p-0">
                                <div class="box-header text-white">
                                    <div class="box-title">
                                        Image Overlays Are Awesome!
                                    </div>
                                </div>
                                <div class="box-body overflow-auto text-white">
                                    <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                    <div class="card-text">Last updated 3 mins ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <a href="javascript:void(0);" class="card-anchor"></a>
                            <div class="box-body">
                                <div class="flex items-center">
                                    <div class="me-3">
                                        <span class="avatar avatar-md">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                    <div>
                                        <p class="card-text mb-0 text-[14px] font-medium">Atharva Simon.</p>
                                        <div class="box-title text-textmuted dark:text-textmuted/50 text-xs mb-0">Correspondent Professor</div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12" id="draggable-right">
                        <div class="box overlay-card">
                            <img src="{{asset('build/assets/images/media/media-36.jpg')}}" class="card-img !rounded-md" alt="...">
                            <div class="box-img-overlay flex flex-col p-0 over-content-bottom top-0">
                                <div class="box-body overflow-auto text-white">
                                    <div class="card-text">
                                        Image Overlays Are Awesome!
                                    </div>
                                    <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                </div>
                                <div class="box-footer text-white">Last updated 3 mins ago</div>
                            </div>
                        </div>
                        <div class="box box-bg-primary2">
                            <div class="box-body">
                                <div class="flex items-center w-full">
                                    <div class="me-2">
                                        <span class="avatar avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="text-[15px] font-medium">Sonia Agarwal</div>
                                        <p class="mb-0 text-white opacity-70 text-xs">In leave for 1 month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Card With Collapse Button
                                </div>
                                <a aria-label="anchor" class="hs-collapse-toggle inline-flex items-center gap-x-2 " href="javascript:void(0);" id="hs-show-hide-collapse" data-hs-collapse="#hs-show-hide-collapse-heading">
                                    <span class="hs-collapse-open:hidden"></span>
                                    <span class="hs-collapse-open:block hidden"></span>
                                    <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div id="hs-show-hide-collapse-heading" class="hs-collapse show w-full overflow-hidden  transition-[height] duration-300" aria-labelledby="hs-show-hide-collapse">
                                <div class="box-body">
                                    <h6 class="box-text font-semibold">Collapsible box</h6>
                                    <p class="box-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="ti-btn ti-btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Card With Fullscreen Button
                                </div>
                                <a href="javascript:void(0);" data-bs-toggle="box-fullscreen">
                                    <i class="ri-fullscreen-line"></i>
                                </a>
                            </div>
                            <div class="box-body">
                                <h6 class="card-text font-medium">FullScreen Card</h6>
                                <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                            </div>
                            <div class="box-footer">
                                <button class="ti-btn ti-btn-primary">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

@endsection

@section('scripts')
        
        <!-- Dragula JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>

        <!-- Internal Dragula JS -->
        @vite('resources/assets/js/draggable-cards.js')
        

@endsection