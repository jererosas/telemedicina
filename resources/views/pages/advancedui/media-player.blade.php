@extends('layouts.master')

@section('styles')
  
        <!-- Plyr CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/plyr/plyr.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">Media Player</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Media Player</h1>
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        VIDEO PLAYER
                                    </div>
                                </div>
                                <div class="box-body">
                                    <video id="player" playsinline controls data-poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.png')}}">
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" >
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" >
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" >
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header">
                                    <div class="box-title">YOUTUBE VIDEO</div>
                                </div>
                                <div class="box-body">
                                    <div class="plyr__video-embed" id="player1">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-lDlbQ7DiCI?si=EerYCepJFDTb5xOl" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        AUDIO PLAYER
                                    </div>
                                </div>
                                <div class="box-body audio-control">
                                    <audio id="player2" controls>
                                        <source src="{{asset('build/assets/audio/perfect-beauty.mp3')}}" type="audio/mp3" >
                                    </audio>
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

        <!-- Plyr JS -->
        <script src="{{asset('build/assets/libs/plyr/plyr.min.js')}}"></script>

        <!-- Internal Plyr JS -->
        @vite('resources/assets/js/media-player.js')
        

@endsection